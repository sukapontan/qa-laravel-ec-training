@extends('layouts.app')

@section('content')

@if (session('message'))
<div class="alert alert-safe text-center">
    {{ session('message') }}
</div>
@endif

@if (count($errors) > 0)
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif
　
<div class="product">
    <div class="row mt-4">
        <div class="col-lg-12 text-center">
            <h1>商品登録画面</h1>
        </div>
    </div>

    <form class="create" enctype="multipart/form-data" action="{{route('product.store')}}" accept-charset="UTF-8" method="post">
        @csrf
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品名</h2>
                <input type="text" name="product_name" class="form-control " value="{{old('product_name')}}">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2>商品カテゴリ-</h2>
                <select id="category_id" name="category_id" class="form-control">
                    @foreach(config('categories') as $id => $category)
                    <option name="category_id" value="{{$id}}">{{$category}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">販売単価</h2>
                <input type="text" name="price" class="form-control " value="{{old('price')}}">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品説明</h2>
                <input type="text" name="description" class="form-control " value="{{old('description')}}">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品状態</h2>
                <select id="product_status_id" name="product_status_id" class="form-control">
                    @foreach(config('productStatuses') as $id => $statuses)
                    <option name="product_status_id" value="{{$id}}">{{$statuses}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">仕入価格</h2>
                <input type="text" name="purchase_price" class="form-control " value="{{old('purchase_price')}}">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">仕入個数</h2>
                <input type="text" name="purchase_quntity" class="form-control " value="{{old('purchase_quntity')}}">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">仕入先会社</h2>
                <input type="text" name="purchase_company" class="form-control " value="{{old('purchase_company')}}">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">発送日</h2>
                <input type="date" name="order_date" class="form-control " value="{{old('order_date')}}">
            </div>
        </div>
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">納品日</h2>
                <input type="date" name="purchase_date" class="form-control " value="{{old('purchase_date')}}">
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
