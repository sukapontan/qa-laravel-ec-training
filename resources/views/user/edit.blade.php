@extends('app')

@section('title','オーガニック 珈琲屋さん(仮)')

@section('content')
<div class="container">
	<h1 class="text-center py-5">ユーザー情報修正</h1>
    <form action="{{ route('user.update', [Auth::user()->id]) }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{Auth::user()->id}}">
    <div class="form-group row">
        <label class="col-sm-2 text-sm-center offset-sm-1">氏名</label>
        <label class="col-sm-1 text-sm-right col-2 col-form-label">姓</label>
        <input type="text" name="last_name" value="{{ Auth::user()->last_name }}" class="col-sm-2">
        <label class="col-sm-1 text-sm-right col-2 col-form-label">名</label>
        <input type="text" name="first_name" value="{{ Auth::user()->first_name }}" class="col-sm-2">
    </div>
    <div class="form-group row">
        <label class="col-sm-2 text-sm-center col-12 col-form-label offset-sm-1">住所</label>
        <label class="col-sm-1 text-right col-2 col-form-label">〒</label>
        <input type="text" name="zipcode" value="{{ Auth::user()->zipcode }}" class="col-sm-3 col-8">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">都道府県</label>
        <input type="text" name="prefecture" value="{{ Auth::user()->prefecture }}" class="col-sm-3 col-8">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">市町村区</label>
        <input type="text" name="municipality" value="{{ Auth::user()->municipality }}" class="col-sm-3 col-8">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">番地</label>
        <input type="text" name="address" value="{{ Auth::user()->address }}" class="col-sm-3 col-8">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">マンション部屋番号</label>
        <input type="text" name="apartments" value="{{ Auth::user()->apartments }}" class="col-sm-3 col-8">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-center">メールアドレス</label>
        <input type="text" name="email" value="{{ Auth::user()->email }}" class="col-sm-3 col-8">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-center">電話番号</label>
        <input type="text" name="phone_number" value="{{ Auth::user()->phone_number }}" class="col-sm-3 col-8">
    </div>
    <div class="d-flex justify-content-around py-5 col-sm-8 col-auto container">
        <input class="btn btn-primary" type="submit" value="修正">
    </form>

    <form action="{{ route('user.destroy', [Auth::user()->id]) }}" method="delete">
    @csrf
        <input class="btn btn-danger" type="submit" value="退会">
    </form>
    </div>
</div>
@endsection
