{{-- headerを定義 --}}
@section('header')
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        {{-- サイトロゴ --}}
        <a class="navbar-brand" href="/">{{ config('app.name', 'サイトロゴ(仮)') }}</a>

        {{-- 右寄せメニュー --}}
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
                <a class="nav-link" href="#">ログイン</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">新規登録</a>
            </li>
            @endguest
        </ul>
    </nav>
</header>
@endsection