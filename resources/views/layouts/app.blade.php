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

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        .contain {
            max-width: 1600px;
            width: 90%;
            margin: 0 auto;
        }

        nav .container {
            padding-right: 0 !important;
            padding-left: 0 !important;
            max-width: 1600px;
            width: 90%;
            margin: 0 auto;
        }




        @media screen and (max-width: 990px) {
            .navbar-brand img {
                height: 20px;
            }
        }

        @media screen and (max-width: 768px) {
            .navbar-brand img {
                height: 30px;
            }
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
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src={{"/images/smartlab-logo.svg"}} height="30px">
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
        @yield('footer')
    </div>

</body>

</html>