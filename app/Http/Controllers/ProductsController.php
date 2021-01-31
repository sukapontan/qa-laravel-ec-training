<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function search(Request $request) {
        $query = Product::query();
        $categories = Category::joinName();

        $searchWord = $request->input('商品名');
        $categoryId = $request->input('カテゴリID');

        if (isset($searchWord)) {
            $query->where('product_name', 'like', '%'.$searchWord.'%');
        }
        if (isset($categoryId)) {
            $query->where('category_id', $categoryId);
        }

        $products = $query->orderBy('category_id', 'asc')->paginate(15);

        return view('products.search', [
            'products' => $products,
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId,
        ]);
    }
}
