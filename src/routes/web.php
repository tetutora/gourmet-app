<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegister']);