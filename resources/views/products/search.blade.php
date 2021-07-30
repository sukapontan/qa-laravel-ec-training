@extends('layouts.app')

@section('content')

    <div class="row mt-4">
        <div class="col-lg-12 text-center">
            <h1>商品検索画面</h1>
        </div>
    </div>

    <form action="{{ route('product.search') }}">
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品名</h2>
                <input type="text" name="search" value="{{ old('search') }}" required class="form-control ">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-primary ml-4" value="検索">
                </span>
            </div>
        </div>

        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2>商品カテゴリ</h2>
                <select class="ml-2" style=" width:50%; text-align-last:center;">
                    <option>未選択</option>
                    <option>食料品</option>
                    <option>家電</option>
                    <option>おもちゃ</option>
                    <option>化粧品</option>
                </select>
            </div>
        </div>
    </form>

    <div class="container mt-4">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $products->total() }}件</div>
            <div class="panel-body">
            </div>
            <table border="1" class="table" style="border-collapse: collapse">
                <thead class="bg-warning">
                    <tr>
                        <th>商品名</th>
                        <th>商品化カテゴリ</th>
                        <th>価格</th>
                        <th>詳細</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->categories->category_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td type="submit" name="name" value="商品詳細" class="btn btn-primary">
                                商品詳細
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    {{ $products->links() }}
@endsection
