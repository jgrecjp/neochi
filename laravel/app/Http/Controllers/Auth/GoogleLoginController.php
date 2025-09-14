<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleLoginController extends Controller
{
	//
    /**
     * ユーザーをGoogleの認証ページにリダイレクトする
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * 認証後にGoogleからのコールバックを受信する
     */
    public function handleGoogleCallback()
    {
        $google_account = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $google_account->getId(),
        ],[
            'email' => $google_account->getEmail(),
            'name' => $google_account->getName(),
            'email_verified_at' => now(), // メール認証がある場合のみ
        ]);

        Auth::login($user);
        
        return to_route('home');
    }
}
