<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// General page
Route::view('/', 'index')->name('index');

// Register
Route::get('/register', [UserController::class, 'registerForm'])->name('register.form');
Route::post('/register/store', [UserController::class, 'store'])->name('register.store');

// Login
Route::get('/login', [UserController::class, 'loginForm'])->name('login.form');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
