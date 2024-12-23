<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// Route untuk form login (GET)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');

// Route untuk login action (POST)
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Dashboard route dengan middleware auth
Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/user', function () {
    return view('user');
});
