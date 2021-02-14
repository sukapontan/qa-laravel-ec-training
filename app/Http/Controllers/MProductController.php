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
        
        // クエリビルダで検索を行う(文字列検索,カテゴリーid検索)
        $query = MProduct::query();
        if (isset($search_text)) {
            $query->where('product_name', 'like', '%'.$search_text.'%');
        }
        if (isset($select_category_id)) {
            $query->where('category_id', $select_category_id);
        }

        // 並べ替えてページネイトする(ダミーデータが少ないので動作確認用に3件とする)
        $products = $query->orderByRaw('category_id asc, product_name asc')->paginate(3);
        
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
