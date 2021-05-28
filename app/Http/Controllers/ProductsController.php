<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
{
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
        if ($request->has('category_id') && $category_id !== ('0')) {
            $query->where('category_id', $category_id)->get();
        }

        $datas = $query->paginate(15);
 
        return view('product.search', ['datas' => $datas]);
    }
}
