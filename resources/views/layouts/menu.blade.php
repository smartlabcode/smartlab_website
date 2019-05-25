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

    a:not([href]):not([tabindex]),
    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
        color: white;
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    nav .contain {
        margin-bottom: 0 !important;
    }

    .nav-list {
        list-style-type: none;
        padding-left: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        position: fixed;
        top: 0;
        width: 100%;
        /* left: 0; */
        right: 0;
        z-index: 1000;
    }

    .expandable {
        height: 0;
        position: absolute;
        transform: translateX(-12%);
        overflow-y: hidden;
        display: block;
        width: 400px;
        background-color: white;
        border-radius: 5px;
        transition: height 0.2s ease-in-out;
    }

    .expandable:hover {
        height: auto;
    }

    .nav-li:hover .expandable {
        height: auto;
    }


    .expandable a {
        padding: 20px !important;
        transition: background-color 0.2s ease-in-out;
        color: var(--h1-color) !important;

    }

    .expandable a:hover {
        background-color: var(--shadow-color);
    }

    .nav-li {

        cursor: pointer;
    }

    .nav-li a {
        z-index: 100;
        color: white;
        display: block;
        padding: 10px 20px 10px 40px;
        height: 100%;
        width: 100%;
        text-transform: uppercase;
        white-space: nowrap;
        position: relative;
        font-family: "Montserrat", sans-serif;
    }

    .nav-li-js>a::before {
        content: "";
        display: inline-block;
        position: absolute;
        right: 0;
        top: 5px;
        height: 1px;
        width: 0px;
        background-color: var(--h1-color) !important;
        transition: width 0.2s ease-in-out;
    }

    .nav-li>a::before {
        content: "";
        display: inline-block;
        position: absolute;
        right: 0;
        top: 5px;
        height: 1px;
        width: 0px;
        background-color: white;
        transition: width 0.2s ease-in-out;
    }

    .nav-li:hover a::before {
        width: 15px;
    }

    .nav-li a:hover {
        text-decoration: none;
    }



    .arrow:hover:before {
        transform: rotateX(-180deg) translate(-100%, -95%);
    }

    .arrow-js:hover:before {
        transform: rotateX(-180deg) translate(-100%, -170%);
        animation: arrow 0.2s ease-in-out forwards;
    }

    @keyframes arrow {
        0% {
            background-color: var(--h1-color);
        }

        50% {
            background-color: var(--h1-color);
        }

        100% {
            background-color: white;
        }
    }

    .nav-top {

        display: flex;
        justify-content: flex-end;
    }

    .nav-bot {

        display: flex;
        justify-content: flex-end;
        position: sticky;
        top: 0;
    }

    .arrow {
        position: relative;
    }

    .filler {
        position: absolute;
        width: 100%;
        height: 15px;
    }

    .arrow-js {
        position: relative;
    }

    .arrow-js::before {
        display: inline-block;
        position: absolute;
        content: "";
        background-color: #14213d;
        width: 15px;
        height: 15px;
        left: 100%;
        top: 50%;
        transform: translate(-100%, -75%);
        -webkit-clip-path: polygon(0 50%, 50% 100%, 100% 50%);
        clip-path: polygon(0 50%, 50% 100%, 100% 50%);
        transition: 0.2s transform ease-in-out;

    }

    .arrow::before {
        display: inline-block;
        position: absolute;
        content: "";
        background-color: white;
        width: 15px;
        height: 15px;
        left: 100%;
        top: 50%;
        transform: translate(-100%, -75%);
        -webkit-clip-path: polygon(0 50%, 50% 100%, 100% 50%);
        clip-path: polygon(0 50%, 50% 100%, 100% 50%);
        transition: 0.2s transform ease-in-out;

    }

    .join {
        display: flex;
        transform: translateX(-22%);
    }

    .join-left {
        flex-basis: 100%;
    }

    .join-right {
        flex-basis: 100%;
    }

    .padding-right-0 {
        padding-right: 0 !important;
    }

    .nav-logo {
        height: 30px;
    }

    .nav-button {
        display: none;
    }

    .nav-li-container {
        flex-basis: 100%;
        display: flex;
        justify-content: flex-end;
    }

    @media screen and (max-width: 768px) {
        .nav-bot {
            justify-content: space-between;
        }

        .height-js {
            height: 100vh !important;
        }

        .nav-li a {
            height: auto;
            color: var(--h1-color) !important;
        }

        .nav-li-container {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            position: absolute;
            top: 30px;
            width: 100vw;
            right: -2.5vw;
            background-color: white;
            height: 0;
            overflow: hidden;
        }

        .nav-li:hover .expandable {
            height: 250px;

        }

        .join-left,
        .join-right {
            flex-basis: auto;
        }

        .expandable:hover .expandable a {
            background-color: var(--shadow-color);
        }

        .expandable {
            position: relative;
            display: flex;
            flex-direction: column;
            height: 0;
            top: 0 !important;
            width: 100%;
            margin-left: 50px;
            transform: translateX(0%);
        }

        .nav-button {
            height: 30px;
            width: 30px;
            display: inline-block;
            position: relative;
        }

        .nav-button-inner {
            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--h1-color);
            position: absolute;
            top: 2.5px;
        }

        .nav-button-inner::before {
            content: "";
            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--h1-color);
            position: absolute;
            top: 10px;
        }

        .nav-button-inner::after {
            content: "";
            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--h1-color);
            position: absolute;
            top: 20px;
        }

        .arrow-js::before {
            left: 95% !important;
        }

        .nav-li>a::before {
            right: 5%;
        }
    }
</style>

@section('menu')

<!-- Available to all users -->
<!-- TODO some menu items are not visible on white background, language switch and phone numbers  needs to be restyled, problems with menu on tablet/mobile devices -->
<ul class="nav-list " id="nav-list">
    <div class="nav-top contain" id="nav-top">

        <p>Call: <span>+387 61 811 394</span> <span>+387 33 956 222</span></p>
        <form id="languageForm" action="/language" method="POST">
            <!-- Form for sending new language after user clicks on one of the select options - page is refreshed with new language translations -->
            @csrf
            @method('PUT')

            <input type="radio" name="language" value="en" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='en' ) checked @endif>@lang('menu.english_language')
            <input type="radio" name="language" value="de" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='de' ) checked @endif>@lang('menu.german_language')
            <input type="radio" name="language" value="bs" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='bs' ) checked @endif>@lang('menu.bosnian_language')

        </form>

    </div>

    <div class="nav-bot contain">
        <a href="/"><img class="nav-logo" src={{"/images/smartlab-logo.svg"}}></a>
        <div class="nav-button" id="nav-button">
            <div class="nav-button-inner"></div>
        </div>
        <div class="nav-li-container" id="nav-li-container">
            <li class="nav-li nav-li-js arrow first">
                <a class="grey">@lang('menu.first_item')</a>
                <div class="filler"></div>
                <div class="expandable">
                    <a href="/pages/courses">@lang('menu.online_courses')</a>
                    <a href="/pages/animations">@lang('menu.educational_video')</a>
                    <a href="/pages/programming">@lang('menu.programming')</a>
                    <a href="/pages/moodle">@lang('menu.moodle')</a>
                </div>
            </li>

            <li class="nav-li nav-li-js arrow">
                <a class="grey">@lang('menu.second_item')</a>
                <div class="filler"></div>
                <div class="expandable">
                    <a href="/#about">@lang('menu.about_us')</a>
                    <a href="/#team">@lang('menu.our_team')</a>
                </div>
            </li>
            <li class="nav-li nav-li-js arrow">
                <a class="grey">@lang('menu.third_item')</a>
                <div class="filler"></div>
                <div class="expandable join">
                    <div class="join-left">
                        <a href="#">@lang('menu.outsourcing')</a>
                    </div>
                    <div class="join-right">
                        <a href="#">@lang('menu.become_a_partner')</a>
                        <a href="/#contact">@lang('menu.careers')</a>
                    </div>
                </div>
            </li>
            <li class="nav-li nav-li-js">
                <!-- Open link in new tab and set its language depending on the current language in main website-->
                <a class="padding-right-0 grey" href="{{ env("BLOG_DOMAIN")  }}/@if(App::getlocale()){{App::getlocale()}}@else en @endif" target="_blank">@lang('menu.fourth_item')</a>
            </li>
            <li class="nav-li nav-li-js last"><a class="padding-right-0 grey" href="#">@lang('menu.fifth_item')</a></li>

            <!-- This menu items are available only to logged in users -->
            @auth

            <!-- This menu item is available to super admins only (list of all admins) -->
            {{--@if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)--}}
            <li class="nav-li nav-li-js">
                <a class="grey padding-right-0" href="/dashboard">@lang('menu.sixth_item')</a>
            </li>
            {{--@endif--}}

            {{--<li class="nav-li nav-li-js">--}}
            {{--<a class="grey padding-right-0" href="{{route('blogs.index')}}">@lang('menu.seventh_item')</a>--}}
            {{--</li>--}}

            <!-- This menu item is available to super admins only (list of all subscribers) -->
            {{--@if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)--}}
            {{--<li class="nav-li nav-li-js">--}}
            {{--<a class="grey padding-right-0" href="/subscribers">@lang('menu.eight_item')</a>--}}
            {{--</li>--}}
            {{--@endif--}}

            <!-- List of all logs in the system -->
            {{--<li class="nav-li nav-li-js"><a class="grey padding-right-0" href="/logs">@lang('menu.ninth_item')</a></li>--}}

            <!-- Link for logging out -->
            <li class="nav-li nav-li-js"><a class="grey padding-right-0" href="{{route('logout')}}">@lang('menu.tenth_item')</a></li>

            @endauth
        </div>

    </div>





</ul>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let navButton = document.querySelector("#nav-button");
        let nav = document.querySelector("#nav-list");
        let navTop = document.querySelector("#nav-top");
        let grey = document.querySelectorAll(".grey");
        let arrow = document.querySelectorAll(".arrow");
        let expandable = document.querySelectorAll(".expandable");
        let navLi = document.querySelectorAll(".nav-li");
        let navLiContainer = document.querySelector("#nav-li-container");
        console.log(navLi);
        navButton.addEventListener("click", function(event) {
            navLiContainer.classList.toggle("height-js");
            navTop.style.display = "none";
        })
        window.addEventListener("click", function(event) {
            console.log(event.target);
        })
        window.addEventListener("scroll", function(event) {

            if (window.pageYOffset > 300) {
                nav.style.backgroundColor = "white";
                navTop.style.display = "none";
                for (let i = 0; i < arrow.length; i++) {
                    arrow[i].classList.remove("arrow");
                    arrow[i].classList.add("arrow-js");
                }
                for (let i = 0; i < grey.length; i++) {
                    grey[i].style.color = "#14213d";
                }
                for (let i = 0; i < expandable.length; i++) {
                    expandable[i].style.top = "54px";
                }
                for (let i = 0; i < navLi.length; i++) {

                    navLi[i].classList.add("nav-li-js");
                }
            } else {
                nav.style.backgroundColor = "transparent";
                navTop.style.display = "flex";
                for (let i = 0; i < arrow.length; i++) {
                    arrow[i].classList.add("arrow");
                    arrow[i].classList.remove("arrow-js");
                }
                for (let i = 0; i < grey.length; i++) {
                    grey[i].style.color = "white";
                }
                for (let i = 0; i < expandable.length; i++) {
                    expandable[i].style.top = "auto";
                }
                for (let i = 0; i < navLi.length; i++) {
                    navLi[i].classList.remove("nav-li-js");

                }
            }
        })
    });
</script>
@endsection