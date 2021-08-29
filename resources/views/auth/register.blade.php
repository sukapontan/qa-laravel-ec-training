@extends('layouts.app')

@section('content')

<div class="container">

    <div class="text-center mt-3">
        <h3>お客様登録情報</h3>
    </div>

    <form class="register_user" enctype="multipart/form-data" action="{{ route('register') }}" accept-charset="UTF-8" method="post">
        @csrf
        @method('POST')
        <div class="row justify-content-center">
            <div class="col-sm-7">
                氏名
                <div class="row justify-content-center">
                    <div class="form-group col-sm-12 form-inline">
                        <label class="col-sm-1">姓</label>
                        <input type="text" class="form-control col-sm-5" value="{{ old('last_name') }}" name="last_name">

                        <label class="col-sm-1">名</label>
                        <input type="text" class="form-control col-sm-5" value="{{ old('first_name') }}" name="first_name">
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-7">
                郵便番号
                <div class="row">
                    <div class="form-group col-sm-6 form-inline">
                        <input type="text" class="form-control offset-sm-1 col-sm-12" value="{{ old('zipcode') }}" name="zipcode">
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
                        <input type="text" class="form-control col-sm-9" value="{{ old('prefecture') }}" name="prefecture">
                    </div>

                    <div class="form-group col-sm-12 form-inline">
                        <label class="col-sm-3">市町村区</label>
                        <input type="text" class="form-control col-sm-9" value="{{ old('municipality') }}" name="municipality">
                    </div>

                    <div class="form-group col-sm-12 form-inline">
                        <label class="col-sm-3">番地</label>
                        <input type="text" class="form-control col-sm-9" value="{{ old('address') }}" name="address">
                    </div>

                    <div class="form-group col-sm-12">
                        <label class="ml-4">マンション名・部屋番号</label>
                        <input type="text" class="form-control offset-sm-3 col-sm-9" value="{{ old('apartments') }}" name="apartments">
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-sm-7">
                メールアドレス
                <div class="row">
                    <div class="form-group col-sm-12 form-inline">
                        <input type="e-mail" class="form-control offset-sm-1 col-sm-11" value="{{ old('email') }}" name="email">
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-7">
                電話番号
                <div class="row">
                    <div class="form-group col-sm-12 form-inline">
                        <input type="text" class="form-control offset-sm-1 col-sm-11" value="{{ old('phone_number') }}" name="phone_number">
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-7">
                会社名
                <div class="row">
                    <div class="form-group col-sm-12 form-inline">
                        <input type="text" class="form-control offset-sm-1 col-sm-11" value="{{ old('company_name') }}" name="company_name">
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

        <div class="text-center mt-3">
            <input type="submit" class="btn btn-primary px-1 col-md-1 col-1" value="登録"></input>
        </div>

    </form>

    <div class="text-center mt-4">
        <a href="{{ route('login') }}">ログインはこちらから</a>
    </div>

</div>
@endsection