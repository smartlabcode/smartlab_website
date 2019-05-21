<!-- Extend main layout -->
@extends('layouts.app')

@section('content')

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
            scroll-behavior: smooth;
        }
        html {
            background: url(images/error-500.svg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
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

        @media screen and (min-width: 2000px){
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
                margin-top: -8%;
            }

            .container {
                margin-top: 15vh;
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
                margin-top: 5vh;
            }
        }
        @media screen and (max-width: 1500px){
            .h1-font {
                font-size: 140px;
            }

            .button{
                width: 255px;
                height: 70px;
                font-size: 28px;
            }

            .h2-font{
                font-size: 35px;
                margin-top: -13%;
            }

            .container {
                margin-top: 2vh;
            }

        }
        @media screen and (max-width: 1100px){
            .h1-font {
                font-size: 100px;
            }

            .button{
                width: 246px;
                height: 70px;
                font-size: 24px;
            }

            .h2-font{
                font-size: 30px;
                margin-top: -12%;
            }

        }
        @media screen and (max-width: 800px) {
            .h1-font {
                font-size: 77px;
            }

            .button{
                width: 220px;
                height: 65px;
                font-size: 22px;
            }

            .h2-font{
                font-size: 25px;
                margin-top: -13%;
            }

        }
        @media screen and (max-width: 450px) {
            .h1-font {
                font-size: 77px;
            }

            .button{
                width: 170px;
                height: 60px;
                font-size: 18px;
            }

            .h2-font{
                font-size: 18px;
                margin-top: -23%;
            }

        }
        @media screen and (max-width: 376px) {

            .h1-font {
                font-size: 70px;
            }

            .button{
                width: 150px;
                height: 55px;
                font-size: 18px;
            }

            .h2-font{
                font-size: 16px;
                margin-top: -25%;
            }
        }
        @media screen and (max-width: 330px) {
            .h1-font {
                font-size: 70px;
            }

            .button{
                width: 150px;
                height: 55px;
                font-size: 18px;
            }

            .h2-font{
                font-size: 16px;
                margin-top: -30%;
            }

        }
    </style>
</head>
<body>
<div class="container">
    <div class="h1-font">
        <p>OOPS</p>
    </div>

    <div class="h2-font">
        <p>There is only a 500 error<br> message ahead!</p>
    </div>

    <button id="button" class="button" onclick="goHome()">
        Back to home
    </button>
</div>

<script>
    function goHome() {
        document.querySelector(location.href = "/index.php")
    }
</script>

</body>
</html>
@endsection
