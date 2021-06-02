<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrdersController extends Controller
{
    public function index()
    {
        //仮でユーザー１の注文履歴表示(threeSeach()も同様)
        $orders = Order::where('user_id', 1)
            ->with(['user', 'orderDetails.shipmentStatus'])
            ->orderBy('id', 'desc')//順番が分かりづらいためid1でソート(threeSeach()も同様)
            ->paginate(15);
        return view('order.history', ['orders' => $orders]);
    }

    public function threeSeach()
    {
        $now = Carbon::now();
        $threeMonth = Carbon::now();
        $threeMonth->subMonth(3);
        
        $orders = Order::where('user_id', 1)
        ->whereBetween('updated_at', [$threeMonth, $now])
        ->with(['user', 'orderDetails.shipmentStatus'])
        ->orderBy('id', 'desc')
        ->paginate(15);
        
        return view('order.threeHistory', ['orders' => $orders]);
    }
}
