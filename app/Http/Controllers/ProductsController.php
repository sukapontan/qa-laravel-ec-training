<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Product;
use App\Category;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProductsController extends Controller
{
    public function search(Request $request) {
        $query = Product::query();
        $categories = Category::pickUpColumn();

        $searchWord = $request->input('product_name');
        $categoryId = $request->input('category_id');

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

    public function showDetail($id)
    {
        $product = Product::find($id);

        return view('products.detail_a_product', [
            'product' => $product,
        ]);
    }

      // ------------------------------------------------
    // 商品詳細→カートにsessionももたせて保存
    // -----------------------------------------------

    public function cartIn(Request $request)
    {
        //商品詳細画面のhidden属性で送信（Request）された商品IDと注文個数を取得し配列として変数に格納
        //inputタグのname属性を指定し$requestからPOST送信された内容を取得する。
        $cartData = [
            'session_products_id' => $request->products_id
            ,'session_num' => $request->products_num
        ];

       //sessionにcartData配列が「無い」場合、
       //商品情報の配列をcartData(key)という名で$cartDataをSessionに追加
       if(!$request->session()->has('cartData')) {
           $request->session()->push('cartData', $cartData);
       } else {
           //sessionにcartData配列が「有る」場合、情報取得
            $sessionCartData = $request->session()->get('cartData');
            //sameProductId定義 product_id同一確認フラグ false = 同一ではない状態
            $sameproductId = false;
            foreach($sessionCartData as $key => $sessionData) {
              //product_idが同一であれば、フラグをtrueにする → 個数の合算処理、及びセッション情報更新。更新は一度のみ
                if($sessionData['session_products_id'] === $cartData['session_products_id']) {
                    $sameproductsId = true;
                    $num = $sessionData['session_num'] + $cartData['session_num'];
                    //cartDataをrootとしたツリー状の多次元連想配列の特定のValueにアクセスし、指定の変数でValueの上書き処理
                    $request->session()->put('cartData.' . $key . '.session_num', $num);
                    break;
                }
            }

            //product_idが同一ではない状態を指定 その場合であればpushする
            if ($sameproductsId === false) {
            $request->session()->push('cartData', $cartData);
            }
        }
        //POST送信された情報をsessionに保存 'users_id'(key)に$request内の'users_id'をセット
        $request->session()->put('users_id', ($request->users_id));
        return redirect()->route('cartlist.index');
        $user = Auth::user();

        return view('products.detail_a_product', [
            'product' => $product,
            'user' => $user,
        ]);
    }
}
