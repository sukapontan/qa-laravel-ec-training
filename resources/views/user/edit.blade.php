@extends('app')

@section('title','オーガニック 珈琲屋さん(仮)')

@section('content')
<div class="container">
    <h1 class="text-center py-5">ユーザー情報修正</h1>
    {!! Form::open(['route' => 'signup.post']) !!}
    <form>
        <div class="form-group row">
        <label class="col-sm-2 text-sm-center offset-sm-1">氏名</label>

        {!! Form::label('last_name', '姓') !!}
        {!! Form::text('last_name', old('last_name'), ['class' => 'col-sm-1 text-sm-right col-2 col-form-label']) !!}
        <div class="form-group col-sm-6 offset-sm-1">
            {!! Form::label('first_name', '名') !!}
            {!! Form::text('first_name', old('first_name'), ['class' => 'form-control col-sm-9']) !!}
        </div>


        <label class="col-sm-1 text-sm-right col-2 col-form-label">姓</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" value="" placeholder="〇〇">
        </div>
        <label class="col-sm-1 text-sm-right col-2 col-form-label">名</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" value="" placeholder="XX">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 text-sm-center col-12 col-form-label offset-sm-1">住所</label>
        <label class="col-sm-1 text-right col-2 col-form-label">〒</label>
        <div class="col-sm-3 col-8">
          <input type="text" class="form-control" value="" placeholder="〇〇〇〇〇〇">
        </div>
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
    {!! Form::close() !!}

@endsection
