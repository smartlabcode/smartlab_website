<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Smartlab') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/images/icons/fav.png">

    <!-- Wrote some style and move it to app.css later on -->
    <style>

        #app {
            width: 90%;
            margin: 0 auto;
        }

    </style>

</head>
<body>

    <!-- Import menu for including it later -->
    @include('layouts.menu')

    <!-- Main application layout -->
    <div id="app">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Smartlab') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">

                        <!-- Include menu-->
                        @yield('menu')

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content container -->
        <main>

            <!-- Include content -->
            @yield('content')
        </main>
    </div>

</body>
</html>
