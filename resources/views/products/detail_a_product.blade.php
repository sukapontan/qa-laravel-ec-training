@extends('layouts.app')

@section('content')

@if($product === null)
    <div class="text-center">
        <h1 class="mt-5 col-lg-12">当商品が見つかりませんでした</h1>
        <h3 class="mt-5 col-lg-12">商品検索画面に戻り、やり直してください</h3>

        <a href="/products" class="btn btn-primary mt-5">商品検索機能へ</a>
    </div>
@else
    <div class="container">
        <!-- 商品情報・商品名 -->
        <div class="row text-center">
            <div class="col-lg-12 mt-4">
                <h1>商品情報</h1>
            </div>
            <div class="col-lg-12 mt-4">
                <h2>{{ $product->product_name }}</h2>
            </div>
        </div>
        <!-- カテゴリの名前・商品説明 -->
        <div class="row text-right">
            <div class="col-lg-12">
                <h2>商品カテゴリ：{{ $product->category->category_name }}</h2>
            </div>
        </div>
        <div class="row text-left">
            <div class="col-lg-12 mt-3">
                <h2>商品説明</h2>
            </div>
            <div class="col-lg-12 mt-3">
                <h2>{{ $product->description }}</h2>
            </div>
            <div class="col-lg-12 mt-3">
                <h2>価格：{{ $product->price }}円</h2>
            </div>
        </div>


        <div class="row mt-5 justify-content-center">
            <form action="{{route('add.product')}}" method="post">
            @csrf
                <div class="input-group justify-content-center">
                    <input type="hidden" name="users_id" value="{{ $user->id }}">
                    <input type="hidden" name="products_id" value="{{ $product->id }}">
                    <h2>購入個数</h2>
                    <input class="form-control col-2" min="1" max="5" type="number" name="product_quantity" required>
                    <h2>個</h2>
                    <button type="submit" class="btn btn-primary ml-4">カートへ</button>
                </div>
            </form>
        </div>
    </div>
@endif

@endsection
