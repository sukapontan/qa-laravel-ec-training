<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cartData = [
            'session_products_id' => $request->products_id,
            'session_quantity' => $request->product_quantity,
        ];

        if(!$request->session()->has('cartData')) {
            $request->session()->push('cartData',$cartData);
        } else {
            $sessionCartData = $request->session()->get('cartData');

            $sameProductId = false;
            foreach ($sessionCartData as $index => $sessionData) {
                if ($sessionData['session_products_id'] === $cartData['session_products_id'] ) {
                    $sameProductId = true;
                    $quantity = $sessionData['session_quantity'] + $cartData['session_quantity'];
                    $request->session()->put('cartData.' . $index . '.session_quantity', $quantity);
                    break;
                }
            }

            if ($sameProductId === false) {
                $request->session()->push('cartData', $cartData);
            }
        }

        $request->session()->put('users_id', ($request->users_id));
        return redirect()->route('index.cart');
    }

    public function indexCart(Request $request)
    {
        $sessionUser = User::find($request->session()->get('users_id'));

        if ($request->session()->has('cartData')) {
            $cartData = array_values($request->session()->get('cartData'));
        }

        if (!empty($cartData)) {
            $sessionProductsId = array_column($cartData, 'session_products_id');
            $products = Product::with('category')->find($sessionProductsId);

            foreach ($cartData as &$data) {
                foreach ($products as $product) {
                    if($product->id == $data['session_products_id']) {
                        $data['product_name'] = $product->product_name;
                        $data['category_name'] = $product['category']->category_name;
                        $data['price'] = $product->price;
                        $data['itemPrice'] = $data['price'] * $data['session_quantity'];
                    }
                }
            }
        } 

        return view('info.cart',  [
            'sessionUser' => $sessionUser,
            'cartData' => $cartData,
        ]);
    }

    public function remove(Request $request)
    {
        $sessionCartData = $request->session()->get('cartData');

        $removeCartItem = [
            [
                'session_products_id' => $request->product_id,
            ]
        ];
        
        $removeCompletedCartData = array_udiff($sessionCartData, $removeCartItem, function ($sessionCartData, $removeCartItem) {
            $result = $sessionCartData['session_products_id'] - $removeCartItem['session_products_id'];
            return $result;
        });

        $request->session()->put('cartData', $removeCompletedCartData);
        $cartData = $request->session()->get('cartData');

        if ($request->session()->has('cartData')) {
            return redirect()->route('index.cart');
        }

        return view('info.empty_cart', ['user' => Auth::user()]);
    }
}
