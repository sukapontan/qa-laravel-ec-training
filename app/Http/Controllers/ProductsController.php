<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Purchases;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProductsStore;

class ProductsController extends Controller
{
    /**
     * 商品検索
     * @return $datas
     */
    public function index(Request $request)
    {
        $query = Product::query();

        $product_name = $request->product_name;
        $category_id = $request->category_id;

        //商品名の値が存在&商品名の値が空ではなかった場合
        if ($request->has('product_name') && $product_name !== '') {
            $query->where('product_name', 'like', '%' . $product_name . '%')->get();
        }

        //カテゴリーの値が存在&カテゴリーの値が0ではなかった場合
        if ($request->has('category_id') && $category_id !== '0') {
            $query->where('category_id', $category_id)->get();
        }

        $datas = $query->paginate(15);

        return view('product.search', ['datas' => $datas]);
    }
    /**
     * 商品詳細画面
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $product = Product::find($request->id);

        if (!$product) {
            return view('product.error');
        }

        return view('product.show', ['product' => $product]);
    }

    /**
     * 商品登録
     *
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * 商品保存
     *
     */
    public function store(ProductsStore $request, Product $product, Purchases $purchases)
    {
        DB::beginTransaction();
        try {
            //ログインユーザーid取得
            $user=Auth::id();

            // 商品情報をDBに保存
            $product->product_name = $request->product_name;
            $product->category_id = $request->category_id;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->sale_status_id = 1; //販売中をデフォルトで代入
            $product->product_status_id = $request->product_status_id;
            $product->user_id = $user;
            $product->save();

            //商品id取得
            $productId = $product->id;

            // 仕入情報をDBに保存
            $purchases->purchase_price = $request->purchase_price;
            $purchases->purchase_quntity = $request->purchase_quntity;
            $purchases->purchase_company = $request->purchase_company;
            $purchases->order_date = $request->order_date;
            $purchases->purchase_date = $request->purchase_date;
            $purchases->product_id = $productId;
            $purchases->save();
            
            DB::commit();
            return back()->with('message', '登録しました');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('message', '登録に失敗しました。お手数ですがお時間を空けてから再度お試しください。');
        }
    }
}
