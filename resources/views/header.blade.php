{{-- headerを定義 --}}
<header class="mb-5">
    <nav class="navbar navbar-expand-sm navbar-dark bg-warning">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-dark" href="/">{{ config('app.name', 'サイトロゴ(仮)') }}</a>

        {{-- 右寄せメニュー --}}
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                {{-- ログインしている場合 --}}
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">商品検索</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">カート</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">注文履歴</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ログアウト</a>
                </li>
                @endauth

                {{-- ログインしていない場合 --}}
                @guest
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">新規登録</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>