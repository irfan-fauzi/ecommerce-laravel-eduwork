<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', ['title' => 'home']);
});

Route::get('/products', function () {
    return view('pages.products',['title' => 'product']);
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

// Route::get('/user/{id}', function ($id) {
//     return "user id:" . $id;
// });

// akan muncul too many request jika kita melakukan request ke halaman about 5 kali dalam 1 menit
// Route::middleware('throttle:5,1')->get('/about', function () {
//     return view('about');
// });
