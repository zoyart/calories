<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// General page
Route::view('/', 'index')->name('index');

// Register
Route::get('/register', [UserController::class, 'registerForm'])->name('register.form');


// Login
Route::get('/login', [UserController::class, 'loginForm'])->name('login.form');
