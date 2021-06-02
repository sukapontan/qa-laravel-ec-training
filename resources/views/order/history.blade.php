<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>探求学園Laravel専攻</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

    <header class="navbar navbar-dark bg-warning">

        <a class="navbar-brand text-dark" style="font-size:x-large;" href="">
            探求学園Laravel専攻
        </a>

        <ul class="list-inline navbar-brand text-dark">
            <li class="navbar bg-faded" style="flex-direction: column;">フクさん</li>
            <li class="list-inline-item"><a class="nav-link" href="#">商品検索</a></li>
            <li class="list-inline-item"><a class="nav-link" href="#">カート</a></li>
            <li class="list-inline-item"><a class="nav-link" href="#">注文履歴</a></li>
            <li class="list-inline-item"><a class="nav-link" href="#">ユーザー情報</a></li>
            <li class="list-inline-item"><a class="nav-link" href="#">ログアウト</a></li>
        </ul>

    </header>

    <div class="container">
        <div class="panel panel-default">
            <h2><span class="panel-heading badge badge-secondary mt-3 mb-2"><a href="{{route('order.threeSeach')}}">直近3か月の注文を表示</a></span></h2>
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
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>
                            @foreach($order->orderDetails as $orderDetail)
                            {{$orderDetail->order_detail_number}}
                            @endforeach
                        </td>
                        <td>
                            <p>〒{{$order->user->zipcode}}</p>
                            <p>
                                {{$order->user->prefecture}}
                                {{$order->user->municipality}}
                                {{$order->user->address}}
                                {{$order->user->apartments}}
                            </p>
                            <p>
                                {{$order->user->last_name}}
                                {{$order->user->first_name}}
                                様
                            </p>
                        </td>
                        <td>
                            <p>注文日時: {{$order->updated_at->format('Y/m/d')}}</p>
                            <p>注文状態:
                            @foreach($order->orderDetails as $orderDetail)
                                @if($orderDetail->shipmentStatus->shipment_status_name="1")
                                発送前
                                @elseif($orderDetail->shipmentStatus->shipment_status_name="2")
                                発送中
                                @else
                                発送済み
                                @endif
                            @endforeach
                            </p>
                        </td>
                        <td type="submit" name="name" value="詳細" class="btn btn-primary">
                            詳細
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if($orders->isEmpty())
            注文履歴は存在しません
            @endif
        </div>
    </div>

    {{$orders->appends(request()->query())->links()}}
    <footer class="mt-5">
        <nav class="navbar navbar-dark bg-warning">
            <div class="navbar-brand text-dark" style="font-size:x-large;">探求学園Laravel専攻</div>
            <div class="navbar-brand text-dark" style="font-size: medium;">© 2020 QuestAcademia, All rights reserved.</div>
        </nav>
    </footer>

</body>

</html>