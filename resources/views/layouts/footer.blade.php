<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885fa;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    #app {
        width: auto;
    }

    body {
        background: white !important;
        overflow-x: hidden !important;
    }

    html {
        overflow-x: hidden !important;
    }

    .contain {
        max-width: 1500px;
        width: 90%;
        margin: 0 auto;
    }

    .footer-button {
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 260px;
        height: 70px;
        font-size: 1.1em !important;
        font-weight: bold;
        background-color: transparent;
        border: 1px solid white;
        transition: all 0.2s ease-in;
    }

    .social-icons-container {
        width: 260px;
        display: flex;
        justify-content: space-around;
    }

    .footer-button:focus {
        outline: 0;
    }

    .footer-button:hover {
        background-color: white;
        border: 1px solid var(white);
    }

    .footer-button:hover a {
        color: var(--h1-color);
        text-decoration: none;
    }

    .footer-button a {
        display: block;
        padding: 20px 0;
        width: 100%;
    }

    .footer-top-row {
        display: flex;
        width: 100%;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .footer-top-column {
        flex-basis: 25%;
        display: flex;
        flex-wrap: wrap;
    }

    .--left {
        justify-content: flex-start;
    }

    .--center {
        justify-content: center;
    }

    .--right {
        justify-content: flex-end;
    }

    .phone div {
        flex-basis: 100%;
        display: flex;
    }

    .footer-bot-row {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: flex-end;
    }

    .footer-bot-column {
        flex-basis: 33%;
        display: flex;
    }

    .footer-background {
        position: absolute;
        width: 100vw;
        height: auto;
        z-index: -100;
    }

    .footer-bot-icons {
        height: 30px;
    }

    .footer-phone-container {
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .footer-phone-container p {
        flex-basis: 100%;
    }

    footer {
        position: relative;
        /* width: 130%; */
        /* transform: translateX(-15%); */
        padding-top: 350px;
        padding-bottom: 50px;
        font-family: "Montserrat", sans-serif;
        color: white;
        background: url(/images/footer/footer-dark.svg);
        background-repeat: no-repeat;
        background-size: 3000px;
        /* background-position-y: 50px; */
        background-position-x: 50%;
    }

    footer address {
        font-style: normal;
    }

    footer p {
        margin-bottom: 10px;
        margin-top: 0;
    }

    footer a {
        font-family: "Montserrat", sans-serif;
        color: white;
        text-decoration: none;
    }

    footer ul {
        list-style-type: none;
        padding-left: 0;
        margin-top: 0;
        margin-bottom: 0;
    }

    footer li {
        margin-bottom: 10px;
    }

    footer a:visited {
        color: white;
        text-decoration: none;
    }

    footer a:hover {
        color: white;
    }

    footer img {
        height: 20px;
        margin-right: 30px;
    }

    .no-right-margin {
        margin-right: 0;
    }

    @media screen and (min-width: 2000px) {
        footer {
            padding-top: 400px;
        }
    }

    @media screen and (max-width: 1500px) {}

    @media screen and (max-width: 1200px) {
        .contain {
            width: 95%;
            margin: 0 auto;
            margin-bottom: 100px;
        }
    }

    @media screen and (max-width: 1175px) {
        .footer-button {
            width: 208px;
            height: 56px;
        }

        .social-icons-container {
            width: 208px;

        }

        footer img {
            margin-right: 10px;
        }

        .wrap {
            width: 100%;
            display: block;
        }

        .footer-button a {
            padding: 10px 0;
        }
    }

    @media screen and (max-width: 1024px) {
        footer {
            background-size: 1500px;

            background-position-y: 25px;

            padding-top: 185px;
            padding-bottom: 25px;
        }

        footer .contain {
            margin-bottom: 0px;
        }
    }

    @media screen and (max-width: 768px) {
        footer {
            background-position-y: 25%;
        }

        footer nav {
            display: none !important;
        }

        .footer-top-column {
            flex-basis: 33%;
        }
    }

    @media screen and (max-width: 700px) {
        footer {}
    }

    @media screen and (max-width: 600px) {
        footer {
            font-size: 0.9em;
            padding-bottom: 0;
            background-position-y: 40px;
        }

        .footer-bot-icons {
            height: 20px;
        }

        .footer-button {
            z-index: 3;
            width: 166px;
            height: 45px;
            font-size: 1.2em;
            outline: hidden;
        }

        .social-icons-container {
            width: 166px;

        }

        footer p {
            margin-bottom: 0;
        }

        footer .contain {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer-top-row {
            width: auto;
            flex-basis: 80%;
            flex-wrap: wrap;
        }

        .footer-top-row .--right {
            flex-basis: 100%;
            justify-content: flex-end;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .footer-top-row .--center {
            justify-content: flex-end;
        }

        .footer-top-column {
            flex-basis: 50%;
        }

        .footer-bot-row {
            width: auto;
            flex-basis: 100%;
            flex-direction: column;
            align-items: center;
        }

        .footer-bot-column {
            margin-bottom: 10px;
        }

        .footer-bot-column:nth-child(1) {
            order: 2;
        }

        .footer-bot-column:nth-child(2) {
            order: 3;
        }

        .footer-bot-column:nth-child(3) {
            order: 1;
            width: 83%;
            position: relative;
            top: -64px;
            justify-content: flex-start;
        }
    }

    @media screen and (max-width: 480px) {
        .footer-top-row {
            flex-basis: 90%;
        }

        .footer-bot-column:nth-child(3) {
            width: 92%;
        }
    }

    @media screen and (max-width: 425px) {
        footer {
            background-position-x: 35%;
        }

        .footer-top-row {
            flex-basis: 95%;
        }

        .footer-bot-column:nth-child(3) {
            width: 97%;
        }
    }

    @media screen and (max-width: 375px) {
        .footer-bot-column:nth-child(3) {
            position: static;
            justify-content: center;
        }

        .footer-top-row .--right {
            justify-content: center;
        }
    }

    @media screen and (max-width: 365px) {
        footer {
            background-position-x: 36%;
            background-size: 2000px;
            background-position-y: 0px;
        }

        .footer-top-column {
            flex-basis: 55%;
        }

        .footer-top-row {
            justify-content: center;
        }

        .footer-top-row .--center {
            margin-bottom: 20px;
            justify-content: flex-start;
        }

        .footer-top-row .--center img {
            width: 25px;
        }

        .footer-top-row .--right {
            margin-top: 0;
        }
    }

    @media screen and (max-width: 320px) {
        .footer-top-column {
            flex-basis: 60%;
        }
    }
</style>
@section('footer')
<footer>
    <!--<img class="footer-background" src="images/footer-dark.svg" />-->
    <div class="contain">
        <div class="footer-top-row">
            <nav class="footer-top-column --left">
                <ul>
                    <li><a href="#">What We Do</a></li>
                    <li><a href="#">Who We Are</a></li>
                    <li><a href="#">Join Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="footer-top-column phone --center">
                <div>
                    <img src={{"/images/footer/social-icons/phone-receiver.svg"}} />
                    <div class="footer-phone-container">
                        <p>
                            <a href="tel: 00387 61 811 394">+387 61 811 394</a>
                        </p>
                        <p>
                            <a href="tel: 00387 33 956 222">+387 33 956 222</a>
                        </p>
                    </div>
                </div>
                <div>
                    <img src={{"/images/footer/social-icons/mail.svg"}} />
                    <p>
                        <a href="mailto:hello@smartlab.ba">hello@smartlab.ba</a>
                    </p>
                </div>
            </div>
            <div class="footer-top-column --center">
                <img src={{"/images/footer/social-icons/location.svg" }} />
                <address>
                    <a href="https://www.google.com/maps/place/SmartLab/@43.8542408,18.3870703,17z/data=!3m1!4b1!4m5!3m4!1s0x4758c8c48c458d13:0xd3b7b0136b05bfe5!8m2!3d43.854237!4d18.389259" target="_blank">
                        <p>Kolodvorska 5,</p>
                        <p><span class="wrap">Sarajevo,</span> Bosna i Hercegovina</p>
                    </a>

                </address>
            </div>
            <div class="footer-top-column --right">
                <button class="footer-button">
                    <a href="https://www.google.com/maps/place/SmartLab/@43.8542408,18.3870703,17z/data=!3m1!4b1!4m5!3m4!1s0x4758c8c48c458d13:0xd3b7b0136b05bfe5!8m2!3d43.854237!4d18.389259" target="_blank">Find us</a>
                </button>
            </div>
        </div>
        <div class="footer-bot-row">
            <div class="footer-bot-column --left ">
                <a href="#"><img src={{"/images/footer/social-icons/smartlab-white.svg"}} class="footer-bot-icons" /></a>

            </div>
            <div class="footer-bot-column --center">
                Copyright &copy; 2019 SmartLab
            </div>
            <div class="footer-bot-column --right">
                <div class="social-icons-container">
                    <a href="#" target="_blank"><img src={{"/images/footer/social-icons/fb-icon.svg"}} class="footer-bot-icons" /></a>
                    <a href="#" target="_blank"><img src={{"/images/footer/social-icons/linkedin-icon.svg"}} class="footer-bot-icons" /></a>
                    <a href="#" target="_blank">
                        <img src={{"/images/footer/social-icons/skype-icon.svg"}} class="footer-bot-icons" />
                    </a>
                    <a href="#" target="_blank">
                        <img src={{"/images/footer/social-icons/youtube-icon.svg"}} class="footer-bot-icons no-right-margin" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection