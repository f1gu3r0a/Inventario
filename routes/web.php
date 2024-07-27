<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el CRUD de productos
Route::resource('products', ProductController::class);

Route::resource('products', ProductController::class);
