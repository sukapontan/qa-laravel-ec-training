@extends('layouts.app')


@section('content')

<div>
    <div class="row mt-4">
        <div class="col-lg-12 text-center">
            <h1>商品検索画面</h1>
        </div>
    </div>

    <form method="get" action="{{ route('products.search') }}">
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品名</h2>
                <input type="text" class="form-control" name="product_name">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-primary ml-4" value="検索">
                </span>
            </div>
        </div>

        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2>商品カテゴリ</h2>
                <select class="ml-2" style="width:50%; text-align-last:center;" name="category_id">
                    <option value="">未選択</option>
                    @foreach($categories as $id => $category_name)
                    <option value="{{ $id }}">{{ $category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>

    <p>全{{ $products->count() }}件</p>
    <table border="1" class="table" style="border-collapse: collapse">
    <thead class="bg-warning">
        <tr>
            <th>商品名</th>
            <th>商品カテゴリ</th>
            <th>価格</th>
            <th></th>
        </tr>
    </thead>
    @foreach($products as $product)
    <tbody>
        <tr>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category->category_name }}</td>
            <td>{{ $product->price }}</td>
            <td name="name" value="商品詳細">
                <a href="{{ action('ProductsController@showDetail', $product->id) }}" class="btn btn-primary">商品詳細</a>
            </td>
        </tr>
    </tbody>
    @endforeach
    </table>
    <div class="row justify-content-center">
        {{ $products->appends(request()->input())->links() }}
    </div>

    @if( $products->count() <= 0 )
        <div class="row justify-content-center">
            <h2>検索結果がありませんでした</h2>
        </div>
    @endif
</div>

@endsection
