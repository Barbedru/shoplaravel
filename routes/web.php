<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello Laravel!';
});



use App\Http\Controllers\PageController;

Route::get('/home', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');




use App\Http\Controllers\ProductController;

Route::get('/product/{id}', [ProductController::class, 'show'])
    ->name('show');

Route::get('/products/index', [ProductController::class, 'index'])
    ->name('products.index');

use App\Http\Controllers\Product_Controller;
Route::resource('products', Product_Controller::class);
