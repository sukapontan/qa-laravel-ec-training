<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\OrderDetail;

class OrdersController extends Controller
{
    /**
     * 注文情報保存処理
     *
     * @return void
     */
    public function store(Request $request)
    {
        // TODO 認証ユーザを返す必要がある。
        $user = User::find(1);

        // 注文情報をDBに保存
        $order = Order::create([
            'user_id' => $user->id,
        ]);

        // 注文詳細情報をDBに保存
        $cartProducts = $request->session()->get('cartProducts');

        // 注文番号取得
        $orderDetailNumber = $this->getOrderDetailNumber();

        foreach ($cartProducts as $cartProduct) {
            $order->products()->attach(
                $order->id,
                [
                    'products_id' => $cartProduct['session_product_id'],
                    'shipment_status_id' => config('consts.common.SHIPMENT_STATUSES.before_shipping.value'),
                    'order_detail_number' => $orderDetailNumber,
                    'order_quantity' => $cartProduct['session_quantity'],
                ]
            );
        }

        // カート内商品情報を削除
        $request->session()->forget('cartProducts');

        return view('order.complete', ['order_detail_number' => $orderDetailNumber]);
    }

    /**
     * 注文番号生成
     *
     * @return string
     */
    private function getOrderDetailNumber() :string
    {
        return str_pad(rand(0, 9999999999), 10, '0');
    }
}
