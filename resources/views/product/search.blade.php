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
    <div class="product">
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h1>商品検索画面</h1>
            </div>
        </div>

        <form class="search" enctype="multipart/form-data" action="{{route('product.index')}}" accept-charset="UTF-8" method="get">
            @csrf
            <div class="row">
                <div class="input-group mt-4 col-md-7 offset-2">
                    <h2 class="mr-4">商品名</h2>
                    <input type="text" name="product_name" class="form-control ">
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-primary ml-4" value="検索">
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="input-group mt-4 col-md-7 offset-2">
                    <h2>商品カテゴリ</h2>
                    <select id="category_id" name="category_id" class="form-control">
                        @foreach(config('categories') as $id => $category)
                        <option name="category_id" value="{{$id}}">{{$category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>

        <div class="container mt-4">
            <div class="panel panel-default">
                <div class="panel-heading">全{{$datas->total()}}件</div>
                <div class="panel-body">
                </div>
                <table border="1" class="table" style="border-collapse: collapse">
                    @if(!empty($datas))
                    <thead class="bg-warning">
                        <tr>
                            <th>商品名</th>
                            <th>商品化カテゴリ</th>
                            <th>価格</th>
                            <th>詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                        <tr>
                            <td>{{ $data->product_name}}</td>
                            <td>{{ $data->category->category_name}}</td>
                            <td>{{ $data->price}}</td>
                            <td type="submit" name="name" value="商品詳細" class="btn btn-primary">
                                商品詳細
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                    @if($datas->isEmpty())
                    検索結果がありませんでした。
                    @endif
                </table>
                {{ $datas->fragment('foo')->links() }}
            </div>
        </div> 　
    </div>

    <footer class="mt-5">
        <nav class="navbar navbar-dark bg-warning">
            <div class="navbar-brand text-dark" style="font-size:x-large;">探求学園Laravel専攻</div>
            <div class="navbar-brand text-dark" style="font-size: medium;">© 2020 QuestAcademia, All rights reserved.</div>
        </nav>
    </footer>
</body>

</html>
