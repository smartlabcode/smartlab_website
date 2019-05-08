<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style=" margin: 0 auto">
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

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-size: 2em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.5em;
        font-weight: 300;
        color: var(--h1-color);

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
        top: -160px;
        left: 366px;
        transform: rotate(197deg);
        z-index: -110;
    }

    .contain{
        max-width: 1200px;
        width: 90%;
        margin: 0 auto;
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

        <ul class="p-font">
            <li style="margin-top: 20px;"><b>Adaptive and responsive courses</b></li>
            <li style="margin-top: 20px;"><b>Micro learning animated videos</b></li>
            <li style="margin-top: 20px;"><b>Scenario based learning paths</b></li>
            <li style="margin-top: 20px;"><b>Gamified learning experience</b></li>
        </ul>
    </div>

    <div class="secOneImg">
        <img src="images/online-courses-img.svg">
    </div>
    <div style="padding-top: 150px"> <hr></div>
</div>


<!--   SECTION TWO -->

<style>

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

    #slider > img {
        height: 100%;
        width: 530px;
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
        display: flex;
        justify-content: flex-end;
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

</style>

<div class="contain">
    <img class="secTwoBg2" src="images/orange-circle.svg">

    <img class="secTwoBg" src="images/header-fluid-blue.svg">



    <div class="h2-font" style="margin-top: 280px; display: flex; justify-content: center">
        <h3>Our Works</h3>
    </div>
    <div id="slider">
        <img class="prethodni shadow" onclick="changeImage('previous')" src="images/Picture2.png">
        <img class="shadow" style="margin-right: 5px" id="firstPart" src="" />
        <img class="shadow" style="margin-left: 5px" id="secondPart" src="" />
        <img class="sljedeci shadow" src="images/Picture3.png" onclick="changeImage('next')">
    </div>
    <img class="secTwoBg3" src="images/fluid-bright-circle.svg">
    <img class="secTwoBg4" src="images/orange-circle.svg">



    <div class="section3 contain" >
        <div style="height: 50%">
            <h5 class="h2-font" style="margin-top: 50px; display: flex; justify-content: center">Want to see more:</h5>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button">Schedule a demo</button>
        </div>
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

<div class="section4 contain">
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

