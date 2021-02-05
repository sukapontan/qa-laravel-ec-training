@extends('app')

@section('title','カート内商品一覧')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="border border-dark mt-3">
                <p class="ml-1">お届け先</p>
                {{-- ログインユーザから住所と名前を取り出す --}}
                <p class="ml-3">〒○○○−○○○○&nbsp;富山県南砺市○○&nbsp;○−○−○</p>
                <div>
                    <p class="offset-sm-4">〇〇&nbsp;××様</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-11">
        <table class="table">
            {{-- タイトル行 --}}
            <tr>
                <th>No</th>
                <th>商品名</th>
                <th>商品カテゴリ</th>
                <th>値段</th>
                <th>個数</th>
                <th>小計</th>
            </tr>
            {{-- ここをforeachで表示させる --}}
            @foreach($cart_items as $cart_item)
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>{{ $session_product_id }}</td>
                <td>〇〇品</td>
                <td>〇〇円</td>
                <td><input type="number" min="0" max="99" value="{{ $session_product_quantity }}"><span>個</span></td>
                <td>〇〇円</td>
            </tr>
            @endforeach

            {{-- 合計金額の表示 --}}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計</td>
                <td>〇〇円</td>
            </tr>
            {{-- あとで削除ボタンも必要！セッションからその商品だけ削除する？ --}}
            {{-- 削除機能や金額の再計算機能は今後余力があったら実装する--}}
        </table>
    </div>

    <div class="row justify-content-center">
        {{-- 買い物を続けるボタンは個数だけセッションに上書きする？ --}}
        <a href="#" class="btn btn-info">買い物を続ける</a>
        <div class="col-4 align-self-center">
        </div>
        {{-- 注文確定ボタンでセッションが消えるようにする？ --}}
        <a href="#" class="btn btn-primary">注文を確定する</a>
    </div>
</div>
@endsection