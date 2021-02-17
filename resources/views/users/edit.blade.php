@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center py-5">ユーザー情報修正</h1>
    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}" class="col-sm-2"/>
    <div class="form-group row">
        <label class="col-sm-2 text-sm-center offset-sm-1">氏名</label>
        <label class="col-sm-1 text-sm-right col-2 col-form-label">姓</label>
        <input type="text" name="last_name" value="{{ $user->last_name }}" class="col-sm-2"/>
        <label class="col-sm-1 text-sm-right col-2 col-form-label">名</label>
        <input type="text" name="first_name" value="{{ $user->first_name }}" class="col-sm-2"/>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 text-sm-center col-12 col-form-label offset-sm-1">住所</label>
        <label class="col-sm-1 text-right col-2 col-form-label">〒</label>
        <input type="text" name="zipcode" value="{{ $user->zipcode }}" class="col-sm-3 col-8">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">都道府県</label>
        <input type="text" name="prefecture" value="{{ $user->prefecture }}" class="col-sm-4">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">市町村区</label>
        <input type="text" name="municipality" value="{{ $user->municipality }}" class="col-sm-4">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">番地</label>
        <input type="text" name="address" value="{{ $user->address }}" class="col-sm-4">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">マンション部屋番号</label>
        <input type="text" name="apartments" value="{{ $user->apartments }}" class="col-sm-4">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-center">メールアドレス</label>
        <input type="text" name="email" value="{{ $user->email }}" class="col-sm-6">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-center">電話番号</label>
        <input type="text" name="phone_number" value="{{ $user->phone_number }}" class="col-sm-6">
    </div>
    <div class="d-flex justify-content-around py-5 col-sm-8 col-auto container">
        <input type="submit" class="btn btn-primary" value="修正">
    </form>
    <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="post">
    @csrf
        <input type="submit" class="btn btn-danger " value="退会">
    </form>
    </div>
</div>

@endsection