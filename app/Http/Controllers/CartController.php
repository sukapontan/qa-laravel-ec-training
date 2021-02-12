<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Product;
use App\Category;
use Carbon\Carbon;

class CartController extends Controller
{
    public function indexCart()
    {
        return view('info.cart');
    }

    public function addToCart()
    {
        //
    }
    
}
