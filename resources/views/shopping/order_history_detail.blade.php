@extends('layouts.app')

@section('content')
  @if($logInUser == $user)
    <div class="container mt-5">
      <div class="p-3 border rounded-lg">
        <h3>お届け先</h3>
        <p>〒{{ $zip = substr($user->zipcode,0,3) . "-" . substr($user->zipcode,3) }}</p>
        <p>{{ $user->prefecture }}{{ $user->municipality }}{{ $user->address }}　{{ $user->apartments }}</p>
        <p>{{ $user->last_name }}　{{ $user->first_name }}　様</p>
          @php
              $notReady = 0;
              $orderDetails = $order->orderDetails();
          @endphp
          @if(isset($orderDetails))
              @php
                  $notReady = 0;
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
                  @php
                      $notReady = 0;
                  @endphp
                  注文状態：発送済
              @elseif($orderDetailCount === $ready)
                  @php
                      $notReady = 0;
                  @endphp
                  注文状態：発送準備完了
              @elseif($orderDetailCount === $cancel)
                  @php
                      $notReady = 0;
                  @endphp
                  注文状態：キャンセル
              @else
                  @php
                      $notReady = 1;
                  @endphp
                  注文状態：準備中
              @endif
          @endif
      </div>
      <div class="py-3">
        <p>注文番号：{{ $orderDetail->order_detail_number }}</p>
        <p>注文番号：{{ $order->id }}</p>
      </div>
      <div class="text-right px-3 my-3">
        <form action="{{ route('order.destroy', $order->id) }}" method="post" onsubmit="return checkText()">
        @csrf
            <input type="hidden" name="id" value="{{ $order->id }}">
            <button type="submit" id="add_delete" class="btn btn-danger">注文をキャンセルする</button>
        </form>
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
          @php
            $orderDetailNumber = 0;
            $total = 0;
          @endphp
          @foreach($order->orderDetails as $orderDetail)
          <tr>
            <th scope="row">{{ $orderDetailNumber += 1 }}</th>
          @php
              $productId = $orderDetail->products_id;
              $product = App\Product::find($productId);
              $categoryId = $product->category_id;
              $productStatusId = $product->product_status_id;
              $category = App\Category::find($categoryId);
              $productStatus = App\ProductStatus::find($productStatusId);
              $shipmentStatusId = $orderDetail->shipment_status_id;
              $shipmentStatus = App\ShipmentStatus::find($shipmentStatusId);
              $subTotal = 0;
              $price = $product->price;
              $quantity = $orderDetail->order_quantity;
              $subTotal = $price * $quantity;
            @endphp
            <td>{{ $product->product_name }}</td>
            <td>{{ $category->category_name }}</td>
            <td>{{ $price }}円</td>
            <td>{{ $quantity }}　個</td>
            <td>{{ $subTotal }}円</td>
            <td>商品状態：{{ $productStatus->product_status_name }}</td>
          </tr>
            @php
              $total += $subTotal;
            @endphp
          @endforeach
        </tbody>
        <tbody class="text-center">
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>合計</td>
            <td> {{ $total }}円</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <div class="text-right px-3 my-3">
        <a href="{{ route('order.date') }}" class="btn btn-primary">注文履歴に戻る</a>
      </div>
    </div>
  @else
      <div class="container">
          <div class="jumbotron text-center bg-white">
              <h1>該当の注文は見つかりませんでした…</h1>
              <p class="mt-5">注文履歴画面に戻り、やり直してください</p>
              <a href="{{ route('orders.index') }}" class="btn btn-primary">注文履歴へ</a>
          </div>
      </div>
  @endif
  <script>
    let btn = document.getElementById('add_delete');

    btn.addEventListener('click', function() {
        let result = window.confirm('本当に削除しますか？');

        if( result ) {
            console.log('削除しました。');
        }
        else {
            console.log(false);
            preventDefault();
        }
    })

    function checkText() {
      let text = document.myform.mytext.value;

      if(text.false) {
          alert('文字が入力されていません！');
          return false;
      }
    }
  </script>
@endsection
