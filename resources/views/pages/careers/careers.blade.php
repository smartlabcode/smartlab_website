@extends('layouts.app')
@section('title', '- Join our team')
@section('css')
<link href="{{ asset('css/careers.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- TODO dont delete this-->
<!--@include('parts.break_space')-->


<!-- Join our team section -->
<div class="loader-container">
    <div class="css-animation-container">
        <div class="css-animation"></div>
    </div>
</div>
<section class="header-container margin-b-150 ">
    <img src="{{asset('/images/partner/join-us-header-img.svg')}}" alt="header background" class="header-background background-img">
    <div class="header-content contain">
        <div class="header-content-left">
            <h1 class="h1-font">@lang('careers.h1')</h1>
            <p class="p-font">@lang('careers.paragraph')</p>
            <a href="#aboveSectionThree"><button class="button --gray">@lang('careers.button')</button></a>
        </div>
        <div class="header-content-right">
            <img src="{{asset('/images/partner/join-us-header.svg')}}" alt="Join us header background">
        </div>
    </div>

</section>
<section>
    <h2 class="h1-font centar">@lang('careers.availablePositions')</h2>
    <br />
    <br />
    <div class="careers-positions-container contain">
        <div class="careers-positions">
            <div class="carrers-positions-image-container">
                <img class="careers-positions-image --left-10px" src="{{ asset('images/careers/megaphone-orange.svg') }}" alt="orange megaphone" />
                <img class="careers-positions-image " src="{{ asset('images/careers/designer-page-img.svg') }}" alt="designer wanted" />
                <img class="carrers-positions-mobile" src="{{ asset('images/careers/we-are-hiring-des.svg') }}" alt="designer wanted" />
            </div>

            <div class="careers-positions-info">
                <h2>@lang('careers.eL-h1')</h2>
                <p class="p-font">
                    @lang('careers.opisEL')
                </p>
                <a href="{{asset('/pages/careers/elearning')}}"><button class="button button-orange">@lang('careers.readMore')</button></a>
            </div>
        </div>

        <div class="careers-positions">
            <div class="carrers-positions-image-container">
                <img class="careers-positions-image --left-10px" src="{{ asset('images/careers/megaphone-blue.svg') }}" alt="blue megaphone" />
                <img class="careers-positions-image" src="{{ asset('images/careers/developer-page-img.svg') }}" alt="developer wanted" />
                <img class="carrers-positions-mobile" src="{{ asset('images/careers/we-are-hiring-dev.svg') }}" alt="developer wanted" />
            </div>

            <div class="careers-positions-info">
                <h2>@lang('careers.Dev-h1')</h2>
                <p class="p-font">
                    @lang('careers.opisDev')
                </p>
                <a href="{{asset('/pages/careers/developer')}}"><button class="button">@lang('careers.readMore')</button></a>
            </div>
        </div>
    </div>
</section>



<br /><br /><br />


<div id="aboveSectionThree"></div>

<br /><br />

<section id="sectionThree">

    <h2 class="h1-font">@lang('careers.apply-h1')</h2>

    <br /><br />

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
                <option disabled>@lang('careers.choose-kategorija')</option>
                <option value="designer">@lang('careers.dizajner')</option>
                <option value="developer">@lang('careers.developer')</option>
                <!--<option value="ux-ui-designer">@lang('careers.dizajner-uxui')</option>-->
                <option value="practitioner">@lang('careers.praktikant')</option>
            </select>


            <br />

            <label for="uploadFileArea">@lang('careers.files')</label>
            <div id="uploadFileArea" class="form-control">
                <p id="uploadText">@lang('careers.click-to') <br />@lang('careers.upload-files')</p>
                <input id="inputFile" type="file" name="files[]" multiple />
            </div>

        </div>
        <p class="policyText">@lang('careers.we-are-commited') <a href="#">@lang('careers.privacy')</a>.</p>
        <!-- Submit form -->
        <div class="submit-container">
            <input type="submit" id="sendCareerButton" class="button submit" value="@lang('careers.send')">
        </div>
        @captcha
    </form>
</section>
@endsection
@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let loaderContainer = document.querySelector(".loader-container");
        let inputFile = document.querySelector("#inputFile");
        inputFile.addEventListener('change', fileUploaded);
        loaderContainer.classList.add("loaderEnd");
        setTimeout(function() {
            loaderContainer.style.display = "none";
        }, 1000)
        document.getElementById("uploadFileArea").addEventListener("click", function() {
            openUploadWindow();
        });

        function openUploadWindow() {
            document.getElementById("inputFile").click();
        }


        function fileUploaded() {
            // TODO check if file is selected
            let uploadText = document.getElementById("uploadText");
            uploadText.innerHTML = "<img id='verifiedIcon' src='../images/icons/verified.svg' />";
        }
    })
</script>
@endsection