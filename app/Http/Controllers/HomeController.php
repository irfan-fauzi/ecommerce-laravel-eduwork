<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = Product::take(4)->get();

        return view('pages.home', ['title' => 'home', 'products' => $products]);
    }
    public function products() {
        $products = Product::paginate(5);
        return view('pages.product.index', ['title' => 'products', 'products' => $products]);
    }

    public function detailProduct($id) {
      $product = Product::where('id', $id)->firstOrFail();
      return view('pages.product.detail', ['title' => 'product detail', 'product' => $product]);
    }
}
