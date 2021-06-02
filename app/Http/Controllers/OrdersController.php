<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class OrdersController extends Controller
{
    public function index()
    {
        //仮でユーザー１の注文履歴表示
        $orders = Order::where('user_id', 1)
            ->with(['user', 'orderDetails.shipmentStatus'])
            ->orderBy('updated_at', 'desc')
            ->paginate(15);
            // dd($orders);
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
        ->orderBy('updated_at', 'desc')
        ->paginate(15);
        
        return view('order.threeHistory', ['orders' => $orders]);
    }
}
