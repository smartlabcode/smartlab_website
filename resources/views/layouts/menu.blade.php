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




    .nav-list {
        list-style-type: none;
        padding-left: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        position: fixed;
        top: 0;
        /* left: 0; */
        width: 90%;
        max-width: 1440px;
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

    .nav-li a::before {
        content: "";
        display: inline-block;
        position: absolute;
        right: 0;
        top: 0;
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

    .nav-li:hover .expandable {
        height: auto;
    }

    .arrow:hover:before {
        transform: rotate(-180deg) translate(80%, -90%);
    }

    .nav-top {
        flex-basis: 100%;
        display: flex;
        justify-content: flex-end;
    }

    .nav-bot {
        flex-basis: 100%;
        display: flex;
        justify-content: flex-end;
        position: sticky;
        top: 0;
    }

    .arrow {
        position: relative;
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
        position: absolute;
        left: 0;
    }

    @media screen and (max-width: 768px) {}
</style>

@section('menu')

<!-- Available to all users -->
<ul class="nav-list">
    <div class="nav-top">

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

    <div class="nav-bot">
        <a href="/"><img class="nav-logo" src={{"/images/smartlab-logo.svg"}}></a>

        <li class="nav-li arrow">
            <a href="#">@lang('menu.first_item')</a>
            <div class="expandable">
                <a href="/pages/courses">@lang('menu.online_courses')</a>
                <a href="/pages/animations">@lang('menu.educational_video')</a>
                <a href="/pages/programming">@lang('menu.programming')</a>
                <a href="/pages/moodle">@lang('menu.moodle')</a>
            </div>
        </li>
        <li class="nav-li arrow">
            <a href="#">@lang('menu.second_item')</a>
            <div class="expandable">
                <a href="/#about">@lang('menu.about_us')</a>
                <a href="/#team">@lang('menu.our_team')</a>
            </div>
        </li>
        <li class="nav-li arrow">
            <a href="#">@lang('menu.third_item')</a>
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
        <li class="nav-li">
            <!-- Open link in new tab and set its language depending on the current language in main website-->
            <a href="{{ env("BLOG_DOMAIN")  }}/@if(App::getlocale()){{App::getlocale()}}@else en @endif" target="_blank">@lang('menu.fourth_item')</a>
        </li>
        <li class="nav-li"><a class="padding-right-0" href="#">@lang('menu.fifth_item')</a></li>

        <!-- This menu items are available only to logged in users -->
        @auth

        <!-- This menu item is available to super admins only (list of all admins) -->
        {{--@if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)--}}
        <li class="nav-li">
            <a href="/dashboard">@lang('menu.sixth_item')</a>
        </li>
        {{--@endif--}}

        {{--<li class="nav-li">--}}
        {{--<a href="{{route('blogs.index')}}">@lang('menu.seventh_item')</a>--}}
        {{--</li>--}}

        <!-- This menu item is available to super admins only (list of all subscribers) -->
        {{--@if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)--}}
        {{--<li class="nav-li">--}}
        {{--<a href="/subscribers">@lang('menu.eight_item')</a>--}}
        {{--</li>--}}
        {{--@endif--}}

        <!-- List of all logs in the system -->
        {{--<li class="nav-li"><a href="/logs">@lang('menu.ninth_item')</a></li>--}}

        <!-- Link for logging out -->
        <li class="nav-li"><a href="{{route('logout')}}">@lang('menu.tenth_item')</a></li>

        @endauth
    </div>





</ul>

@endsection