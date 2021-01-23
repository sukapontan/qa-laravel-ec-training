@extends('app')

@section('title','オーガニック 珈琲屋さん(仮)')

@section('content')

<div class="container">
    <div class="text-center mt-3">
        <h3>お客様情報登録</h3>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-sm-9">
            {!! Form::open(['route' => 'signup.post']) !!}
            氏名
            <div class="row justify-content-center">
                <div class="form-group col-sm-11 form-inline">
                    {!! Form::label('last_name', '姓') !!}
                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control col-sm-5']) !!}
                    <div class="form-group col-sm-6">
                        {!! Form::label('first_name', '名') !!}
                        {!! Form::text('first_name', old('first_name'), ['class' => 'form-control col-sm-11']) !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    郵便番号
                    <div class="row">
                        <div class="form-group col-sm-8">
                            {!! Form::text('zipcode', old('zipcode'), ['class' => 'form-control col-sm-5 offset-sm-1']) !!}
                        </div>
                    </div>
                </div>
            </div>

                住所
                <div class="row">
                    <div class="form-group form-inline ">
                        <label class="col-sm-12">
                            {!! Form::label('prefecture', '都道府県') !!}
                            {!! Form::text('prefecture', old('prefecture'), ['class' => 'form-control']) !!}
                        </label>
                    </div>
                    <div class="form-group form-inline">
                        <label class="col-sm-12">
                            {!! Form::label('municipality', '市町村区') !!}
                            {!! Form::text('municipality', old('municipality'), ['class' => 'form-control']) !!}
                        </label>
                    </div>
                    <div class="form-group form-inline">
                        <label class="col-sm-12">
                            {!! Form::label('address', '番地') !!}
                            {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
                        </label>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-sm-12">
                            {!! Form::label('apartments', 'マンション・部屋番号') !!}
                            {!! Form::text('apartments', old('apartments'), ['class' => 'form-control']) !!}
                        </label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        メールアドレス
                        <div class="row">
                            <div class="form-group col-sm-8">
                                {!! Form::email('email', old('email'), ['class' => 'form-control col-sm-12 offset-sm-1']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        電話番号
                        <div class="row">
                            <div class="form-group col-sm-8">
                                {!! Form::text('phone_number', old('phone_number'), ['class' => 'form-control col-sm-12 offset-sm-1']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        パスワード
                        <div class="row">
                            <div class="form-group col-sm-8">
                                {!! Form::password('password', ['class' => 'form-control col-sm-10 offset-sm-1']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        パスワード再入力
                        <div class="row">
                            <div class="form-group col-sm-8">
                                {!! Form::password('password_confirmation', ['class' => 'form-control col-sm-10 offset-sm-1']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="text-center col-sm-12">
                        {!! Form::submit('登録', ['class' => 'btn btn-primary mt-3']) !!}
                    </div>
                    <div class="text-center col-sm-12">
                        <a href="#">ログインはこちらから</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
