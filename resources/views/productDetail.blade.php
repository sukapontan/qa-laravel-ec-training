{{-- 商品詳細画面を定義 --}}
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
        <h3>{{ $item->product_name }}</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-right">
        <h3>商品カテゴリ：{{ '$item->category_name' }}</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-left">
        <h3>商品説明</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-left">
        <h3>{{ $item->description }}</h3>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-12 text-left">
        <h3>価格：{{ $item->price }}円</h3>
    </div>
</div>

{{-- 購入個数とカートに入れるフォーム --}}
<div class="row mt-5" style="justify-content:center">
    <form action="" method="post">
        @csrf
        <div class="input-group">
            <h3>購入個数</h3>
            <input class="form-control col-2" type="text">
            <h3>個</h3>
            <input type="submit" class="btn btn-primary ml-4" value="カートへ">
        </div>
    </form>
</div>
</div>
@endsection