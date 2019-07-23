<!-- Extend main layout -->
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/coursesMoodleAnimations.min.css') }}" rel="stylesheet">
<div class="background-section-one">
    <img class="background-img" src="{{asset('/images/img/header-illustration-group.svg')}}" alt="blue background image" />
    <img class="background-img-circle --circle1" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="fluid bright circle" />
    <img class="background-img-circle --circle2" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="fluid bright circle" />
    <img class="background-img-circle --circle3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="fluid bright circle" />
    <section class="section-one contain">

        <div class="section-one-text">

            <h1 class="h1-font bold">@lang('moodle.MoodleLMS')</h1>
            <p class="p-font">
                @lang('moodle.secOneP1')
                <ul class="p-font">
                    <li>@lang('moodle.secOneUlFirst')</li>
                    <li>@lang('moodle.secOneUlSecond')</li>
                    <li>@lang('moodle.secOneUlThird')</li>
                    <li>@lang('moodle.secOneUlFourth')</li>
                </ul>
            </p>
        </div>
        <div class="section-one-animation"></div>


    </section>
</div>


<!--   SECTION TWO -->
<section class="contain relative section-two">
    <img class="secTwoBg2" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background">
    <img class="secTwoBg" src="{{asset('/images/img/header-fluid-blue.svg')}}" alt="header blue background">
    <h2 class="h1-font center">@lang('moodle.sec2h2')</h2>
    <div id="slider">
        <div class="popup-overlay"></div>
        <div class="popup">
            <span class="close"> X </span>
            <div class="popup-container">
                <div class="popup-content">
                    <img id="popup-image" src="">
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
    <img class="secTwoBg3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="fluid bright circle background">
    <div class="section3 contain">
        <div style="height: 50%">
            <p class="p-font" style="margin-top: 50px; display: flex; justify-content: center; font-weight: 500">@lang('moodle.sec2h22')</p>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button" id="schedule">@lang('moodle.buttonSchedule')</button>
        </div>
        <img class="secTwoBg4" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background">
    </div>
    <div class="contact-section" id="contact" style="height:0px">
        <div class="contact-form-container">
            <h2 class="text-center h1-font">@lang('moodle.contact')</h2>
            <form class="contact-form" action="/demo" method="POST">
                <!-- Include token -->
                @csrf
                <div class="contact-form-group">
                    <div>
                        <label for="name">@lang('moodle.contactName')</label>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div>
                        <label for="company">@lang('moodle.contactCompany')</label>
                        <input type="text" name="company" id="company" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="subject">@lang('moodle.contactSubject')</label>
                        <input type="text" name="subject" id="subject" required />
                    </div>
                    <div>
                        <label for="email">@lang('moodle.contactEmail')</label>
                        <input type="email" name="email" id="email" required />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="date">@lang('moodle.contactDate')</label>
                        <input type="date" name="date" id="date" required />
                    </div>
                    <div>
                        <label for="time">@lang('moodle.contactTime')</label>
                        <input type="time" name="time" id="time" required />
                    </div>
                </div>
                <div class="contact-form-group textarea">
                    <label for="message">@lang('moodle.contactMessage')</label>
                    <textarea name="message" rows="7" id="message" required></textarea>
                </div>
                <input class="button submit" type="submit" value=@lang('moodle.buttonSend') />
            </form>
        </div>
    </div>
</section>
<section class="contain tools-container">
    <div class="tools">
        <div class="tools-info">
            <h1 class="h1-font">@lang('moodle.sec3h2')</h1>
            <p class="p-font">
                @lang('moodle.sec3p')
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
    document.addEventListener("DOMContentLoaded", function(event) {


        const animation = document.querySelector(".section-one-animation");
        lottie.loadAnimation({
            container: animation, // the dom element that will contain the animation
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: "{{asset('/images/moodle-animation')}}" // the path to the animation json

        });
        const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    lottie.play();
                } else lottie.pause();
            })
        });
        animationObserver.observe(animation);

        let images = [
            '{{asset("/images/mockups/dl-fin-unsa-ba.jpg")}}',
            '{{asset("/images/mockups/edu-smartlab-ba.jpg")}}'
        ];


        let popupClickLeft = document.querySelector(".popup-click-left");
        let popupClickRight = document.querySelector(".popup-click-right");
        let popupVideo = document.querySelector(".popup-content");
        let popupImage = document.querySelector("#popup-image");
        let closePopup = document.querySelector(".close");
        let popup = document.querySelector(".popup");
        let popupOverlay = document.querySelector(".popup-overlay");

        closePopup.addEventListener("click", popupClose);
        popupOverlay.addEventListener("click", popupClose);

        function popupClose() {
            popupImage.src = "";
            closePopup.style.display = "none";
            popup.classList.remove("shadow-2");
            popupOverlay.style.width = "0vw";
            popupOverlay.style.height = "0vh";
        }

        function popupContent(imgIndex) {
            popupImage.src = images[imgIndex];
            closePopup.style.display = "inline-block";
            popup.classList.add("shadow-2");
            popupOverlay.style.width = "100vw";
            popupOverlay.style.height = "100vh";
        }

        let rightImg = document.querySelector("#right-img");
        let leftImg = document.querySelector("#left-img");
        let leftImgOverlay = document.querySelector("#left-img-overlay");
        let rightImgOverlay = document.querySelector("#right-img-overlay");

        function clipPath(elem1, elem2) {
            elem1.classList.remove("circle-r");
            elem2.classList.remove("circle-l");
            void elem1.offsetWidth;
            void elem2.offsetWidth;
            elem1.classList.add("circle-r");
            elem2.classList.add("circle-l");
        }
        popupClickLeft.addEventListener("click", () => popupContent(imgOne));
        popupClickRight.addEventListener("click", () => popupContent(imgTwo));
        let prev = document.querySelector("#prev");
        let next = document.querySelector("#next");

        prev.addEventListener("click", function() {
            changeImage("previous");
            clipPath(rightImg, leftImg);
        });
        next.addEventListener("click", function() {
            changeImage("next");
            clipPath(rightImg, leftImg);
        });

        function addIndicator(left, right) {
            for (let i = 0; i < images.length; i++) {
                sliderIndicator.childNodes[i].classList.remove("active-indicator");
                sliderIndicator.childNodes[left].classList.add("active-indicator");
                if (window.innerWidth > 768) {
                    sliderIndicator.childNodes[right].classList.add("active-indicator");
                }
            }
        }
        let imgOne = 0;
        let imgTwo = 1;
        let sliderIndicator = document.querySelector(".slider-indicator");
        for (let i = 0; i < images.length; i++) {
            let span = document.createElement("span");
            sliderIndicator.appendChild(span);
        }

        function changeImage(par) {
            let currentLeft, currentRight;
            console.log("left: ", imgOne, "right: ", imgTwo);
            leftImgOverlay.src = images[imgOne];
            rightImgOverlay.src = images[imgTwo];


            if (par == "next") {

                if (imgTwo == images.length - 1) {
                    imgOne = imgTwo;
                    imgTwo = 0;
                } else {
                    imgOne = imgTwo;
                    imgTwo = imgTwo + 1;
                }
            }
            if (par == "previous") {
                if (imgOne == 0) {
                    imgTwo = imgOne;
                    imgOne = images.length - 1;

                } else {
                    imgTwo = imgOne;
                    imgOne = imgOne - 1;
                }

            }
            addIndicator(imgOne, imgTwo);
            var imgOneSrc = images[imgOne];
            var imgTwoSrc = images[imgTwo];

            document.getElementById("left-img").src = imgOneSrc;
            document.getElementById("right-img").src = imgTwoSrc;
        }
        changeImage("demo");

        let schedule = document.querySelector("#schedule");
        let contact = document.querySelector("#contact");

        schedule.addEventListener("click", function() {
            if (contact.clientHeight != 80) {
                contact.style.height = 0;
            } else {
                if (window.innerWidth <= 600) {
                    contact.style.height = 115 + "%";
                } else {
                    contact.style.height = 90 + "%";
                }

            }
        });
    });
</script>
@endsection