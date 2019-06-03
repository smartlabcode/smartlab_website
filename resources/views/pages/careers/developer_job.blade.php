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


        /* New style */
        #careerImage {
            height: 400px;
            background-image: url('{{ asset("images/careers/developer-page-img.svg") }}');
            background-repeat: no-repeat;
            background-position: center;
        }

        .jobParameters {
            width: 90%;
            margin: 0 auto;
        }


        .jobDetails {
            font-weight: 900 !important;
            line-height: 1em;
        }


        #applyDeveloperButton {
            border-radius: 50px;
            padding: 10px;
            background-color: #4885FA;
            width: 140px;
            color: #fff;
            cursor: pointer;
            box-shadow: 2px 2px 2px rgba(150,150,150, 0.5);
            outline: none !important;
            display: block;
            margin: 0 auto;
        }

    </style>




@section('content')

    <!-- TODO dont delete this-->
    @include('parts.break_space')


    <!-- Join our team section -->
    <div id="firstSection">

        <div id="joinTextSection">

        </div>

        <div id="careerImage">

        </div>
    </div>



    <div class="jobParameters">

        <h1 id="availablePositions">@lang('careers-developer.Dev-h1')</h1>

        <br/><br/>

        <p>@lang('careers-developer.opisDev')</p>

        <br/><br/>

        <h5>@lang('careers-developer.strucne-karakteristike')</h5>
        <ul>
            <li>@lang('careers-developer.karakteristika1')</li>
            <li>@lang('careers-developer.karakteristika2')</li>
            <li>@lang('careers-developer.karakteristika3')</li>
            <li>@lang('careers-developer.karakteristika4')</li>
            <li>@lang('careers-developer.karakteristika5')</li>
            <li>@lang('careers-developer.karakteristika6')</li>
            <li>@lang('careers-developer.karakteristika7')</li>
        </ul>

        <br/><br/>
        <p> @lang('careers-developer.hello')<a href="mailto:hello@smartlab.ba" target="_blank">hello@smartlab.ba.</a></p>

        <br/>

        <p class="jobDetails">@lang('careers-developer.lokacija')</p>
        <p class="jobDetails">@lang('careers-developer.pozicije')</p>
        <p class="jobDetails">@lang('careers-developer.datum')</p>

    </div>



    <div id="sectionThree">

        <button id="applyDeveloperButton">@lang('careers-developer.button')</button>

        <br/><br/>

        @include('parts.error_success')

        <div id="targetPoint"></div>
        <br/>
        <form id="careerForm" action="/careers" method="POST" enctype="multipart/form-data">

            <!-- Include token -->
            @csrf

            <div class="form-group">
                <label for="name">@lang('careers-developer.name')</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="surname">@lang('careers-developer.prezime')</label>
                <input type="text" name="lastname" class="form-control" id="surname" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="phone">@lang('careers-developer.broj')</label>
                <input type="number" name="phone_number" class="form-control" id="phone" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">@lang('careers-developer.email')</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">@lang('careers-developer.napomena')</label>
                <textarea name="message" class="form-control" id="name" placeholder="" required></textarea>
            </div>

            <div class="form-group">
                <label for="category">@lang('careers-developer.kategorija')</label>
                <select class="form-control" name="category" id="category" required>
                    <option selected disabled>@lang('careers-developer.choose-kategorija')</option>
                    <option value="designer">@lang('careers-developer.dizajner')</option>
                    <option value="developer">@lang('careers-developer.developer')</option>
                    <option value="ux-ui-designer">@lang('careers-developer.dizajner-uxui')r</option>
                    <option value="practitioner">@lang('careers-developer.praktikant')</option>
                </select>


                <br/>

                <label for="uploadFileArea">@lang('careers-developer.files')</label>
                <div id="uploadFileArea" class="form-control" onclick="openUploadWindow()">
                    <p id="uploadText">@lang('careers-developer.click-to')<br/> @lang('careers-developer.upload-files')</p>
                    <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
                </div>

            </div>


            <p class="policyText">@lang('careers-developer.we-are-commited') <a href="#">@lang('careers-developer.privacy')</a>.</p>
        {{--            Subject: <input type="text" name="subject" />--}}

        <!-- Submit form -->
            <button id="sendCareerButton">@lang('careers-developer.send')</button>

        </form>

    </div>




@endsection