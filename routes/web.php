<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login and forgot password routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('password')->name('password.')->group(function () {
    Route::get('/forgot', [ForgotPasswordController::class, 'showForgotForm'])->name('request');
    Route::post('/forgot', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('email');
    Route::get('/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('change');
    Route::post('/reset', [ResetPasswordController::class, 'resetPassword'])->name('reset');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(SiteController::class)->group(function () {
        Route::get('/', 'dashboard')->name('dashboard');
    });
});
