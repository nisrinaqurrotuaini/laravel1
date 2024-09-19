<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;
use Laravel\Prompts\Table;

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/form', function () {
    return view('form');
});


//Route::get('/rumah', [RumahController::class, "index"]);

//Route::get('/book', [BookController::class, 'index']);

//Route::get('/home', [HomeController::class, 'index']); // Untuk menampilkan form
//Route::post('/home', [HomeController::class, 'submit']); // Untuk mengirim form


Route::get("/create", [StoreController::class, "store"]);

Route::get("/show", [TableController::class, "show"]);


Route::get('/products/{id}/edit', [TableController::class, 'edit']);

Route::put('/products/{id}/', [TableController::class, 'update']);

Route::delete('/products/{id}/', [TableController::class, 'destroy']);

Route::get('/input', [TableController::class, 'input']);

Route::post("/create", [TableController::class, "store"]);

Route::get("/ktp",[RelasiController::class,"index"]);

Route::get("/pengguna/create", [RelasiController::class, "create"]);

Route::post("/pengguna/store", [RelasiController::class, "store"]);

Route::get('/school', [SchoolController::class, 'index']);
