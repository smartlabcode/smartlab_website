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


    .jobText {

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
        outline: none;
    }


    /* Section three */
    #sectionThree {
        width: 620px;
        padding: 10px;
        margin: 0 auto;
        outline: 1px dashed red;
    }


    #sectionThree > h1 {
        width: 100%;
        text-align: center;
    }

</style>


@section('content')

    <!-- TODO dont delete this-->
    @include('parts.break_space')




    <!-- Join our team section -->
    <div id="firstSection">

        <div id="joinTextSection">
            <h1>Join Our Team</h1>

            <br/>

            <p>Apply to our opened positions or our internship program that includes training and practice in the digital industry.
            We offer a great energy, a lot of knowledge, lot of socializing and an opportunity for long-term contract!</p>

            <br/>

            <a href="#careerForm"><button id="applyButton">Apply</button></a>
        </div>

        <div></div>
    </div>



    <h1 id="availablePositions">Available Positions</h1>

    <br/><br/>

    <div id="secondSection">

        <div class="jobOffer">
            <img src="{{ asset('images/careers/designer-page-img.svg') }}" class="jobImage"/>

            <div class="jobInfo">

                <h2 class="jobHeading">eLearning Designer (m/f)</h2>

                <br/>

                <p class="jobText">
                    Ako volis kreativnu industriju, bavis se grafikom, volis da ucis nove stvari i cijenis perspektivu,
                    prijavi se na poziciju dizajnera sadrzaja za online ucenje.
                </p>

                <br/>

                <button class="jobButton">Read more</button>

            </div>
        </div>

        <div class="jobOffer">
            <img src="{{ asset('images/careers/developer-page-img.svg') }}" class="jobImage"/>

            <div class="jobInfo">

                <h2 class="jobHeading">eLearning Designer (m/f)</h2>

                <br/>

                <p class="jobText">
                    Ako volis kreativnu industriju, bavis se grafikom, volis da ucis nove stvari i cijenis perspektivu,
                    prijavi se na poziciju dizajnera sadrzaja za online ucenje.
                </p>

                <br/>

                <button class="jobButton">Read more</button>

            </div>
        </div>

    </div>



    @include('parts.error_success')

    <br/><br/><br/><br/><br/>

    <div id="sectionThree">

        <h1>Apply to Be a Part of SmartLab Team</h1>

        <br/><br/>

        <form id="careerForm" action="/careers" method="POST" enctype="multipart/form-data">

            <!-- Include token -->
            @csrf

            Name: <input type="text" name="name" />
            <br/>
            Lastname: <input type="text" name="lastname" />
            <br/>
            Subject: <input type="text" name="subject" />
            <br/>

            <select name="category">
                <option selected disabled>Choose category</option>
                <option value="designer">Designer</option>
                <option value="developer">Developer</option>
                <option value="ux-ui-designer">UX/UI Designer</option>
                <option value="practitioner">Practitioner</option>
            </select>

            Email: <input type="email" name="email" />
            <br/>

            Phone number: <input type="number" name="phone_number" />
            <br/>

            Message: <textarea name="message"></textarea>
            <br/>
            Files: <input type="file" name="files[]" multiple />

            <!-- Submit form -->
            <button>Submit</button>

        </form>

    </div>


@endsection