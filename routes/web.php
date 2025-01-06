<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', [ProductController::class, 'index']);
Route::get('product-description/{id}', [ProductController::class, 'show']);

Route::get('/', [HomeController::class, 'index']);

