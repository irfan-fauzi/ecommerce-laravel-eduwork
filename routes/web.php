<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

// Route::get('/user/{id}', function ($id) {
//     return "user id:" . $id;
// });

// akan muncul too many request jika kita melakukan request ke halaman about 5 kali dalam 1 menit
// Route::middleware('throttle:5,1')->get('/about', function () {
//     return view('about');
// });
