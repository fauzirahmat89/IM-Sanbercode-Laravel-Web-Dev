<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'renderScreen']);
Route::get('/register', [FormController::class, 'renderRegister']);
Route::post('/register', [FormController::class, 'register']);