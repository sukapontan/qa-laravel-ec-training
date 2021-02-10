@extends('app')

@section('title','オーガニック 珈琲屋さん(仮)')

@section('content')
<div class="container">
    <h1 class="text-center py-5">@yield('title')</h1>

    {{-- ログインしていない場合 --}}
    @guest
    <div class="row">
        <div class="col-xs-12 col-md-6 text-center mt-5">
            <h5>まだアカウントを<br>お持ちでない方はこちら</h5>
            <div class="col-xs-12 col-md-12 text-center mt-4">
                {!! link_to_route('signup', '新規登録', [], ['class' => 'btn btn-primary btn-md']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-md-6 text-center mt-5">
            <h5>すでにアカウントを<br>お持ちの方はこちら</h5>
            <div class="col-xs-12 col-md-12 text-center mt-4">
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-primary btn-md']) !!}
            </div>
        </div>
    </div>
    @endguest

    {{-- ログインしている場合 --}}
    @auth
    <div class="row">
        <div class="col-xs-12 col-md-6 text-center mt-5">
            <h5>まだアカウントを<br>お持ちでない方はこちら</h5>
            <div class="col-xs-12 col-md-12 text-center mt-4">
                <button type="button" class="btn btn-primary btn-md">新規登録</button>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 text-center mt-5">
            <h5>すでにアカウントを<br>お持ちの方はこちら</h5>
            <div class="col-xs-12 col-md-12 text-center mt-4">
                <button type="button" class="btn btn-primary btn-md">ログイン</button>
            </div>
        </div>
    </div>
    @endauth

</div>
@endsection
