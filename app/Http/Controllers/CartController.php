<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MProduct;
use App\MCategory;

class CartController extends Controller
{
    // 商品をカートに追加する(セッションを登録する)
    public function addCart(Request $request)
    {
        // フォームから受け取った商品idと個数を空の変数に連想配列で格納
        $session_data = [];
        $session_data = [
            'session_product_id' => $request->product_id,
            'session_product_quantity' => $request->product_quantity,
        ];

        // 'session_data'をキーとして、連想配列$session_dataをセッションに登録(追加なのでpush)
        $request->session()->push('session_data', $session_data);

        return redirect('/cart');
    }

    // カート一覧を表示する(セッションを取り出して利用する)
    public function showCart(Request $request)
    {
        // 保存していたセッションデータを取り出す
        $session_data = $request->session()->get('session_data');

        //カラム名を指定して$session_dataから各1次元配列に抽出する
        $session_product_id = array_column($session_data, 'session_product_id');
        $session_product_quantity = array_column($session_data, 'session_product_quantity');

        // ここでセッションをキーにモデルから取り出す処理を行いたい！
        dd($session_product_id);
        
        // カート一覧のViewに値を渡す
        // 商品名、商品カテゴリー、値段..
        // 小計と合計はViwe側で表示するときに処理する？
        // $cart_items = MProduct::all();
        $cart_items = $session_product_quantity;
        return view('cart.index', ['cart_items' => $cart_items]);
    }
}
