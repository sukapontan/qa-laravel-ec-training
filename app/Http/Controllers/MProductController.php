<?php

namespace App\Http\Controllers;

use App\MProduct;
use Illuminate\Http\Request;

class MProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 商品一覧ページを表示する
    public function index(Request $request)
    {
        // ※現状はm_productテーブルがDBに無いのでエラーになる
        // 具体的には分岐処理で、カテゴリidと商品名部分一致で検索を行う
        // もしカテゴリが未選択で検索フォームも空白だったら処理は行わずにviewを表示する
        // 入力があれば第1ソート=カテゴリ(昇順)、第2ソート=商品名(昇順)

        // まず単純に商品カテゴリーidで昇順にソートするパターン
        // モデルにおいてローカルスコープを実装したいところ
        $items = MProduct::orderBy('product_category_id', 'asc')->paginate();

        // 検索フォームより受け取った文字列を$serch_textに格納
        $serch_text = $request->serch_text;

        // このあたりを分岐処理で行いたい

        // viewに渡すデータ(商品の一覧と取得件数)
        $params = ['items' => $items, 'query_numbers' => $query_numbers];
        return view('products.index', $params);
        
        // 作業メモ：$itemsはCollectionクラスのインスタンスである
    }

}
