<!-- Extend main layout -->
@extends('layouts.app')

@section('content')





        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<style>
    :root {
        --shadow-color: #a8a8a8;
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #0f75bc;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-size: 3.375em;
        margin-top: 0;
        color: var(--h1-color);
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.5em;
        font-weight: 300;
        color: var(--h1-color);

    }

    .shadow{
        -webkit-box-shadow: -1px -1px 25px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 25px 1px var(--shadow-color);
        box-shadow: -1px -1px 25px 1px var(--shadow-color);
    }

    .section1{
        display: flex;
        justify-content: space-evenly
    }
    .secOneImg{
        padding-top: 300px;
    }
</style>
<div class="section1">

    <div style="padding-top: 100px" class="section1.1">
        <h3 class="h1-font">
            Online Courses
        </h3>

        <p  class="p-font">
            We design and develop eLearning content from<br>
            scratch and implement your ideas into high quality,<br>
            engaging courses. To help you maximize your revenue on<br>
            training investment, our courses are built to improve<br>
            performance of your employees and decrease<br>
            your training expanditure.
        </p>

        <ul class="p-font">
            <li style="margin-top: 15px;"><b>Adaptive and responsive courses</b></li>
            <li style="margin-top: 15px;"><b>Micro learning animated videos</b></li>
            <li style="margin-top: 15px;"><b>Scenario based learning paths</b></li>
            <li style="margin-top: 15px;"><b>Gamified learning experience</b></li>
        </ul>
    </div>

    <div class="secOneImg">
        <img src="https://via.placeholder.com/450x250">
    </div>
    <div style="padding-top: 150px"> <hr></div>
</div>


<!--   SECTION TWO -->

<style>

    #slider {
        margin-top: 70px;
        width: 100%;
        height: 250px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 10px;
        box-sizing: border-box;
    }

    #slider > img {
        height: 100%;
        width: 400px;
        border-radius: 10px;
        display:inline-block;


    }

    #slider > img:first-child {
        margin-right: 5px;
        width: 50px;
        height: 50px;
        position: relative;
        display: inline-block;
        top: 90px;
        left: 30px;
        border-radius: 50%;
    }

    #slider > img:last-child {
        margin-left: 5px;
        width: 50px;
        height: 50px;
        position: relative;
        display: inline-block;
        top: 90px;
        right: 30px;
        border-radius: 100%;
    }

    .button{
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 260px;
        height: 70px;
        font-size: 1.7em;
        color: white;
        background-color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
        transition: all 0.2s ease-in;
    }
    .button:hover{
        background-color: white;
        color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
    }
    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 1.5em;
        color: var(--h2-color);
    }

    .section3{
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        height: 200px; width: 100%;"
    }
</style>

<div class="h2-font" style="margin-top: 50px; display: flex; justify-content: center">
    <h3>Our Works</h3>
</div>
<div id="slider">
    <img class="prethodni shadow" onclick="changeImage('previous')" src="images/Picture2.png">
    <img class="shadow" style="margin-right: 5px" id="firstPart" src="" />
    <img class="shadow" style="margin-left: 5px" id="secondPart" src="" />
    <img class="sljedeci shadow" width="100%" src="images/Picture3.png" onclick="changeImage('next')">
</div>

<div class="section3" >
    <div style="height: 50%">
        <h5 class="h2-font" style="margin-top: 50px; display: flex; justify-content: center">Want to see more:</h5>
    </div>
    <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center" ">
    <button class="button">Schedule a demo</button>
</div>
</div>


<!-- SECTION FOUUUUURRR-->

<style>
    .section4{
        display: flex;
        justify-content: space-evenly;
        padding-top: 150px;
    }
    .pics{
        flex-basis: 50%;
    }
    .pics1-1{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    .pics1-2{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding-top: 50px;
    }

    .copyright{
        padding-top: 200px;
        display: flex;
        justify-content: center;
    }
</style>

<div class="section4">
    <div>
        <h1 class="h1-font">Tools and <br>Technologies</h1>
        <p style="margin-top: 30px" class="p-font">We design custom eLearning training that <br>aligns with your strategic corporate objectives<br> using a variety of tools and technologies.</p>
    </div>
    <div class="pics">
        <div class="pics1-1">
            <img src="https://via.placeholder.com/120x120">
            <img src="https://via.placeholder.com/120x120">
            <img src="https://via.placeholder.com/120x120">
        </div>
        <div class="pics1-2">
            <img src="https://via.placeholder.com/120x120">
            <img src="https://via.placeholder.com/120x120">
            <img src="https://via.placeholder.com/120x120">
        </div>
    </div>
</div>
<div class="copyright">
    <h1>Copyright © 2019 SmartLab</h1>
</div>



<script>

    var imgOne = 0;
    var imgTwo = 1;

    var images = [
        "https://static.igre123.net/slike/212266-121951/mala-maca.jpg", // 0
        "https://opusteno.rs/slike/2012/03/smesne-slike-14024/mala-maca.jpg",  // 1
        "https://static.igre123.net/slike/235049-148875/mala-maca.jpg",  // 2
        "https://static.igre123.net/slike/205865-134729/mala-maca.jpg"   // 3
    ];

    changeImage("demo");
    function changeImage(par) {

        if (imgOne < (images.length - 2) && par == "next") {

            imgOne = imgTwo;
            imgTwo = imgTwo + 1;

        } else if (imgOne !== 0 && par == "previous") {
            imgOne = imgOne - 1;
            imgTwo = imgTwo - 1;
        }

        var imgOneSrc = images[imgOne];
        var imgTwoSrc = images[imgTwo];

        document.getElementById("firstPart").src=imgOneSrc;
        document.getElementById("secondPart").src=imgTwoSrc;
    }


</script>

</body>
</html>






@endsection