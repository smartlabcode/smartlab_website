<!-- Extend main layout -->
@extends('layouts.app')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    /* SECTION ONE */
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885FA;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    body {
        background: white !important;
        overflow-x: hidden !important;
    }

    html {
        overflow-x: hidden !important;
    }





    .bold {
        font-weight: bold;
    }

    .button:focus {
        outline: 0;
    }

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 3em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 2em;
        color: var(--h2-color);
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.5em;
        font-weight: 300;
        color: var(--h1-color);
    }

    .shadow-1 {
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
    }

    .background-section-one {
        /*background-image: url("/img/header-fluid-blue.svg");
  background-repeat: no-repeat;
  background-attachment: local;
  background-origin: border-box;
  background-size: cover;
  width: 100%;
  height: 100%;
  background-position-x: 300px;
  background-position-y: -200px;*/
        position: relative;
    }

    .background-img {
        position: absolute;
        /*width: calc(75vw - 100px);*/
        height: 113vh;
        top: -150px;
        right: -200px;
        z-index: -10;
    }

    .background-img-orange-circle {
        position: absolute;
        position: absolute;
        width: 25%;
        transform: rotate(0deg);
        top: -250px;
        right: 650px;
        z-index: -100;
    }

    .background-img-circle {
        position: absolute;
        width: 250px;
        z-index: -15;
    }

    .--circle1 {
        top: 100px;
        left: -100px;
    }

    .--circle2 {
        bottom: -12%;
        right: 39%;
    }

    .--circle3 {
        top: -100px;
        left: 15%;
    }

    .text-center {
        text-align: center;
    }

    .section-one {
        position: relative;
        top: 100px;
        display: flex;
        padding-bottom: 100px;
        justify-content: space-between;
    }

    .section-one-text {
        width: 50%;
        align-self: center;
        padding-right: 50px;
        justify-content: space-between;
    }

    .section-one-text ul {
        padding-top: 20px;
        font-weight: 500;
        list-style-type: circle;
    }

    /*.section-one-text h2,
.section-one-text h1 {
  font-size: 2em;
}*/
    .section-one-animation {
        object-fit: contain;
        height: 75vh;
        width: 50%;
        min-width: 350px;
    }

    .contain {
        max-width: 1500px;
        width: 90%;
        margin: 0 auto;
    }

    /* SECTION TWO*/


    #slider {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        position: relative;
    }

    #slider div {
        display: flex;
        height: 300px;
        width: calc(100% + 50px);

    }

    .slider-left {
        width: 50%;
        margin-right: 5px;
        background-color: white;
        border-radius: 15px;
    }

    .slider-left img {
        object-fit: contain;
        width: 100%;
        border-radius: 15px;
    }

    .slider-right {
        width: 50%;
        margin-left: 5px;
        background-color: white;
        border-radius: 15px;
    }

    .slider-right img {
        object-fit: cover;
        width: 100%;
        border-radius: 15px;
    }

    #slider>img {
        height: 100%;
        border-radius: 10px;
        display: inline-block;
    }

    #slider>img:first-child {
        margin-right: 5px;
        width: 50px;
        height: 50px;
        position: absolute;
        display: inline-block;
        top: 45%;
        left: -15px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 100;
    }

    #slider>img:last-child {
        margin-left: 5px;
        width: 50px;
        height: 50px;
        position: absolute;
        display: inline-block;
        top: 45%;
        right: -65px;
        border-radius: 100%;
        cursor: pointer;
        z-index: 100;
    }

    .button {
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 260px;
        height: 70px;
        font-size: 1.4em !important;
        font-weight: 500;
        color: white;
        background-color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
        transition: all 0.2s ease-in;
    }

    .button:hover {
        background-color: white;
        color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 1.8em;
        color: var(--h2-color);
    }

    .section3 {
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        height: 200px;
        width: 100%;
        "

    }

    .secTwoBg {
        top: 0%;
        transform: rotate(242deg);
        position: absolute;
        left: -97%;
        /* left: -1052px; */
        z-index: -120;
        /* display: flex; */
        /* justify-content: flex-start; */
        width: 108%;
    }

    .secTwoBg2 {
        width: 50%;
        /* width: 800px; */
        position: absolute;
        top: -145px;
        z-index: -130;
        left: -589px;
        /* transform: rotate(25deg); */
    }

    .secTwoBg3 {
        width: 400px;
        position: absolute;
        transform: rotate(166deg);
        z-index: -130;
        display: flex;
        justify-content: flex-end;
        left: 84%;
        top: 110%;
    }

    .secTwoBg4 {
        width: 15%;
        position: absolute;
        z-index: -130;
        left: 86%;
        /* top: 0; */
        top: 0;
        /* top: 192%; */
    }

    .relative {
        position: relative;

    }

    .contact-form-container {
        width: 50%;
        margin: 0 auto;

    }

    .contact-form-container .h1-font {
        color: var(--h1-color);
    }

    .contact-form-container {
        color: var(--h1-color);
    }

    .contact-form-container h1 {
        color: var(--h1-color);
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        font-size: 1.3em;
        font-family: "Montserrat", sans-serif;
        margin-bottom: 0;
    }

    .contact-form-group {
        display: flex;
        flex-basis: 100%;
        justify-content: space-between;
        padding-top: 20px;
    }

    .contact-form-group div {
        flex-basis: 47%;
    }

    .contact-form-group input,
    textarea {
        padding: 15px 25px;
        padding-right: 0;
        border-radius: 10px;
        border: 1px solid rgba(122, 161, 233, 0.5);
        resize: none !important;
    }

    input:focus,
    textarea:focus {
        outline: none !important;
        border: 1px solid rgba(122, 161, 233, 1);
    }

    .contact-form-group label,
    .contact-form-group input,
    .contact-form-group textarea {
        width: 100%;
        margin-top: 5px;
    }

    .textarea {
        display: flex;
        flex-direction: column;
    }

    .button-orange:hover {
        background-color: white !important;
        color: var(--button-bg-orange) !important;
        border: 1px solid var(--button-bg-orange) !important;
    }

    .submit {
        align-self: flex-end;
        margin-top: 20px;
        margin-bottom: 250px;
        background-color: var(--button-bg-orange);
        border: 1px solid var(--button-bg-orange);
    }

    .submit:hover {
        background-color: transparent;
        color: var(--button-bg-orange);
        border: 1px solid var(--button-bg-orange);
    }

    .contact-section {
        width: 112%;
        left: -6%;
        position: relative;
        padding-top: 80px;
        overflow: hidden;
        height: 0%;
        transition: all 0.2s ease-in;
    }

    .contact-form-container p {
        font-family: "Montserrat", sans-serif;
        font-size: 1.3em;
        text-align: center;
        padding-bottom: 50px;
    }

    /* SECTION THREE*/
    .xliff-container {
        display: flex;
        justify-content: space-between;
        margin: 100px auto;

    }

    .xliff-container .h1-font {
        font-size: 1.6em;
    }

    .xliff-section .button {
        box-sizing: border-box;
        background-color: var(--h1-color);
        border: 1px solid var(--h1-color);

    }

    .xliff-section .button:hover {
        background-color: transparent;
        color: var(--h1-color);
        border: 1px solid var(--h1-color);
    }

    .xliff-item .p-font {
        font-size: 1.2em;
    }

    .xliff-item {
        max-width: 200px;
        flex-basis: 25%;
        position: relative;
    }

    .xliff-item:nth-child(even) {
        margin-top: 50px;
    }

    .xliff-section {
        text-align: center;
        flex-basis: 100%;
    }

    .xliff-section h1 {}

    .xliff-section h3 {
        font-size: 2.5em;
        font-weight: bold;
    }

    .xliff-background {
        object-fit: cover;
        position: absolute;
        width: 120vw;
        z-index: -100;
        transform: translate(-12%, 3%);
    }

    .xliff-background-container {
        height: 100%;
        position: relative;
        margin-top: 250px !important;
        margin-bottom: 250px !important;
        display: flex;
        align-items: center;
    }

    .dashed-line {
        position: absolute;
        top: 30%;
        right: -83%;
        width: 60%;
    }

    .dashed-line-rotate {
        transform: rotate(147deg) !important;
        top: 6%;
    }

    .tools-container {
        position: relative;
    }

    .tools {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .tools-info {
        flex-basis: 30%;
    }

    .tools-img {
        flex-basis: 50%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .tools-img div {
        flex-basis: 30%;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 20px;
        width: 150px;
        height: 200px;
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .tools-img-margin-both {
        margin: 0 20px;
    }

    .tools-img img {
        width: 125px;
        margin-top: 1rem;
        flex-basis: 100%;
        object-fit: contain;
    }

    .tools-img p {
        margin: 1rem 0;
        font-size: 1.3em;
        font-family: "Montserrat", sans-serif;

    }

    @media screen and (min-width: 2000px) {
        .background-img {
            top: -250px;
            right: -500px;
        }

        .background-img-orange-circle {
            right: 1210px;
        }

        .secTwoBg {
            left: -117%;
        }

        .secTwoBg2 {
            top: -195px;
            left: -939px;
        }

        .secTwoBg4 {
            top: 0;
            left: 94%;
        }

        .xliff-background {
            width: 107vw;
            transform: translate(-26%, -8%);
        }

        .xliff-section {
            top: 325px;
        }

        .tools-container {

            top: 776px;
        }
    }

    @media screen and (max-width: 1530px) {
        .xliff-container {
            margin: 30px auto;
        }

        .xliff-background {
            transform: translate(-13%, -12%);
        }

        .xliff-section {
            top: 125px;
        }
    }

    @media screen and (max-width: 1400px) {
        .background-img {
            top: -9%;
            right: -25%;
        }

        .section-one {
            justify-content: space-around;
        }

        .background-img-orange-circle {
            top: -181px;
            right: 545px;
        }

        .secTwoBg4 {
            left: 94%;
            top: 0;
        }

        .secTwoBg2 {
            top: -225px;
        }

    }

    @media screen and (max-width: 1320px) {
        .background-img {
            right: -45%;
        }

        .background-img-orange-circle {
            top: -181px;
            right: 635px;
        }

        .xliff-background {
            width: 135vw;
        }

        .dashed-line {
            position: absolute;
            top: 27%;
            right: -38%;
            width: 50%;
        }

        .dashed-line-rotate {
            transform: rotate(147deg) !important;
            top: 6%;
        }

        .tools-container {
            top: 400px;
        }
    }

    @media screen and (max-width: 1200px) {
        .contain {
            width: 95%;
            margin: 0 auto;
            margin-bottom: 100px;
        }

        .section-one-text {
            padding-right: 0;
        }

        .dashed-line {
            right: -28%;
            width: 40%;
        }

        .tools-container {
            top: 250px;
        }
    }

    @media screen and (max-width: 1175px) {
        .background-img {
            right: -50%;
        }

        .background-img-orange-circle {
            right: 530px;
        }

        .button {
            width: 208px;
            height: 56px;
        }

    }

    @media screen and (max-width: 1065px) {

        .background-img {
            right: -55%;
        }

        .dashed-line {
            right: -23%;
            width: 35%;
        }
    }


    @media screen and (max-width: 1030px) {
        .background-img {
            right: -54%;
        }

        .dashed-line {
            right: -16%;
            width: 35%;
        }

        .w-100 {
            width: 100% !important;
        }

        .xliff-background {
            width: 145vw;
            top: 13%;
        }

        .background-img-orange-circle {
            right: 302px;
        }

    }

    @media screen and (max-width: 900px) {
        .background-img {
            top: 21%;
            right: -75%;
            transform: rotate(61deg);
        }

        .background-img-orange-circle {
            right: -16%;
            top: 38%;
        }

        .--circle3 {
            top: 71%;

        }

        .--circle2 {

            right: -21%;
        }

        .section-one ul {
            text-align: left;
        }

        .section-one {
            flex-direction: column;
            align-items: center;
            padding-bottom: 0;
        }

        .section-one-text {
            width: 100%;
            text-align: center;
            margin-top: 100px;
        }

        .section-one-animation {
            height: auto;
            width: 70%;
        }

        .contact-form-container {
            width: 80%;
        }

        .xliff-background {
            width: 170vw;
        }


    }

    @media screen and (max-width: 768px) {
        .slider-right {
            display: none !important;
        }

        .slider-left {
            width: 100%;

        }

        #slider {
            height: auto;
        }

        #slider div {
            height: 300px;
            width: 100%;
        }

        #slider>img:last-child {
            margin-left: 5px;
            width: 50px;
            height: 50px;
            position: absolute;
            display: inline-block;
            top: 50%;
            right: -25px;
            border-radius: 100%;
            transform: translate(-20%, -50%);
        }

        #slider>img:first-child {
            margin-right: 5px;
            width: 50px;
            height: 50px;
            position: absolute;
            display: inline-block;
            top: 50%;
            left: -5px;
            border-radius: 50%;
            transform: translate(-20%, -50%);
        }

        .slider-left img {
            object-fit: contain;
            width: 100%;
        }

        .background-img-orange-circle {
            right: -109px;
            top: 47%;
            transform: rotate(30deg);
        }

        .background-img {
            top: 21%;
            right: -92%;
            transform: rotate(61deg);
        }

        .xliff-background {
            width: 170vw;
            top: 18%;
        }



        .--circle2 {
            bottom: 0%;
            right: 74%;
        }

        .--circle3 {
            top: -100px;
            left: 84%;
        }

        .xliff-item .p-font {
            font-size: 1em;
        }

        .xliff-item {
            max-width: 200px;
            flex-basis: 25%;
            position: relative;
            padding: 0 10px;
            font-size: 11px;
        }

        .tools {
            align-items: center;
            flex-direction: column;
        }

        .tools-img-margin-both {
            margin: 0 0;
        }

        .tools-info {
            text-align: center;
        }
    }

    @media screen and (max-width: 600px) {
        #app {
            width: 100% !important;
            margin: 0 !important;
        }

        .background-img {
            top: 12%;
            right: -87%;
            transform: rotate(67deg);
            width: 145%;
        }

        .h1-font {
            font-size: 1.5em;
        }

        .h2-font {
            font-size: 1.3em;
        }

        .p-font {
            font-size: 1.2em;
        }

        .button {
            width: 166px;
            height: 45px;
            font-size: 1.2em;
            outline: hidden;
        }

        .xliff-container {
            flex-wrap: wrap;
            justify-content: center;
        }

        .xliff-item {
            flex-basis: 100%;
            max-width: 80%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .xliff-item img {
            width: 50%;
        }

        .dashed-line {
            display: none;
        }

        .xliff-background {
            width: 558%;
            top: 15%;
        }

        .xliff-item:nth-child(even) {
            margin-bottom: 40px;

        }

        .xliff-background-container {
            margin-bottom: -100px !important;
        }

        .tools-container {
            top: 400px;
        }

        .tools-img {
            flex-basis: 30%;
            align-items: center;
        }

        .tools-img div {

            margin-bottom: 0;
        }

        .tools-info {
            flex-basis: 60%;
        }

        .background-img-orange-circle {
            right: -71px;
            top: 49%;
        }

        .--circle2 {
            bottom: 77%;
            right: -15%;
        }

        .--circle3 {
            top: 74%;
            left: -9%;
        }

        .secTwoBg4 {

            left: 89%;
            /* top: 0; */
            top: 0;
            /* top: 192%; */
        }
    }

    @media screen and (max-width: 425px) {
        .button {
            font-size: 1.2em !important;
        }

        .section-one-animation {
            height: 270px;
            padding: 0;
        }

        .section-one {
            margin-bottom: 40px;
        }

        .tools-container {
            top: 260px;
            margin-bottom: -100px;
        }

        .section3 {
            margin-bottom: 0 !important;
        }

        .relative {
            top: -180px;
            margin-bottom: -100px;
        }

        .w-100 {
            top: -75px;
        }

        .xliff-background {
            width: 644%;
            top: 16%;
        }

        #slider>img:last-child {
            right: -14px;
        }

        #slider>img:first-child {
            left: 5px;
        }

        .our-works .h1-font {
            margin-top: 30px;
            margin-bottom: 80px;
        }

        .contact-form-group {
            flex-direction: column;
        }
    }

    @media screen and (max-width: 360px) {
        .section-one {
            top: 0;
        }

        .background-img {
            top: 14%;
        }

        .background-img-orange-circle {
            right: -25px;
            /* bottom: -89%; */
            top: 61%;
            transform: rotate(-308deg);
        }

        .--circle1 {
            top: 60%;
        }

        .--circle3 {
            top: 15%;
            left: 70%;
        }

        .xliff-background {
            width: 747%;
            top: 16%;
        }

        .section-one-animation {
            padding: 0 27px;
        }

        .section-one-text {
            margin-bottom: 10px;
        }

        .secTwoBg4 {
            top: 0;
        }

        .tools-container {
            top: 330px;
            margin-bottom: -100px;
        }

    }
</style>
@section('content')

<div class="background-section-one">
    <img class="background-img" src="../images/img/header-fluid-blue.svg" />
    <img class="background-img-orange-circle" src="../images/img/orange-circle.svg" />
    <img class="background-img-circle --circle1" src="../images/img/fluid-bright-circle.svg" />
    <img class="background-img-circle --circle2" src="../images/img/fluid-bright-circle.svg" />
    <img class="background-img-circle --circle3" src="../images/img/fluid-bright-circle.svg" />
    <section class="section-one contain">

        <div class="section-one-text" data-aos="zoom-in">

            <h1 class="h1-font bold">Development and programming</h1>
            <p class="p-font">
                Back and front-end development of learning and performance managment systems, as well as custom functions and iteractivity options making your courses compelling and user friendly.
                <ul class="p-font">
                    <li>Custom made tracking and reporting features</li>
                    <li>Flash to HTML5 conversion of existing courses to enable delivery for multiple platforms</li>
                    <li>Scenario based quizes</li>
                    <li>Englaging tools for webinars</li>
                    <li>Augumented reality integrated</li>
                </ul>
            </p>
        </div>
        <img data-aos="zoom-in" class="section-one-animation" src="../images/img/dev-page-illustration.svg" />


    </section>
</div>

<!--   SECTION TWO -->



<section class="contain relative">
    <img class="secTwoBg2" src="../images/img/orange-circle.svg">

    <img class="secTwoBg" src="../images/img/header-fluid-blue.svg">



    <div style="margin-top: 280px; display: flex; justify-content: center" class="our-works">
        <h2 class="h1-font">Our Works</h2>
    </div>
    <div id="slider">
        <img class="prethodni shadow-1" onclick="changeImage('previous')" src="../images/img/Picture2.png">
        <div>
            <div class="slider-left shadow-1"><img id="firstPart" src="" /></div>
            <div class="slider-right shadow-1"><img id="secondPart" src="" /></div>
        </div>
        <img class="sljedeci shadow-1" src="../images/img/Picture3.png" onclick="changeImage('next')">
    </div>
    <img class="secTwoBg3" src="../images/img/fluid-bright-circle.svg">
    <div class="section3 contain">
        <div style="height: 50%">
            <p class="p-font" style="margin-top: 50px; display: flex; justify-content: center; font-weight: 500">Want to see more:</p>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button" id="schedule">Schedule a demo</button>
        </div>
        <img class="secTwoBg4" src="../images/img/orange-circle.svg">
    </div>
    <div class="contact-section" id="contact">
        <div class="contact-form-container">
            <h2 class="text-center h1-font">Contact</h2>
            <form class="contact-form">
                <div class="contact-form-group">
                    <div>
                        <label for="name">*Name and Surname</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div>
                        <label for="company">Company</label>
                        <input type="text" name="company" id="company" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="subject">*Subject</label>
                        <input type="text" name="subject" id="subject" />
                    </div>
                    <div>
                        <label for="email">*Email</label>
                        <input type="email" name="email" id="email" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="date">*Meeting date</label>
                        <input type="date" name="date" id="date" />
                    </div>
                    <div>
                        <label for="time">*Meeting time</label>
                        <input type="time" name="time" id="time" />
                    </div>
                </div>
                <div class="contact-form-group textarea">
                    <label for="message">*Message</label>
                    <textarea name="message" rows="7" id="message"></textarea>
                </div>
                <input class="button submit" type="submit" value="Send" />
            </form>
        </div>
    </div>
</section>
<section class="contain xliff-background-container w-100">
    <img class="xliff-background" src="../images/img/light-blue-bg.svg">
    <div class="xliff-section">

        <h1 class="h1-font">XLIFF Translation</h1>
        <div class="xliff-container">
            <div class="xliff-item">
                <img src="../images/xliff-icons/step1-icon-upload.svg">
                <img class="dashed-line" src="../images/img/dashed-line.svg">
                <div>
                    <h5 class="h1-font">Upload your file<h5>
                            <p class="p-font">
                                Upload XLF and select languages for translation
                            </p>
                </div>
            </div>

            <div class="xliff-item">
                <img src="../images/xliff-icons/step2-icon-download.svg">
                <img class="dashed-line dashed-line-rotate" src="../images/img/dashed-line.svg">
                <div>
                    <h5 class="h1-font">Download XLS<h5>
                            <p class="p-font">
                                Download XLS file (excel) which contains all the data from your original XLF and additional columns for selected languages
                            </p>
                </div>
            </div>
            <div class="xliff-item">
                <img src="../images/xliff-icons/step3-icon-trans.svg">
                <img class="dashed-line" src="../images/img/dashed-line.svg">
                <div>
                    <h5 class="h1-font">Translate columns<h5>
                            <p class="p-font">
                                Insert translations in given columns and upload yourfiles (Original XLF and new XLS file with translations)
                            </p>
                </div>
            </div>
            <div class="xliff-item">
                <img src="../images/xliff-icons/step4-icon-ready.svg">
                <div>
                    <h5 class="h1-font">Ready for download<h5>
                            <p class="p-font">
                                Now server creates XLF files for all selectedlanguages and then they are reay to download
                            </p>
                </div>
            </div>
        </div>
        <button class="button">See more</button>
    </div>
</section>
<section class="contain tools-container">
    <div class="tools">
        <div class="tools-info">
            <h1 class="h1-font">Tools and Technologies</h1>
            <p class="p-font">
                We design custom eLearning training that aligns with your strategic corporate objectives using a vareity of tools and technologies.
            </p>
        </div>
        <div class="tools-img">
            <div>
                <img src="../images/tools/php_PNG28.png">
                <p>PHP Development</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="../images/tools/HTML5CSS3Logos.svg">
                <p>HTML & CSS3</p>
            </div>
            <div>
                <img src="../images/tools/1200px-Unofficial_JavaScript_logo_2.svg.png">
                <p>JavaScript</p>
            </div>
            <div>
                <img src="../images/tools/WordPress-logotype-wmark.png">
                <p>Wordpress</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="../images/tools/github.svg">
                <p>GitHub</p>
            </div>
            <div>
                <img src="../images/tools/1280px-Unity_Technologies_logo.svg.png">
                <p>Unity</p>
            </div>

        </div>

</section>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();

    var imgOne = 0;
    var imgTwo = 1;

    var images = [
        "https://static.igre123.net/slike/212266-121951/mala-maca.jpg", // 0
        "https://opusteno.rs/slike/2012/03/smesne-slike-14024/mala-maca.jpg", // 1
        "https://static.igre123.net/slike/235049-148875/mala-maca.jpg", // 2
        "https://static.igre123.net/slike/205865-134729/mala-maca.jpg" // 3
    ];


    function changeImage(par) {
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
</script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let schedule = document.querySelector("#schedule");
        let contact = document.querySelector("#contact");


        schedule.addEventListener("click", function() {
            if (contact.clientHeight != 80) {
                contact.style.height = 0;
            } else {
                if (window.innerWidth <= 425) {
                    contact.style.height = 140 + "%";
                } else {
                    contact.style.height = 100 + "%";
                }

            }
        });
    });
</script>
@endsection