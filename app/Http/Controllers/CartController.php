<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        // TODO 認証ユーザを返す必要がある。
        $user = User::find(1);
        $user->fullAddress = $user->getFullAddress();
        $user->fullName = $user->getFullName();
        return view('cart.index', ['user' => $user]);
    }

    public function add(Product $product, Request $request)
    {
        $cartProduct = [
            'session_product_id' => $product->id,
            'session_quantity' => (int)$request->quantity,
        ];

        if (!$request->session()->has('cartProduct')) {
            // カート内に商品が存在しない場合
            // セッションに商品を追加
            $request->session()->push('cartProduct', $cartProduct);
        } else {
            // カート内商品情報を取得
            $sessionCartProducts = $request->session()->get('cartProduct');

            // 同一商品存在判定フラグ
            $isSameProduct = false;
            foreach ($sessionCartProducts as $index => $sessionCartProduct) {
                // カート内に商品が存在する場合
                if ($product->id == $sessionCartProduct['session_product_id']) {
                    // 個数を合算して、セッションに保存
                    $sessionQuantity = (int)$sessionCartProduct['session_quantity'] + (int)$request->quantity;
                    $request->session()->put('cartProduct.'.$index.'.session_quantity', $sessionQuantity);
                    $isSameProduct = true;
                    break;
                }
            }

            // 同一商品が存在しない場合
            if (!$isSameProduct) {
                // セッションに商品を追加
                $request->session()->push('cartProduct', $cartProduct);
            }
        }

        return redirect()->route('cart.index');
    }
}
