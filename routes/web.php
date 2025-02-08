<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'homepage']);

Route::get('/readmore', function () {
    return view('home.readmoreabout');
})->name('readmore');