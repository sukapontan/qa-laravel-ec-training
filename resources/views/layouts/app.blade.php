<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" name="viewport"
            content="width=device-width, initial-scale=1.0" 
            http-equiv="X-UA-Compatible" content="ie=edge"
        >
        <title>laravel-ec</title>
        {{-- Bootstrap --}}
        <link rel="stylesheet" 
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
            crossorigin="anonymous"
        >
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/top_page.css') }}">
    </head>

    <body>
        @include('commons.header')
            <div class="container">
                @include('commons.error_messages')
                @yield('content')
            </div>
        @include('commons.footer')
    </body>
</html>
