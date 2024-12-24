<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [LayoutController::class, 'renderLayout'])
        ->defaults('view', 'dashboard')
        ->name('dashboard');

    Route::get('/user/profile', [LayoutController::class, 'renderLayout'])
        ->defaults('view', 'profile.show')
        ->name('profile');

    Route::get('/admin/config', [AdminController::class, 'index'])
        ->name('config');
});

// Route::fallback(function () {
//     return 'error';
// });
