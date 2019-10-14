<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Description" content="Smartlab is a team of creative professionals and designers dedicated to graphics, websites and eLearning. Let's turn your ideas into a high-quality learning experience!">
    <meta name=”robots” content="i
    ndex, follow">

    <title>{{config('app_name', 'Smartlab')}} @yield('title')</title>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://smartlab.ba/",
            "logo": "https://smartlab.ba/images/smartlab-logo.svg",
            "name": "Smartlab Sarajevo",
            "email": "mailto:hello@smartlab.ba",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+387-33-956-222",
                "contactType": "sales"
            },
            "address": {
                "streetAddress": "Kolodvorska 5",
                "addressLocality": "Sarajevo",
                "postalCode": 71000,
                "addressCountry": "BA"
            }
        }
    </script>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:300,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://linkedin.com">

    <!-- Styles -->
    <link href="{{ asset('css/footer.min.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loader.min.css') }}" rel="stylesheet">
    @yield('css')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/images/icons/fav.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114227726-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-114227726-1');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1910416172604442');
        fbq('track', 'PageView');
    </script>
    <script type="text/javascript">
        _linkedin_partner_id = "1480233";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function() {
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";
            b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })();
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1480233&fmt=gif(43 B)
https://px.ads.linkedin.com/collect/?pid=1480233&fmt=gif
" />
    </noscript>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=1910416172604442&ev=PageView
&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
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
            color: var(--h1-color) !important;
        }

        .p-font {
            font-family: "Source Sans Pro", sans-serif !important;
            font-size: 1.4em;
            font-weight: 300;
            color: var(--h1-color) !important;
        }
    </style>
</head>


<body>

    <!-- Import menu for including it later -->
    @include('layouts.menu')

    @include('layouts.footer')
    <!-- Main application layout -->
    <div id="app" style="position:relative;">
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
        'translations/*'
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
        @else
        <link rel="stylesheet" href="{{ asset('/css/adminRoute.css') }}">

        @endif

        {{-- @auth--}}
        {{-- @elseauth--}}
        {{-- @yield('footer')--}}
        {{-- @endauth--}}

    </div>
    <script src="{{ asset('/js/lottie.js') }}"> </script>
    <script src="{{ asset('/js/menu.min.js') }}"></script>
    <script src="{{ asset('/js/language.min.js') }}"></script>
    @yield('js')
</body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v4.0'
        });
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="1415224878505764" theme_color="#437efa" greeting_dialog_display='hide'>
</div>

</html>