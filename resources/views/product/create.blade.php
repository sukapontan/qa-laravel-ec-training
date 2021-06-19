@extends('layouts.app')

@section('content')

@if (session('message'))
<div class="alert alert-danger text-center">
    {{ session('message') }}
</div>
@endif
　
<div class="product">
    <div class="row mt-4">
        <div class="col-lg-12 text-center">
            <h1>商品登録画面</h1>
        </div>
    </div>

    <form class="search" enctype="multipart/form-data" action="{{route('product.index')}}" accept-charset="UTF-8" method="get">
        @csrf
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品名</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2>商品カテゴリ-</h2>
                <select id="category_id" name="category_id" class="form-control">

                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">販売単価</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品説明</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品状態</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">仕入価格</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">仕入個数</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">仕入先会社</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">発送日</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">納品日</h2>
                <input type="text" name="product_name" class="form-control ">
            </div>
        </div>

        <div class="text-center">
            <input type="submit" name="commit" value="投稿する" class="btn btn-primary w-25" data-disable-with="登録する" />
        </div>
    </form>

    <div class="container mt-4">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">
            </div>

        </div>
    </div> 　
</div>
@endsection