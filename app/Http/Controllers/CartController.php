<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        // TODO 認証ユーザを返す必要がある。
        $user = User::find(1);
        $user->fullAddress = $user->getFullAddress();
        $user->fullName = $user->getFullName();

        if ($request->session()->has('cartProducts')) {
            $cartProducts = $request->session()->get('cartProducts');
        }

        // カートが空の場合、空画面へ遷移
        if (empty($cartProducts)) {
            return view('cart.error', ['user' => $user]);
        }

        // カート内商品情報を取得
        $sessionProductIds = array_column($cartProducts, 'session_product_id');
        $products = Product::find($sessionProductIds);

        foreach ($cartProducts as $index => $cartProduct) {
            foreach ($products as $product) {
                if ($cartProduct['session_product_id'] == $product->id) {
                    $cartProducts[$index]['product_name'] = $product->product_name;
                    $cartProducts[$index]['category'] = $product->category->category_name;
                    $cartProducts[$index]['price'] = $product->price;
                    $cartProducts[$index]['subTotal'] = (int)$product->price * (int)$cartProduct['session_quantity'];
                    break;
                }
            }
        }

        // 合計
        $total = array_sum(array_column($cartProducts, 'subTotal'));

        return view('cart.index', compact('user', 'cartProducts', 'total'));
    }

    public function add(Product $product, Request $request)
    {
        $cartProduct = [
            'session_product_id' => $product->id,
            'session_quantity' => (int)$request->quantity,
        ];

        if (!$request->session()->has('cartProducts')) {
            // カート内に商品が存在しない場合
            // セッションに商品を追加
            $request->session()->push('cartProducts', $cartProduct);
        } else {
            // カート内商品情報を取得
            $sessionCartProducts = $request->session()->get('cartProducts');

            // 同一商品存在判定フラグ
            $isSameProduct = false;
            foreach ($sessionCartProducts as $index => $sessionCartProduct) {
                // カート内に商品が存在する場合
                if ($product->id == $sessionCartProduct['session_product_id']) {
                    // 個数を合算して、セッションに保存
                    $sessionQuantity = (int)$sessionCartProduct['session_quantity'] + (int)$request->quantity;
                    $request->session()->put('cartProducts.'.$index.'.session_quantity', $sessionQuantity);
                    $isSameProduct = true;
                    break;
                }
            }

            // 同一商品が存在しない場合
            if (!$isSameProduct) {
                // セッションに商品を追加
                $request->session()->push('cartProducts', $cartProduct);
            }
        }

        return redirect()->route('cart.index');
    }
}
