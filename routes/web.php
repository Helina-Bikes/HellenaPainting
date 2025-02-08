<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'homepage']);

Route::get('/interior', [HomeController::class, 'interior']);
Route::get('/exterior', [HomeController::class, 'exterior']);
Route::get('/commercial', [HomeController::class, 'commericial']);