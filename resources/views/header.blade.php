<header class="mb-5">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(210, 155, 60)">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-dark" href="/">{{ config('app.name', 'サイトロゴ(仮)') }}</a>

        {{-- 右寄せメニュー --}}
        <div class="collapse navbar-collapse flex-column" id="nav-bar">
            {{-- ログインしている場合 --}}
            @auth
            <div class="site-description ml-auto">
                {{Auth::user()->last_name}}{{Auth::user()->first_name}}さん
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/products">商品検索</a>
                </li>
                {{-- ここから動作確認未実施 --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/cart">カート一覧</a>
                </li>
                {{-- 注文履歴は未実装 --}}
                {{-- <li class="nav-item">
                    <a class="nav-link text-dark" href="#">注文履歴</a>
                </li>
                {{-- ここまで動作確認未実施 --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/user/{{Auth::id()}}">ユーザ情報</a>
                </li>
                <li class="nav-item">
                    {!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link text-dark']) !!}
                </li>
            </ul>
            @endauth

            {{-- ログインしていない場合 --}}
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
