@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="border border-dark mt-3">
                <p class="ml-1">お届け先</p>
                <p class="ml-3"><span>〒</span>aaaaa&nbsp;富山県南砺市○○&nbsp;○−○−○</p>
                <div>
                    <p class="offset-sm-4">〇〇&nbsp;××<span>様</span></p>
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        商品1
                    </td>
                    <td>
                        食品
                    </td>
                    <td>
                        1000円
                    </td>
                    <td value=""><input type="number" min="0" max="5"><span>個</span></td>
                    <td>5000円</td>
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