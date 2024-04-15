<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;


Route::get('/', function () { return view('welcome');});

Route::resource('clients', ClientController::class);
Route::resource('products', ProductController::class);

Route::get('/clients', [ClientController::class,'index']);
Route::get('/products', [ProductController::class,'index']);
