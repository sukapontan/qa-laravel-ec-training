@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="panel panel-default">
        <h2><span class="panel-heading badge badge-secondary mt-3 mb-2">直近3か月の注文を表示</span></h2>
        <div class="panel-body">
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>注文番号</th>
                    <th>お届け先</th>
                    <th>備考</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @php
                $orderNumber = 0;
            @endphp
            @foreach($orders as $order)
                <tr>
                    <td>{{ $orderNumber += 1 }}</td>
                    <td>{{ $order->id }}</td>
                    <td>
                        <p>〒{{ $zip = substr($user->zipcode,0,3) . "-" . substr($user->zipcode,3) }}</p>
                        <p>{{ $user->prefecture.$user->municipality }}&nbsp;{{ $user->	address }}</p>
                        <p>{{ $user->last_name }}&nbsp;{{ $user->first_name }}  様</p>
                    </td>
                    <td>
                        <p>注文日時: {{ $order_date = date('Y/m/d', strtotime($order->order_date)) }}</p>
                        @php
                            $ready = 0;
                            $shipped = 0;
                            $cancel = 0;
                            $orderDetailCount = 0;
                            foreach( $order->orderDetails as $orderDetail ){
                                $shipmentStatusId = $orderDetail->shipment_status_id;
                                if($shipmentStatusId === 2){
                                    $ready += 1;
                                }elseif($shipmentStatusId === 3){
                                    $shipped += 1;
                                }elseif($shipmentStatusId === 4){
                                    $cancel += 1;
                                }
                            }
                            $orderDetailCount = $order->orderDetails()->count();
                        @endphp
                        @if($orderDetailCount === $shipped)
                            <p>注文状態：発送済</p>
                        @elseif($orderDetailCount === $ready)
                            <p>注文状態：発送準備完了</p>
                        @elseif($orderDetailCount === $cancel)
                            <p>注文状態：キャンセル</p>
                        @else
                            <p>注文状態：準備中</p>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ action('OrderDtailsController@show', [$order->id]) }}">詳細</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>

    <div class="d-flex justify-content-center">
        {{ $orders->links() }}
    </div>
@endsection
