<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegistrationController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\CalorieController;


// Получение целевой даты
Route::get('/target-date', [RegistrationController::class, 'targetDate']);

// Получение рецепта по названию из всех рецептов
Route::get('/recipes', [RecipeController::class, 'findRecipes']);

// Получение рецепта по названию из категории male



//Route::middleware(['auth:api'])->group(function () {
    // Получение истории пользователя
    Route::get('/user-history', [CalorieController::class, 'userHistory']);
//});
