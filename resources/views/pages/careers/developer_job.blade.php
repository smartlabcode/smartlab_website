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

        <h1 id="availablePositions">Fullstack Web Developer (m/f)</h1>

        <br/><br/>

        <p>Ako volis kreativnu IT industriju, bavis se web programiranjem, zelis raditi na projektima velikih evropskih
            i svjetskih kompanija, prijavi se na poziciju Fullstack Web Developera.</p>

        <br/><br/>

        <h5>Potrebne strucne karakteristike kandidata</h5>
        <ul>
            <li>PHP 7</li>
            <li>OOP(Object oriented programming)</li>
            <li>MySQL 5.6+</li>
            <li>MVC arhitektura</li>
            <li>JavaScript/jQuery</li>
            <li>CSS3 & HTML5</li>
            <li>GIT Version control</li>
        </ul>

        <br/><br/>
        <p>Ako pronalazis sebe u opisanim karakteristikama, zelis ugodnu atmosferu rada kao i stimulativna primanja,
        posalji svoj CV i motivaciono pismo na <a href="mailto:hello@smartlab.ba" target="_blank">hello@smartlab.ba.</a></p>

        <br/>

        <p class="jobDetails">Lokacija: Sarajevo</p>
        <p class="jobDetails">Broj pozicija: 2</p>
        <p class="jobDetails">Datum objave: 20.05.2019</p>

    </div>



    <div id="sectionThree">

        <button id="applyDeveloperButton">Apply</button>

        <br/><br/><br/>

        @include('parts.error_success')

        <form id="careerForm" action="/careers" method="POST" enctype="multipart/form-data">

            <!-- Include token -->
            @csrf

            <div class="form-group">
                <label for="name">*Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="surname">*Surname</label>
                <input type="text" name="lastname" class="form-control" id="surname" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="phone">*Phone number</label>
                <input type="number" name="phone_number" class="form-control" id="phone" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">*Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="name">*Note/Short Brief</label>
                <textarea name="message" class="form-control" id="name" placeholder="" required></textarea>
            </div>

            <div class="form-group">
                <label for="category">*Category</label>
                <select class="form-control" name="category" id="category" required>
                    <option selected disabled>Choose category</option>
                    <option value="designer">Designer</option>
                    <option value="developer">Developer</option>
                    <option value="ux-ui-designer">UX/UI Designer</option>
                    <option value="practitioner">Practitioner</option>
                </select>


                <br/>

                <label for="uploadFileArea">Place for your files (optional)</label>
                <div id="uploadFileArea" class="form-control" onclick="openUploadWindow()">
                    <p id="uploadText">Click to <br/> upload file/s</p>
                    <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
                </div>

            </div>


            <p class="policyText">We're commited to your privacy. SmartLab uses the information you provide to us to contact you about our relevant content,
                product and services. You may unsubscribe from these communications at any time.
                For more information check out our <a href="#">Privacy Policy</a>.</p>
        {{--            Subject: <input type="text" name="subject" />--}}

        <!-- Submit form -->
            <button id="sendCareerButton">Send</button>

        </form>

    </div>




@endsection