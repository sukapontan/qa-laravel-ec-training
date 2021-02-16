@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="border border-dark mt-3">
                <p class="ml-1">お届け先</p>
                <p class="ml-3">
                    <span>〒</span>
                    {{ $zip = substr($sessionUser->zipcode,0,3) . "-" . substr($sessionUser->zipcode,3) }}
                    &nbsp;
                    {{ $sessionUser->prefecture }}{{ $sessionUser->municipality }}
                    &nbsp;
                    {{ $sessionUser->address }}
                </p>
                <div>
                    <p class="offset-sm-4">
                        {{ $sessionUser->last_name }}
                        &nbsp;
                        {{ $sessionUser->first_name }}<span>様</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-11">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>商品名</th>
                    <th>商品カテゴリ</th>
                    <th>値段</th>
                    <th>個数</th>
                    <th>小計</th>
                    <th class="border-0"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartData as $key => $data)
                <tr>
                    <th>
                        {{ $key += 1 }}
                    </th>
                    <td>
                        {{ $data['product_name'] }}
                    </td>
                    <td>
                        {{ $data['category_name'] }}
                    </td>
                    <td>
                        {{ number_format($data['price']) }}円
                    </td>
                    <td>
                        {{ $data['session_quantity'] }}個
                    </td>
                    <td>
                        {{ number_format($data['session_quantity'] * $data['price']) }}円
                    </td>
                    <td class="border-0 align-middle">
                        <form action="{{ route('remove.product') }}", method="post">
                        @csrf
                            <input type="hidden" name="product_id" value="{{ $data['session_products_id'] }}">
                            <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                    </td>
                @endforeach
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>合計</td>
                    <td>
                        {{ $totalPrice }}円
                    </td>
                    <td class="border-0"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row justify-content-center">
        <a href="/products" class="btn btn-info">買い物を続ける</a>
        <div class="col-4 align-self-center"></div>
        <a href="#" class="btn btn-primary">注文を確定する</a>
    </div>
</div>

@endsection
