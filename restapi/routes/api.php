<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/* products show */
Route::get('/products', [ProductController::index]);


/* products store */
Route::post('/products', [ProductController::store]);


/* products update */
Route::put('/products/{id}', [ProductController::update]);


/* products delete */
Route::delete('/products/{id}', [ProductController::destroy]);
