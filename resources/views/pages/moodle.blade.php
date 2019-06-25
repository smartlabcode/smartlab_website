<!-- Extend main layout -->
@extends('layouts.app')


<link href="{{ asset('css/coursesMoodleAnimations.css') }}" rel="stylesheet">
@section('content')

<div class="background-section-one">
    <img class="background-img" src="../images/img/header-illustration-group.svg" alt="blue background image" />
    <img class="background-img-circle --circle1" src="../images/img/fluid-bright-circle.svg" />
    <img class="background-img-circle --circle2" src="../images/img/fluid-bright-circle.svg" />
    <img class="background-img-circle --circle3" src="../images/img/fluid-bright-circle.svg" />
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
    <img class="secTwoBg2" src="../images/img/orange-circle.svg">
    <img class="secTwoBg" src="../images/img/header-fluid-blue.svg">
    <h2 class="h1-font center">@lang('moodle.sec2h2')</h2>
    <div id="slider">

        <div>
            <div class="slider-left shadow-1"><img id="firstPart" src="" />
                <img id="prev" class="prethodni shadow-1" src="../images/img/Picture2.png">
            </div>
            <div class="slider-right shadow-1"><img id="secondPart" src="" />
                <img id="next" class="sljedeci shadow-1" src="../images/img/Picture3.png">
            </div>
        </div>

    </div>
    <img class="secTwoBg3" src="../images/img/fluid-bright-circle.svg">
    <div class="section3 contain">
        <div style="height: 50%">
            <p class="p-font" style="margin-top: 50px; display: flex; justify-content: center; font-weight: 500">@lang('moodle.sec2h22')</p>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button" id="schedule">@lang('moodle.buttonSchedule')</button>
        </div>
        <img class="secTwoBg4" src="../images/img/orange-circle.svg">
    </div>
    <div class="contact-section" id="contact">
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
                <img src="../images/tools/php_PNG28.png">
                <p>@lang('programming.php')</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="../images/tools/HTML5CSS3Logos.svg">
                <p>@lang('programming.htmlCss')</p>
            </div>
            <div>
                <img src="../images/tools/1200px-Unofficial_JavaScript_logo_2.svg.png">
                <p>@lang('programming.js')</p>
            </div>
            <div>
                <img src="../images/tools/WordPress-logotype-wmark.png">
                <p>@lang('programming.wp')</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="../images/tools/github.svg">
                <p>@lang('programming.github')</p>
            </div>
            <div>
                <img src="../images/tools/1280px-Unity_Technologies_logo.svg.png">
                <p>@lang('programming.unity')</p>
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
            path: "{{'/images/moodle-animation'}}" // the path to the animation json

        });
        const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
            entries.forEach(entry => {
                console.log(entry);
                if (entry.isIntersecting) {
                    lottie.play();
                } else lottie.pause();
            })
        });
        animationObserver.observe(animation);

        var imgOne = 0;
        var imgTwo = 1;

        var images = [
            "https://static.igre123.net/slike/212266-121951/mala-maca.jpg", // 0
            "https://opusteno.rs/slike/2012/03/smesne-slike-14024/mala-maca.jpg", // 1
            "https://static.igre123.net/slike/235049-148875/mala-maca.jpg", // 2
            "https://static.igre123.net/slike/205865-134729/mala-maca.jpg" // 3
        ];

        let prev = document.querySelector("#prev");
        let next = document.querySelector("#next");

        prev.addEventListener("click", function() {
            changeImage("previous")
        });
        next.addEventListener("click", function() {
            changeImage("next")
        });

        function changeImage(par) {
            console.log("clicked")
            if (window.innerWidth > 768) {
                if (imgOne < (images.length - 2) && par == "next") {

                    imgOne = imgTwo;
                    imgTwo = imgTwo + 1;

                } else if (imgOne !== 0 && par == "previous") {
                    imgOne = imgOne - 1;
                    imgTwo = imgTwo - 1;
                }

                var imgOneSrc = images[imgOne];
                var imgTwoSrc = images[imgTwo];

                document.getElementById("firstPart").src = imgOneSrc;
                document.getElementById("secondPart").src = imgTwoSrc;

            } else {
                if (imgOne < images.length - 1 && par == "next") {

                    imgOne++;
                } else if (imgOne !== 0 && par == "previous") {
                    imgOne--;
                }
                imgOneSrc = images[imgOne];
                document.getElementById("firstPart").src = imgOneSrc;
            }

        }
        changeImage("demo");

        let schedule = document.querySelector("#schedule");
        let contact = document.querySelector("#contact");


        schedule.addEventListener("click", function() {
            if (contact.clientHeight != 80) {
                contact.style.height = 0;
            } else {
                if (window.innerWidth <= 425) {
                    contact.style.height = 160 + "%";
                } else {
                    contact.style.height = 90 + "%";
                }

            }
        });
    });
</script>
@endsection