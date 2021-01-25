<?php

namespace App\Http\Controllers;

use App\MProduct;
use App\MCategory; // 検証時にのみ用いる
use Illuminate\Http\Request;

class MProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 商品一覧ページを表示し、検索を行う
    public function index(Request $request)
    {
        // 検索フォームより受け取った文字列を$search_textに格納
        $search_text = $request->search_text;

        /* 検証用のコード
        $test2 = MCategory::all();
        $test1 = MProduct::with('mCategory')->get();
        dd($test1->toArray());
        */
        
        /* withを使わずに検証
        $products = MProduct::all();
        foreach ($products as $product) {
            dd($product->mCategory());
        }
        */

        if ($search_text != '') {
            // 検索フォームからのデータがある場合は部分一致検索(平仮名カタカナは区別される？)
            $items = MProduct::with('mCategory')
                ->where('product_name', 'like', '%' . $search_text . '%')
                ->orderBy('category_id', 'asc')
                ->orderBy('product_name', 'asc')
                ->paginate(2); // ひとまず動作確認用に2件としている
            
        } else {
            // そうでない場合は単純に昇順で表示
            $items = MProduct::with('mCategory')
                ->orderBy('category_id', 'asc')
                ->orderBy('product_name', 'asc')
                ->paginate(2); // ひとまず動作確認用に2件としている
        }
        
        // viewに渡すデータ(商品の一覧と取得件数を渡す)
        $params = [
            'items' => $items,
            'search_text' => $search_text,
        ];
        return view('products', $params);
    }

    // 商品詳細ページを表示する
    public function show(Request $request)
    {
        $item = MProduct::find($request->id);
        if (empty($item)) {
            abort(404);
        }

        return view('product.show', ['item' => $item]);
    }
}
