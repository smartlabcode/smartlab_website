<!-- Extend main layout -->
@extends('layouts.app')
@section('title', '- Online courses')
@section('css')
<link href="{{ asset('css/coursesMoodleAnimations.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="loader-container">
    <div class="css-animation-container">
        <div class="css-animation"></div>
    </div>
</div>
<div class="background-section-one">
    <img class="background-img" src="{{asset('/images/img/header-illustration-group.svg')}}" alt="blue background image" />
    <img class="background-img-circle --circle1" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="background circle" />
    <img class="background-img-circle --circle2" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="background circle" />
    <img class="background-img-circle --circle3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="background circle" />
    <section class="section-one contain">

        <div class="section-one-text">

            <h1 class="h1-font bold">@lang('courses.onlineCourses')</h1>
            <p class="p-font">
                @lang('courses.secOneP1')
                <ul class="p-font">
                    <li>@lang('courses.secOneUlFirst')</li>
                    <li>@lang('courses.secOneUlSecond')</li>
                    <li>@lang('courses.secOneUlThird')</li>
                    <li>@lang('courses.secOneUlFourth')</li>
                </ul>
            </p>
        </div>
        <div class="section-one-animation">

        </div>


    </section>
</div>


<!--   SECTION TWO -->
<section class="contain relative section-two">
    <img class="secTwoBg2" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background">
    <img class="secTwoBg" src="{{asset('/images/img/header-fluid-blue.svg')}}" alt="main background image">
    <h2 class="h1-font center">@lang('courses.sec2h2')</h2>
    <div id="slider">
        <div class="popup-overlay"></div>
        <div class="popup">
            <span class="close"> X </span>
            <div class="popup-container">
                <div class="popup-content iframe-container">
                    <iframe id="popup-image" src=""></iframe>
                    <img id="popup-image-back" src="" style="display: none;">
                </div>
                <div class="popup-description">
                    <div>
                        <h3 id="popup-header">Popup header</h3>
                        <p id="popup-description">Popup text</p>
                    </div>
                </div>
                <div class="popup-controls">
                    <div class="popup-controls-prev" id="popup-prev">
                        <p>&lt;</p>
                    </div>
                    <div class="popup-controls-next" id="popup-next">
                        <p>&gt;</p>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <div class="slider-left shadow-1">
                <div class="popup-click popup-click-left">

                </div>
                <div id="left-iframe">
                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Q3cZOOmbJdE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    <img id="left-img-overlay" src="">
                    <img id="left-img" src="" class="circle-l">
                </div>
                <img id="prev" class="prethodni shadow-1" src="{{asset('/images/img/Picture2.png')}}" alt="previuos slide">
            </div>
            <div class="slider-right shadow-1">
                <div class="popup-click popup-click-right">

                </div>
                <div id="right-iframe">
                    <img id="right-img-overlay" src="">
                    <img id="right-img" class="circle-r" src="">
                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/s5xDYxh2SAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                </div>
                <img id="next" class="sljedeci shadow-1" src="{{asset('/images/img/Picture3.png')}}" alt="next slide">
            </div>
        </div>
        <div class="slider-indicator"></div>
    </div>

    <img class="secTwoBg3" src="{{asset('/images/img/fluid-bright-circle.svg')}}">
    <div class="section3 contain">
        <div style="height: 50%">
            <p class="p-font" style="margin-top: 50px; display: flex; justify-content: center; font-weight: 500">@lang('courses.sec2h22')</p>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button" id="schedule">@lang('courses.buttonSchedule')</button>
        </div>
        <img class="secTwoBg4" src="{{asset('/images/img/orange-circle.svg')}}">
    </div>
    <div class="contact-section" id="contact" style="height: 0px">
        <div class="contact-form-container">
            <form class="contact-form" action="/demo" method="POST">
                <!-- Include token -->
                @csrf
                <div class="contact-form-group">
                    <div>
                        <label for="name">@lang('courses.contactName')</label>
                        <input class="form-control" type="text" name="name" id="name" required />
                    </div>
                    <div>
                        <label for="company">@lang('courses.contactCompany')</label>
                        <input class="form-control" type="text" name="company" id="company" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="subject">@lang('courses.contactSubject')</label>
                        <input class="form-control" type="text" name="subject" id="subject" required />
                    </div>
                    <div>
                        <label for="email">@lang('courses.contactEmail')</label>
                        <input class="form-control" type="email" name="email" id="email" required />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="date">@lang('courses.contactDate')</label>
                        <input class="form-control" type="date" name="date" id="date" required />
                    </div>
                    <div>
                        <label for="time">@lang('courses.contactTime')</label>
                        <input class="form-control" type="time" name="time" id="time" required />
                    </div>
                </div>
                <div class="contact-form-group textarea">
                    <label for="message">@lang('courses.contactMessage')</label>
                    <textarea class="form-control" name="message" rows="7" id="message" required></textarea>
                </div>
                <p class="policyText">@lang('careers.we-are-commited') <a href="#">@lang('careers.privacy')</a>.</p>
                <div class="captcha-container">{!! app('captcha')->display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong style="color: red">{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                    @endif
                    <button class="button submit" type="submit" value=@lang('courses.buttonSend')>Send</button>
                </div>
            </form>
            {!! NoCaptcha::renderJs() !!}
        </div>
    </div>
</section>
<section class="contain tools-container">
    <div class="tools">
        <div class="tools-info">
            <h2 class="h1-font">@lang('courses.sec3h2')</h2>
            <p class="p-font">
                @lang('courses.sec3p')
            </p>
        </div>
        <div class="tools-img">
            <div>
                <img src="{{asset('/images/tools/articulate.jpg')}}" alt="Articulate Storyline logo">
                <p>Articulate Storyline</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/rise.png')}}" alt="Articulate Rise logo">
                <p>Articulate Rise</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/1200px-Adobe_Animate_CC_icon.svg.png')}}" alt="Adobe Aimate logo">
                <p>Adobe Animate</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/scorm.png')}}" alt="SCORM logo">
                <p>SCORM</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/ispring-logo_1640x414.png')}}" alt="iSpring Solutions logo">
                <p>iSpring Solutions</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/GAMIFICATION-NATION-2-LOGO-e1527579917733.png')}}" alt="Gamification Nation logo">
                <p>Gamification Nation</p>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="{{ asset('js/courses.min.js') }}"></script>
@endsection