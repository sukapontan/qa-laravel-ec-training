@extends('app')

@section('content')
<div class="container">
    <div class="text-center mt-3">
        <h3>ログイン画面</h3>
    </div>
    {!! Form::open(['route' => 'login.post']) !!}
    <div class="row justify-content-center">
        <div class="col-sm-8">
            メールアドレス
            <div class="row">
                <div class="form-group col-sm-12">
                    {!! Form::email('email', old('email'), ['class' => 'form-control col-sm-10 offset-sm-1']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            パスワード
            <div class="row">
                <div class="form-group col-sm-12">
                    {!! Form::password('password', ['class' => 'form-control col-sm-10 offset-sm-1']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="text-center col-sm-12">
        {!! Form::submit('ログイン', ['class' => 'btn btn-primary mt-3']) !!}
    </div>
    <div class="text-center col-sm-12 mt-3">
        {!! link_to_route('signup', 'まだ登録がお済みでないかたはこちら') !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
