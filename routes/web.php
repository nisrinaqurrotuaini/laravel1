<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/form', function () {
    return view('form');
});


//Route::get('/rumah', [RumahController::class, "index"]);

Route::get('/book', [BookController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']); // Untuk menampilkan form
Route::post('/home', [HomeController::class, 'submit']); // Untuk mengirim form
