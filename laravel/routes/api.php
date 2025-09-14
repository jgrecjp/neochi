<?php
// routes/api.php

use App\Http\Controllers\Api\MetaMaskAuthController;

Route::prefix('auth/metamask')->group(function () {
    Route::post('/nonce', [MetaMaskAuthController::class, 'getNonce']);
    Route::post('/verify', [MetaMaskAuthController::class, 'verifySignature']);
    
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [MetaMaskAuthController::class, 'logout']);
        Route::get('/user', [MetaMaskAuthController::class, 'user']);
    });
});

// 認証が必要な他のAPI
Route::middleware('auth:sanctum')->group(function () {
    // 他の保護されたルート
});



