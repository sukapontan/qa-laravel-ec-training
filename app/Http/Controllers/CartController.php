<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MProduct;

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

            // 商品情報を取得(メモ：検索対象が配列でもEloquentが自動で判定してCollectionを返す)
            $products = MProduct::with('mcategory')->find($products_id);
            
            // 商品名・カテゴリー名・値段を取得、商品の小計も算出してforeachで格納
            // "＆"で参照渡し 仮引数($cart_item)の変更で実引数($cart_items)を更新する
            $total_price = 0;
            foreach ($cart_items as &$cart_item) {
                foreach ($products as $product) {
                    if ($product->id == $cart_item['session_product_id']) {
                        $cart_item['product_name'] = $product->product_name;
                        $cart_item['category_name'] = $product->mcategory->category_name;
                        $cart_item['price'] = $product->price;
                        $cart_item['subtotal'] = $product->price * $cart_item['session_product_quantity'];
                        $total_price += $cart_item['subtotal'];
                    }
                }
            }
        } else {
            // 空の時の処理
            echo('カートの商品がありません');
        }
        
        // FIXME:セッションが切れた時に再読み込みするとエラーになる(!empty($cart_items)がうまく機能していない？)
        // セッションから商品個数の1次元配列を取得
        $products_quantity = array_column($cart_items, 'session_product_quantity');
        
        // Viewに渡すデータ
        $params = [
            'cart_items' => $cart_items,
            'products_quantity' => $products_quantity,
            'total_price' => $total_price,
        ];

        return view('cart.index', $params);
    }
}
