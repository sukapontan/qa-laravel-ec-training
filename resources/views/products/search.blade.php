@extends('layouts.app')

@section('content')

<div class="row mt-4">
    <div class="col-lg-12 text-center">
        <h1>商品検索画面</h1>
    </div>
</div>

<form method="GET" action="{{ route('searchproduct')}}">
    <div class="row">
        <div class="input-group mt-4 col-md-7 offset-2">
            <h2 class="mr-4">商品名</h2>
            <input type="text" name="searchWord" class="form-control " >
            <span class="input-group-btn">
                <input type="submit" class="btn btn-primary ml-4" value="検索">
            </span>
        </div>
    </div>
    
    <div class="row">
        <div class="input-group mt-4 col-md-7 offset-2">
            <h2 >商品カテゴリ</h2>
            <select class="ml-2" name="categoryId" style=" width:50%; text-align-last:center; ">
                <option value="">未選択</option>
                @foreach($categories as $id => $category_name)
                    <option value="{{ $id }}">
                    {{ $category_name }}
                @endforeach
            </select>
        </div>
    </div>
</form>

<!--検索結果テーブル 検索された時のみ表示する-->
@if (!empty($products))
    <div class="productTable">
        <p>全{{ $products->count() }}件</p>
        <table class="table table-hover">
            <thead style="background-color: #ffd900">
                <tr>
                    <th style="width:50%">商品名</th>
                    <th>商品カテゴリ</th>
                    <th>価格</th>
                    <th></th>
                </tr>
            </thead> 
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->categories->category_name }}</td>
                    <td>{{ $product->price }}円</td>
                    <td><a href="#" class="btn btn-primary btn-sm">商品詳細</a></td>
                </tr>
            @endforeach   
        </table>
    </div>
@endif

<!-- ページネーション -->
<div class="d-flex justify-content-center">
    <!-- appendsでカテゴリを選択したまま遷移 -->
    {{ $products->appends(request()->input())->links() }}
</div>

<!-- ページネーション -->
<!-- <div class="pagination mt-4" style="justify-content: center;">
    {{ $products->links() }}
</div> -->

@endsection