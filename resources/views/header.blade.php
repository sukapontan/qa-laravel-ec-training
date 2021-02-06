<header class="mb-5">
    <nav class="navbar navbar-expand-sm navbar-dark bg-warning">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-dark" href="/">{{ config('app.name', 'サイトロゴ(仮)') }}</a>
        {{-- 右寄せメニュー --}}

        <div class="collapse navbar-collapse flex-column" id="nav-bar">
            {{-- ログインしている場合 --}}
            @auth
            <div class="site-description offset-10 pt-1">
                {{Auth::user()->last_name}}{{Auth::user()->first_name}}さん
            </div>
            {{-- ここから動作確認未実施 --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">商品検索</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">カート</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">注文履歴</a>
                </li>
                <li class="nav-item">
                    {!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link text-dark']) !!}
                </li>
            </ul>
            @endauth

            {{-- ログインしていない場合（動作確認済み） --}}
            @guest
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    {!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link text-dark']) !!}
                </li>
                <li class="nav-item">
                    {!! link_to_route('signup', '新規登録', [], ['class' => 'nav-link text-dark']) !!}
                </li>
            @endguest
            </ul>
        </div>
    </nav>
</header>