<?php

namespace App\Http\Controllers;

use App\MProduct;
use App\MCategory;
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
        // 検索フォームより受け取った文字列を格納(要バリデーション)
        $search_text = $request->search_text;

        // プルダウンで選択されたカテゴリーidを取得する
        $selected_category_id = $request->selected_category_id;

        // 部分一致で検索を行いページネイトする(平仮名カタカナは区別される？)
        $products = MProduct::with('mCategory')
            ->where('product_name', 'like', '%' . $search_text . '%')
            ->orderBy('category_id', 'asc')
            ->orderBy('product_name', 'asc')
            ->paginate(2); // ひとまず動作確認用に2件としている

        // DBに登録されているカテゴリーを取得する(Viewのプルダウンリストで使用)
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
