
@section('menu')

    <!-- Available to all users -->
    <li class="nav-item">@lang('menu.first_item')</li>
    <li class="nav-item">@lang('menu.second_item')</li>
    <li class="nav-item">@lang('menu.third_item')</li>
    <li class="nav-item">
        <!-- Open link in new tab and set its language depending on the current language in main website-->
        <a href="{{ env("BLOG_DOMAIN")  }}/@if(App::getlocale()){{App::getlocale()}}@else en @endif" target="_blank">@lang('menu.fourth_item')</a>
    </li>
    <li class="nav-item">@lang('menu.fifth_item')</li>

    <!-- This menu items are available only to logged in users -->
    @auth

        <!-- This menu item is available to super admins only (list of all admins) -->
        @if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)
            <li class="nav-item">
                <a href="{{route('admins.index')}}">@lang('menu.sixth_item')</a>
            </li>
        @endif

        <li class="nav-item">
            <a href="{{route('blogs.index')}}">@lang('menu.seventh_item')</a>
        </li>

        <!-- This menu item is available to super admins only (list of all subscribers) -->
        @if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)
            <li class="nav-item">
                <a href="/subscribers">@lang('menu.eight_item')</a>
            </li>
        @endif

        <!-- List of all logs in the system -->
        <li class="nav-item"><a href="/logs">@lang('menu.ninth_item')</a></li>

        <!-- Link for logging out -->
        <li class="nav-item"><a href="{{route('logout')}}">@lang('menu.tenth_item')</a></li>

    @endauth

    <!-- Form for sending new language after user clicks on one of the select options - page is refreshed with new language translations -->
    <li>
        <form id="languageForm" action="/language" method="POST">
            @csrf
            @method('PUT')
            <select name="language" onchange="changeSiteLanguage(this.value)">
                <option value="en" @if(App::getlocale() == 'en') selected @endif>@lang('menu.english_language')</option>
                <option value="de" @if(App::getlocale() == 'de') selected @endif>@lang('menu.german_language')</option>
                <option value="bs" @if(App::getlocale() == 'bs') selected @endif>@lang('menu.bosnian_language')</option>
            </select>
        </form>
    </li>

@endsection