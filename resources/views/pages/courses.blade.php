<!-- Extend main layout -->
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/coursesMoodleAnimations.min.css') }}" rel="stylesheet">
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
                </div>
                <div class="popup-description">
                    <div>
                        <h3>Popup header</h3>
                        <p>Popup text</p>
                    </div>
                    <div class="popup-controls">
                        <div class="popup-controls-prev">
                            <p>&lt;</p>
                        </div>
                        <div class="popup-controls-next">
                            <p>&gt;</p>
                        </div>
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
    <div class="contact-section" id="contact" style="height:0px">
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
                <button class="button submit" type="submit" value=@lang('courses.buttonSend')>Send</button>
            </form>
        </div>
    </div>
</section>
<section class="contain tools-container">
    <div class="tools">
        <div class="tools-info">
            <h1 class="h1-font">@lang('courses.sec3h2')</h1>
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

<script>
    document.addEventListener("DOMContentLoaded", function(event) {


        const animation = document.querySelector(".section-one-animation");
        let animationData = lottie.loadAnimation({
            container: animation, // the dom element that will contain the animation
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: "{{asset('/images/online-courses-animation')}}" // the path to the animation json

        });

        let ready = false;
        let loaderContainer = document.querySelector(".loader-container");
        animationData.addEventListener("DOMLoaded", function() {
            lottie.setQuality("low");
            ready = true;
            lottie.play();
            loaderContainer.classList.add("loaderEnd");
            setTimeout(function() {
                loaderContainer.style.display = "none";
            }, 1000)
        })
        const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
            entries.forEach(entry => {
                if (entry.isIntersecting && window.innerWidth > 768) {
                    lottie.play();
                } else lottie.pause();
            })
        });
        animationObserver.observe(animation);

        let courses = [
            "https://smartlab.ba/demowbt/project09/story_html5.html",
            "https://smartlab.ba/demowbt/project12/story_html5.html",
            "https://smartlab.ba/demowbt/project01/story_html5.html",
            "https://smartlab.ba/demowbt/project03/story_html5.html",
            "https://smartlab.ba/demowbt/project14/story_html5.html",
            "https://smartlab.ba/demowbt/project04/story_html5.html",
            "https://smartlab.ba/demowbt/project06/story_html5.html",
            "https://smartlab.ba/demowbt/project10/story_html5.html",
            "https://smartlab.ba/demowbt/project17/story_html5.html",
            "https://smartlab.ba/demowbt/project13/story_html5.html",
            "https://smartlab.ba/demowbt/project15/story_html5.html",
            "https://smartlab.ba/demowbt/project16/story_html5.html"
        ];
        let images = [
            "{{asset('/images/mockups/projects/project09.jpg')}}",
            "{{asset('/images/mockups/projects/project12.jpg')}}",
            "{{asset('/images/mockups/projects/project01.jpg')}}",
            "{{asset('/images/mockups/projects/project03.jpg')}}",
            "{{asset('/images/mockups/projects/project14.jpg')}}",
            "{{asset('/images/mockups/projects/project04.jpg')}}",
            "{{asset('/images/mockups/projects/project06.jpg')}}",
            "{{asset('/images/mockups/projects/project10.jpg')}}",
            "{{asset('/images/mockups/projects/project17.jpg')}}",
            "{{asset('/images/mockups/projects/project13.jpg')}}",
            "{{asset('/images/mockups/projects/project15.jpg')}}",
            "{{asset('/images/mockups/projects/project16.jpg')}}"
        ]

        let popupClickLeft = document.querySelector(".popup-click-left");
        let popupClickRight = document.querySelector(".popup-click-right");
        let popupVideo = document.querySelector(".popup-content");
        let popupImage = document.querySelector("#popup-image");
        let closePopup = document.querySelector(".close");
        let popup = document.querySelector(".popup");
        let popupOverlay = document.querySelector(".popup-overlay");
        let sliderRight = document.querySelector(".slider-right");
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
            popupImage.src = courses[imgIndex];
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
        let currentPair = 0;

        function addIndicator(currentPair) {
            for (let i = 0; i < images.length / 2; i++) {
                sliderIndicator.childNodes[i].classList.remove("active-indicator");
                sliderIndicator.childNodes[currentPair].classList.add("active-indicator");
            }
        }
        let imgOne = 0;
        let imgTwo = 1;
        let sliderIndicator = document.querySelector(".slider-indicator");
        for (let i = 0; i < images.length / 2; i++) {
            let span = document.createElement("span");
            sliderIndicator.appendChild(span);
        }

        function changeImage(par) {
            // todo prev par preskače ponekad
            let currentLeft, currentRight;
            leftImgOverlay.src = images[imgOne];
            rightImgOverlay.src = images[imgTwo];


            if (par == "next") {
                imgOne = imgOne + 2;
                imgTwo = imgTwo + 2;
                if (imgOne > images.length - 1 && imgTwo > images.length - 1) {
                    imgOne = 0;
                    imgTwo = 1;
                    currentPair = 0;
                } else if (imgTwo > images.length - 1) {
                    imgOne = images.length - 1;
                    imgTwo = 0;
                    currentPair = Math.floor((images.length - 1) / 2);
                } else if (imgOne > images.length - 1) {
                    imgOne = 0;
                    imgTwo = 1;
                    currentPair = 0;
                } else {
                    currentPair++;
                }

            }
            if (par == "previous") {
                imgTwo = imgTwo - 2;
                imgOne = imgOne - 2;
                if (imgOne < 0 && imgTwo < 0) {
                    imgOne = images.length - 2;
                    imgTwo = images.length - 1;
                    currentPair = Math.floor((images.length - 1) / 2);
                } else if (imgTwo < 0) {
                    imgOne = images.length - 2;
                    imgTwo = images.length - 1;
                    currentPair = Math.floor((images.length - 1) / 2);
                } else if (imgOne < 0) {
                    imgOne = images.length - 1;
                    imgTwo = 0;
                    currentPair = Math.floor((images.length - 1) / 2);
                } else {
                    currentPair--;
                }
            }
            addIndicator(currentPair);
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