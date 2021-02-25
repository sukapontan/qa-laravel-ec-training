<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use App\OrderDetail;
use App\ProductStatus;

use Illuminate\Http\Request;

class OrderDtailsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $order = Order::find($id);
        $userId = $order->user_id;
        $user = User::find($userId);
        $logInUser = $request->user();
        $orderDetails = OrderDetail::all();
        $productStatus = ProductStatus::all();
        return view('shopping.order_history_detail'
        , compact('user', 'logInUser', 'order', 'orderDetails', 'productStatus'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $order = Order::find($id);
        $order->delete();
        redirect('/top');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        foreach($order->orderDetails as $orderDetail){
            $orderDetail->shipment_status_id = 4;
            $orderDetail->timestamps = false;
            $orderDetail->save();
        }
        return redirect()->back();
    }
}
