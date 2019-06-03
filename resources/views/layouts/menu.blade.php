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
        display: none;
        position: absolute;
        transform: translateX(-12%);
        overflow-y: hidden;
        width: 400px;
        background-color: white;
        border-radius: 5px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        transition: height 0.2s ease-in-out;
    }

    .expandable:hover {
        display: block;
    }

    .join:hover {
        display: flex !important;
    }

    .nav-li:hover .join {
        display: flex !important;
    }

    .nav-li:hover .expandable {
        display: block;
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
        font-family: "Montserrat", sans-serif;
    }

    .nav-top p {
        opacity: 0.5;
        color: white;
        margin-right: 50px;
    }

    .nav-top p span {

        margin-right: 20px;
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
        z-index: 10;
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
        transition: 0.2s all ease-in-out;
        z-index: 10;
    }

    .join {
        display: none;
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
        height: 35px;
        padding-top: 5px;
    }

    .nav-button {
        display: none;
    }

    .nav-li-container {
        flex-basis: 100%;
        display: flex;
        justify-content: flex-end;
    }

    .nav-top label {
        text-transform: uppercase;
        position: relative;
        right: 20px;
        color: white;
        opacity: 0.5;
        cursor: pointer;
    }

    #languageForm {
        position: relative;
        left: 20px;
    }

    .nav-top input {
        visibility: hidden;
    }

    .language-selected {
        opacity: 1 !important;
        font-weight: bold;
    }

    .nav-top-mobile {
        display: none !important;
    }

    @media screen and (max-width: 900px) {
        .nav-top {
            display: none;
        }

        .nav-top-mobile {
            display: flex !important;
            flex-direction: column-reverse;
            align-items: center;
            color: var(--h1-color);
            flex-basis: 100%;
        }



        .margin-right {
            margin-right: 0 !important;
        }

        .nav-top-mobile p {
            opacity: 0.5;
            color: var(--h1-color);
            margin-right: 0px;
        }

        .nav-top-mobile p span {
            margin-right: 20px;
        }

        .nav-top-mobile p span:first-child {
            display: none;
        }

        .nav-top-mobile label {
            text-transform: uppercase;
            position: relative;
            right: 17px;
            color: var(--h1-color);
            opacity: 0.5;
            cursor: pointer;
        }

        .mobile-language-form {
            position: relative;
            left: 10px;
        }

        .nav-top-mobile input {
            visibility: hidden;
        }

        .language-selected {
            opacity: 1 !important;
            font-weight: bold;
        }

        .nav-bot {
            justify-content: space-between;
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: white;
            width: 100vw !important;
            padding-left: 5%;
            padding-right: 5%;
        }

        .expandable {

            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .height-js {
            height: calc(100vh - 95px) !important;
        }

        .nav-li a {
            height: auto;
            color: var(--h1-color) !important;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 5%;
        }

        .nav-li>a {
            font-weight: bold;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .arrow:hover:before {
            transform: rotateX(-180deg) translate(-100%, -95%);
            opacity: 0;
        }

        .arrow::before {
            background-color: var(--h1-color);
            left: 95%;
        }

        .nav-li-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            position: absolute;
            top: 95px;
            width: 100vw;
            right: 0;
            background-color: white;
            height: 0;
            overflow: hidden;
            transition: height 0.2s ease-in-out;
        }

        .nav-li:hover .expandable-first {
            height: 252px;

        }

        .nav-li:hover .expandable-second {
            height: 126px;

        }

        .nav-li:hover .expandable-third {
            height: 189px;

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
            margin-left: 5%;
            border-left: 1px solid var(--shadow-color);
            transform: translateX(0%);
        }

        .nav-button {
            height: 30px;
            width: 30px;
            display: inline-block;
            position: relative;
            top: 5px;
        }

        .nav-button-inner {
            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--h1-color);
            position: absolute;
            top: 0;
            border-radius: 2px;
            animation-duration: 0.2s;
            animation-timing-function: ease-in;
            animation-fill-mode: forwards;

        }

        .nav-button-inner-before {
            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--h1-color);
            position: absolute;
            top: 10px;
            border-radius: 2px;
            animation-duration: 0.2s;
            animation-timing-function: ease-in;
            animation-fill-mode: forwards;
        }

        .nav-button-inner-after {

            height: 5px;
            width: 30px;
            display: inline-block;
            background-color: var(--h1-color);
            position: absolute;
            top: 20px;
            border-radius: 2px;
            animation-duration: 0.2s;
            animation-timing-function: ease-in;
            animation-fill-mode: forwards;
        }



        @keyframes navBtn {
            from {
                width: 30px;
            }

            to {
                width: 0px;
            }
        }

        @keyframes navBtnReverse {
            from {
                width: 0px;
            }

            to {
                width: 30px;
            }
        }

        @keyframes navBtnAfter {
            from {
                transform: rotate(0deg);
                top: 20px;
            }

            to {
                transform: rotate(-45deg);
                top: 10px;
            }
        }

        @keyframes navBtnAfterReverse {
            from {
                transform: rotate(-45deg);
                top: 10px;
            }

            to {
                transform: rotate(0deg);
                top: 20px;
            }
        }

        @keyframes navBtnBefore {
            from {
                transform: rotate(0deg);
                top: 10px;
            }

            to {
                transform: rotate(45deg);
                top: 10px;
            }
        }

        @keyframes navBtnBeforeReverse {
            from {
                transform: rotate(45deg);
                top: 10px;
            }

            to {
                transform: rotate(2deg);
                top: 10px;
            }
        }

        /*.nav-button-inner {
            width: 0;
        }*/

        /*.nav-button-inner::before {
            transform: rotate(45deg);
            top: 10px !important;
        }*/

        /*.nav-button-inner::after {
            transform: rotate(-45deg);
            top: 10px !important;
        }*/



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

        <p><span>Call: </span><span>+387 61 811 394</span> <span>+387 33 956 222</span></p>
        <form id="languageForm" action="/language" method="POST">
            <!-- Form for sending new language after user clicks on one of the select options - page is refreshed with new language translations -->
            @csrf
            @method('PUT')

            <input type="radio" name="language" id="en" value="en" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='en' ) checked @endif><label for="en" @if(App::getlocale()=='en' ) class="language-selected" @endif>@lang('menu.english_language')</label>
            <input type="radio" name="language" id="de" value="de" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='de' ) checked @endif><label for="de" @if(App::getlocale()=='de' ) class="language-selected" @endif>@lang('menu.german_language')</label>
            <input type="radio" name="language" id="bs" value="bs" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='bs' ) checked @endif><label for="bs" @if(App::getlocale()=='bs' ) class="language-selected" @endif>@lang('menu.bosnian_language')</label>

        </form>

    </div>

    <div class="nav-bot contain">
        <a href="/"><img class="nav-logo" src={{"/images/smartlab-logo.svg"}}></a>
        <div class="nav-button" id="nav-button">
            <div class="nav-button-inner" id="nav-button-inner"></div>
            <div class="nav-button-inner-before" id="nav-button-inner-before"></div>
            <div class="nav-button-inner-after" id="nav-button-inner-after"></div>
        </div>
        <div class="nav-li-container" id="nav-li-container">
            <li class="nav-li nav-li-js arrow first">
                <a class="grey">@lang('menu.first_item')</a>
                <div class="filler"></div>
                <div class="expandable expandable-first">
                    <a href="/pages/courses">@lang('menu.online_courses')</a>
                    <a href="/pages/animations">@lang('menu.educational_video')</a>
                    <a href="/pages/programming">@lang('menu.programming')</a>
                    <a href="/pages/moodle">@lang('menu.moodle')</a>
                </div>
            </li>

            <li class="nav-li nav-li-js arrow">
                <a class="grey">@lang('menu.second_item')</a>
                <div class="filler"></div>
                <div class="expandable expandable-second">
                    <a href="/#about" class="same-page-link">@lang('menu.about_us')</a>
                    <a href="/#team" class="same-page-link">@lang('menu.our_team')</a>
                </div>
            </li>
            <li class="nav-li nav-li-js arrow">
                <a class="grey">@lang('menu.third_item')</a>
                <div class="filler"></div>
                <div class="expandable join expandable-third">
                    <div class="join-left">
                        <a href="/pages/outsourcing">@lang('menu.outsourcing')</a>
                    </div>
                    <div class="join-right">
                        <a href="/pages/partner">@lang('menu.become_a_partner')</a>
                        <a href="/pages/careers">@lang('menu.careers')</a>
                    </div>
                </div>
            </li>
            <li class="nav-li nav-li-js">
                <!-- Open link in new tab and set its language depending on the current language in main website -->
                <a class="padding-right-0 grey" href="{{ env("BLOG_DOMAIN")  }}/@if(App::getlocale()){{App::getlocale()}}@else en @endif" target="_blank">@lang('menu.fourth_item')</a>
            </li>
            <li class="nav-li nav-li-js last same-page-link"><a class="padding-right-0 grey" href="/#contact">@lang('menu.fifth_item')</a></li>

            <!-- This menu items are available only to logged in users -->
            @auth

            <!-- not available for xlf users -->
            @if(\Illuminate\Support\Facades\Auth::user()->roles_id != 3)

            <li class="nav-li nav-li-js">
                <a class="grey padding-right-0" href="/dashboard">@lang('menu.sixth_item')</a>
            </li>

            @endif

            <!-- Link for logging out -->
            <li class="nav-li nav-li-js"><a class="grey padding-right-0" href="{{route('logout')}}">@lang('menu.tenth_item')</a></li>

            @endauth
            <div class="nav-top-mobile contain">

                <p><span>Call: </span><span>+387 61 811 394</span> <span class="margin-right">+387 33 956 222</span></p>
                <form action="/language" method="POST" class="mobile-language-form">
                    <!-- Form for sending new language after user clicks on one of the select options - page is refreshed with new language translations -->
                    @csrf
                    @method('PUT')

                    <input type="radio" name="language" id="en" value="en" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='en' ) checked @endif><label for="en" @if(App::getlocale()=='en' ) class="language-selected" @endif>@lang('menu.english_language')</label>
                    <input type="radio" name="language" id="de" value="de" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='de' ) checked @endif><label for="de" @if(App::getlocale()=='de' ) class="language-selected" @endif>@lang('menu.german_language')</label>
                    <input type="radio" name="language" id="bs" value="bs" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='bs' ) checked @endif><label for="bs" @if(App::getlocale()=='bs' ) class="language-selected" @endif>@lang('menu.bosnian_language')</label>

                </form>

            </div>
        </div>

    </div>





</ul>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        let navButton = document.querySelector("#nav-button");
        let navButtonInner = document.querySelector("#nav-button-inner");
        let navButtonInnerAfter = document.querySelector("#nav-button-inner-after");
        let navButtonInnerBefore = document.querySelector("#nav-button-inner-before");
        let nav = document.querySelector("#nav-list");
        let navTop = document.querySelector("#nav-top");
        let grey = document.querySelectorAll(".grey");
        let arrow = document.querySelectorAll(".arrow");
        let expandable = document.querySelectorAll(".expandable");
        let navLi = document.querySelectorAll(".nav-li");
        let navLiContainer = document.querySelector("#nav-li-container");
        let samePageLinks = document.querySelectorAll(".same-page-link");
        let clicked = 0;
        console.log(samePageLinks);
        for (let i = 0; i < samePageLinks.length; i++) {
            console.log(i);
            samePageLinks[i].addEventListener("click", function(event) {
                console.log("clicked");
                navLiContainer.classList.toggle("height-js");
                navButtonInner.style.animationName = "navBtnReverse";
                navButtonInnerAfter.style.animationName = "navBtnAfterReverse";
                navButtonInnerBefore.style.animationName = "navBtnBeforeReverse";
                clicked = 0;
            });
        }
        navButton.addEventListener("click", function(event) {
            clicked++
            if (clicked % 2 != 0) {
                navButtonInner.style.animationName = "navBtn";
                navButtonInnerAfter.style.animationName = "navBtnAfter";
                navButtonInnerBefore.style.animationName = "navBtnBefore";

            } else {
                navButtonInner.style.animationName = "navBtnReverse";
                navButtonInnerAfter.style.animationName = "navBtnAfterReverse";
                navButtonInnerBefore.style.animationName = "navBtnBeforeReverse";
            }
            navLiContainer.classList.toggle("height-js");
            navTop.style.display = "none";
        })

        function navTopHide() {
            if (window.pageYOffset > 100) {
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
        }
        if (window.innerWidth > 900) {
            navTopHide();
        }

        if (window.innerWidth > 900) {
            window.addEventListener("scroll", function(event) {
                navTopHide();
            });
        }



    });
</script>
@endsection