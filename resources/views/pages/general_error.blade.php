<!-- Extend main layout -->
@extends('layouts.app')

@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404</title>
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
            background: url(images/404-illustration.svg) no-repeat center center fixed;
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
            margin-top: -7%;
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
    </style>
</head>
<body>
<div class="container">
    <div class="h1-font">
        <p>OOPS</p>
    </div>

    <div class="h2-font">
        <p>There is only a 404 error<br> message ahead!</p>
    </div>

    <button class="button">
        Back to home
    </button>
</div>

</body>
</html>

@endsection
