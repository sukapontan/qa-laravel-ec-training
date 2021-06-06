<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrdersController extends Controller
{
    /**
     * 注文履歴処理
     *
     */
    public function index($id)
    {
        $idArray = array('id' => $id);
        if ($id === 'three') {
            $carbon = new Carbon();
            $now = $carbon->now();
            $threeMonth = $carbon->subMonth(3);

            //仮でユーザー１の注文履歴表示
            $orders = Order::where('user_id', 1)
                ->whereBetween('updated_at', [$threeMonth, $now])
                ->with(['user', 'orderDetails.shipmentStatus'])
                ->orderBy('id', 'desc') //順番が分かりづらいためid1でソート
                ->paginate(15);
            return view('order.history', ['orders' => $orders, 'idArray' => $idArray]);
        } else {
            $orders = Order::where('user_id', 1)
                ->with(['user', 'orderDetails.shipmentStatus'])
                ->orderBy('id', 'desc')
                ->paginate(15);
            return view('order.history', ['orders' => $orders, 'idArray' => $idArray]);
        }
    }
}
