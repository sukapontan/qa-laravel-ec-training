<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.cart_error');
    }

    public function show()
    {
        return view('cart.cart');
    }

    public function store(Request $request)
    {
        Cart::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'order_id' => $request->post('order_id'),
            ],
            [
                'order_quantity' => DB::raw('order_quantity + ' . $request->post('order_quantity')),
            ]
        );
        return redirect('/');
    }
}
