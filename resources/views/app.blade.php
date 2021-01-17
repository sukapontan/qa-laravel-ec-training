<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>@yield('title')</title>
</head>

<body>
    <header>
        @yield('header')
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>

</html>