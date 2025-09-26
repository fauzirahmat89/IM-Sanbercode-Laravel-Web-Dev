<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'renderScreen']);
Route::get('/register', [FormController::class, 'renderRegister']);
Route::post('/register', [FormController::class, 'register']);

// CRUD
// R
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/create',[GenreController::class, 'create']);
Route::get('/genre/{id}', [GenreController::class, 'show']);


// C 
Route::post('/genre', [GenreController::class, 'store']);

// U
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('/genre/{id}', [GenreController::class, 'update']);

// D
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);