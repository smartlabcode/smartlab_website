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
        <div class="section-one-animation">

        </div>


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
                <img src="{{asset('/images/tools/moodle-logo-39b36ce704607472-512x512.png')}}" alt="Moodle logo">
                <p>Moodle</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/bbb-logo.png')}}" alt="BigBlueButton logo">
                <p>BigBlueButton</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/php_PNG28.png')}}" alt="PHP logo">
                <p>PHP</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/htmlcss-js.png')}}" alt="HTML/CSS/JS logo" style="width:150px">
                <p>HTML/CSS/JS</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/scorm.png')}}" alt="SCORM logo">
                <p>SCORM</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/unnamed.png')}}" alt="MoodleAPP logo">
                <p>MoodleAPP</p>
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
            path: "{{asset('/images/moodle-animation')}}" // the path to the animation json

        });
        lottie.setQuality("medium");
        let ready = false;
        let loaderContainer = document.querySelector(".loader-container");
        animationData.addEventListener("DOMLoaded", function() {
            ready = true;
            lottie.play();
            loaderContainer.classList.add("loaderEnd");
            setTimeout(function() {
                loaderContainer.style.display = "none";
            }, 1000)
        })
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
        const header = [
            "Popup header 1",
            "Popup header 2"
        ]
        const description = [
            "Popup description 1",
            "Popup description 2"
        ]

        let popupClickLeft = document.querySelector(".popup-click-left");
        let popupClickRight = document.querySelector(".popup-click-right");
        let popupVideo = document.querySelector(".popup-content");
        let popupImage = document.querySelector("#popup-image");
        let popupImageBack = document.querySelector("#popup-image-back");
        let closePopup = document.querySelector(".close");
        let popup = document.querySelector(".popup");
        let popupOverlay = document.querySelector(".popup-overlay");

        closePopup.addEventListener("click", popupClose);
        popupOverlay.addEventListener("click", popupClose);

        let popupDescription = document.querySelector("#popup-description");
        let popupHeader = document.querySelector("#popup-header");
        let popupNext = document.querySelector("#popup-next");
        let popupPrev = document.querySelector("#popup-prev");
        let currentImage = 0;

        closePopup.addEventListener("click", popupClose);
        popupOverlay.addEventListener("click", popupClose);
        popupNext.addEventListener("click", () => {
            currentImage++;
            if (currentImage >= description.length) {
                popupContent(0, "right");
            } else {
                popupContent(currentImage, "right");
            }

        });
        popupPrev.addEventListener("click", () => {
            currentImage--;
            if (currentImage < 0) {
                popupContent(description.length - 1, "left");
            } else {
                popupContent(currentImage, "left");
            }

        });

        function popupClose() {
            popupImage.src = "";
            closePopup.style.display = "none";
            popup.classList.remove("shadow-2");
            popupOverlay.style.width = "0vw";
            popupOverlay.style.height = "0vh";
        }

        function popupContent(imgIndex, side) {
            let cssClasName = "slideFromLeft";
            currentImage = imgIndex;
            popupImage.src = images[imgIndex];
            if (side == "right") {

                if (imgIndex >= 1) {
                    popupImageBack.src = images[imgIndex - 1];
                }
                if (imgIndex == 0) {
                    popupImageBack.src = images[images.length - 1];
                }
                if (imgIndex == images.length) {
                    popupImageBack.src = images[0];
                }
            } else {

                if (imgIndex >= 0) {
                    popupImageBack.src = images[imgIndex + 1];
                }
                if (imgIndex == images.length - 1) {
                    popupImageBack.src = images[0];
                }
            }


            if (side == "left") {
                popupImage.removeAttribute("style");
                popupImage.style.right = "-100%";

                popupImage.classList.remove("slideFromLeft");
                void popupHeader.offsetWidth;
                cssClasName = "slideFromRight";

            } else {
                popupImage.removeAttribute("style");
                popupImage.style.left = "-100%";

                popupImage.classList.remove("slideFromRight");
                void popupHeader.offsetWidth;
                cssClasName = "slideFromLeft";
            }
            popupHeader.classList.remove("fadeIn");
            popupDescription.classList.remove("fadeIn");
            popupImage.classList.remove(cssClasName);
            popupImage.classList.remove("fadeIn");
            void popupHeader.offsetWidth;
            void popupDescription.offsetWidth;
            void popupImage.offsetWidth;
            popupHeader.classList.add("fadeIn");
            popupDescription.classList.add("fadeIn");
            popupImage.classList.add(cssClasName);
            popupImage.classList.add("fadeIn");
            closePopup.style.display = "inline-block";
            popup.classList.add("shadow-2");
            popupOverlay.style.width = "100vw";
            popupOverlay.style.height = "100vh";
            popupHeader.innerText = header[imgIndex];
            popupDescription.innerText = description[imgIndex];
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
        popupClickLeft.addEventListener("click", () => popupContent(imgOne, "left"));
        popupClickRight.addEventListener("click", () => popupContent(imgTwo, "right"));
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
        /*function addIndicator(left, right) {
            for (let i = 0; i < images.length; i++) {
                sliderIndicator.childNodes[i].classList.remove("active-indicator");
                sliderIndicator.childNodes[left].classList.add("active-indicator");
                if (window.innerWidth > 768) {
                    sliderIndicator.childNodes[right].classList.add("active-indicator");
                }
            }
        }*/
        let imgOne = 0;
        let imgTwo = 1;
        let sliderIndicator = document.querySelector(".slider-indicator");
        for (let i = 0; i < images.length / 2; i++) {
            let span = document.createElement("span");
            sliderIndicator.appendChild(span);
        }
        /*for (let i = 0; i < images.length; i++) {
            let span = document.createElement("span");
            sliderIndicator.appendChild(span);
        }*/

        /*function changeImage(par) {
            let currentLeft, currentRight;
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
        }*/
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
                    contact.style.height = 1270 + "px";
                } else {
                    contact.style.height = 940 + "px";
                }

            }
        });
    });
</script>
@endsection