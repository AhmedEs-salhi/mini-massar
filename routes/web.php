<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    # Home page route
    Route::get('/', function () {
        return view('home');
    })->name('home');

    # Login Routes
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    # Register Routes
    Route::get('/register', [RegisterController::class, 'show'])->name("register");
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::middleware('auth')->group(function () {
        Route::get('student/home', function () {
            return view('student.home');
        })->middleware('role:student')->name('student.home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
