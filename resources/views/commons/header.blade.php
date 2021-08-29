<header class="navbar navbar-dark bg-warning">
    <a class="navbar-brand text-dark" href="/">
        探求学園Laravel専攻
    </a>
    <ul class="list-inline navbar-brand-01 text-dark">
        @if (Auth::check())

        <p class="text-center offset-9 pt-1">{{-- {{ Auth::user()->last_name }}さん --}}</p>
        <li class="nav-item list-inline-item">
            <a class="nav-link" href="{{ route('products.show') }}">商品検索</a>
        </li>
        <li class="nav-item list-inline-item">
            <a class="nav-link" href="#">カート</a>
        </li>
        <li class="nav-item list-inline-item">
            <a class="nav-link" href="{{ route('orders.all', ['id' => 'all']) }}">注文履歴</a>
        </li>
        <li class="nav-item list-inline-item">
            <a class="nav-link" href="{{ route('users.show', ['id' => \Auth::id()]) }}">ユーザー情報</a>
        </li>
        <li class="nav-item list-inline-item">
            <a class="nav-link" href={{ route('logout') }} onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
        </li>

        <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
            @csrf</form>

        @else
        <ul class="list-inline navbar-brand text-dark">
            <li class="list-inline-item"><a class="nav-link" href="{{ route('login') }}">ログイン</a></li>
            <li class="list-inline-item"><a class="nav-link" href="{{ route('register') }}">新規登録</a></li>
        </ul>

        @endif
    </ul>
</header>