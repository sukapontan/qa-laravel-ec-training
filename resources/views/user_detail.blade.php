@extends('app')

@section('title','オーガニック 珈琲屋さん(仮)')

@section('content')

<div class="container mt-5">
    <h1 class="text-center py-5">ユーザー情報</h1>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">ユーザーID</div>
        <div class="col-sm-4 col-5">User</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">氏名</div>
        <div class="col-sm-4 col-5">〇〇 XX</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">住所</div>
        <div class="col-sm-4 col-5">
        <p>〒〇〇〇-〇〇〇〇</p>
        <p>富山県南〇〇-〇〇〇〇</p>
        </div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">電話番号</div>
        <div class="col-sm-4 col-5">〇〇〇-〇〇〇〇-〇〇〇〇</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">メールアドレス</div>
        <div class="col-sm-4 col-5">User@example.com</div>
    </div>
    <div class="text-center col-auto px-3 my-3">
        <a href="" class="btn btn-primary col-auto">修正/退会する</a>
    </div>
    </div>

@endsection
