@section('menu')
<!-- Available to all users -->
<!-- TODO some menu items are not visible on white background, language switch and phone numbers  needs to be restyled, problems with menu on tablet/mobile devices -->
<ul class="nav-list " id="nav-list">
    <div class="nav-top contain" id="nav-top">

        <p><span>Call: </span><a href="tel: +38761811394"><span>+387 61 811 394</span></a> <a href="tel: +38733956222"><span>+387 33 956 222</span></a></p>
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
        <a href="{{asset('/')}}"><img class="nav-logo" src="{{asset('/images/smartlab-logo.svg')}}" alt="smartlab logo"></a>
        <div class="nav-button" id="nav-button">
            <div class="nav-button-inner" id="nav-button-inner"></div>
            <div class="nav-button-inner-before" id="nav-button-inner-before"></div>
            <div class="nav-button-inner-after" id="nav-button-inner-after"></div>
        </div>
        <div class="nav-li-container" id="nav-li-container">
            <li class="nav-li nav-li-js arrow first">
                <a class="grey" id="whatWeDo">@lang('menu.first_item')</a>
                <div class="filler"></div>
                <div class="expandable expandable-first">
                    <a href="{{asset('/pages/courses')}}">@lang('menu.online_courses')</a>
                    <a href="{{asset('/pages/animations')}}">@lang('menu.educational_video')</a>
                    <a href="{{asset('/pages/programming')}}">@lang('menu.programming')</a>
                    <a href="{{asset('/pages/moodle')}}">@lang('menu.moodle')</a>
                </div>
            </li>

            <li class="nav-li nav-li-js arrow">
                <a class="grey">@lang('menu.second_item')</a>
                <div class="filler"></div>
                <div class="expandable expandable-second">
                    <a href="{{asset('/#about')}}" class="same-page-link">@lang('menu.about_us')</a>
                    <a href="{{asset('/#team')}}" class="same-page-link">@lang('menu.our_team')</a>
                </div>
            </li>
            <li class="nav-li nav-li-js arrow">
                <a class="grey">@lang('menu.third_item')</a>
                <div class="filler"></div>
                <div class="expandable join expandable-third">
                    <div class="join-left">
                        <a href="{{asset('/pages/outsourcing')}}">@lang('menu.outsourcing')</a>
                    </div>
                    <div class="join-right">
                        <a href="{{asset('/pages/partner')}}">@lang('menu.become_a_partner')</a>
                        <a href="{{asset('/pages/careers')}}">@lang('menu.careers')</a>
                    </div>
                </div>
            </li>
            <li class="nav-li nav-li-js">
                <!-- Open link in new tab and set its language depending on the current language in main website -->
                <a class="padding-right-0 grey" href="{{ env("BLOG_DOMAIN")  }}/@if(App::getlocale()){{App::getlocale()}}@else en @endif" target="_blank" rel="noopener">@lang('menu.fourth_item')</a>
            </li>
            <li class="nav-li nav-li-js last same-page-link"><a class="padding-right-0 grey" href="{{asset('/#contact')}}">@lang('menu.fifth_item')</a></li>

            <!-- This menu items are available only to logged in users -->
            @auth

            <!-- not available for xlf users -->
            @if(\Illuminate\Support\Facades\Auth::user()->roles_id != 3)

            <li class="nav-li nav-li-js">
                <a class="grey padding-right-0" href="{{asset('/dashboard')}}">@lang('menu.sixth_item')</a>
            </li>

            @endif

            <!-- Link for logging out -->
            <li class="nav-li nav-li-js"><a class="grey padding-right-0" href="{{route('logout')}}">@lang('menu.tenth_item')</a></li>

            @endauth
            <div class="nav-top-mobile">

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
@endsection