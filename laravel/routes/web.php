<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\GoogleLoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// 認証ルート
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle'])
        ->name('auth.google');

Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])
	    ->name('auth.google.callbck');


