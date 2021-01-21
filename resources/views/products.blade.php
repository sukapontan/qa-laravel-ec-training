{{-- 商品検索画面を定義 --}}
@extends('app')

@section('title', '商品検索画面')

@section('content')

<div class="row mt-4">
    <div class="col-lg-12 text-center">
        <h1>@yield('title')</h1>
    </div>
</div>

{{-- 商品検索フォーム --}}
<form action="{{ 'MProductController@index' }}" method="GET" id="serch">
    @csrf
    <div class="row">
        <div class="input-group mt-4 col-md-7 offset-2">
            <h2 class="mr-4">商品名</h2>
            <input type="text" name="keyword" required class="form-control ">
            <span class="input-group-btn">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary ml-4" value="検索">
            </span>
        </div>
    </div>

    <div class="row">
        <div class="input-group mt-4 col-md-7 offset-2">
            <h2>商品カテゴリ</h2>
            <select class="ml-2" style=" width:50%; text-align-last:center;">
                <option>未選択</option>
                <option>ストレート</option>
                <option>ブレンド</option>
                <option>その他</option>
            </select>
        </div>
    </div>
</form>

{{-- 検索結果の表示 --}}
<div class="container mt-4">
    <div class="panel panel-default">
        {{-- 検索結果から表示件数を取得して表示(※未実装) --}}
        <div class="panel-heading">全○○件</div>
        <div class="panel-body">
        </div>
        <table border="1" class="table" style="border-collapse: collapse">
            {{-- 表の見出し --}}
            <thead class="bg-warning">
                <tr>
                    <th>商品名</th>
                    <th>商品カテゴリ</th>
                    <th>価格</th>
                    <th>詳細</th>
                </tr>
            </thead>

            {{-- 各商品を$itemインスタンスとして展開する --}}
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>{{ $item->price }}</td>
                    {{-- 商品idを取得してアクションにする？ --}}
                    <td><a class="btn btn-primary" href="#">商品詳細</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- ページネーションリンク --}}
<div class="d-flex justify-content-center my-auto">
    {{ $items->links() }}
</div>
{{-- モックアップの記述 
<nav aria-label="...">
    <ul class="pagination pagination" style="justify-content: center;">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">1</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
</nav>
--}}
@endsection