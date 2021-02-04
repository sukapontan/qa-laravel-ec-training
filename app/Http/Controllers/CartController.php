<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // 商品をカートに追加する(セッションを登録する)
    public function add(Request $request)
    {
        // セッションを初期化して商品idと数量を格納
        $session_data = array();
        $session_data = [
            'session_product_id' => $request->product_id,
            'session_product_quantity' => $request->product_quantity,
        ];

        // 'session_data'をキーに$session_dataをセッションに登録
        $request->session()->push('session_data', $session_data);

        // ※あとでカート内商品一覧へのリダイレクトにしておくこと
        return redirect('/cart');
    }

    // カート一覧を表示する
    public function index(Request $request)
    {
        // 保存していたセッションデータを取り出す
        $session_data = $request->session()->get('session_data');
        $session_product_id = array_column($session_data, 'session_product_id');
        $session_product_quantity = array_column($session_data, 'session_product_quantity');

        // カート一覧にreturen view()で渡す
    }

}
