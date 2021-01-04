<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $Request)
    {
        return view('product_details', ['Request' => $Request]);
    }
}
