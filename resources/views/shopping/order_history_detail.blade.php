@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="p-3 border rounded-lg">
        <h3>お届け先</h3>
        @foreach ($orders as $order)
        @if ($loop->first)
        <p>〒{{ $order->mUser->zipcode }}</p>
        <p>{{ $order->mUser->prefecture.$order->mUser->municipality.$order->mUser->address.$order->mUser->apartoments }}</p>
        <p>{{ $order->mUser->last_name."  ".$order->mUser->first_name }}　様</p>
        @endif
    </div>
    <div class="py-3">
        <p>注文番号：
            @foreach ($order->tOrderDetails as $orderDetail)
            @if ($loop->first)
            {{$orderDetail->order_detail_number}}
        </p>
        <p>注文状態：{{ $orderDetail->mShipmentStatuses->shipment_status_name }}</p>
        @endif
        @endforeach
    </div>
    @if ($orderDetail->mShipmentStatuses->shipment_status_name == "準備中")
    <div class="text-right px-3 my-3">
        <a href="{{ route('orders.destroy', ['id' => $order->id]) }}" class="btn btn-danger">注文をキャンセルする</a>
    </div>
    @endif
    @endforeach
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">商品名</th>
                <th class="text-center">商品カテゴリー</th>
                <th class="text-center">値段</th>
                <th class="text-center">個数</th>
                <th class="text-center">小計</th>
                <th class="text-center">備考</th>
            </tr>
        </thead>
        @foreach ($orders as $order)
        <tbody class="text-center border-bottom">
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $orderDetail->mProduct->product_name }}</td>
                <td>{{ $orderDetail->mProduct->categories->category_name }}</td>
                <td>{{ $orderDetail->mProduct->price }}円</td>
                <td>{{ $orderDetail->order_quantity }}　個</td>
                <td>{{ $orderDetail->mProduct->price * $orderDetail->order_quantity }}円</td>
                <td>注文状態：{{ $orderDetail->mShipmentStatuses->shipment_status_name }}</td>
            </tr>
        </tbody>
        @endforeach
        <tbody class="text-center">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計 </td>
                <td>{{ $totalPrice }}円</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="text-right px-3 my-3">
        <a href="{{ route('orders.all', ['id' => 'all']) }}" class="btn btn-primary">注文履歴に戻る</a>
    </div>
</div>
@endsection