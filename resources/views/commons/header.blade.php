<header class="navbar navbar-dark bg-warning">
    <a class="navbar-brand text-dark" href="">
    探求学園Laravel専攻
    </a>
    <ul class="list-inline navbar-brand-01 text-dark">
        @if (Auth::check())
            <li class="nav-item">
                {!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}
            </li>
            <li class="nav-item"><a href="" class="nav-link">マイページ</a></li>
        @else
            <li class="nav-item">
                {!! link_to_route('signup', '新規ユーザ登録', [], ['class' => 'nav-link']) !!}
            </li>
            <li class="nav-item"><a href="" class="nav-link">ログイン</a></li>
        @endif
    </ul>
</header>