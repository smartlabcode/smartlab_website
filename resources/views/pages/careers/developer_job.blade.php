@extends('layouts.app')

@section('content')
<link href="{{ asset('css/jobs.min.css') }}" rel="stylesheet">
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
        <li>@lang('careers-developer.karakteristika1')</li>
        <li>@lang('careers-developer.karakteristika2')</li>
        <li>@lang('careers-developer.karakteristika3')</li>
        <li>@lang('careers-developer.karakteristika4')</li>
        <li>@lang('careers-developer.karakteristika5')</li>
        <li>@lang('careers-developer.karakteristika6')</li>
        <li>@lang('careers-developer.karakteristika7')</li>
    </ul>

    <br />
    <p class="h5-font"> @lang('careers-developer.hello')<a href="mailto:hello@smartlab.ba" target="_blank">hello@smartlab.ba.</a></p>

    <br />

    <p class="h5-font">@lang('careers-developer.lokacija')</p>
    <p class="h5-font">@lang('careers-developer.pozicije')</p>
    <p class="h5-font">@lang('careers-developer.datum')</p>

    <br />
    <div class="buttons-container">
        <a href="{{asset('/pages/careers')}}"><button class="button">Back</button></a>
        <button class="button" id="applyDeveloperButton">@lang('careers-developer.apply')</button>
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
            <div id="uploadFileArea" class="form-control">
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
    });
</script>
@endsection