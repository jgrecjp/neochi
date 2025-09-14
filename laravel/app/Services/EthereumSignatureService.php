<?php
// app/Services/EthereumSignatureService.php

namespace App\Services;

use kornrunner\Keccak;

class EthereumSignatureService
{
    /**
     * Ethereum署名を検証する
     */
    public function verifySignature(string $message, string $signature, string $expectedAddress): bool
    {
        try {
            // 署名フォーマットをチェック
            if (!$this->isValidSignatureFormat($signature)) {
                return false;
            }
            
            // 署名からアドレスを復元
            $recoveredAddress = $this->recoverAddressFromSignature($message, $signature);
            
            if (!$recoveredAddress) {
                return false;
            }
            
            // アドレスを比較（大文字小文字を無視）
            return strtolower($recoveredAddress) === strtolower($expectedAddress);
            
        } catch (\Exception $e) {
            \Log::error('Signature verification failed: ' . $e->getMessage());
            return false;
        }
    }
    
    /**
     * 外部Node.jsサービスを使用した署名検証（推奨）
     */
    public function verifySignatureWithNodeService(string $message, string $signature, string $address): bool
    {
        try {
            $response = \Http::timeout(10)->post(config('services.web3.verify_url'), [
                'message' => $message,
                'signature' => $signature,
                'address' => $address
            ]);
            
            if ($response->failed()) {
                return false;
            }
            
            return $response->json('valid', false);
            
        } catch (\Exception $e) {
            \Log::error('External signature verification failed: ' . $e->getMessage());
            return false;
        }
    }
    
    private function isValidSignatureFormat(string $signature): bool
    {
        // 0xプレフィックスがあり、130文字（65バイト）であることをチェック
        return preg_match('/^0x[a-fA-F0-9]{130}$/', $signature);
    }
    
    private function recoverAddressFromSignature(string $message, string $signature): ?string
    {
        // この実装は複雑なため、本番では外部Node.jsサービスの使用を推奨
        // ここでは簡略化した疑似実装
        return null;
    }
}

