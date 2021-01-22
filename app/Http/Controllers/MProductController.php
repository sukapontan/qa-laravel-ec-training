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
        // 検索フォームより受け取った文字列を$search_textに格納
        $search_text = $request->search_text;

        if ($search_text != '') {
            // 検索フォームからのデータが空白でない場合は部分一致検索(平仮名カタカナは区別される？)
            $items = MProduct::where('product_name', 'like', '%' . $search_text . '%')
                ->orderBy('category_id', 'asc')
                ->orderBy('product_name', 'asc')
                ->paginate(2); // とりあえず動作確認用に2件としている
            
        } else {
            // そうでない場合は単純に昇順で表示
            $items = MProduct::orderBy('category_id', 'asc')
                ->orderBy('product_name', 'asc')
                ->paginate(2); // とりあえず動作確認用に2件としている
        }

        // 検索結果の取得件数を格納
        // 現状、ページネイトされてからカウントしている。。
        // 0件の場合はエラーメッセージを表示させる
        $count_results = count($items);
        
        // viewに渡すデータ(商品の一覧と取得件数を渡す)
        $params = [
            'items' => $items,
            'search_text' => $search_text,
            'count_results' => $count_results,
        ];
        return view('products', $params);
    }
}
