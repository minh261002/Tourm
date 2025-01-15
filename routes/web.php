<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [HomeController::class, 'about'])->name('about');

Route::middleware(['login'])->group(function () {
    Route::get('/dang-nhap', [AuthController::class, 'login'])->name('login');
    Route::post('/dang-nhap', [AuthController::class, 'handleLogin'])->name('login.post');
    Route::get('/dang-ky', [AuthController::class, 'register'])->name('register');
    Route::post('/dang-ky', [AuthController::class, 'handleRegister'])->name('register.post');
});

Route::middleware(['auth:web'])->group(function () {
    Route::get('/dang-xuat', [AuthController::class, 'logout'])->name('logout');
});
