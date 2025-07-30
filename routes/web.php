<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinksController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('welcome');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/save', [RegisterController::class, 'save'])->name('save');
});

Route::get('/logout', LogoutController::class)->name('logout')->middleware('auth');
Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware('auth');
Route::post('/link/store', [LinksController::class, 'store'])->name('store')->middleware('auth');
Route::get('/link/{link}/edit', [LinksController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/link/{link}', [LinksController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/link/{link}', [LinksController::class, 'destroy'])->name('destroy')->middleware('auth');
