@extends('app')

@section('title','オーガニック 珈琲屋さん(仮)')

@section('content')
<div class="container">
    <h1 class="text-center py-5">ユーザー情報修正</h1>
    <form action="{{ route('/user/{id}/edit', [Auth::user()->id]) }}" method="put">
        @csrf
        <input type="hidden" name="id" value="{{Auth::user()->id}}">
        <div class="form-group row">
            <label class="col-sm-2 text-sm-center offset-sm-1">氏名</label>
            <label class="col-sm-1 text-sm-right col-2 col-form-label">姓</label>
            <input type="text" name="last_name" value="{{ $user->last_name }}" class="col-sm-2">
            <label class="col-sm-1 text-sm-right col-2 col-form-label">名</label>
            <input type="text" name="first_name" value="{{ $user->first_name }}" class="col-sm-2">
        </div>

        <div class="form-group row">
            <label class="col-sm-2 text-sm-center col-12 col-form-label offset-sm-1">住所</label>
            <label class="col-sm-1 text-right col-2 col-form-label">〒</label>
            <input type="text" name="zipcode" value="{{ $user->zipcode }}" class="col-sm-3 col-8">
        </div>


        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-right">都道府県</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" value="" placeholder="富山県">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-right">市町村区</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" value="" placeholder="南〇市">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-right">番地</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" value="" placeholder="〇〇　〇-〇-〇">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-right">マンション部屋番号</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" value=""　placeholder="あああ">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-center">メールアドレス</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" value="" placeholder="email@example.com">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label text-sm-center">電話番号</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" value="" placeholder="〇〇〇〇〇〇〇〇〇〇">
            </div>
        </div>

        <div class="d-flex justify-content-around py-5 col-sm-8 col-auto container">
            <a href="" class="btn btn-primary px-1 col-md-2 col-2">修正</a>
            <a href="" class="btn btn-danger px-1 col-md-2 col-2">退会</a>
        </div>
    </form>
</div>

@endsection
