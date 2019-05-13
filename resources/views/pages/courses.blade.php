<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Title</title>
</head>
<body  style="height: 100%; margin: 0 auto">
<style>


    /* SECTION ONE CSS */
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #0f75bc;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }
    html{
        overflow-x: hidden;
    }
    body{
        overflow-x: hidden;
    }
    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-size: 2em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }
    .uls{
        margin-top: 20px;
        margin-left: -15px;
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.5em;
        font-weight: lighter;
        color: var(--h1-color);
    }
    .bold{
        font-weight: normal;
    }

    .shadow{
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
    }

    .section1{
        display: flex;
        justify-content: space-evenly;
        position: relative;
        align-items: flex-end;
    }

    .section1-1{
        padding-top: 225px;
    }

    .secOneImg{
        flex-basis: 50%;
    }

    .secOneBg{
        position: absolute;
        z-index: -100;
        top: -40%;
        right: -39%;
    }

    .section1-1{
        flex-basis: 50%;
    }

    .secOneBg2{
        width: 300px;
        position: absolute;
        top: -25%;
        left: 30%;
        transform: rotate(197deg);
        z-index: -110;
    }

    .contain{
        width: 80%;
        margin: 0 auto;
    }

    /* SECTION TWO CSS*/


    .h2-secTwo{
        margin-top: 280px;
        display: flex;
        justify-content: center;
    }

    #slider {
        margin-top: 70px;
        width: 100%;
        height: 400px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 10px;
        box-sizing: border-box;
    }

    .images {
        height: 100%;
        width: 40%;
        border-radius: 10px;
        display:inline-block;
    }

    #slider > img:first-child {
        margin-right: 5px;
        width: 50px;
        height: 50px;
        position: relative;
        display: inline-block;
        top: 160px;
        left: 30px;
        border-radius: 50%;
    }

    #slider > img:last-child {
        margin-left: 5px;
        width: 50px;
        height: 50px;
        position: relative;
        display: inline-block;
        top: 160px;
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
        font-size: 1.8em;
        color: var(--h2-color);
    }

    .section3{
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        height: 200px; width: 100%;"
    }

    .secTwoBg{
        transform: rotate(231deg);
        position: absolute;
        left: -1052px;
        z-index: -120;
        display: flex;
        justify-content: flex-start;
        width: 1500px;
    }

    .secTwoBg2{
        width: 800px;
        position: absolute;
        top: 860px;
        z-index: -130;
        left: -409px;
        transform: rotate(25deg);
    }

    .secTwoBg3{
        width: 400px;
        position: absolute;
        transform: rotate(166deg);
        z-index: -130;
        left: 84%;
        top: 110%;
    }

    .secTwoBg4{
        width: 400px;
        position: absolute;
        z-index: -130;
        left: 70%;
        top: 138%;
    }


    /* SECTION FOUR CSS*/
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
    @media screen and (min-width: 1900px) {
        #slider{
            height: 600px;
        }

        .secOneBg2{
            width: 500px;
            top: -23%;
            left: 30%;
        }

        .h1-font{
            font-size: 3em;
        }

        .p-font{
            font-size: 2.2em;
        }
        .h2-font{
            font-size: 3em;
        }

        .secTwoBg3{
            display: none;
        }

        .pics1-1 img {
            width: 250px;
            height: 150%;
            justify-content: space-around;
            margin: -15px;
        }

        .pics1-2 img {
            width: 250px;
            height: 150%;
            justify-content: space-around;
            margin: -15px;
        }

        .sec4text{
            margin-top: 3%;
        }
        .section4{
            padding-top: 300px;
        }
    }


    @media screen and (max-width: 1900px) {
        .secTwoBg4 {
            width: 20%;
            left: 69%;
            top: 155%;
        }
        .secTwoBg3{
            display: none;
        }

        .pics1-1 img{
            width: 185px;
            height: 150%;
            justify-content: space-around;
            margin: -15px;
        }
        .pics1-2 img{
            width: 185px;
            height: 150%;
            justify-content: space-around;
            margin-top: -25px;
        }

        .sec4text{
            padding-top: 7%;
            text-align: center;
        }
        #slider{
            height: 450px;
        }
    }

    /*1400*/

    @media screen and (max-width: 1400px){
        .h1-font{
            font-size: 2em;
        }
        .h2-font{
            font-size: 1.3em;
        }
        .p-font{
            font-size: 1.3em;
        }
        .button{
            width: 166px;
            height: 45px;
            font-size: 1.2em;
            outline: hidden;
        }
        #slider img{
            width: 40%;
            height: 80%;
        }
        .button{
            width: 200px;
        }
        .secOneBg {
            position: absolute;
            z-index: -100;
            top: -37%;
            right: -34%;
            height: 180%;
            width: 100%;
        }
        .secOneBg2{
            width: 300px;
            position: absolute;
            top: -25%;
            left: 30%;
            transform: rotate(197deg);
            z-index: -110;
        }

        .images{
            width: 40%;
            height: 100%;
        }
        .secTwoBg4{
            left: 66%;
            top: 146%;
        }

        .secOneImg{
            padding-right: 0%;
        }
        .h2-secTwo{
            margin-top: 230px;
        }
    }

    /*110*/

    @media screen and (max-width: 1100px) {

        .h1-font {
            font-size: 1.7em;
        }

        .h2-font{
            font-size: 1.5em;
        }

        .p-font{
            font-size: 1.2em;
        }

        .button{
            width: 130px;
            height: 30px;
            font-size: 0.9em;
            outline: hidden;
        }

        .secTwoBg4 {
            position: absolute;
            top: 143%;
            left: 64%;
            width: 32%;
        }

        .secTwoBg3{
            /* position: absolute;
             top: 120%;
             */
            display: none;
        }
        .section3{
            padding: 0;
        }

        .secOneBg {

            position: absolute;
            z-index: -100;
            top: -41%;
            right: -40%;
        }

        .secOneImg{
            flex-basis: 50%;
            display:inline-block;

        }

        .section1{
            padding-left: 10%;
        }

        .secOneBg2 {
            left: 30%;
            top: -25%;
        }

        .images{
            width: 40%;
            height: 80%;
        }
    }


    /*  900*/
    @media only screen and (max-width: 900px) {
        .h1-font {
            font-size: 2em;
        }

        .h2-font{
            font-size: 1.7em;
        }

        .p-font{
            font-size: 1.4em;
        }

        .secOneImg{
            flex-basis: 50%;
            display:inline-block;
            width: 70%;

        }

        #slider{
            height: 300px;
        }

        .section1{
            display: flex;
            flex-direction: column;
            position: relative;
            align-items: center;
        }

        .secOneBg2{
            top: -15%;
            left: 30%;
        }

        .secOneBg{
            top: -71%;
            right: -40%;
        }

        .images {
            width: 50%;
            height: 100%;
            margin-right: 5px;
        }

        .h2-secTwo{
            margin-top: -85px;
        }

        .secTwoBg4 {
            display: none;
            top: 180%;
            width: 25%;
            left: 67%;
        }

        .secTwoBg3 {
            display: none;
        }

        .secTwoBg {
            width: 77%;
            top: 142%;
            left: -52%;
            transform: rotate(-106deg);
        }
        .secTwoBg2{
            left: -25%;
            top: 130%;
            transform: rotate(127deg);
            width: 50%;
        }
        .button{
            width: 55%;
            height: 95%;
            font-size: 1.2em;
        }

        .section4{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .pics1-1 img{
            width: 110px;
            height: 110px;
            justify-content: space-around;
            margin: 5px;
        }
        .pics1-2 img{
            width: 110px;
            height: 110px;
            justify-content: space-around;
            margin-top: -25px;
        }

        .pics{
            margin-top: 30px;
        }

    }


    /*do 600*/
    @media screen and (max-width: 600px) {
        .section1{
            flex-direction: column;
            margin-top: -20%;
        }

        .secOneBg {
            position: absolute;
            top: -25%;
            right: -101%;
            transform: rotate(53deg);
            width: 145%;

        }

        .secOneBg2 {
            position: absolute;
            top: -8%;
            left: 57%;
        }

        .secOneImg{
            width: 110%;

            margin-right: 8%;
        }
        .p-font{
            font-size: 1em;
            margin-left: -15px;
        }
        .sectionTwo{
            margin-top: -125px;
        }

        .secTwoBg{
            position: absolute;
            top: 140%;
            left: -52%;
        }

        .secTwoBg2{
            position: absolute;
            top: 130%;
            left: -38%;

        }
        .secTwoBg3{
            display: none;
        }
        .secTwoBg4 {
            display: none;
        }
        .button{
            width: 70%;
            height: 60%;
        }
        .uls{
            margin-top: 10px;
        }
        .section4{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .pics1-1 img{
            width: 90px;
            height: 90px;
            justify-content: space-around;
            margin: 5px;
        }
        .pics1-2 img{
            width: 90px;
            height: 90px;
            justify-content: space-around;
            margin-top: -25px;
        }

        #slider > img:first-child{
            width: 35px;
            height: 35px;
            position: relative;
            top: 172px;
            left: 21px;
        }
        #slider > img:last-child{
            width: 35px;
            height: 35px;
            position: relative;
            top: 172px;
            right: 21px;
        }

        .h1-font{
            margin-left: -15px;
        }

        .pics{
            margin-top: 15px;
        }
    }

</style>

<div class="section1 contain">
    <img class="secOneBg2" src="images/orange-circle.svg">
    <img class="secOneBg" src="images/header-fluid-blue.svg">
    <div class="section1-1">
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

        <ul class="p-font bold">
            <li class="uls">Adaptive and responsive courses</li>
            <li class="uls">Micro learning animated videos</li>
            <li class="uls">Scenario based learning paths</li>
            <li class="uls">Gamified learning <br>experience</li>
        </ul>
    </div>

    <div class="secOneImg">
        <img src="images/online-courses-img.svg">
    </div>
    <div style="padding-top: 150px"> <hr></div>
</div>

<!--   SECTION TWO -->

<div class=" sectionTwo contain">
    <img class="secTwoBg2" src="images/orange-circle.svg">

    <img class="secTwoBg" src="images/header-fluid-blue.svg">



    <div class="h2-font h2-secTwo">
        <h3>Our Works</h3>
    </div>
    <div id="slider">
        <img class="prethodni shadow" onclick="changeImage('previous')" src="images/Picture2.png">
        <img class="shadow images" style="margin-right: 5px;  height: 100%;" id="firstPart" src="" />
        <img class="shadow images" style="margin-right: 5px;  height: 100%;" id="secondPart" src="" />
        <img class="sljedeci shadow" src="images/Picture3.png" onclick="changeImage('next')">
    </div>
    <img class="secTwoBg3" src="images/fluid-bright-circle.svg">
    <img class="secTwoBg4" src="images/orange-circle.svg">



    <div class="section3 contain" >
        <div style="height: 50%">
            <h5 class="h2-font" style="margin-top: 50px; display: flex; justify-content: center">Want to see more:</h5>
        </div>
        <div style="height: 50%; margin-top: 5%; display: flex; justify-content: center">
            <button class="button">Schedule a demo</button>
        </div>
    </div>
</div>

<!-- SECTION FOUUUUURRR-->

<div class="section4 contain">
    <div class="sec4text">
        <h1 style="text-align: center" class="h1-font">Tools and <br>Technologies</h1>
        <p style="margin-top: 50px; text-align: center; margin-left: 13px" class="p-font">We design custom eLearning training that <br>aligns with your strategic corporate objectives<br> using a variety of tools and technologies.</p>
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
<div class="copyright contain">
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

