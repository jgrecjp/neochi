<?php
// app/Http/Controllers/Api/MetaMaskAuthController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\EthereumSignatureService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class MetaMaskAuthController extends Controller
{
    public function __construct(
        private EthereumSignatureService $signatureService
    ) {}

    /**
     * ノンス取得API
     */
    public function getNonce(Request $request)
    {
        $validated = $request->validate([
            'address' => [
                'required',
                'string',
                'regex:/^0x[a-fA-F0-9]{40}$/', // Ethereumアドレスの形式チェック
            ]
        ]);

        $address = strtolower($validated['address']);

        // ユーザーを取得または作成
        $user = User::firstOrCreate(
            ['wallet_address' => $address],
            [
                'name' => 'User ' . substr($address, 0, 8),
            ]
        );

        // 新しいノンスを生成
        $nonce = $user->generateNonce();

        return response()->json([
            'success' => true,
            'nonce' => $nonce,
            'message' => "Welcome! Please sign this message to authenticate.\n\nAddress: {$address}\nNonce: {$nonce}"
        ]);
    }

    /**
     * 署名検証・ログインAPI
     */
    public function verifySignature(Request $request)
    {
        $validated = $request->validate([
            'address' => [
                'required',
                'string',
                'regex:/^0x[a-fA-F0-9]{40}$/',
            ],
            'signature' => [
                'required',
                'string',
                'regex:/^0x[a-fA-F0-9]{130}$/', // 署名の形式チェック
            ],
            'message' => 'required|string',
        ]);

        $address = strtolower($validated['address']);

        // ユーザーを取得
        $user = User::where('wallet_address', $address)->first();

        if (!$user || !$user->nonce) {
            throw ValidationException::withMessages([
                'address' => 'Please request a nonce first.'
            ]);
        }

        // メッセージにnonceが含まれているかチェック
        if (!str_contains($validated['message'], $user->nonce)) {
            throw ValidationException::withMessages([
                'message' => 'Invalid nonce in message.'
            ]);
        }

        // 署名を検証
        $isValid = $this->signatureService->verifySignatureWithNodeService(
            $validated['message'],
            $validated['signature'],
            $validated['address']
        );

        if (!$isValid) {
            throw ValidationException::withMessages([
                'signature' => 'Invalid signature.'
            ]);
        }

        // ノンスをクリア（一度だけ使用可能）
        $user->clearNonce();

        // 認証トークンを作成
        $token = $user->createToken('metamask-auth', ['*'], now()->addDays(30))->plainTextToken;

        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'wallet_address' => $user->wallet_address,
                'created_at' => $user->created_at,
            ]
        ]);
    }

    /**
     * ログアウトAPI
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully.'
        ]);
    }

    /**
     * ユーザー情報取得API
     */
    public function user(Request $request)
    {
        return response()->json([
            'success' => true,
            'user' => [
                'id' => $request->user()->id,
                'name' => $request->user()->name,
                'wallet_address' => $request->user()->wallet_address,
                'created_at' => $request->user()->created_at,
            ]
        ]);
    }
}


