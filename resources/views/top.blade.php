@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Top画面（ログイン前）</title>
    </head>

    <body>
        <div class="container">
            <h1 class="text-center py-5">探求学園Laravel専攻　ECサイト</h1>
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
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>

    </html>
@endsection
