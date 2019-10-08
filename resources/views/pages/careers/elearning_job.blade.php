@extends('layouts.app')
@section('css')
<link href="{{ asset('css/jobs.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- TODO dont delete this-->
@include('parts.break_space')
<!-- Join our team section -->
<div class="loader-container">
    <div class="css-animation-container">
        <div class="css-animation"></div>
    </div>
</div>
<section class="section-one">
    <img class="section-one-bg" src="{{ asset('images/partner/designer-developer-header-bg.svg') }}" />
    <div class="section-one-img-container">
        <div class="section-one-img-left-container">
            <img class="section-one-img-left --part1" src="{{ asset('images/partner/megaphone.svg') }}" />
            <img class="section-one-img-left --part2" src="{{ asset('images/partner/we-are-hiring.svg') }}" />
        </div>
        <img class="section-one-img-right" src="{{ asset('images/partner/designer-page-img.svg') }}" />
    </div>


</section>
<section class="jobParameters contain">
    <h1 class="h1-font" id="availablePositions">@lang('careers-elearning.EL-h1')</h1>

    <br /><br />

    <p class="p-font">@lang('careers-elearning.opisEL')</p>

    <br /><br />

    <h5 class="h5-font">@lang('careers-elearning.strucne-karakteristike')</h5>
    <ul class="p-font">
        <li>@lang('careers-elearning.karakteristika1')</li>
        <li>@lang('careers-elearning.karakteristika2')</li>
        <li>@lang('careers-elearning.karakteristika3')</li>
        <li>@lang('careers-elearning.karakteristika4')</li>
        <li>@lang('careers-elearning.karakteristika5')</li>
    </ul>

    <br />

    <h5 class="h5-font">@lang('careers-elearning.pozeljno'):</h5>
    <ul class="p-font">
        <li>@lang('careers-elearning.njemacki')</li>
        <li>@lang('careers-elearning.frontend')</li>
    </ul>


    <p class="p-font">@lang('careers-elearning.hello') <a href="mailto:hello@smartlab.ba" target="_blank">hello@smartlab.ba.</a></p>

    <br />

    <p class="h5-font" class="jobDetails">@lang('careers-elearning.lokacija')</p>
    <p class="h5-font" class="jobDetails">@lang('careers-elearning.pozicije')</p>
    <p class="h5-font" class="jobDetails">@lang('careers-elearning.datum')</p>
    <div class="buttons-container">
        <a href="{{asset('/pages/careers')}}"><button class="button">Back</button></a>
        <button class="button" id="applyDeveloperButton">@lang('careers-elearning.apply')</button>
    </div>

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
            <label for="name " class="p-font">@lang('careers-elearning.name')</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="surname" class="p-font">@lang('careers-elearning.prezime')</label>
            <input type="text" name="lastname" class="form-control" id="surname" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="phone" class="p-font">@lang('careers-elearning.broj')</label>
            <input type="number" name="phone_number" class="form-control" id="phone" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="name" class="p-font">@lang('careers-elearning.email')</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="name" class="p-font">@lang('careers-elearning.napomena')</label>
            <textarea name="message" class="form-control" id="name" placeholder="" required></textarea>
        </div>

        <div class="form-group">
            <label for="category" class="p-font">@lang('careers-elearning.kategorija')</label>
            <select class="form-control" name="category" id="category" required>
                <option selected disabled>@lang('careers-elearning.choose-kategorija')</option>
                <option value="designer">@lang('careers-elearning.dizajner')</option>
                <option value="developer">@lang('careers-elearning.developer')</option>
                <option value="ux-ui-designer">@lang('careers-elearning.dizajner-uxui')</option>
                <option value="practitioner">@lang('careers-elearning.praktikant')</option>
            </select>


            <br />

            <label for="uploadFileArea" class="p-font">@lang('careers-elearning.files')</label>
            <div id="uploadFileArea" class="form-control">
                <p id="uploadText">@lang('careers-elearning.click-to') <br /> @lang('careers-elearning.upload-files')</p>
                <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
            </div>

        </div>


        <p class="policyText">@lang('careers-elearning.we-are-commited') <a href="#">@lang('careers-elearning.privacy')</a>.</p>
        {{-- Subject: <input type="text" name="subject" />--}}

        <!-- Submit form -->
        <button class="button" id="sendCareerButton">@lang('careers-elearning.send')</button>

    </form>

</section>
@endsection
@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        function openUploadWindow() {
            document.getElementById("inputFile").click();
        }
        document.getElementById("uploadFileArea").addEventListener("click", function() {
            openUploadWindow();
        });

        let loaderContainer = document.querySelector(".loader-container");
        loaderContainer.classList.add("loaderEnd");
        setTimeout(function() {
            loaderContainer.style.display = "none";
        }, 1000)

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