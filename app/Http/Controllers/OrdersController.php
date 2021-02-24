<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /*
    * 注文詳細を表示
    * @return view
    */
    public function index(Request $request)
    {
        $user = $request->user();
        $before_date = today()->subMonth(3);
        $orders = Order::with('orderDetails')
            ->where('user_id', $user->id)
            ->where('order_date', '>', $before_date)
            ->orderBy('order_date', 'desc')->paginate(2);
        return view('shopping.order_history', compact('user', 'orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        $user = User::find($order->user_id);
        $before_date = today()->subMonth(3);
        $recentlyOrders = $user->orders()->where('order_date', '>', $before_date)->orderBy('order_date', 'desc')->paginate(15);
        return view('shopping.search_order_history', compact('user', 'recentlyOrders'));
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $data = Order::find($id);
        $data->delete();
        return redirect('/top');
    }

}
