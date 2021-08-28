@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <h2><span class="panel-heading badge badge-success mt-3 mb-2">
                @foreach($idArray as $id)
                @if($id === 'three')
                <a href="{{route('orders.all',['id'=>'all'])}}" class="text-secondary">全ての注文を表示</a>
                @endif
                @if($id === 'all')
                <a href="{{route('orders.all',['id'=>'three'])}}" class="text-dark">直近3か月の注文を表示</a>
                @endif
                @endforeach
            </span></h2>
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
            @foreach($orders as $order)
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                        @foreach($order->tOrderDetails as $orderDetail)
                        @if ($loop->first)
                        {{$orderDetail->order_detail_number}}
                        @endif
                        @endforeach
                    </td>
                    <td>
                        <p>〒{{ $order->mUser->zipcode }}</p>
                        <p>{{ $order->mUser->prefecture.$order->mUser->municipality.$order->mUser->address.$order->mUser->apartoments }}</p>
                        <p>{{ $order->mUser->last_name."  ".$order->mUser->first_name }} 様</p>
                    </td>
                    <td>
                        <p>注文日時: {{ $order->order_date }}</p>
                        <p>注文状態:
                            @foreach($order->tOrderDetails as $key =>$orderDetail)
                            @if ($loop->first)
                            <!-- 注文詳細テーブルに紐づく発送状態テーブルの情報を取り出す -->
                            @if($orderDetail->mShipmentStatuses->shipment_status_name==='準備中')
                            準備中
                            @elseif($orderDetail->mShipmentStatuses->shipment_status_name==='発送済')
                            発送済
                            @endif
                            @endif
                            @endforeach
                        </p>
                    </td>
                    <td type="submit" name="name" value="詳細" class="btn btn-primary" onclick="location.href='{{ route('orders.show',['id' => $order->id]) }}'">
                        詳細
                    </td>
                </tr>
                <tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>

<nav aria-label="...">
    <ul class="pagination pagination" style="justify-content: center;">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">1</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
</nav>

@endsection