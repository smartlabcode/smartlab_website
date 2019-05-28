<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Something went wrong</title>
    <style>
        :root {
            --shadow-color: rgba(0, 53, 145, 0.15);
            --button-bg-color: #4885fa;
            --button-bg-orange: #ff931f;
            --h2-color: #0f75bc;
            --h1-color: #14213d;
            --p-color: #c9d6e2;
            --waves:#72c7fa;
            --sky:#4885fa;
            scroll-behavior: smooth;
        }
        /*html {
            background: url(images/404-illustration.svg) no-repeat center center fixed;
        }*/
        .h1-font {
            font-family: "Montserrat", sans-serif;
            font-size: 80px;
            color: var(--h1-color);
            font-weight: bold;
        }

        .h2-font {
            font-family: "Montserrat", sans-serif;
            font-size: 1.8em;
            color: white;
            text-align: center;
        }

        .button{
            font-weight: bold;
            z-index: 5;
            cursor: pointer;
            border-radius: 35px;
            width: 300px;
            height: 70px;
            font-size: 1.7em;
            color: white;
            background-color: var(--button-bg-orange);
            border: 1px solid var(--button-bg-orange);
            transition: all 0.2s ease-in;
        }

        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 13vh;
        }
        #image{
            background: url("images/404-illustration.svg") no-repeat center center;
            width: 100%;
            height: 100%;
            object-fit: contain;
            background-size: 100%;
        }

        body {
            margin: 0;
        }

        @media screen and (min-width: 2000px){
            .h1-font {
                font-size: 177px;
            }

            .sky {
                height: 0 !important;
            }

            .button{
                width: 320px;
                height: 100px;
                font-size: 35px;
            }

            .h2-font{
                font-size: 55px;
                margin-top: -8%;
            }

            .container {
                margin-top: -55%;
            }
            #image{
                margin-top: -1vh;
            }

            .waves{
                height: 0 !important;
            }
        }
        @media screen and (max-width: 2000px){
            .h1-font {
                font-size: 160px;
            }

            .button{
                width: 300px;
                height: 90px;
                font-size: 30px;
            }

            .h2-font{
                font-size: 40px;
                margin-top: -10%;
            }

            .container {
                margin-top: -58%;
            }

            .sky {
                height: 0 !important;
            }

            .waves {
                height: 55vh !important;
                margin-top: 20%;
            }
        }
        @media screen and (max-width: 1500px){
            .h1-font {
                font-size: 90px;
            }

            .button{
                width: 175px;
                height: 55px;
                font-size: 20px;
            }

            .h2-font{
                font-size: 27px;
                margin-top: -8%;
            }

            .container {
                margin-top: -55%;
            }
            .sky {
                height: 0 !important;
            }

            .waves {
                height: 55vh !important;
            }


        }
        @media screen and (max-width: 1100px){
            .h1-font {
                font-size: 80px;
            }

            .button{
                width: 157px;
                height: 50px;
                font-size: 18px;
            }

            .h2-font{
                font-size: 24px;
                margin-top: -10%;
            }

            .container {
                margin-top: -55%;
            }
            .sky {
                height: 25vh !important ;
            }

            .waves {
                height: 55vh !important;
                margin-top: 23%;
            }
            #image {
                margin-top: -4%;
            }
        }
        @media screen and (max-width: 900px){
            .sky {
                height: 25vh !important ;
            }

            .waves {
                height: 55vh !important;
                margin-top: 3%;
            }
        }
        @media screen and (max-width: 800px) {
            .h1-font {
                font-size: 65px;
            }

            #image{
                margin-top: -1%;
            }

            .button{
                width: 145px;
                height: 45px;
                font-size: 17px;
            }

            .h2-font{
                font-size: 20px;
                margin-top: -10%;
            }

            .container {
                margin-top: -60%;
            }
            .sky {
                height: 25vh !important ;
            }

            .waves {
                height: 55vh !important;
                margin-top: 23%;
            }
        }
        @media screen and (max-width: 620px) {
            .waves{
                margin-top: 22%;
                height: 50vh !important;
            }

            .container {
                margin-top: -73%;
            }

        }
        @media screen and (max-width: 450px) {
            .h1-font {
                font-size: 48px;
            }

            .button{
                width: 125px;
                height: 33px;
                font-size: 13px;
            }

            .h2-font{
                font-size: 16px;
                margin-top: -15%;
            }

            .sky {
                height: 31vh !important ;
            }

            .waves {
                height: 65vh !important;
                margin-top: -5%;
            }

            .container {
                margin-top: -90%;
            }

        }
        @media screen and (max-width: 376px) {

            .h1-font {
                font-size: 45px;
            }

            .button{
                width: 105px;
                height: 30px;
                font-size: 13px;
            }

            .h2-font{
                font-size: 14px;
                margin-top: -15%;
            }

            .sky {
                height: 31vh !important ;
            }

            .waves {
                height: 65vh !important;
                margin-top: -5%;
            }

            .container {
                margin-top: -90%;
            }
        }
        @media screen and (max-width: 330px) {
            .h1-font {
                font-size: 70px;
            }

            .container{
                margin-top: -8vh;
            }

            .button{
                width: 150px;
                height: 55px;
                font-size: 18px;
            }

            .h2-font{
                font-size: 16px;
                margin-top: -16%;
            }

            #image {
                background-size: contain;
            }
            .sky {
                height: 31vh !important ;
            }

            .waves {
                height: 45vh !important;
                margin-top: 15%;
            }

        }

        .sky {
            z-index: -10;
            background-color:var(--sky);
            width: 100%;
            height: 13vh;
        }
        .waves {
            z-index: -10;
            background-color:var(--waves);
            width: 100%;
            height: 13vh;
        }
    </style>
</head>
<body>
<div class="sky">
</div>
<div>
    <img class="image" id="image" src="{{'/images/404-illustration.svg'}}">
    <div class="container">
        <div class="h1-font">
            <p>@lang('general-error.oops')</p>
        </div>

        <div class="h2-font">
            <p>@lang('general-error.h1')</p>
        </div>

        <button id="button" class="button" onclick="goHome()">
            @lang('general-error.back')
        </button>
    </div>
</div>
<div class="waves">
</div>
<script>
    function goHome() {
        document.querySelector(location.href = "/index.php")
    }
</script>

</body>
</html>