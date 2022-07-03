<?php

use App\Http\Controllers\Calories\CaloriesController;
use App\Http\Controllers\Recipes\RecipeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\AdminController;

// General page
Route::view('/', 'index')->name('index');

Route::group(['middleware' => 'guest'], function () {
    // Register
    Route::get('/register', [UserController::class, 'registerForm'])->name('register.form');
    Route::post('/register/store', [UserController::class, 'store'])->name('register.store');

    // Login
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.form');
    Route::post('/auth', [UserController::class, 'auth'])->name('auth');

});

//Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    // Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Calories
    Route::get('/calories', [CaloriesController::class, 'index'])->name('calories.index');

    // Recipes
    Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/recipes/{recipeId}', [RecipeController::class, 'show'])->name('recipes.show');

    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/recipes', [RecipeController::class, 'index'])->name('admin.recipes.index');

    });

//});

