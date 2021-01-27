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
        // 要バリデーション設定
        $search_text = $request->search_text;

        // 選択されたカテゴリーidも受け取って検索機能に反映させたい！

        if ($search_text != '') {
            // 検索フォームからのデータがある場合は部分一致検索(平仮名カタカナは区別される？)
            $products = MProduct::with('mCategory')
                ->where('product_name', 'like', '%' . $search_text . '%')
                ->orderBy('category_id', 'asc')
                ->orderBy('product_name', 'asc')
                ->paginate(2); // ひとまず動作確認用に2件としている
            
        } else {
            // そうでない場合は単純に昇順で表示
            $products = MProduct::with('mCategory')
                ->orderBy('category_id', 'asc')
                ->orderBy('product_name', 'asc')
                ->paginate(2); // ひとまず動作確認用に2件としている
        }

        // DBに登録されているカテゴリーを取得する(プルダウンリストに使用)
        $categories = MCategory::all();
        
        // viewに渡すデータ(商品の一覧と取得件数を渡す)
        $params = [
            'products' => $products,
            'categories' => $categories,
            'search_text' => $search_text,
        ];
        return view('products.index', $params);
    }

    // 商品詳細ページを表示する
    public function show(Request $request)
    {
        $product = MProduct::find($request->id);
        if (empty($product)) {
            abort(404);
        }

        return view('products.detail', ['product' => $product]);
    }
}
