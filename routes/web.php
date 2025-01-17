<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('/ajax/location', [LocationController::class, 'getLocation'])->name('ajax.location');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [HomeController::class, 'about'])->name('about');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');

Route::get('/diem-den', [DestinationController::class, 'index'])->name('destination');
Route::get('/diem-den/{slug}', [DestinationController::class, 'show'])->name('destination.show');

Route::get('/hoat-dong', [ActivityController::class, 'index'])->name('activity');
Route::get('/hoat-dong/{slug}', [ActivityController::class, 'show'])->name('activity.show');

Route::middleware(['login'])->group(function () {
    Route::get('/dang-nhap', [AuthController::class, 'login'])->name('login');
    Route::post('/dang-nhap', [AuthController::class, 'handleLogin'])->name('login.post');

    Route::get('/dang-ky', [AuthController::class, 'register'])->name('register');
    Route::post('/dang-ky', [AuthController::class, 'handleRegister'])->name('register.post');

    Route::get('/quen-mat-khau', [AuthController::class, 'forgotPassword'])->name('password.forgot');
    Route::post('/quen-mat-khau', [AuthController::class, 'sendEmailResetLink'])->name('password.email');

    Route::get('/dat-lai-mat-khau/{token}/{email}', [AuthController::class, 'resetPassword'])->name('password.reset');
    Route::post('/dat-lai-mat-khau', [AuthController::class, 'handleResetPassword'])->name('password.update');
});

Route::middleware(['auth:web'])->group(function () {
    Route::get('/dang-xuat', [AuthController::class, 'logout'])->name('logout');
});