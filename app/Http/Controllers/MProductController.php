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
    public function index(Request $request)
    {
        // 商品一覧ページを表示する
        // ModelからEloquentで全件取得する
        // ※現状はm_productテーブルがDBに無いのでエラーになる
        $items = MProduct::all();

        // 検索フォームより受け取った文字列を$serch_textに格納
        $serch_text = $request->serch_text;

        // ここからロジックを実装する
        // 具体的には分岐処理で、カテゴリidと商品名部分一致で検索を行う
        // もしカテゴリが未選択で検索フォームも空白だったら処理は行わずにviewを表示する
        // 入力があれば第1ソート=カテゴリ(昇順)、第2ソート=商品名(昇順)

        // viewを表示する
        // viewに渡すデータは何？商品と件数？件数は$query_numbersとか？
        return view('products.index', ['items' => $items]);
        
        // 作業メモ：$itemsはCollectionクラスのインスタンスである
    }

}
