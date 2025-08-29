<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//products api
Route::get('/products', [ProductController::class, 'productsApi'])->name('products.index');
