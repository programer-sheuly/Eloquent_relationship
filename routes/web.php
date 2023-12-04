<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;



Route::get('/', [PhoneController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/brand', [ProductController::class, 'index']);
Route::get('/customer', [CustomerController::class, 'index']);
