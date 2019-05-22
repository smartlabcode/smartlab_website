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

    .join .show {
        display: flex !important;
    }

    .dropdown-menu {
        right: 12px !important;
        left: auto !important;
        top: 135% !important;
        transform: translateX(50%);
    }

    .dropdown-menu a {
        font-weight: bold;
    }

    .square::before {
        display: inline-block;
        content: "";
        width: 20px;
        height: 20px;
        background-color: white;
        position: absolute;
        top: -10px;
        right: 50%;
        transform: translateX(50%) rotate(45deg);
        border-top: 1px solid rgba(0, 0, 0, .15);
        border-left: 1px solid rgba(0, 0, 0, .15);
        border-radius: .25rem;
        z-index: -5;
    }

    nav a {
        text-transform: uppercase;
        font-family: "Montserrat", sans-serif;
        font-weight: bold;

    }


    #languageForm {
        font-family: "Montserrat", sans-serif;
    }

    @media screen and (max-width: 768px) {
        .square::before {
            display: none;
        }

        .dropdown-menu {
            right: auto !important;
            left: 0 !important;
            top: 0 !important;
            transform: translateX(0%);
        }

        .join .show {
            display: block !important;
        }

    }
</style>

@section('menu')

<!-- Available to all users -->
<li class="nav-item  dropdown">
    <a class="dropdown-toggle nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">@lang('menu.first_item')</a>
    <div class="dropdown-menu square" aria-labelledby="navbarDropdown">
        <a class="dropdown-item py-3" href="/pages/courses">@lang('menu.online_courses')</a>
        <a class="dropdown-item py-3" href="/pages/animations">@lang('menu.educational_video')</a>
        <a class="dropdown-item py-3" href="/pages/programming">@lang('menu.programming')</a>
        <a class="dropdown-item py-3" href="/pages/moodle">@lang('menu.moodle')</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">@lang('menu.second_item')</a>
    <div class="dropdown-menu square">
        <a class="dropdown-item py-3" href="/#about">@lang('menu.about_us')</a>
        <a class="dropdown-item py-3" href="/#team">@lang('menu.our_team')</a>
    </div>
</li>
<li class="nav-item dropdown join ">
    <a class="dropdown-toggle nav-link " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">@lang('menu.third_item')</a>
    <div class="dropdown-menu square ">
        <div>
            <a class="dropdown-item py-3" href="#">@lang('menu.outsourcing')</a>
        </div>
        <div>
            <a class="dropdown-item py-3" href="#">@lang('menu.become_a_partner')</a>
            <a class="dropdown-item py-3" href="/#contact">@lang('menu.careers')</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <!-- Open link in new tab and set its language depending on the current language in main website-->
    <a class="nav-link" href="{{ env("BLOG_DOMAIN")  }}/@if(App::getlocale()){{App::getlocale()}}@else en @endif" target="_blank">@lang('menu.fourth_item')</a>
</li>
<li class="nav-item"><a class="nav-link" href="#">@lang('menu.fifth_item')</a></li>

<!-- This menu items are available only to logged in users -->
@auth

<!-- This menu item is available to super admins only (list of all admins) -->
{{--@if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)--}}
<li class="nav-item">
    <a class="nav-link" href="/dashboard">@lang('menu.sixth_item')</a>
</li>
{{--@endif--}}

{{--<li class="nav-item nav-item ">--}}
{{--<a class="nav-link" href="{{route('blogs.index')}}">@lang('menu.seventh_item')</a>--}}
{{--</li>--}}

<!-- This menu item is available to super admins only (list of all subscribers) -->
{{--@if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)--}}
{{--<li class="nav-item ">--}}
{{--<a class="nav-link" href="/subscribers">@lang('menu.eight_item')</a>--}}
{{--</li>--}}
{{--@endif--}}

<!-- List of all logs in the system -->
{{--<li class="nav-item "><a class="nav-link" href="/logs">@lang('menu.ninth_item')</a></li>--}}

<!-- Link for logging out -->
<li class="nav-item "><a class="nav-link" href="{{route('logout')}}">@lang('menu.tenth_item')</a></li>

@endauth

<!-- Form for sending new language after user clicks on one of the select options - page is refreshed with new language translations -->

<form class="form-inline nav-item" id="languageForm" action="/language" method="POST">
    @csrf
    @method('PUT')
    <select class="form-control-sm " name="language" onchange="changeSiteLanguage(this.value)">
        <option value="en" @if(App::getlocale()=='en' ) selected @endif>@lang('menu.english_language')</option>
        <option value="de" @if(App::getlocale()=='de' ) selected @endif>@lang('menu.german_language')</option>
        <option value="bs" @if(App::getlocale()=='bs' ) selected @endif>@lang('menu.bosnian_language')</option>
    </select>
</form>


@endsection