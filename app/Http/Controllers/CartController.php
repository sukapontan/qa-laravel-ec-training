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
        // セッションが存在する場合は保存していたセッションデータを取り出す
        if (isset($session_data)) {
            $session_data = $request->session()->get('session_data');
        } else {
            // フォームから受け取った商品idと個数を空の変数に連想配列で格納
            $session_data = [];
            $session_data = [
            'session_product_id' => $request->product_id,
            'session_product_quantity' => $request->product_quantity,
            ];
        }

        // 'session_data'をキーとして、連想配列$session_dataをセッションに登録(追加なのでpush)
        $request->session()->push('session_data', $session_data);

        // メモ：$session_dataよりも$cart_dataの方が良い？
        return redirect('/cart');
    }

    // カート一覧を表示する(セッションを取り出して利用する)
    public function showCart(Request $request)
    {
        // 保存していたセッションデータを取り出す
        $session_data = $request->session()->get('session_data');
        
        // セッションデータがある場合は商品IDで検索して..
        if (!empty($session_data)) {
            foreach ($session_data as &$data) {
                $cart_items = MProduct::with('category')->find($data['session_products_id']);
                // "＆"で参照渡し→仮引数($data)の変更で実引数($session_data)を更新する
                // 商品名・カテゴリー名・値段書いてその後に商品の小計を記述
            }
        } else {
            // 空の時の処理
        }
        dd($cart_items->product_name);
    
        //カラム名を指定して$session_dataから各1次元配列に抽出する
        $session_product_id = array_column($session_data, 'session_product_id');
        $session_product_quantity = array_column($session_data, 'session_product_quantity');
        
        // カート一覧のViewに値を渡す
        // 「商品名」「商品カテゴリー」「値段」を取り出せるようにする

        $params = [
            'session_product_id' => $session_product_id,
            'session_product_quantity' => $session_product_quantity,
            'cart_items' => $cart_items,
        ];

        return view('cart.index', $params);
    }
}
