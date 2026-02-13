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

// Liste des catégories
Route::get('/category', [CategoryController::class, 'index'])
    ->name('category.index');

// Afficher une catégorie
Route::get('/category/{category}', [CategoryController::class, 'show'])
    ->name('category.show');


use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'show'])
    ->name('cart.show');

Route::post('/cart/{product}', [CartController::class, 'add'])->name('cart.add');

Route::patch('/cart/{product}', [CartController::class, 'update'])
    ->name('cart.update');

Route::delete('/cart/{product}', [CartController::class, 'remove'])
    ->name('cart.remove');

Route::delete('/cart', [CartController::class, 'destroy'])
    ->name('cart.destroy');


