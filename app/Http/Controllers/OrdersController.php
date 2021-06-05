<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrdersController extends Controller
{
    public function index($id)
    {
        if ($id === '3') {
            $idArray = array('id' => $id);
            $carbon = new Carbon();
            $now = $carbon->now();
            $threeMonth = $carbon->subMonth(3);

            $orders = Order::where('user_id', 1)
                ->whereBetween('updated_at', [$threeMonth, $now])
                ->with(['user', 'orderDetails.shipmentStatus'])
                ->orderBy('id', 'desc')
                ->paginate(15);

            return view('order.history', ['orders' => $orders, 'idArray' => $idArray]);
        } else {
            $array = array('id' => $id);

            //仮でユーザー１の注文履歴表示(threeSeach()も同様)
            $orders = Order::where('user_id', 1)
                ->with(['user', 'orderDetails.shipmentStatus'])
                ->orderBy('id', 'desc') //順番が分かりづらいためid1でソート(threeSeach()も同様)
                ->paginate(15);
            return view('order.history', ['orders' => $orders,'array' => $array]);
        }
    }

    // public function threeSeach($id)
    // {

    //     dd($id);
    //     $carbon = new Carbon();
    //     $now = $carbon->now();
    //     $threeMonth = $carbon->subMonth(3);

    //     $orders = Order::where('user_id', 1)
    //         ->whereBetween('updated_at', [$threeMonth, $now])
    //         ->with(['user', 'orderDetails.shipmentStatus'])
    //         ->orderBy('id', 'desc')
    //         ->paginate(15);

    //     return view('order.threeHistory', ['orders' => $orders]);
    // }
}
