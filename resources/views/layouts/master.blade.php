<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

        <!-- include csrf token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('scss/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('fonts/vendor/bootstrap-sass/bootstrap/glyphicons-halflings-regular.eot') }}">
        <link href="{{ asset('fonts/vendor/bootstrap-sass/bootstrap/glyphicons-halflings-regular.svg') }}">
        <link href="{{ asset('fonts/vendor/bootstrap-sass/bootstrap/glyphicons-halflings-regular.ttf') }}">
        <link href="{{ asset('fonts/vendor/bootstrap-sass/bootstrap/glyphicons-halflings-regular.woff') }}">
        <link href="{{ asset('fonts/vendor/bootstrap-sass/bootstrap/glyphicons-halflings-regular.woff2') }}">

    </head>
    <body>

        <div id="app" class="container">
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </div>

        <!-- include all js -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>