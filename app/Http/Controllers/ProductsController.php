<?php

namespace App\Http\Controllers;

use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('products.search', ['products' => $products]);
    }
}
