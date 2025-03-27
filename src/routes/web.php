<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;
use Laravel\Fortify\Fortify;


// 会員登録
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// ログイン
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('index');
});

// Fortify::registerView(fn () => view('auth.register'));

// // ログイン
// Fortify::loginView(fn () => view('auth.login'));