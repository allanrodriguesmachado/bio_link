<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('welcome');
//Route::get('/dashboard', fn() =>  view('dashboard'))->name('dashboard');
Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
