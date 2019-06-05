@extends('layouts.app')


<style>

    #firstSection {
        width: 90%;
        height: calc(100vh - 80px); /* TODO Check height of menu */
        margin: 0 auto;
        padding: 0;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    #firstSection > div {
        width: 50%;
        margin-top: -50px;  /* To move section little bit to the top of the page */
        align-content: space-between;
    }

    #joinTextSection button {
        border-radius: 50px;
        padding: 10px;
        background-color: #bebebe;
        width: 120px;
        color: #111;
        cursor: pointer;
        box-shadow: 2px 2px 2px rgba(150,150,150, 0.5);
        outline: none;
    }

    #joinTextSection button:hover {
        box-shadow: 2px 3px 2px rgba(150,150,150, 0.5), -2px 0 2px rgba(150,150,150, 0.5);
    }

    #joinTextSection button:active {
        box-shadow: 1px -2px 1px rgba(150,150,150, 0.5);
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
        box-shadow: 2px 2px 2px rgba(150,150,150, 0.5), -2px -2px 2px rgba(150,150,150, 0.5);
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


    .jobHeading {
        color: orange;
        width: 100%;
        text-align: center;
    }


    .jobInfo {
        box-sizing: border-box;
        padding: 30px;
    }


    .jobButton {
        position: relative;
        left: 50%;
        margin-left: -80px;
        border-radius: 50px;
        padding: 10px;
        background-color: #007bff;
        width: 140px;
        color: #fff;
        cursor: pointer;
        box-shadow: 2px 2px 2px rgba(150,150,150, 0.5);
        outline: none !important;
    }


    /* Section three */
    #sectionThree {
        width: 620px;
        padding: 10px;
        margin: 0 auto;
    }


    #sectionThree > h1 {
        width: 100%;
        text-align: center;
    }


    #careerForm {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }


    #careerForm > div {
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


    #uploadFileArea > p {
        font-size: 16px;
        padding-top: 22px;
        text-align: center;
    }

    #inputFile {
        display: none;
    }

    #sendCareerButton {
        border-radius: 50px;
        padding: 10px;
        background-color: #14213d;
        width: 140px;
        color: #fff;
        cursor: pointer;
        box-shadow: 2px 2px 2px rgba(150,150,150, 0.5);
        outline: none !important;
        position: relative;
        left: 225px;
    }

    .policyText {
        font-size: 12px;
        color: #aaa;
        position: relative;
        left: 4px;
    }


</style>


@section('content')

    <!-- TODO dont delete this-->
    @include('parts.break_space')


    <!-- Join our team section -->
    <div id="firstSection">

        <div id="joinTextSection">
            <h1>@lang('careers.h1')</h1>

            <br/>

            <p>@lang('careers.paragraph')</p>

            <br/>

            <a href="#aboveSectionThree"><button id="applyButton">@lang('careers.button')</button></a>
        </div>

        <div></div>
    </div>



    <h1 id="availablePositions">@lang('careers.availablePositions')</h1>

    <br/><br/>

    <div id="secondSection">

        <div class="jobOffer">
            <img src="{{ asset('images/careers/designer-page-img.svg') }}" class="jobImage"/>

            <div class="jobInfo">

                <h2 class="jobHeading">@lang('careers.eL-h1')</h2>

                <br/>

                <p class="jobText">
                    @lang('careers.opisEL')
                </p>

                <br/>

                <a href="/pages/careers/elearning"><button class="jobButton">@lang('careers.readMore')</button></a>

            </div>
        </div>

        <div class="jobOffer">
            <img src="{{ asset('images/careers/developer-page-img.svg') }}" class="jobImage"/>

            <div class="jobInfo">

                <h2 class="jobHeading">@lang('careers.Dev-h1')</h2>

                <br/>

                <p class="jobText">
                    @lang('careers.opisDev')
                </p>

                <br/>

                <a href="/pages/careers/developer"><button class="jobButton">@lang('careers.readMore')</button></a>

            </div>
        </div>

    </div>



    <br/><br/><br/>


    <div id="aboveSectionThree"></div>

    <br/><br/>

    <div id="sectionThree">

        <h1>@lang('careers.apply-h1')</h1>

        <br/><br/>

        @include('parts.error_success')

        <form id="careerForm" action="/careers" method="POST" enctype="multipart/form-data">

            <!-- Include token -->
            @csrf

            <div class="form-group">
                <label for="name">@lang('careers.name')</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="surname">@lang('careers.prezime')</label>
                <input type="text" name="lastname" class="form-control" id="surname" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="phone">@lang('careers.broj')</label>
                <input type="number" name="phone_number" class="form-control" id="phone" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">@lang('careers.email')</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">@lang('careers.napomena')</label>
                <textarea name="message" class="form-control" id="name" placeholder="" required></textarea>
            </div>

            <div class="form-group">
                <label for="category">@lang('careers.kategorija')</label>
                <select class="form-control" name="category" id="category" required>
                    <option selected disabled>@lang('careers.choose-kategorija')</option>
                    <option value="designer">@lang('careers.dizajner')</option>
                    <option value="developer">@lang('careers.developer')</option>
                    <option value="ux-ui-designer">@lang('careers.dizajner-uxui')</option>
                    <option value="practitioner">@lang('careers.praktikant')</option>
                </select>


                <br/>

                <label for="uploadFileArea">@lang('careers.files')</label>
                <div id="uploadFileArea" class="form-control" onclick="openUploadWindow()">
                    <p id="uploadText">@lang('careers.click-to') <br/>@lang('careers.upload-files')</p>
                    <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
                </div>

            </div>


            <p class="policyText">@lang('careers.we-are-commited')  <a href="#">@lang('careers.privacy')</a>.</p>

            <!-- Submit form -->
            <button id="sendCareerButton">@lang('careers.send') </button>

        </form>

    </div>


    <script>

        function openUploadWindow() {
            document.getElementById("inputFile").click();
        }


        function fileUploaded() {
            // TODO check if file is selected
            document.getElementById("uploadText").innerHTML = "File uploaded";
        }

    </script>

@endsection