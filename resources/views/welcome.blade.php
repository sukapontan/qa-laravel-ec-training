@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center py-5">探求学園Laravel専攻 ECサイト</h1>
        <div class="row">
            <div class="col-xs-12 col-md-6 text-center mt-5">
                <h5>まだアカウントを<br>お持ちでない方はこちら
                    <div class="col-xs-12 col-md-12 text-center py-3">
                        <button type="button" onclick="location.href=#" 
                            class="btn btn-primary btn-md">新規登録
                        </button>
                    </div>
                </h5>
            </div>
            <div class="col-xs-12 col-md-6 text-center mt-5">
                <h5>すでにアカウントを<br>お持ちの方はこちら
                    <div class="col-xs-12 col-md-12 text-center py-3">
                        <button type="button" onclick="location.href=#" 
                            class="btn btn-primary btn-md">ログイン
                        </button>
                    </div>
                </h5>
            </div>
        </div>
    </div>
@endsection