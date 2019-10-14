<!-- Extend main layout -->
@extends('layouts.app')
@section('title', '- Educational video animation')
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
    <img class="background-img-circle --circle1" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="blue circle background image" />
    <img class="background-img-circle --circle2" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="blue circle background image" />
    <img class="background-img-circle --circle3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="blue circle background image" />
    <section class="section-one contain">

        <div class="section-one-text">

            <h1 class="h1-font bold">@lang('animations.Animation')</h1>
            <p class="p-font">
                @lang('animations.secOneP1')
                <ul class="p-font">
                    <li>@lang('animations.secOneUlFirst')</li>
                    <li>@lang('animations.secOneUlSecond')</li>
                    <li>@lang('animations.secOneUlThird')</li>
                    <li>@lang('animations.secOneUlFourth')</li>
                </ul>
            </p>
        </div>
        <div class="section-one-animation">

        </div>



    </section>
</div>


<!--   SECTION TWO -->
<section class="contain relative section-two">
    <img class="secTwoBg2" src="{{asset('/images/img/orange-circle.svg')}}">
    <img class="secTwoBg" src="{{asset('/images/img/header-fluid-blue.svg')}}">
    <h2 class="h1-font center">@lang('animations.sec2h2')</h2>
    <div id="slider">
        <div class="popup-overlay"></div>
        <div class="popup">
            <span class="close"> X </span>
            <div class="popup-container">
                <div class="popup-content iframe-container">
                    <iframe id="popup-image" src="" style="opacity: 1; position: absolute;"></iframe>
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
                    <svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;" version="1.1" viewBox="0 0 24 24" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect height="24" id="Artboard15" style="fill:none;" width="24" x="0" y="0"></rect>
                        <g>
                            <path class="youtube-fill" d="M2.093,9.075c0.125,-1.941 1.629,-3.509 3.562,-3.716c2.005,-0.202 4.136,-0.311 6.345,-0.311c2.209,0 4.34,0.109 6.345,0.312c1.933,0.206 3.437,1.774 3.562,3.715c0.061,0.956 0.093,1.933 0.093,2.925c0,0.992 -0.032,1.969 -0.093,2.925c-0.125,1.941 -1.629,3.509 -3.562,3.716c-2.005,0.202 -4.136,0.311 -6.345,0.311c-2.209,0 -4.34,-0.109 -6.345,-0.312c-1.933,-0.206 -3.437,-1.774 -3.562,-3.715c-0.061,-0.956 -0.093,-1.933 -0.093,-2.925c0,-0.992 0.032,-1.969 0.093,-2.925Z" style="fill:#4d4d4d;"></path>
                            <path d="M15.055,12l-4.909,2.995l0,-5.99l4.909,2.995Z" style="fill:#fff;"></path>
                        </g>
                    </svg>
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
                    <svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;" version="1.1" viewBox="0 0 24 24" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect height="24" id="Artboard15" style="fill:none;" width="24" x="0" y="0"></rect>
                        <g>
                            <path class="youtube-fill" d="M2.093,9.075c0.125,-1.941 1.629,-3.509 3.562,-3.716c2.005,-0.202 4.136,-0.311 6.345,-0.311c2.209,0 4.34,0.109 6.345,0.312c1.933,0.206 3.437,1.774 3.562,3.715c0.061,0.956 0.093,1.933 0.093,2.925c0,0.992 -0.032,1.969 -0.093,2.925c-0.125,1.941 -1.629,3.509 -3.562,3.716c-2.005,0.202 -4.136,0.311 -6.345,0.311c-2.209,0 -4.34,-0.109 -6.345,-0.312c-1.933,-0.206 -3.437,-1.774 -3.562,-3.715c-0.061,-0.956 -0.093,-1.933 -0.093,-2.925c0,-0.992 0.032,-1.969 0.093,-2.925Z" style="fill:#4d4d4d;"></path>
                            <path d="M15.055,12l-4.909,2.995l0,-5.99l4.909,2.995Z" style="fill:#fff;"></path>
                        </g>
                    </svg>
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

    <img class="secTwoBg3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background image">
    <div class="section3 contain">
        <div style="height: 50%">
            <p class="p-font" style="margin-top: 50px; display: flex; justify-content: center; font-weight: 500">@lang('animations.sec2h22')</p>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button" id="schedule">@lang('animations.buttonSchedule')</button>
        </div>
        <img class="secTwoBg4" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle">
    </div>
    <div class="contact-section" id="contact" style="height:0px">
        <div class="contact-form-container">
            <form class="contact-form" action="/demo" method="POST">
                <!-- Include token -->
                @csrf
                <div class="contact-form-group">
                    <div>
                        <label for="name">@lang('animations.contactName')</label>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div>
                        <label for="company">@lang('animations.contactCompany')</label>
                        <input type="text" name="company" id="company" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="subject">@lang('animations.contactSubject')</label>
                        <input type="text" name="subject" id="subject" required />
                    </div>
                    <div>
                        <label for="email">@lang('animations.contactEmail')</label>
                        <input type="email" name="email" id="email" required />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="date">@lang('animations.contactDate')</label>
                        <input type="date" name="date" id="date" required />
                    </div>
                    <div>
                        <label for="time">@lang('animations.contactTime')</label>
                        <input type="time" name="time" id="time" required />
                    </div>
                </div>
                <div class="contact-form-group textarea">
                    <label for="message">@lang('animations.contactMessage')</label>
                    <textarea name="message" rows="7" id="message" required></textarea>
                </div>
                <button class="button submit" type="submit" value=@lang('animations.buttonSend')>@lang('animations.buttonSend')</button>
            </form>
        </div>
    </div>
</section>
<section class="contain tools-container">
    <div class="tools">
        <div class="tools-info">
            <h2 class="h1-font">@lang('animations.sec3h2')</h2>
            <p class="p-font">
                @lang('animations.sec3p')
            </p>
        </div>
        <div class="tools-img">
            <div>
                <img src="{{asset('/images/tools/after-effects.png')}}" alt="Adobe After Effects logo">
                <p>Adobe After Effects</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/Adobe_Premiere_Pro_Logo.svg.png')}}" alt="Adobe Premiere Pro logo">
                <p>Adobe Premiere Pro</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/1200px-Adobe_Animate_CC_icon.svg.png')}}" alt="Adobe Animate logo">
                <p>Adobe Animate</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/camtasia.png')}}" alt="Camtasia logo">
                <p>Camtasia</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/replay_256px.png')}}" alt="Articulate Replay logo">
                <p>Articulate Replay</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/ca.png')}}" alt="Character Animator logo">
                <p>Character Animator</p>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="{{ asset('js/animations.min.js') }}"></script>
@endsection