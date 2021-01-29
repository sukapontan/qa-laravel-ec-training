@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="text-center my-5">
            <h3>お客様登録情報</h3>
        </div>
        {!! Form::open(['route' => 'signup.post']) !!}
        <div class="row justify-content-center">
            <div class="col-sm-7">
                氏名
                <div class="row justify-content-center">
                    <div class="form-group col-sm-12 form-inline">
                        {!! Form::label('last_name', '姓') !!}
                        {!! Form::text('last_name', old('last_name'), ['class' => 'form-control col-sm-5']) !!}
                        <div class="form-group col-sm-6">
                            {!! Form::label('first_name', '名') !!}
                            {!! Form::text('first_name', old('first_name'), ['class' => 'form-control col-sm-11']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-7">
                郵便番号
                <div class="row">
                    <div class="form-group col-sm-6 form-inline">
                        {!! Form::text('zipcode', old('zipcode'), array('onkeyup'=>"AjaxZip3.zip2addr(this,'','prefecture','municipality','address')"), ['class' => 'form-control col-sm-12', "placeholder"=>"000-1111"]) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-7">
                住所
                <div class="row justify-content-center">
                    <div class="form-group col-sm-12 form-inline">
                        {!! Form::label('prefecture', '都道府県') !!}
                        {!! Form::text('prefecture', old('prefecture'), ['class' => 'form-control col-sm-10']) !!}
                    </div>
                    <div class="form-group col-sm-12 form-inline">
                        {!! Form::label('municipality', '市区町村') !!}
                        {!! Form::text('municipality', old('municipality'), ['class' => 'form-control col-sm-10']) !!}
                    </div>
                    <div class="form-group col-sm-11 form-inline">
                        {!! Form::label('address', '番地') !!}
                        {!! Form::text('address', old('address'), ['class' => 'form-control col-sm-11']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('apartments', 'マンション名・部屋番号') !!}
                        {!! Form::text('apartments', old('apartments'), ['class' => 'form-control col-sm-10 offset-sm-1']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-7">
                メールアドレス
                <div class="row">
                    <div class="form-group col-sm-12 form-inline">
                        {!! Form::text('email', old('email'), ['class' => 'form-control col-sm-10 offset-sm-1', "placeholder"=>"XXX@gmail.com"]) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-7">
                電話番号
                <div class="row">
                    <div class="form-group col-sm-12 form-inline">
                        {!! Form::text('phone_number', old('phone_number'), ['class' => 'form-control col-sm-10 offset-sm-1']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-7">
                パスワード
                <div class="row">
                    <div class="form-group col-sm-12 form-inline">
                        {!! Form::password('password', old('password'), ['class' => 'form-control col-sm-7 offset-sm-1']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-7">
                パスワード再入力
                <div class="row">
                    <div class="form-group col-sm-12 form-inline">
                        {!! Form::password('password_confirmation', old('password_confirmation'), ['class' => 'form-control col-sm-7 offset-sm-1']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-2">
            {!! Form::submit('登録', ['class' => 'btn btn-primary mt-3']) !!}
        </div>
        {!! Form::close() !!}
        <div class="text-center">
            <a href="#">ログインはこちらから</a>
        </div>
    </div>

@endsection
