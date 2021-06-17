@extends('layouts.app')

@section('content')
<div class="container">

    <div class="text-center mt-3">
        <h3>出品者登録情報</h3>
    </div>
    
    @include('users.user_error')
    <form method="POST" action="{{ route('exhibitor.post') }}">
    {{ csrf_field() }}
    <div class="row justify-content-center">
        <div class="col-sm-7">
            会社名
            <div class="row">
                <div class="form-group col-sm-12 form-inline">
                    <input type="text" class="form-control offset-sm-1 col-sm-11" name="company_name">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-7">
            氏名
            <div class="row justify-content-center">
                <div class="form-group col-sm-12 form-inline">
                    <label class="col-sm-1">姓</label>
                    <input type="text" class="form-control col-sm-5" name="last_name">

                    <label class="col-sm-1">名</label>
                    <input type="text" class="form-control col-sm-5" name="first_name">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-7">
            郵便番号
            <div class="row">
                <div class="form-group col-sm-6 form-inline">
                    <input type="text" class="form-control offset-sm-1 col-sm-12" name="zipcode">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-7">
            住所
            <div class="row justify-content-center">
                <div class="form-group col-sm-12 form-inline">
                    <label class="col-sm-3">都道府県</label>
                    <input type="text" class="form-control col-sm-9" name="prefecture">
                </div>

                <div class="form-group col-sm-12 form-inline">
                    <label class="col-sm-3">市町村区</label>
                    <input type="text" class="form-control col-sm-9" name="municipality">
                </div>

                <div class="form-group col-sm-12 form-inline">
                    <label class="col-sm-3">番地</label>
                    <input type="text" class="form-control col-sm-9" name="address">
                </div>

                <div class="form-group col-sm-12">
                    <label class="ml-4">マンション名・部屋番号</label>
                    <input type="text" class="form-control offset-sm-3 col-sm-9" name="apartments">
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-sm-7">
            メールアドレス
            <div class="row">
                <div class="form-group col-sm-12 form-inline">
                    <input type="text" class="form-control offset-sm-1 col-sm-11" name="email">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-7">
            電話番号
            <div class="row">
                <div class="form-group col-sm-12 form-inline">
                    <input type="text" class="form-control offset-sm-1 col-sm-11" name="phone_number">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-7">
            パスワード
            <div class="row">
                <div class="form-group col-sm-12 form-inline">
                    <input type="password" class="form-control offset-sm-1 col-sm-9" name="password">
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-7">
            パスワード再入力
            <div class="row">
                <div class="form-group col-sm-12 form-inline">
                    <input type="password" class="form-control offset-sm-1 col-sm-9" name="password_confirmation">
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <input class="btn btn-primary mt-3" type="submit" value="登録">
    </div>
    </form>

    <div class="text-center">
        <a href="#">ログインはこちらから</a>
    </div>

</div>
@endsection
