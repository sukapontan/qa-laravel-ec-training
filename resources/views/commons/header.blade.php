<header class="navbar navbar-dark bg-warning">
    <a class="navbar-brand text-dark" href="">
    探求学園Laravel専攻
    </a>
    @if(Auth::check())
            {{ Auth::user()->name }}
    @endif
    <ul class="list-inline navbar-brand-01 text-dark">
        @if (Auth::check())
        {{-- <li class="navbar bg-faded" style="flex-direction: column;">フクさん</li> --}}
        <li class="nav-item list-inline-item"><a href="" class="nav-link">商品検索</a></li>
        <li class="nav-item list-inline-item"><a href="" class="nav-link">カート</a></li>
        <li class="nav-item list-inline-item"><a href="" class="nav-link">注文履歴</a></li>
        <li class="nav-item list-inline-item"><a href="" class="nav-link">ユーザー情報</a></li>
        <li class="nav-item list-inline-item">
            {!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}
        </li>
        @else
            <li class="nav-item list-inline-item">
                {!! link_to_route('signup', '新規ユーザ登録', [], ['class' => 'nav-link']) !!}
            </li>
            <li class="nav-item list-inline-item"><a href="#" class="nav-link">ログイン</a></li>
        @endif
    </ul>
</header>