<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutControler;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('welcome');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/save', [RegisterController::class, 'save'])->name('save');
});

Route::get('/logout', LogoutControler::class)->name('logout')->middleware('auth');
Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware('auth');
