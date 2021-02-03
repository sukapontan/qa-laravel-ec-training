@extends('app')

@section('title', '商品検索画面')

@section('content')

<div class="row mt-4">
    <div class="col-lg-12 text-center">
        <h1 class="h2">@yield('title')</h1>
    </div>
</div>

{{-- 商品検索フォーム --}}
<form action="{{ action('MProductController@index') }}" method="get" id="search">

    {{-- 商品名 --}}
    <div class="row">
        <div class="input-group mt-4 col-md-5 offset-2">
            <label class="mr-4">商品名</label>
            {{-- テキストフォーム --}}
            <input type="text" name="search_text" class="form-control" value="{{ $search_text }}">

            {{-- 検索ボタン --}}
            <span class="input-group-btn">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary ml-4" value="検索">
            </span>
        </div>
    </div>

    {{-- カテゴリの選択 --}}
    <div class="row">
        <div class="input-group mt-4 col-md-5 offset-2">
            <label>商品カテゴリ</label>
            <select type="number" name="select_category_id" class="ml-2" style=" width:50%; text-align-last:center;">
                {{-- 画面遷移前に選択したものを初期状態でselectedとする --}}
                <option value="">未選択</option>
                @foreach($categories as $category)
                @if($category->id == $select_category_id)
                <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endif
                @endforeach
            </select>
        </div>
    </div>
</form>

{{-- 検索結果の表示 --}}
<div class="container my-5">
    <div class="panel panel-default my-5">
        {{-- 検索結果から表示件数を取得して表示 --}}
        <label class="panel-heading">全 {{ $products->total() }} 件中 {{ $products->count() }} 件表示</label>
        <div class="panel-body">
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

                {{-- 各商品を$productインスタンスとして展開する --}}
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->mCategory->category_name }}</td>
                        <td>{{ $product->price }}</td>
                        <td><a class="btn btn-primary"
                                href="{{ action('MProductController@show', ['id' => $product->id]) }}">商品詳細</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- 検索結果が0件の場合 --}}
            @if ($products->total() == 0)
            <div class="py-5 text-center h4">
                <p>検索結果がありませんでした…</p>
            </div>
            @endif
        </div>
    </div>

    {{-- ページネーションリンク --}}
    <div class="d-flex justify-content-center my-auto">
        {{ $products->links() }}
    </div>
</div>

@endsection