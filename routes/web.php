<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', function () {
    return view('pages.product.index',['title' => 'product']);
});

Route::get('/cart', function () {
    return view('pages.cart', ['title' => 'cart']);
});

Route::get('/checkout', function () {
    return view('pages.checkout', ['title' => 'checkout' ]);
});


