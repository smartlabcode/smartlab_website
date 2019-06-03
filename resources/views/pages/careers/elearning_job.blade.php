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
        <h1 id="availablePositions">@lang('careers-elearning.EL-h1')</h1>

        <br/><br/>

        <p>@lang('careers-elearning.opisEL')</p>

        <br/><br/>

        <h5>@lang('careers-elearning.strucne-karakteristike')</h5>
        <ul>
            <li>@lang('careers-elearning.karakteristika1')</li>
            <li>@lang('careers-elearning.karakteristika2')</li>
            <li>@lang('careers-elearning.karakteristika3')</li>
            <li>@lang('careers-elearning.karakteristika4')</li>
            <li>@lang('careers-elearning.karakteristika5')</li>
        </ul>

        <br/>

        <h5>@lang('careers-elearning.pozeljno')</h5>
        <ul>
            <li>@lang('careers-elearning.njemacki')</li>
            <li>@lang('careers-elearning.frontend')</li>
        </ul>

        <br/><br/>
        <p>@lang('careers-elearning.hello') <a href="mailto:hello@smartlab.ba" target="_blank">hello@smartlab.ba.</a></p>

        <br/>

        <p class="jobDetails">@lang('careers-elearning.lokacija')</p>
        <p class="jobDetails">@lang('careers-elearning.pozicije')</p>
        <p class="jobDetails">@lang('careers-elearning.datum')</p>

    </div>



    <div id="sectionThree">

        <a href="#targetPoint"><button id="applyDeveloperButton">@lang('careers-elearning.button')</button></a>

        <br/><br/>

        @include('parts.error_success')

        <div id="targetPoint"></div>
        <br/>
        <form id="careerForm" action="/careers" method="POST" enctype="multipart/form-data">

            <!-- Include token -->
            @csrf

            <div class="form-group">
                <label for="name">@lang('careers-elearning.name')</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="surname">@lang('careers-elearning.prezime')</label>
                <input type="text" name="lastname" class="form-control" id="surname" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="phone">@lang('careers-elearning.broj')</label>
                <input type="number" name="phone_number" class="form-control" id="phone" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">@lang('careers-elearning.email')</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">@lang('careers-elearning.napomena')</label>
                <textarea name="message" class="form-control" id="name" placeholder="" required></textarea>
            </div>

            <div class="form-group">
                <label for="category">@lang('careers-elearning.kategorija')</label>
                <select class="form-control" name="category" id="category" required>
                    <option selected disabled>@lang('careers-elearning.choose-kategorija')</option>
                    <option value="designer">@lang('careers-elearning.dizajner')</option>
                    <option value="developer">@lang('careers-elearning.developer')</option>
                    <option value="ux-ui-designer">@lang('careers-elearning.dizajner-uxui')</option>
                    <option value="practitioner">@lang('careers-elearning.praktikant')</option>
                </select>


                <br/>

                <label for="uploadFileArea">@lang('careers-elearning.files')</label>
                <div id="uploadFileArea" class="form-control" onclick="openUploadWindow()">
                    <p id="uploadText">@lang('careers-elearning.click-to') <br/> @lang('careers-elearning.upload-files')</p>
                    <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
                </div>

            </div>


            <p class="policyText">@lang('careers-elearning.we-are-commited') <a href="#">@lang('careers-elearning.privacy')</a>.</p>
        {{--            Subject: <input type="text" name="subject" />--}}

        <!-- Submit form -->
            <button id="sendCareerButton">@lang('careers-elearning.send')</button>

        </form>

    </div>




@endsection