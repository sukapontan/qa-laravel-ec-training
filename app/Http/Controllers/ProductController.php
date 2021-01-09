<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.product_details_error');
    }

    public function show()
    {
        return view('product.product_details');
    }
}
