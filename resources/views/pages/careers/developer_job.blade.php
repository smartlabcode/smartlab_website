@extends('layouts.app')


<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885FA;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 3rem;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 2rem;
        color: var(--h2-color) !important;
    }

    .h5-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 1.4rem;
        margin-top: 0;
        margin-bottom: 0;
        color: var(--h1-color);
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4rem;
        color: #354144 !important;
    }

    .contain {
        max-width: 1440px;
        width: 90%;
        margin: 0 auto;
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

    .nav-list {
        color: rgb(20, 33, 61) !important;
    }

    .grey {
        color: rgb(20, 33, 61) !important;
    }

    .arrow::before {
        background-color: rgb(20, 33, 61) !important;
    }

    .arrow:hover:before {
        transform: rotateX(-180deg) translate(-100%, -170%);
        animation: arrow 0.2s ease-in-out forwards !important;
    }

    .nav-top p {
        color: rgb(20, 33, 61) !important;
    }

    .nav-top label {
        color: rgb(20, 33, 61) !important;
    }

    @keyframes arrow {
        0% {
            background-color: var(--h1-color);
        }

        50% {
            background-color: var(--h1-color);
        }

        100% {
            background-color: white;
        }
    }

    #firstSection {
        width: 90%;
        height: calc(100vh - 80px);
        /* TODO Check height of menu */
        margin: 0 auto;
        padding: 0;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    #firstSection>div {
        width: 50%;
        margin-top: -50px;
        /* To move section little bit to the top of the page */
        align-content: space-between;
    }



    #availablePositions {
        width: 100%;
        text-align: center;
    }


    /* Second section */
    #secondSection {
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    #secondSection .jobOffer {
        border-radius: 10px;
        width: 45%;
        box-shadow: 2px 2px 2px rgba(150, 150, 150, 0.5), -2px -2px 2px rgba(150, 150, 150, 0.5);
        display: flex;
        flex-direction: column;
    }

    #secondSection .jobOffer .jobImage {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        display: inline-block;
        width: 100%;
        height: 300px;
    }


    /* Section three */
    #sectionThree {
        width: 840px;
        padding: 10px;
        margin: 0 auto;
        height: 0;
        overflow: hidden;
        transition: 0.2s all ease-in-out;
    }


    #sectionThree>h1 {
        width: 100%;
        text-align: center;
    }


    #careerForm {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }


    #careerForm>div {
        width: 48%;
    }

    #careerForm textarea {
        height: 200px;
        resize: none;
    }


    #uploadFileArea {
        width: 100%;
        height: 108px;
        cursor: pointer;
    }


    #uploadFileArea>p {
        font-size: 16px;
        padding-top: 22px;
        text-align: center;
    }

    #inputFile {
        display: none;
    }

    .policyText {
        font-size: 12px;
        color: #aaa;
        position: relative;
        left: 4px;
    }


    /* New style */


    .jobParameters {
        width: 90%;
        margin: 0 auto;
    }


    .jobDetails {
        font-weight: 900 !important;
        line-height: 1em;
    }



    #verifiedIcon {
        width: 60px;
        height: 60px;
        position: relative;
        bottom: 5px;
    }

    .section-one {
        height: 100%;
    }

    .section-one-bg {
        position: absolute;
        width: 200vw;
        top: -160%;
        left: -68%;
        z-index: -100;
    }

    .section-one-img-container {
        position: relative;
        max-height: 600px;
        height: 600px;
        margin-top: 10%;
        margin-bottom: 10%;
    }

    .section-one-img-left-container {
        position: relative;
        max-height: 600px;
        height: 600px;
        width: 50%;
    }

    .section-one-img-left {
        position: absolute;
    }

    .--part1 {
        left: -50px;
        bottom: -20px;
        width: 60%;
    }

    .--part2 {
        top: -40px;
        right: 70px;
        width: 40%;
    }

    .section-one-img-right {
        width: 40%;
        max-height: 600px;
        position: absolute;
        margin-right: 10%;
        right: 0;
        bottom: 0;
    }

    .jobParameters ul {
        list-style-type: none;
    }

    .jobParameters h5 {
        margin-bottom: 1rem;
    }

    .jobParameters button {
        margin: 0 auto;
        display: block;
        outline: none !important;
    }

    form input,
    form textarea,
    form select,
    #uploadFileArea {
        padding: 20px 20px !important;
        height: auto !important;
        box-sizing: border-box;
        border: 3px solid #c9d6e2 !important;
        border-radius: 10px !important;
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4em !important;
    }

    form textarea {
        height: 274px !important;
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4em !important;
    }

    form input:focus,
    form textarea:focus,
    form select:focus,
    #uploadFileArea:focus {
        -webkit-box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        -moz-box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        border: 3px solid rgba(0, 53, 145, 1) !important;
        font-size: 1.4em !important;
    }

    #uploadFileArea:active {
        -webkit-box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        -moz-box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        box-shadow: -1px 1px 15px 0px rgba(0, 53, 145, 0) !important;
        border: 3px solid rgba(0, 53, 145, 1) !important;
    }

    form button {
        position: relative;
        left: 49%;
        transform: translateX(-49%);
        background-color: var(--h1-color) !important;
        border: 1px solid var(--h1-color) !important;
    }

    form button:hover {
        background-color: white !important;
        color: var(--h1-color) !important;
        border: 1px solid var(--h1-color) !important;
    }
</style>




@section('content')

<!-- TODO dont delete this-->
@include('parts.break_space')


<!-- Join our team section -->
<section class="section-one">
    <img class="section-one-bg" src="{{ asset('images/partner/designer-developer-header-bg.svg') }}" />
    <div class="section-one-img-container">
        <div class="section-one-img-left-container">
            <img class="section-one-img-left --part1" src="{{ asset('images/partner/megaphone.svg') }}" />
            <img class="section-one-img-left --part2" src="{{ asset('images/partner/we-are-hiring.svg') }}" />
        </div>
        <img class="section-one-img-right" src="{{ asset('images/partner/developer-page-img.svg') }}" />
    </div>


</section>
<section class="jobParameters contain">
    <h1 class="h1-font" id="availablePositions">@lang('careers-developer.Dev-h1')</h1>

    <br /><br />

    <p class="p-font">@lang('careers-developer.opisDev')</p>

    <br /><br />

    <h5 class="h5-font">@lang('careers-developer.strucne-karakteristike')</h5>
    <ul class="p-font">
        <li class="p-font">@lang('careers-developer.karakteristika1')</li>
        <li class="p-font">@lang('careers-developer.karakteristika2')</li>
        <li class="p-font">@lang('careers-developer.karakteristika3')</li>
        <li class="p-font">@lang('careers-developer.karakteristika4')</li>
        <li class="p-font">@lang('careers-developer.karakteristika5')</li>
        <li class="p-font">@lang('careers-developer.karakteristika6')</li>
        <li class="p-font">@lang('careers-developer.karakteristika7')</li>
    </ul>

    <br />
    <p class="h5-font"> @lang('careers-developer.hello')<a href="mailto:hello@smartlab.ba" target="_blank">hello@smartlab.ba.</a></p>

    <br />

    <p class="h5-font">@lang('careers-developer.lokacija')</p>
    <p class="h5-font">@lang('careers-developer.pozicije')</p>
    <p class="h5-font">@lang('careers-developer.datum')</p>

    <br />
    <button class="button" id="applyDeveloperButton">@lang('careers-developer.send')</button>
</section>



<section id="sectionThree" class="contain">



    <br /><br />

    @include('parts.error_success')

    <div id="targetPoint"></div>
    <br />
    <form id="careerForm" action="/careers" method="POST" enctype="multipart/form-data">

        <!-- Include token -->
        @csrf

        <div class="form-group">
            <label for="name " class="p-font">@lang('careers-developer.name')</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="surname" class="p-font">@lang('careers-developer.prezime')</label>
            <input type="text" name="lastname" class="form-control" id="surname" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="phone" class="p-font">@lang('careers-developer.broj')</label>
            <input type="number" name="phone_number" class="form-control" id="phone" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="name" class="p-font">@lang('careers-developer.email')</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="name" class="p-font">@lang('careers-developer.napomena')</label>
            <textarea name="message" class="form-control" id="name" placeholder="" required></textarea>
        </div>

        <div class="form-group">
            <label for="category" class="p-font">@lang('careers-developer.kategorija')</label>
            <select class="form-control" name="category" id="category" required>
                <option selected disabled>@lang('careers-developer.choose-kategorija')</option>
                <option value="designer">@lang('careers-developer.dizajner')</option>
                <option value="developer">@lang('careers-developer.developer')</option>
                <option value="ux-ui-designer">@lang('careers-developer.dizajner-uxui')</option>
                <option value="practitioner">@lang('careers-developer.praktikant')</option>
            </select>


            <br />

            <label for="uploadFileArea" class="p-font">@lang('careers-developer.files')</label>
            <div id="uploadFileArea" class="form-control" onclick="openUploadWindow()">
                <p id="uploadText">@lang('careers-developer.click-to') <br /> @lang('careers-developer.upload-files')</p>
                <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
            </div>

        </div>


        <p class="policyText">@lang('careers-developer.we-are-commited') <a href="#">@lang('careers-developer.privacy')</a>.</p>
        {{-- Subject: <input type="text" name="subject" />--}}

        <!-- Submit form -->
        <button class="button" id="sendCareerButton">@lang('careers-elearning.send')</button>

    </form>

</section>


<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        function openUploadWindow() {
            document.getElementById("inputFile").click();
        }


        function fileUploaded() {
            // TODO check if file is selected
            let uploadText = document.getElementById("uploadText");
            uploadText.innerHTML = "<img id='verifiedIcon' src='/images/icons/verified.svg' />";
        }


        let sectionThree = document.querySelector("#sectionThree");
        let applyButton = document.querySelector("#applyDeveloperButton");
        applyButton.addEventListener("click", function() {
            if (sectionThree.clientHeight == 20) {
                sectionThree.style.height = 100 + "%";
            } else {
                sectionThree.style.height = 0;
            }
        });
        console.log(sectionThree.clientHeight, applyButton)
    });
</script>
@endsection