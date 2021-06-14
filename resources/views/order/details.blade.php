@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="p-3 border rounded-lg">
        <h3>お届け先</h3>
        @if(isset($user))
        <p>〒
            {{$user->zipcode}}
            (
            {{$user->prefecture}}
            {{$user->municipality}}
            {{$user->address}}
            {{$user->apartments}}
            )
        </p>
        @endif
    </div>

    @if(isset($details))
    @foreach($details as $detail)
    <div class="py-3">
        <p>注文番号：
            {{$detail->order_detail_number}}
        </p>
    </div>

    <div class="text-right px-3 my-3">
        @if($detail->shipment_status_id === 1)
        <form class="btn btn-sm bg-danger" action="{{route('order.destroy', ['detail' => $detail])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="&#xf1f8; 注文をキャンセルする" class="btn btn-danger" style="border: 0px none; color:white;" onclick='return confirm("削除しますか？");'>
        </form>
        @endif
    </div>
    @endforeach
    @endif

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
            @if(isset($orderQuantityMatchs))
            @foreach($orderQuantityMatchs as $orderQuantityMatch)
            @php
            $total=$orderQuantityMatch->product->price * $orderQuantityMatch->order_quantity;
            @endphp
            <tr>
                @if($orderQuantityMatch->shipment_status_id === 1)
                <td>{{$orderQuantityMatch->product->id}}</td>
                <td>{{$orderQuantityMatch->product->product_name}}</td>
                <td>{{$orderQuantityMatch->product->category->category_name}}</td>
                <td>{{$orderQuantityMatch->product->price}}</td>
                <td>{{$orderQuantityMatch->order_quantity}}</td>
                <td>{{$total}}</td>
                <td>
                    注文状態:発送前
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
        <tbody class="text-center">
            <tr>
                @if($orderQuantityMatch->shipment_status_id === 1)
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計 </td>
                <td>{{$totalPrice}}円</td>
                <td></td>
                <td></td>
                @else
                注文前はありません。<br>
                注文履歴画面に戻り、やり直してください。
                @endif
            </tr>
            @endif
        </tbody>
    </table>
    <div class="text-right px-3 my-3">
        <a href="{{route('order.all',['id'=>'all'])}}" class="btn btn-primary">注文履歴に戻る</a>
    </div>
</div>

@endsection
