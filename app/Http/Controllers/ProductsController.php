<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $categories = Category::all();

        $params = [
            'products' => $products,
            'categories' => $categories,
        ];

        return view('products.search', $params);

    }

    public function search(Request $request)
    {
        // inputタグで入力した値を取得
        $keyProduct = $request->input('search');
        // クエリ作成
        $query1 = Product::query();

        // キーワードが入力されている場合
        if ($keyProduct) {
            $query1->where('product_name', 'like', '%' . $keyProduct . '%');
        };

        $products = $query1->paginate(10);

        return view('products.search', [
            'products' => $products,
        ]);
    }
}
