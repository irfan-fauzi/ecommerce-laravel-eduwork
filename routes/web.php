<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/detail/{id}', [HomeController::class, 'detailProduct'])->name('product.detail');

Route::get('/cart', function () {
    return view('pages.cart', ['title' => 'cart']);
});

Route::get('/checkout', function () {
    return view('pages.checkout', ['title' => 'checkout']);
});
