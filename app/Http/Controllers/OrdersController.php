<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Facades\DB;

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
    /**
     * 注文情報保存処理
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO 認証ユーザを返す必要がある。
        $user = User::find(1);

        // カート情報が存在しない場合
        if (!$request->session()->has('cartProducts')) {
            return redirect()->route('cart.index');
        }

        // カート内商品情報を取得
        $cartProducts = $request->session()->get('cartProducts');

        // カート内商品情報が存在しない場合
        if (empty($cartProducts)) {
            $request->session()->forget('cartProducts');
            return redirect()->route('cart.index');
        }

        DB::beginTransaction();

        try {
            // 注文情報をDBに保存
            $order = Order::create([
                'user_id' => $user->id,
            ]);

            // 注文番号取得
            $orderDetailNumber = $this->getOrderDetailNumber($user->id);

            // 注文詳細情報をDBに保存
            $orderDetail = new OrderDetail();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail->create([
                    'order_id' => $order->id,
                    'product_id' => $cartProduct['session_product_id'],
                    'shipment_status_id' => config('consts.common.SHIPMENT_STATUSES.before_shipping.value'),
                    'order_detail_number' => $orderDetailNumber,
                    'order_quantity' => $cartProduct['session_quantity'],
                ]);
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
    private function getOrderDetailNumber($user_id) :string
    {
        return str_pad($user_id, 10, '0', STR_PAD_LEFT)."-".date('YmdHis');
    }
}
