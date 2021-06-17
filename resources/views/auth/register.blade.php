<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>ユーザ登録画面</title>

    </head>
    <body>

        <header class="navbar navbar-dark bg-warning">
            <a class="navbar-brand text-dark" style="font-size:x-large;" href="#">
                探求学園Laravel専攻
            </a>
            <ul class="list-inline navbar-brand text-dark">
                <li class="list-inline-item"><a class="nav-link" href="#">ログイン</a></li>
                <li class="list-inline-item"><a class="nav-link" href="#">新規登録</a></li>
            </ul>
        </header>

        <div class="container">
            
            <div class="text-center mt-3">
                <h3>お客様登録情報</h3>
            </div>

                
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    氏名
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-12 form-inline">
                            <label class="col-sm-1">姓</label>
                            <input type="text" class="form-control col-sm-5" name="lastname">

                            <label class="col-sm-1">名</label>
                            <input type="text" class="form-control col-sm-5" name="firstname">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-7">
                    郵便番号
                    <div class="row">
                        <div class="form-group col-sm-6 form-inline">
                            <input type="text" class="form-control offset-sm-1 col-sm-12" name="lastname">
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

                        <div class="form-group col-sm-12">
                            <label class="ml-4">マンション名・部屋番号</label>
                            <input type="text" class="form-control offset-sm-3 col-sm-9">
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-sm-7">
                    メールアドレス
                    <div class="row">
                        <div class="form-group col-sm-12 form-inline">
                            <input type="text" class="form-control offset-sm-1 col-sm-11" name="lastname">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-7">
                    電話番号
                    <div class="row">
                        <div class="form-group col-sm-12 form-inline">
                            <input type="text" class="form-control offset-sm-1 col-sm-11" name="lastname">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-7">
                    パスワード
                    <div class="row">
                        <div class="form-group col-sm-12 form-inline">
                            <input type="text" class="form-control offset-sm-1 col-sm-9" name="lastname">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-7">
                    パスワード再入力
                    <div class="row">
                        <div class="form-group col-sm-12 form-inline">
                            <input type="text" class="form-control offset-sm-1 col-sm-9" name="lastname">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <p><a href="#" class="btn btn-primary mt-3">登録</a></p>
            </div>

            <div class="text-center">
                <a href="#">ログインはこちらから</a>
            </div>
                
        </div>

        <footer class="mt-5">
            <nav class="navbar navbar-dark bg-warning">
                <div class="navbar-brand text-dark" style="font-size:x-large;">探求学園Laravel専攻</div>
                <div class="navbar-brand text-dark" style="font-size: medium;">© 2020 QuestAcademia, All rights reserved.</div>
            </nav>
        </footer>

        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>