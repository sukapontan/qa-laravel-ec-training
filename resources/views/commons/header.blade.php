<header class="navbar navbar-dark bg-warning">
    <a class="navbar-brand text-dark" href="/">
    探求学園Laravel専攻
    </a>
    <ul class="list-inline navbar-brand-01 text-dark">
        @if (Auth::check())
            <p class="text-center offset-9 pt-1">{{ Auth::user()->last_name}}さん</p>
            <li class="nav-item list-inline-item"><a href="" class="nav-link">商品検索</a></li>
            <li class="nav-item list-inline-item"><a href="" class="nav-link">カート</a></li>
            <li class="nav-item list-inline-item"><a href="" class="nav-link">注文履歴</a></li>
            <li class="nav-item list-inline-item"><a href="" class="nav-link">ユーザー情報</a></li>
            <li class="nav-item list-inline-item">
                {!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}
            </li>
        @else
            <li class="nav-item list-inline-item"><a href="login" class="nav-link">ログイン</a></li>
            <li class="nav-item list-inline-item">
                {!! link_to_route('signup', '新規登録', [], ['class' => 'nav-link']) !!}
            </li>
        @endif
    </ul>
</header>