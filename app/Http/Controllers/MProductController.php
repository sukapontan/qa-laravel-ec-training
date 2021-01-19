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
        // ※現状はm_productテーブルがDBに無いのでエラーになる
        $items = MProduct::all();
        return view('products.index', ['items' => $items]);
        
        // 作業メモ：$itemsはCollectionクラスのインスタンスである
    }

}
