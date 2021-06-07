@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="p-3 border rounded-lg">
        <h3>お届け先</h3>
        <p>〒
            {{$user->zipcode}}
            (
            {{$user->prefecture}}
            {{$user->municipality}}
            {{$user->address}}
            {{$user->apartments}}
            )
        </p>
    </div>
    <div class="py-3">
        @foreach($details as $detail)
        <p>注文番号：
            {{$detail->order_detail_number}}
        </p>
        @endforeach
    </div>
    <div class="text-right px-3 my-3">
        <a href="" class="btn btn-danger">注文をキャンセルする</a>
    </div>
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
        <tbody class="text-center border-bottom">
        @foreach($userDetails as $userDetail)
            @php
            $total=$userDetail->product->price * $userDetail->order_quantity;
            @endphp
            <tr>
                @if($userDetail->shipment_status_id === 2)
                <td>{{$userDetail->product->id}}</td>
                <td>{{$userDetail->product->product_name}}</td>
                <td>{{$userDetail->product->category->category_name}}</td>
                <td>{{$userDetail->product->price}}</td>
                <td>{{$userDetail->order_quantity}}</td>
                <td>{{$total}}</td>
                <td>
                注文状態:発送中
                </td>
                @endif
            </tr>
        @endforeach

        </tbody>
        <tbody class="text-center">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計 </td>
                <td>円</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="text-right px-3 my-3">
        <a href="" class="btn btn-primary">注文履歴に戻る</a>
    </div>
</div>

@endsection