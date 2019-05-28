<!-- Extend main layout -->
@extends('layouts.app')
<style>
    nav {
        display: none !important;
    }

    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885FA;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    main {
        height: 100%;
    }

    body {
        background: white !important;
        overflow-x: hidden !important;
    }

    html {
        overflow-x: hidden !important;
    }

    .contain {
        max-width: 1200px;
        width: 90%;
        margin: 0 auto;
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
        position: relative;
        top: 170px;
    }

    .xliff-section h1 {}

    .xliff-section h3 {
        font-size: 2.5em;
        font-weight: bold;
    }

    .xliff-background {
        object-fit: cover;
        position: absolute;
        width: 115vw;
        z-index: -100;
        transform: translate(-20%, -12%);
    }

    .xliff-background-container {
        position: relative;
        margin-top: 40%;
    }

    .dashed-line {
        position: absolute;
        top: 27%;
        right: -56%;
        width: 60%;
    }

    .dashed-line-rotate {
        transform: rotate(147deg) !important;
        top: 6%;
    }

    .section-one-container {
        position: relative;
        margin-bottom: 250px;
        top: 100px;
    }

    .section-one-background {
        width: 77vw;
        /* height: 111%; */
        position: absolute;
        right: -38vw;
        top: -83vh;
        z-index: -100;
        transform: rotateZ(327deg);
    }

    .section-one-background-orange {
        position: absolute;
        z-index: -101;
        top: -36vh;
        width: 25vw;
        right: 27vw;
        transform: rotate(159deg);
    }

    .section-one-background-grey1 {
        position: absolute;
        width: 25%;
        left: -42%;
        z-index: -150;
    }

    .section-one-background-grey2 {
        position: absolute;
        width: 25%;
        bottom: -108%;
        right: -25%;
        z-index: -150;
    }

    .section-one-background-grey3 {
        position: absolute;
        width: 25%;
        top: -65%;
        left: -10%;
        z-index: -150;
    }

    .section-one {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        top: 100px;
    }

    .section-one-left {
        flex-basis: 45%;
    }

    .section-one-right {
        flex-basis: 45%;
        display: flex;
        text-align: right;
        align-items: center;
    }

    .section-one-right h3 {
        font-weight: bold;
    }

    .play-button-container {
        width: 150px;
        border-radius: 50%;
    }

    .play-button-container img {
        cursor: pointer;
        border-radius: 50%;
    }

    @media screen and (max-width: 1530px) {
        .xliff-container {
            margin: 30px auto;
        }

        .xliff-background {
            transform: translate(-13%, -12%);
        }
    }

    @media screen and (max-width: 1320px) {
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
    }

    @media screen and (max-width: 1200px) {
        .dashed-line {
            right: -28%;
            width: 40%;
        }
    }

    @media screen and (max-width: 1065px) {
        .dashed-line {
            right: -23%;
            width: 35%;
        }
    }

    @media screen and (max-width: 1030px) {
        .dashed-line {
            right: -16%;
            width: 35%;
        }

        .w-100 {
            width: 100% !important;
        }

        .xliff-background {
            width: 145vw;
        }
    }

    @media screen and (max-width: 900px) {
        .xliff-background {
            width: 170vw;
        }
    }

    @media screen and (max-width: 600px) {
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
            width: 666%;
            top: 6%;
        }

        .xliff-item:nth-child(even) {
            margin-bottom: 40px;

        }

        .xliff-background-container {
            margin-bottom: -100px !important;
        }
    }

    @media screen and (max-width: 425px) {
        .button {
            font-size: 1.2em !important;
        }

        .xliff-background {
            width: 666%;
            top: 10%;
        }
    }

    @media screen and (max-width: 360px) {
        .xliff-background {
            width: 890%;
            top: 7%;
        }
    }
</style>
@section('content')

<section class="contain section-one-container">
    <img class="section-one-background" src="../images/img/header-fluid-blue.svg">
    <img class="section-one-background-orange" src="../images/img/orange-circle.svg">
    <img class="section-one-background-grey1" src="../images/img/fluid-bright-circle.svg">
    <img class="section-one-background-grey2" src="../images/img/fluid-bright-circle.svg">
    <img class="section-one-background-grey3" src="../images/img/fluid-bright-circle.svg">
    <div class="section-one">

        <div class="section-one-left">
            <h1 class="h1-font">Xliff Articulate Translation Tool</h1>
            <p class="p-font">
                Back and front-end development of learning and performance managment systems, as well as custom functions and interactivity options making your courses compelling and user friendly. Lorem ipsum dolor sit amet, consectetur adipscing elit. Nam at leo viverra, varius felis eu, pellentesque lectus. In ullamcorper turpis id bibendum placerat.
            </p>
        </div>
        <div class="section-one-right">

            <div>
                <h3 class="p-font">Find out more:</h3>
                <p class="p-font">Xliff Articulate Translation Took Tutorial</p>
            </div>
            <div class="play-button-container">
                <img src="../images/img/play-button.svg">
            </div>
        </div>
    </div>
</section>
<!--<section>
    <h3>Try uploading your own file</h3>
    <div>
        <div>
            <button>Upload XLF</button>
            <form>
                <p>Select languages:</p>
                <input type="checkbox" name="German" value="German"><span>German</span><br>
                <input type="checkbox" name="English" value="English"><span>English</span><br>
                <input type="checkbox" name="Croatian" value="Croatian"><span>Croatian</span><br>
                <input type="checkbox" name="Japanese" value="Japanese"><span>Japanese</span><br>
                <input type="checkbox" name="Chinese" value="Chinese"><span>Chinese</span><br>
                <input type="checkbox" name="French" value="French"><span>French</span><br>
            </form>
        </div>
        <div>
            <span>progresss bar....</span>
            <button></button>
        </div>
    </div>
    <div>
        <p>Translate downloaded file and upload bellow original XLF and new XLS file:</p>
        <button>Upload XLF & XLS</button><span>Uploading.... progress bar</span>
    </div>
</section> -->



<section class="contain xliff-background-container w-100">
    <img class="xliff-background" src="../images/img/light-blue-bg.svg">
    <div class="xliff-section">

        <h2 class="h1-font">Process</h2>
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
    </div>
</section>

    <!-- TODO somewhere here will appear form for xliff translations if user is loggged in -->
    @auth
        <h1>XLIFF TRANSLATION FORM</h1>
    @endauth

@endsection