<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * 注文情報保存処理
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            // TODO 認証ユーザを返す必要がある。
            $user = User::find(1);

            // カート内商品情報を取得
            $cartProducts = $request->session()->get('cartProducts');

            // カートが空の場合、空画面へ遷移
            if (!$request->session()->has('cartProducts') || empty($cartProducts)) {
                // カート内商品情報を削除
                $request->session()->forget('cartProducts');
                return redirect()->route('cart.index');
            }

            // 注文情報をDBに保存
            $order = Order::create([
                'user_id' => $user->id,
            ]);

            // 注文番号取得
            $orderDetailNumber = $this->getOrderDetailNumber();

            // 注文詳細情報をDBに保存
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

            DB::commit();

            // カート内商品情報を削除
            $request->session()->forget('cartProducts');

            return view('order.complete', ['order_detail_number' => $orderDetailNumber]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('cart.index')->with('message', '注文に失敗しました。お手数ですがお時間を空けてから再度お試しください。');
        }
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
