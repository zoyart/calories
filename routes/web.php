<?php

use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


// General page
Route::view('/', 'index')->name('index');

// Register
Route::get('/register', [UserController::class, 'registerForm'])->name('register.form');
Route::post('/register/store', [UserController::class, 'store'])->name('register.store');

// Login
Route::get('/login', [UserController::class, 'loginForm'])->name('login.form');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');

// Profile
Route::get('/profile/{profileId}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/{profileId}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{profileId}', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/{profileId}', [ProfileController::class, 'destroy'])->name('profile.destroy');
