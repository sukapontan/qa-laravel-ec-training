<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MProduct;
use App\MCategory;

class CartController extends Controller
{
    // 商品をカートに追加するアクション(セッションを追加登録する)
    public function addCart(Request $request)
    {
        // フォームから受け取った商品idと個数を変数$session_dataに連想配列で格納
        $session_data = [
            'session_product_id' => $request->product_id,
            'session_product_quantity' => $request->product_quantity,
        ];

        // 'cart_data'セッションがすでに存在する場合はデータを取り出して追加処理を行う
        if ( $request->session()->has('cart_data') ) {
            // 既存のセッションデータを取り出す
            $existing_cart_data = $request->session()->get('cart_data');
            $existing_product_ids = (array_column($existing_cart_data, 'session_product_id')); // 商品IDの1次元配列を取得
            
            // 一致する商品IDがあるかを調べて論理値を返す(直後の分岐処理に使用する)
            $flag = in_array($session_data['session_product_id'], $existing_product_ids);
            
            // 一致する商品IDの有無に応じてセッションに上書きもしくは追加する処理を行う
            if ($flag) {
                $key = array_search($session_data['session_product_id'], $existing_product_ids);
                $request->session()->put("cart_data.$key", $session_data); // putで上書き
            } else {
                $request->session()->push('cart_data', $session_data); // pushで追加
            }
            
        } else {
            // 'cart_data'セッションが存在しない場合は新たに登録
            $request->session()->put('cart_data', [$session_data]);
        }

        // dd($request->session()->all());

        // カート内表示にリダイレクト
        return redirect('/cart');
    }

    // カート一覧を表示するアクション(セッションを取り出して利用する)
    public function showCart(Request $request)
    {
        // 保存していたセッションデータを取り出す
        $cart_items = $request->session()->get('cart_data');

        // セッションデータがある場合は商品IDで検索して取得する
        if (!empty($cart_items)) {
            $products_id = (array_column($cart_items, 'session_product_id')); // 商品IDの1次元配列を取得
            $products = MProduct::with('mcategory')->find($products_id);
            // →検索対象が配列でもEloquentが自動で判定してCollectionを返す
            
            // 商品名・カテゴリー名・値段を取得、商品の小計も算出してforeachで格納
            // "＆"で参照渡し 仮引数($data)の変更で実引数($cart_items)を更新する
            foreach ($cart_items as $index => &$data) {
                $data['product_name'] = $products[$index]->product_name;
                $data['category_name'] = $products[$index]->mcategory->category_name;
                $data['price'] = $products[$index]->price;
            }
        } else {
            // 空の時の処理
            echo('カートの商品がありません');
        }

        //カラム名を指定して$session_dataから各1次元配列に抽出する
        $session_product_id = array_column($cart_items, 'session_product_id');
        $session_product_quantity = array_column($cart_items, 'session_product_quantity');
        
        // Viewに渡すデータ
        $params = [
            'cart_items' => $cart_items,
            'session_product_id' => $session_product_id,
            'session_product_quantity' => $session_product_quantity,
        ];

        return view('cart.index', $params);
    }
}
