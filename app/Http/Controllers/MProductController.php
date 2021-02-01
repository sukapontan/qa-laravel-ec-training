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
        // フォームから検索文字列と選択カテゴリーidを取得
        $search_text = $request->search_text;
        $select_category_id = $request->select_category_id;

        // 部分一致で検索を行いページネイトする
        // カテゴリーが選択されていればカテゴリーidでの絞り込みを追加する
        if ($select_category_id == 0) {
            $products = MProduct::with('mCategory')
                ->where('product_name', 'like', '%' . $search_text . '%')
                ->orderBy('category_id', 'asc')
                ->orderBy('product_name', 'asc')
                ->paginate(3); // 動作確認用に3件としています
        } else {
            $products = MProduct::with('mCategory')
                ->where('category_id', $select_category_id)
                ->where('product_name', 'like', '%' . $search_text . '%')
                ->orderBy('category_id', 'asc')
                ->orderBy('product_name', 'asc')
                ->paginate(3); // 動作確認用に3件としています
        }
        
        // DBに登録されているカテゴリーを取得する(Viewのプルダウンリストで使用)
        $categories = MCategory::all();
        
        // viewに渡すデータ
        $params = [
            'products' => $products,
            'categories' => $categories,
            'search_text' => $search_text,
            'select_category_id' => $select_category_id,
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
