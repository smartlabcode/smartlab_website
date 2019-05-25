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
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CSource+Sans+Pro" rel="stylesheet" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/images/icons/fav.png">

    <!-- Wrote some style and move it to app.css later on -->
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

        #app {
            width: 90%;
            margin: 0 auto;
        }
    </style>

</head>

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

        @yield('footer')

{{--        @auth--}}
{{--        @elseauth--}}
{{--            @yield('footer')--}}
{{--        @endauth--}}

    </div>
</body>

</html>