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

Route::resource('products', ProductController::class);

use App\Http\Controllers\CategoryController;

Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/category/', [CategoryController::class, 'index'])
    ->name('category');

Route::get('/category/{category}', [CategoryController::class, 'show'])
    ->name('category.show');
