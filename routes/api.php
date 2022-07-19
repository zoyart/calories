<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegistrationController;
use App\Http\Controllers\Api\RecipeController;

// Получение целевой даты
Route::get('/target-date', [RegistrationController::class, 'targetDate']);

// Получение рецепта по названию из всех рецептов
Route::get('/recipes', [RecipeController::class, 'findRecipes']);

// Получение рецепта по названию из категории male
