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
        font-size: 3em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 2em;
        color: var(--h2-color) !important;
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.5em;
        font-weight: 300;
        color: black !important;
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

    .button:focus {
        outline: 0;
    }

    .button:hover {
        background-color: white;
        color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
    }

    .--gray {
        background-color: #969696;
        border-color: #969696;
    }

    .--gray:hover {
        color: #969696 !important;
        border: 1px solid #969696 !important;
    }

    .--dark-blue {
        background-color: #14213d;
        border-color: #14213d;
        position: relative;
        left: 100%;
        transform: translateX(-100%);
    }

    .button:hover {
        color: #14213d !important;
        border: 1px solid #14213d !important;
    }

    .header-container {
        position: relative;
    }

    .header-background {
        position: absolute;
        z-index: -100;
        transform: rotate(0deg);
        top: -80%;
        right: -26%;
        width: 88%;
    }

    .header-content {
        display: flex;
        align-items: center;
    }

    .header-content-left {
        flex-basis: 50%;
        padding-right: 50px;
    }

    .header-content-right {
        flex-basis: 50%;
        margin-top: 150px;
    }

    .partner-container {
        display: flex;
        justify-content: space-between;
    }

    .partner-item {
        flex-basis: 30%;
        border-radius: 15px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        padding: 20px;
        display: flex;
        flex-direction: column;

        align-items: center
    }

    .partner-item div {
        flex-basis: 75%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        text-align: center;
    }

    .partner-item img {
        flex-basis: 25%;
        margin-top: 20px;
    }

    .partner-item h2 {
        padding-top: 30px;
        padding-bottom: 20px;
    }

    .partner-item button {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .partner-item h2,
    .partner-item p {
        padding-left: 30px;
        padding-right: 30px;
    }

    .partnership-usecase-img {
        position: relative;
        width: 80%;
        display: block;
        margin: 0 auto;
    }

    .partnership-usecase {
        position: relative;
        width: 80%;
        margin: 0 auto;
        transform: translateX(-2.2%);
    }

    .partnership-usecase h2 {
        transform: translateX(2.2%);
    }

    .partnership-usecase h3 {
        width: 200px;
    }

    .company {
        position: absolute;
        left: 15%;
        top: 80px;
    }

    .smartlab {
        position: absolute;
        right: 8%;
        top: 80px;
    }

    .partnership-usecase-step {
        border-radius: 15px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        display: inline-block;
        max-width: 350px;
        padding: 20px;
    }

    .--step1 {
        min-width: 50%;
        max-width: 50%;
        position: absolute;
        bottom: 72%;
        left: 26.5%;
    }

    .--step2 {
        position: absolute;
        bottom: 43%;
        left: 2%;
        min-width: 35%;
        max-width: 35%;
    }

    .--step3 {
        position: absolute;
        bottom: 35%;
        right: -13%;
        min-width: 35%;
        max-width: 35%;
    }

    .--step4 {
        max-width: 35%;
        min-width: 35%;
        position: absolute;
        bottom: 0%;
        right: -3%;
    }

    .--step5 {
        min-width: 35%;
        max-width: 35%;
        position: absolute;
        bottom: 22%;
        left: -13%;
    }

    .partnership-steps-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .partnership-steps-container h2 {
        flex-basis: 100%;
    }

    .partnership-steps-item {
        flex-basis: 49%;
        display: flex;
        height: 250px;
        border-radius: 15px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        align-items: center;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
    }

    .partnership-steps-item>img {
        height: 110%;
        position: absolute;
        left: -5%;
        bottom: -5%;
    }

    .partnership-steps-item>span {
        position: absolute;
        font-size: 4em;
        font-weight: bold;
        background-clip: text;
        color: rgba(255, 255, 255, 0.5);
        bottom: 2%;
        left: 3.5%;
    }

    .partnership-steps-item div {
        flex-basis: 50%;
    }

    .partnership-steps-item div img {
        max-height: 150px;
        padding: 20px;
    }

    .partnership-steps-item div p {
        padding: 10px;
    }

    .centar {
        text-align: center;
    }

    .partner-experience {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .partner-experience-logo {
        flex-basis: 20%;
    }

    .partner-experience-content {
        flex-basis: 80%;
        padding: 150px 0 150px 150px;
        background-image: url(../images/img/quotation-marks.svg);
        background-repeat: no-repeat;
        background-size: 25%;
    }

    .partner-experience-image {
        display: flex;
        align-items: center;
    }

    .partner-experience-image p span {
        display: block;
    }

    .partner-form {
        display: flex;
        flex-wrap: wrap;
        width: 60%;
        margin: 0 auto;
    }

    .partner-form label {
        display: block;
    }


    .partner-form-group {
        flex-basis: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .partner-form-group input,
    .partner-form-group textarea,
    .partner-form-group select {
        border: 1px solid var(--shadow-color);
        border-radius: 10px;
        padding-left: 10px;
    }

    input:focus,
    select:focus,
    textarea:focus {
        outline: none;
        box-shadow: 0px 0px 2px blue;
    }

    .partner-form-group input,
    .partner-form-group select {
        width: 100%;
        height: 50px;
    }

    .partner-form-group textarea {
        width: 100%;
        height: 150px;
        resize: none;
    }

    .partner-form-group div {
        flex-basis: 48%;
        margin-bottom: 20px;
    }

    #inputFile {
        height: 0.1px;
        width: 0.1px;
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
</style>
@section('content')
<div>
    <section class="header-container">
        <img src="../images/partner/join-us-header-img.svg" alt="header background" class="header-background background-img">
        <div class="header-content contain">
            <div class="header-content-left">
                <h1 class="h1-font">Become our Partner</h1>
                <p class="p-font">Generate new business opportunities, grow your revenue or
                    create value for your customers by partnering with SmartLab.
                    Partnering with a variety of extraordinary organisations helps
                    make progress towards achieving our goals.</p>
                <button class="button --gray">Partnership Options</button>
            </div>
            <div class="header-content-right">
                <img src="../images/partner/partner-header-img.svg">
            </div>
        </div>

    </section>
    <section class="partner-container contain">
        <div class="partner-item">
            <img src="../images/partner/partner-1-collumn.svg">
            <div>
                <h2 class="h2-font">Course Production
                    Partnership</h2>
                <p class="p-font">If you are an eLearning company
                    offering eLearning solutions to your
                    clients, but sometimes you don’t have
                    enough resources to meet
                    deadlines, then “Course production
                    Partnership program” is ideal for you.
                    Through this program, we can
                    exchange experience and knowledge
                    and together become more efficient
                    in future challenges.</p>
                <button class="button">Become a Partner</button>
            </div>

        </div>
        <div class="partner-item">
            <img src="../images/partner/partner-2-collumn.svg">
            <div>
                <h2 class="h2-font">Moodle Support
                    Partnership</h2>
                <p class="p-font">If you want professional support for
                    your Moodle LMS, then feel free to
                    reach us for this program. Moodle
                    Support Partnership will bring us in a
                    win-win situation where we can
                    update, backup and make sure that
                    your LMS is working properly and
                    always with good performance.
                    Creating Moodle Themes according to
                    your brand identity is one of our fast
                    solutions we can offer.</p>
                <button class="button">Become a Partner</button>
            </div>

        </div>
        <div class="partner-item">
            <img src="../images/partner/partner-3-collumn.svg">
            <div>
                <h2 class="h2-font">Service Reseller
                    Partnership</h2>
                <p class="p-font">Feel free to offer SmartLab solutions to
                    your customers and enjoy the benefits
                    of discounts, joint-marketing
                    campaigns, lead forwarding, sales
                    execution support, training &
                    enablement.
                    Besides that, if you have a valuable
                    product and want to have a reseller
                    partner for South East Europe,
                    SmartLab is available</p>
                <button class="button">Become a Partner</button>
            </div>

        </div>
    </section>
    <section class="partnership-usecase-container contain">
        <div class=" partnership-usecase">
            <h2 class="centar h1-font">Use Case Partnership</h2>
            <img class="partnership-usecase-img" src="../images/partner/use-case-partnership.svg" />

            <h3 class="company p-font">Company
                from Germany</h3>
            <h3 class="smartlab"><img src="../images/smartlab-logo.svg" /> </h3>
            <div class="partnership-usecase-step --step1 centar">
                <p class="p-font">Company from Germany reached SmartLab asking
                    to support them in articulate e-learning production</p>
            </div>
            <div class="partnership-usecase-step --step2 centar">
                <p class="p-font">We arranged a meeting, defined needs and
                    created an action plan.</p>
            </div>
            <div class="partnership-usecase-step --step3 centar">
                <p class="p-font">The design and development has been
                    implemented according to Partners
                    budget.</p>
            </div>
            <div class="partnership-usecase-step --step4 centar">
                <p class="p-font">During the production, both partners
                    communicated vary often to make sure that
                    everything is aligned to clients expectation.</p>
            </div>
            <div class="partnership-usecase-step --step5 centar">
                <p class="p-font">At the end of production, we deployed
                    Master version of e-learning courses
                    and started with establishing
                    longterm partnership</p>
            </div>

        </div>
    </section>
    <section class="contain">
        <div class="partnership-steps-container">
            <h2 class="centar h1-font">
                Partnership can be arranged in 6 steps
            </h2>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>1</span>
                <div><img src="../images/partner/partnership-step1.svg" alt=""></div>
                <div>
                    <p class="p-font">Kick of meeting between
                        CEOs or aother menagment
                        personel from both parties</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>2</span>
                <div><img src="../images/partner/partnership-step2.svg" alt=""></div>
                <div>
                    <p class="p-font">Partnership contract signed
                        by both parties</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>3</span>
                <div><img src="../images/partner/partnership-step3.svg" alt=""></div>
                <div>
                    <p class="p-font">Both parties define the budget
                        for first pilot project so the team
                        members can start working
                        together</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>4</span>
                <div><img src="../images/partner/partnership-step4.svg" alt=""></div>
                <div>
                    <p class="p-font">During the production phase,
                        timeschadule and progress must
                        be controlled by both parties</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>5</span>
                <div><img src="../images/partner/partnership-step5.svg" alt=""></div>
                <div>
                    <p class="p-font">Delivery and implantation is
                        always aligned to win-win
                        approach</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>6</span>
                <div><img src="../images/partner/partnership-step6.svg" alt=""></div>
                <div>
                    <p class="p-font">Team members visit each other
                        enjoying the possibility to make
                        new friendship</p>
                </div>

            </div>
        </div>
    </section>
    <section class="contain">
        <h2 class="centar h1-font">Partner experience</h2>
        <div class="partner-experience">
            <div class="partner-experience-logo">
                <img src="" alt="partner logo" />
            </div>
            <div class="partner-experience-content">
                <p class="p-font">“We found SmartLab very professional to work with. They quickly understood the brief, were proactive and
                    easy to communicate with during the build phase and delivered a final product that met fully with our
                    expectations.”</p>
                <div class="partner-experience-image">
                    <img src="" alt="partner">
                    <p>
                        <span>Nick Roberts</span>
                        <span>Risk Crew</span>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- TODO dont delete this-->
    <section class="partner-form-section contain">
        @include('parts.break_space')
        @include('parts.error_success')



        <form action="/bussiness" method="POST" enctype="multipart/form-data" class="partner-form">

            <!-- Include token -->
            @csrf
            <div class="partner-form-group">
                <div>
                    <label for="bussiness_name" class="p-font">*Company Name: </label>
                    <input type="text" name="bussiness_name" id="bussiness_name" required />
                </div>
                <div>
                    <label for="bussiness_website" class="p-font">*Company Website:</label>
                    <input type="text" name="bussiness_website" id="bussiness_website" required />
                </div>
            </div>
            <div class="partner-form-group">
                <div>
                    <label for="bussiness_person" class="p-font">*Responsible Person:</label>
                    <input type="text" name="bussiness_person" id="bussiness_person" required />
                </div>
                <div>
                    <label for="bussiness_email" class="p-font">*Email:</label>
                    <input type="email" name="bussiness_email" id="bussiness_email" required />
                </div>
            </div>
            <div class="partner-form-group">
                <div>
                    <label for="bussiness_phone_number" class="p-font">*Phone number:</label>
                    <input type="number" name="bussiness_phone_number" id="bussiness_phone_number" required />
                </div>
                <div>
                    <label for="bussiness_category" class="p-font">*Please Select</label>
                    <select name="bussiness_category" id="bussiness_category" required>
                        <option selected disabled>Choose category</option>
                        <option value="production">Production / Multimedia e-Leaning Materials</option>
                        <option value="elearning">Representation</option>
                        <option value="other">Other</option>
                    </select>
                </div>

            </div>
            <div class="partner-form-group">
                <div>
                    <label for="bussiness_message" class="p-font">*Note/Short Brief</label>
                    <textarea name="bussiness_message" id="bussiness_message" required></textarea>
                </div>
                <div>
                    <label for="uploadFileArea">@lang('careers.files')</label>
                    <div id="uploadFileArea" class="form-control" onclick="openUploadWindow()">
                        <p id="uploadText">@lang('careers.click-to') <br />@lang('careers.upload-files')</p>
                        <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
                    </div>

                </div>

            </div>

            <!-- Submit form -->
            <button class="button --dark-blue">Submit</button>

        </form>


    </section>
</div>
<script>
    function openUploadWindow() {
        document.getElementById("inputFile").click();
    }


    function fileUploaded() {
        // TODO check if file is selected
        let uploadText = document.getElementById("uploadText");
        uploadText.innerHTML = "<img id='verifiedIcon' src='/images/icons/verified.svg' />";
    }
</script>
@endsection