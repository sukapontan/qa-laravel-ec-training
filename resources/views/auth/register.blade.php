@extends('layouts.app')

@section('content')

<div class="container">
    <div class="text-center mt-3">
        <h3>お客様登録情報</h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-7">
            氏名
                <div class="form-group col-sm-12 form-inline">
                    <label class="col-sm-1">姓</label>
                        <input type="text" class="form-control col-sm-5" name="lastname">
                    <label class="col-sm-1">名</label>
                        <input type="text" class="form-control col-sm-5" name="firstname">
                </div>
            郵便番号
                <div class="row">
                    <div class="form-group col-sm-6 form-inline">
                        <input type="text" class="form-control offset-sm-1 col-sm-12" name="lastname">
                    </div>
                </div>
            住所
            <div class="row justify-content-center">
                <div class="form-group col-sm-12 form-inline">
                    <label class="col-sm-3">都道府県</label>
                        <input type="text" class="form-control col-sm-9">
                </div>
                <div class="form-group col-sm-12 form-inline">
                    <label class="col-sm-3">市町村区</label>
                        <input type="text" class="form-control col-sm-9">
                </div>
                <div class="form-group col-sm-12 form-inline">
                    <label class="col-sm-3">番地</label>
                        <input type="text" class="form-control col-sm-9">
                </div>
                <div class="form-group col-sm-12 form-inline">
                    <label class="ml-4">マンション・部屋番号</label>
                        <input type="text" class="form-control offset-sm-3 col-sm-9">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12 form-inline">
                    メールアドレス
                        <input type="text" class="form-control offset-sm-1 col-sm-11" name="lastname">
                    電話番号
                        <input type="text" class="form-control offset-sm-1 col-sm-11" name="lastname">
                    パスワード
                        <input type="text" class="form-control offset-sm-1 col-sm-9" name="lastname">
                    パスワード再入力
                        <input type="text" class="form-control offset-sm-1 col-sm-9" name="lastname">
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <p><a href="#" class="btn btn-primary mt-3">登録</a></p>
        <a href="#">ログインはこちらから</a>
    </div>
</div>

@endsection
