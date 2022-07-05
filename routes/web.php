<?php

use App\Http\Controllers\Calories\CalorieController;
use App\Http\Controllers\Recipes\RecipeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\Recipes\RecipeCategoryController;
use \App\Http\Controllers\Admin\EmployeeController;


// General page
Route::view('/', 'index')->name('index');


// Маршрутизация для регистрации
Route::group(['middleware' => 'guest'], function () {
    // Register
    Route::get('/register', [UserController::class, 'registerForm'])->name('register.form');
    Route::post('/register/store', [UserController::class, 'store'])->name('register.store');

    // Login
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.form');
    Route::post('/auth', [UserController::class, 'auth'])->name('auth');

});

// Маршрутизация для основного функционала
Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    // Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Calories
    Route::get('/calories', [CalorieController::class, 'index'])->name('calories.index');

    // Recipes
    Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/recipes/{recipeId}', [RecipeController::class, 'show'])->name('recipes.show');


    // Маршрутизация для админки
    Route::prefix('/admin')->group(function () {
        // Главная страница админ панели
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        // Взаимодействие с рецептами
        Route::get('/recipes', [RecipeController::class, 'adminIndex'])->name('admin.recipes.index');
        Route::get('/recipes/create', [RecipeController::class, 'create'])->name('admin.recipes.create');

        // Взаимодействие с категориями
        Route::get('/categories', [RecipeCategoryController::class, 'index'])->name('admin.categories.index');
        Route::post('/categories', [RecipeCategoryController::class, 'store'])->name('admin.categories.store');
        Route::delete('/categories/{id}', [RecipeCategoryController::class, 'destroy'])->name('admin.categories.destroy');
        Route::delete('/categories/destroy_few', [RecipeCategoryController::class, 'destroyFew'])->name('admin.categories.destroyFew');

        // Авторизация в админке
        Route::group(['middleware' => 'guest'], function () {
            Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
            Route::post('/auth', [AdminController::class, 'auth'])->name('admin.auth');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        });
    });
});

