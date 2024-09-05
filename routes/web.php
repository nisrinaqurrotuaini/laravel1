<?php

use App\Http\Controllers\BookController;
use App\Htpp\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/book', [BookController::class, 'index']);
