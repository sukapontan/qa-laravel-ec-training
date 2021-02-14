@extends('app')

@section('title', '商品情報')

@section('content')

<div class="row mt-4">
    <div class="col-lg-12 text-center">
        <h1 class="h2">@yield('title')</h1>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-12 text-center">
        <h3>{{ $product->product_name }}</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-right">
        <h4>商品カテゴリ：{{ $product->mCategory->category_name }}</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-left">
        <h3>商品説明</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-left">
        <h4>{{ $product->description }}</h4>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-12 text-left">
        <h4>価格：{{ $product->price }}円</h4>
    </div>
</div>

{{-- 購入個数とカートに入れるフォーム --}}
<div class="row mt-5" style="justify-content:center">
    <form action="{{ action('CartController@addCart') }}" method="post">
        @csrf
        <div class="input-group">
            <p class="h4">購入個数</p>
            <input class="form-control col-3 mx-2" name="product_quantity" type="number" min="1" max="99" value="1">
            <p class="h4">個</p>
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="submit" class="btn btn-primary ml-4" value="カートに入れる">
        </div>
    </form>
</div>
@endsection