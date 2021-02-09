@extends('app')

@section('title','オーガニック 珈琲屋さん(仮)')

@section('content')
<div class="container mt-5">
    <h1 class="text-center py-5">ユーザー情報</h1>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">ユーザーID</div>
        <div class="col-sm-4 col-5">{{Auth::user()->id}}</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">氏名</div>
        <div class="col-sm-4 col-5">{{Auth::user()->last_name}}{{Auth::user()->first_name}}</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">住所</div>
        <div class="col-sm-4 col-5">
        <p>〒{{Auth::user()->zipcode}}</p>
        <p>{{Auth::user()->prefecture}}{{Auth::user()->municipality}}{{Auth::user()->address}}{{Auth::user()->apartments}}</p>
        </div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">電話番号</div>
        <div class="col-sm-4 col-5">{{Auth::user()->phone_number}}</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">メールアドレス</div>
        <div class="col-sm-4 col-5">{{Auth::user()->email}}</div>
    </div>
    <div class="text-center col-auto px-3 my-3">
        <a href="/user/{id}/edit" class="btn btn-primary col-auto">修正/退会する</a>
    </div>
    </div>
@endsection
