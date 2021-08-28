<?php

namespace App\Http\Controllers;

use App\MUser;
use App\TOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function index($id)
    {
        $idArray = array('id' => $id);

        // 認証しているユーザーのIDを取得
        $user = Auth::id();

        // $idの値がthree（直近3ヶ月）だった場合
        if ($id === 'three') {
            $carbon = new Carbon();
            $now = $carbon->now();
            $threeMonth = $carbon->subMonth(3);

            $orders = TOrder::where('user_id', $user)
                ->whereBetween('order_date', [$threeMonth, $now])
                ->with(['mUser', 'tOrderDetails.mShipmentStatuses']) //ユーザー情報と発送状況情報までデータ取得可能に
                ->orderBy('id', 'desc')
                ->paginate(15);
            // dd($orders);

            if ($orders->isEmpty()) {
                return view('shopping/order_history_error', ['idArray' => $idArray]);
            }
            return view('shopping/order_history', ['orders' => $orders, 'idArray' => $idArray]);
        } else {
            $orders = TOrder::where('user_id', $user)
                ->with(['mUser', 'tOrderDetails.mShipmentStatuses'])
                ->orderBy('id', 'desc')
                ->paginate(15);
            // dd($orders);

            if ($orders->isEmpty()) {
                return view('shopping/order_history_error', ['idArray' => $idArray]);
            }
            // 注文履歴画面に遷移
            return view('shopping/order_history', ['orders' => $orders, 'idArray' => $idArray]);
        }
    }

    public function show($id)
    {
        $totalPrice = 0;
        // TOrderオブジェクトを取得し、mUser,tOrderDetails.mShipmentStatuses, tOrderDetails.mProductをリレーションで紐づけ
        $orders = TOrder::where('id', $id)
            ->with(['mUser', 'tOrderDetails.mShipmentStatuses', 'tOrderDetails.mProduct'])->get();
        // dd($orders);
        // 注文ごとの合計金額を取得
        foreach ($orders as $order) {
            foreach ($order->tOrderDetails as $orderDetail) {
                $totalPrice += $orderDetail->mProduct->price * $orderDetail->order_quantity;
            }
        }
        // 注文履歴詳細画面に遷移
        return view('shopping/order_history_detail', ['orders' => $orders, 'totalPrice' => $totalPrice]);
    }

    public function destroy($id)
    {
        // dd($id);
        //受け取ったidからt_orderテーブルに存在する注文を検索
        $order = TOrder::findOrFail($id);
        // 該当の注文を削除
        $order->delete();
        // 前の画面に戻る
        return redirect()->route('orders.all', ['id' => "all"]);
    }
}
