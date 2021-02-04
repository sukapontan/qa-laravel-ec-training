@extends('app')

@section('title','カート内商品一覧')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="border border-dark mt-3">
                <p class="ml-1">お届け先</p>

                <p class="ml-3">〒○○○−○○○○&nbsp;富山県南砺市○○&nbsp;○−○−○</p>

                <div>
                    <p class="offset-sm-4">〇〇&nbsp;××様</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-11">
        <table class="table">
            <tr>
                <th>No</th>
                <th>商品名</th>
                <th>商品カテゴリ</th>
                <th>値段</th>
                <th>個数</th>
                <th>小計</th>
            </tr>
            {{-- ここをforeachで表示させる --}}
            <tr>
                <td>No.〇〇</td>
                <td>商品〇〇</td>
                <td>〇〇品</td>
                <td>〇〇円</td>
                <td><input type="number" min="0" max="5"><span>個</span></td>
                <td>〇〇円</td>
            </tr>

            {{-- 合計金額の表示 --}}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計</td>
                <td>9000円</td>
            </tr>
            {{-- ※あとで削除ボタンも必要！ --}}
        </table>
    </div>

    <div class="row justify-content-center">
        <a href="#" class="btn btn-info">買い物を続ける</a>
        <div class="col-4 align-self-center">
        </div>
        <a href="#" class="btn btn-primary">注文を確定する</a>
    </div>
</div>
@endsection