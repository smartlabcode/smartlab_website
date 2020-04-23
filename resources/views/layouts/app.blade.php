<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Smartlab') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:300,700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/font.min.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.min.css') }}" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/images/icons/fav.png">

    <!-- Wrote some style and move it to app.css later on -->

</head>
<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885FA;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    html {
        overflow-x: hidden;
    }

    * {
        box-sizing: border-box;
        line-height: 1.2 !important;
    }

    body {
        margin: 0 auto;
        overflow-x: hidden;
        background-color: white !important;
        overflow-y: hidden !important;
    }

    .contain {
        max-width: 1440px;
        width: 90%;
        margin: 0 auto;
    }

    .bold {
        font-weight: bold;
    }

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 2.5em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 1.8em;
        color: var(--h2-color) !important;
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4em;
        font-weight: 300;
        color: var(--h1-color) !important;
    }
</style>

<body>

    <!-- Import menu for including it later -->
    @include('layouts.menu')

    @include('layouts.footer')
    <!-- Main application layout -->
    <div id="app">
        <!-- Navigation -->
        <nav class="contain">
            <!-- Include menu-->
            @yield('menu')
        </nav>
        <!-- Content container -->
        <main>
            <!-- Include content -->
            @yield('content')
        </main>

        <!-- Generate footer only if page is not asking for authorization  -->

        @php

        // admin routes
        $adminRoutes = [
        'dashboard',
        'admins',
        'admins/*',
        'subscribers',
        'careers',
        'blogs',
        'blogs/*',
        'logs',
        'assets',
        'translations',
        ];

        $adminRoute = false;

        foreach ($adminRoutes as $route) {
        if(Request::is($route)) {
        $adminRoute = true;
        break;
        }
        }

        @endphp

        @if(!$adminRoute)
        @yield('footer')
        @endif

        {{-- @auth--}}
        {{-- @elseauth--}}
        {{-- @yield('footer')--}}
        {{-- @endauth--}}

    </div>
    <script src="{{ asset('/js/lottie.js') }}"> </script>
    <script src="{{ asset('/js/app.js') }}"></script>

</body>

</html>