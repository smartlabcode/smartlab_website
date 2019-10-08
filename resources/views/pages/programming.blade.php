<!-- Extend main layout -->
@extends('layouts.app')
@section('css')
<link href="{{ asset('css/programming.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="loader-container">
    <div class="css-animation-container">
        <div class="css-animation"></div>
    </div>
</div>
<div class="background-section-one">
    <img class="background-img" src="{{asset('/images/img/header-illustration-group.svg')}}" alt="blue background image" />
    <img class="background-img-circle --circle1" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background" />
    <img class="background-img-circle --circle2" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background" />
    <img class="background-img-circle --circle3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background" />
    <section class="section-one contain">

        <div class="section-one-text">

            <h1 class="h1-font bold">@lang('programming.heading')</h1>
            <p class="p-font">
                @lang('programming.title')
                <ul class="p-font">
                    <li>@lang('programming.liOne')</li>
                    <li>@lang('programming.liTwo')</li>
                    <li>@lang('programming.liThree')</li>
                    <li>@lang('programming.liFour')</li>
                    <li>@lang('programming.liFive')</li>
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
    <h2 class="h1-font center">@lang('programming.ourWorks')</h2>
    <div id="slider">
        <div class="popup-overlay"></div>
        <div class="popup">
            <span class="close"> X </span>
            <div class="popup-container">
                <div class="popup-content">
                    <img id="popup-image" src="">
                    <img id="popup-image-back" src="">
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
    <img class="secTwoBg3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background">
    <div class="section3 contain">
        <div style="height: 50%">
            <p class="p-font" style="margin-top: 50px; display: flex; justify-content: center; font-weight: 500">@lang('programming.wantSeeMore')</p>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button" id="schedule">@lang('programming.demo')</button>
        </div>
        <img class="secTwoBg4" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background">
    </div>
    <div class="contact-section" id="contact" style="height:0px">
        <div class="contact-form-container">
            <form class="contact-form" action="/demo" method="POST">
                <!-- Include token -->
                @csrf
                <div class="contact-form-group">
                    <div>
                        <label for="name">*@lang('programming.nameSurname')</label>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div>
                        <label for="company">@lang('programming.company')</label>
                        <input type="text" name="company" id="company" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="subject">*@lang('programming.subject')</label>
                        <input type="text" name="subject" id="subject" required />
                    </div>
                    <div>
                        <label for="email">*@lang('programming.email')</label>
                        <input type="email" name="email" id="email" required />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="date">*@lang('programming.date')</label>
                        <input type="date" name="date" id="date" required />
                    </div>
                    <div>
                        <label for="time">*@lang('programming.time')</label>
                        <input type="time" name="time" id="time" required />
                    </div>
                </div>
                <div class="contact-form-group textarea">
                    <label for="message">*@lang('programming.time')</label>
                    <textarea name="message" rows="7" id="message" required></textarea>
                </div>
                <p class="policyText">@lang('careers.we-are-commited') <a href="#">@lang('careers.privacy')</a>.</p>
                <button class="button submit" type="submit" value="Send">Send</button>
            </form>
        </div>
    </div>
</section>
<section class="contain xliff-background-container w-100">
    <img class="xliff-background" src="{{asset('/images/img/light-blue-bg.svg')}}" alt="light blue background">
    <div class="xliff-section">

        <h1 class="h1-font">@lang('programming.xliffTranslation')</h1>
        <div class="xliff-container">
            <div class="xliff-item">
                <img src="{{asset('/images/xliff-icons/step1-icon-upload.svg')}}" alt="step one upload">
                <img class="dashed-line" src="{{asset('/images/img/dashed-line.svg')}}" alt="dashed line">
                <div>
                    <h5 class="h1-font">@lang('programming.uploadFile')</h5>
                    <p class="p-font">
                        @lang('programming.uploadFileText')
                    </p>
                </div>
            </div>

            <div class="xliff-item">
                <img src="{{asset('/images/xliff-icons/step2-icon-download.svg')}}" alt="step two download">
                <img class="dashed-line dashed-line-rotate" src="{{asset('/images/img/dashed-line.svg')}}" alt="dashed line">
                <div>
                    <h5 class="h1-font">@lang('programming.downloadXls')</h5>
                    <p class="p-font">
                        @lang('programming.downloadXlsText')
                    </p>
                </div>
            </div>
            <div class="xliff-item">
                <img src="{{asset('/images/xliff-icons/step3-icon-trans.svg')}}" alt="step three translate">
                <img class="dashed-line" src="{{asset('/images/img/dashed-line.svg')}}" alt="dashed line">
                <div>
                    <h5 class="h1-font">@lang('programming.translateColumns')</h5>
                    <p class="p-font">
                        @lang('programming.translateColumnsText')
                    </p>
                </div>
            </div>
            <div class="xliff-item">
                <img src="{{asset('/images/xliff-icons/step4-icon-ready.svg')}}" alt="step four ready">
                <div>
                    <h5 class="h1-font">@lang('programming.downloadReady')</h5>
                    <p class="p-font">
                        @lang('programming.explanationText')
                    </p>
                </div>
            </div>
        </div>
        <a href="/pages/xlf"><button class="button">@lang('programming.seeMore')</button></a>
    </div>
</section>
<section class="contain tools-container">
    <div class="tools">
        <div class="tools-info">
            <h1 class="h1-font">@lang('programming.toolsTechnologies')</h1>
            <p class="p-font">
                @lang('programming.toolsTechnologiesText')
            </p>
        </div>
        <div class="tools-img">
            <div>
                <img src="{{asset('/images/tools/php_PNG28.png')}}" alt="php logo">
                <p>@lang('programming.php')</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/HTML5CSS3Logos.svg')}}" alt="HTML & CSS logo">
                <p>@lang('programming.htmlCss')</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/1200px-Unofficial_JavaScript_logo_2.svg.png')}}" alt="javascript logo">
                <p>@lang('programming.js')</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/WordPress-logotype-wmark.png')}}" alt="wordpress logo">
                <p>@lang('programming.wp')</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/github.svg')}}" alt="github logo">
                <p>@lang('programming.github')</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/1280px-Unity_Technologies_logo.svg.png')}}" alt="unity logo">
                <p>@lang('programming.unity')</p>
            </div>
        </div>
    </div>

</section>

<script>

</script>
@endsection
@section('js')
<script src="{{ asset('js/programming.min.js') }}"></script>
@endsection