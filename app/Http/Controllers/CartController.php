<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // 商品データをカートに追加する(セッションを登録する)
    // ※あとで商品詳細のViewからデータを受け取れるようにすること
    public function addCart(Request $request)
    {
        $session_data = [
            $request->product_id,
            $request->quantity,
        ];

        $request->session()->push('session_data', $session_data);

        // ※あとでカート内商品一覧へのリダイレクトにしておくこと
        return redirect('/products');
    }

}
