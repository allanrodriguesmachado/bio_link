<?php

use App\Http\Controllers\Auth\{LoginController, LogoutController, RegisterController};
use App\Http\Controllers\{BioLinkController, DashboardController, LinksController, ProfileController};
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('welcome');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/save', [RegisterController::class, 'save'])->name('save');
});

Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('profile')->group(function () {
        Route::get('/', static fn() => view('profile'))->name('profile');
        Route::put('/update', [ProfileController::class, 'update'])->name('profile.update');
    });

    Route::prefix('link')->group(function () {
        Route::post('/store', [LinksController::class, 'store'])->name('store');
        Route::get('/{link}/edit', [LinksController::class, 'edit'])->name('edit');
        Route::put('/{link}', [LinksController::class, 'update'])->name('update');
        Route::delete('/{link}', [LinksController::class, 'destroy'])->name('destroy');
        Route::patch('/{link}/up', [LinksController::class, 'up'])->name('up');
        Route::patch('/{link}/down', [LinksController::class, 'down'])->name('down');
        Route::post('/links/reorder', [LinksController::class, 'reorder'])->name('reorder');
    });
});


Route::get('/{user:handler}', BioLinkController::class);
