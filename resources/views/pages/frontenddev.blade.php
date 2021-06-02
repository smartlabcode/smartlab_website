@extends('layouts.app')
@section('css')
<link href="{{ asset('css/jobs.min.css') }}" rel="stylesheet">
@endsection
@section('content')

<!-- TODO dont delete this-->
@include('parts.break_space')

<head>
    <meta charset="utf-8">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Frontend Developer" />
    <meta property="og:description" content="SmartLab je IT kompanija specijalizirana za eLearning. Naš tim čini skupina kreativaca i dizajnera koji su posvećeni kreiranju grafičkih, web i edukacijskih rješenja. Ako voliš kreativnu industriju i voliš da učiš nove stvari, SmartLab traži novog člana tima za svoj ured u Sarajevu." />
    <meta property="og:image" content="{{url('/images/careers/frontend-developer.svg')}}" />
</head>


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
        <img class="section-one-img-right" src="{{ asset('images/careers/frontend-developer.svg') }}" />
    </div>


</section>
<section class="jobParameters contain">

    <h1 class="h1-font" id="availablePositions">Frontend Developer</h1>

    <br /><br />

    <p class="p-font">SmartLab je IT kompanija specijalizirana za eLearning. Naš tim čini skupina kreativaca i dizajnera koji su posvećeni kreiranju grafičkih, web i edukacijskih rješenja. Ako voliš kreativnu industriju i voliš da učiš nove stvari, SmartLab traži novog člana tima za svoj ured u Sarajevu.</p>

    <br /><br />

    <h5 class="h5-font">Za potrebe kreiranja interaktivnih sadržaja koji se koriste u eLearning industriji, potreban nam je novi član tima koji poznaje sljedeće tehnologije:</h5>
    <ul class="p-font">
        <li>- Napredno poznavanje HTML5, Vanilla JS, jQuery, CSS3</li>
        <li>- Poznavanje ActionScript-a, TypeScript-a, Git-a i NPM package managera</li>
        <li>- Poželjno poznavanje PHP-a, MySQL-a, VueJS ili nekog drugog JS framework-a</li>
    </ul>

    <br /><br />

    <h5 class="h5-font">Ostali uslovi:</h5>
    <ul class="p-font">
        <li>- Državljanin BiH</li>
        <li>- Odgovoran i profesionalan pristup poslu</li>
        <li>- Sklonost timskom radu</li>
        <li>- Obavezno poznavanje engleskog jezika</li>
        <li>- Minimalno 2 godine iskustva u gore navedenim tehnologijama</li>
    </ul>
    <br><br>

    <h5 class="h5-font">Benefiti:</h5>
    <ul class="p-font">
        <li>- Mogućnost rada od kuće </li>
        <li>- Inovativni i kreativni projekti</li>
        <li>- Ugodna radna atmosfera</li>
        <li>- Objektivno vrednovanje i nagrađivanje efikasnosti</li>
        <li>- Prilika za učenje i razvoj</li>
    </ul>

    <br />
    <p class="p-font">@lang('careers-moodle.hello')<a href="mailto:posao@smartlab.ba" target="_blank">posao@smartlab.ba.</a></p>
    <p class="p-font">Krajnji rok za podnošenje prijava je 17.06.2021. godine.</strong></p>

    <br />

    <p><strong>@lang('careers-moodle.datum')</strong></p>

    <br />
    <div class="buttons-container">
        <a href="{{asset('/pages/careers')}}"><button class="button">Back</button></a>
        {{-- <button class="button" id="applyDeveloperButton">@lang('careers-developer.apply')</button> --}}
    </div>

</section>



<section id="sectionThree" class="contain">

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
                <!--<option value="designer">@lang('careers-developer.dizajner')</option>-->
                <option value="developer">@lang('careers-developer.developer')</option>
                <!--<option value="ux-ui-designer">@lang('careers-developer.dizajner-uxui')</option>-->
                <option value="practitioner">@lang('careers-developer.praktikant')</option>
            </select>


            <br />

            <label for="uploadFileArea" class="p-font">@lang('careers-developer.files')</label>
            <div id="uploadFileArea" class="form-control">
                <p id="uploadText">@lang('careers-developer.click-to') <br /> @lang('careers-developer.upload-files')</p>
                <input id="inputFile" type="file" name="files[]" multiple />
            </div>

        </div>
        <p class="policyText">@lang('careers-developer.we-are-commited') <a href="#">@lang('careers-developer.privacy')</a>.</p>
        {{-- Subject: <input type="text" name="subject" />--}}
        <div class="submit-container">
            <input type="button" class="button submit" id="sendCareerButton" value="@lang('careers-elearning.send')">
        </div>
        @captcha
    </form>
</section>
@endsection
@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let inputFile = document.querySelector("#inputFile");
        inputFile.addEventListener('change', fileUploaded);

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