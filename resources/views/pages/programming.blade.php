<!-- Extend main layout -->
@extends('layouts.app')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    /* SECTION ONE */
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #0f75bc;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }
    body{
        background: white !important;
    }
    nav{
        display: none !important;
    }
    .bold {
  font-weight: bold;
}
.h1-font {
  font-family: "Montserrat", sans-serif;
  font-size: 2.8em;
  margin-top: 0;
  margin-bottom: 25px;
  color: var(--h1-color);
}
.h2-font {
  font-family: "Montserrat", sans-serif;
  font-size: 1.8em;
  color: var(--h2-color);
}
.p-font {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 1.5em;
  font-weight: 300;
  color: var(--h1-color);
}

    .shadow-1{
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
    }

    .background-section-one {
  /*background-image: url("/img/header-fluid-blue.svg");
  background-repeat: no-repeat;
  background-attachment: local;
  background-origin: border-box;
  background-size: cover;
  width: 100%;
  height: 100%;
  background-position-x: 300px;
  background-position-y: -200px;*/
  position: relative;
}
.background-img {
  position: absolute;
  /*width: calc(75vw - 100px);*/
  height: 113vh;
  top: -150px;
  right: -200px;
  z-index: -10;
}
.background-img-orange-circle {
  position: absolute;
  position: absolute;
  width: 25%;
  transform: rotate(0deg);
  top: -250px;
  right: 650px;
  z-index: -100;
}
.background-img-circle {
  position: absolute;
  width: 250px;
  z-index: -15;
}
.--circle1 {
  top: 100px;
  left: -100px;
}
.--circle2 {
    bottom: 77%;
    right: 39%;
}
.--circle3 {
  top: -100px;
  left: 15%;
}
.text-center {
  text-align: center;
}
.section-one {
  position: relative;
  top: 100px;
  display: flex;
  padding-bottom: 100px;
  justify-content: space-between;
}
.section-one-text {
  width: 50%;
  align-self: center;
  padding-right: 50px;
  justify-content: space-between;
}
.section-one-text ul{
    padding-top: 20px;
    font-weight: bold;
}
/*.section-one-text h2,
.section-one-text h1 {
  font-size: 2em;
}*/
.section-one-animation {
  object-fit: contain;
  height: 75vh;
  width: 50%;
  min-width: 350px;
}
    .contain{
        max-width: 1200px;
        width: 90%;
        margin: 0 auto;
    }

    /* SECTION TWO*/


    #slider {
        margin-top: 70px;
        width: 100%;
        height: 400px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 10px;
        box-sizing: border-box;
        position: relative;
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
        top: 0%;
        transform: rotate(242deg);
        position: absolute;
        left: -97%;
        /* left: -1052px; */
        z-index: -120;
        /* display: flex; */
        /* justify-content: flex-start; */
        width: 108%;
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
        width: 15%;
        position: absolute;
        z-index: -130;
        left: 86%;
        /* top: 0; */
        bottom: 23%;
        /* top: 192%; */
    }
    .relative{
        position: relative;
    }


    /* SECTION THREE*/
    .xliff-container{
        display: flex;
        justify-content: space-between;
        margin: 100px auto;
    }
    .xliff-container .h1-font{
        font-size: 1.6em;
    }
    .xliff-section .button{
        box-sizing: border-box;
        background-color: var(--h1-color);
        border: 1px solid var(--h1-color);
        
    }
    .xliff-section .button:hover{
        background-color: white;
        color: var(--h1-color);
        border: 1px solid var(--h1-color);
    }
    .xliff-item .p-font{
        font-size: 1.2em;
    }
    .xliff-item{
        max-width: 200px;
        flex-basis: 20%;
        position: relative;
    }
    .xliff-item:nth-child(even){
        margin-top: 50px;
    }
    .xliff-section{
        text-align: center;
        position: relative;
        top: calc(100vh - 950px);
    }
    .xliff-section h1{
        
    }
    .xliff-section h3{
        font-size: 2.5em;
        font-weight: bold;
    }
    .xliff-background{
        object-fit: cover;
        position: absolute;
        width: 115vw;
        z-index: -100;
        transform: translate(-20% ,-12%);
    }
    .xliff-background-container{
        position: relative;
        margin-top: 10%;
    }
    .dashed-line{
        position: absolute;
        top: 27%;
        right: -56%;
        width: 60%;
    }
    .dashed-line-rotate{
        transform: rotate(147deg) !important;
        top: 6%;
    }
    .tools-container{
        position: relative;
        top: 700px;
    }
    .tools {
        display: flex;
        justify-content: space-between;
    }
    .tools-info{
        flex-basis: 35%;
    }
    .tools-img{
        flex-basis: 50%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .tools-img div{
        flex-basis: 33%;
        text-align: center;
        margin-bottom: 50px;
    }
    .tools-img img{
        width: 50%;
    }
    @media screen and (max-width: 1530px){
        .xliff-container{
            margin: 30px auto;
        }
    }
@media screen and (max-width: 1400px){
  .background-img{
    height: 45%;
    top: -9%;
    right: -25%;
  }
  .section-one{
    justify-content: space-around;
  }
  .background-img-orange-circle{
    top: -181px;
    right: 701px;
  }
}
@media screen and (max-width: 1320px){
.background-img{
    right: -45%;
  }
  .background-img-orange-circle{
    top: -181px;
    right: 635px;
  }
  .xliff-section {
    top: calc(100vh - 1000px);
}
.xliff-background{
    width: 135vw;
}
.dashed-line{
    position: absolute;
    top: 27%;
    right: -38%;
    width: 50%;
}
.dashed-line-rotate {
    transform: rotate(147deg) !important;
    top: 6%;
}
}
@media screen and (max-width: 1200px){
    .contain{
        width: 95%;
        margin:0 auto;
        margin-bottom: 100px;
    }
    .section-one-text{
        padding-right: 0;
    }
}
@media screen and (max-width: 1175px){
    .background-img{
        right: -50%;
    } 
    .background-img-orange-circle{
        right: 530px;
    }
    .button{
    width: 208px;
    height: 56px;
  }
}
@media screen and (max-width: 1065px){
    .xliff-section{
        top: calc(100vh - 1035px);
    }
  .background-img{
      right: -55%;
  }
}
@media screen and (max-width: 1030px){
    .background-img{
        right: -65%;
    }
}
@media screen and (max-width: 900px){
  .background-img{
    top: 1%;
    right: -93%;
    transform: rotate(70deg);
  }
  .section-one ul{
      text-align: left;
  }
  .section-one{
      flex-direction: column;
      align-items: center;
      padding-bottom: 0;
  }
  .section-one-text{
      width: 100%;
      text-align: center;
      margin-top: 100px;
  }
  .section-one-animation{
      height: auto;
      width: 70%;
  }
}
@media screen and (max-width: 600px){
    #app{
      width: 100% !important;
      margin: 0 !important;
    }
    .background-img {
    top: 1%;
    right: -87%;
    transform: rotate(67deg);
    width: 145%;
    }
    .h1-font{
      font-size: 1.5em;
    }
    .h2-font{
      font-size: 1.3em;
    }
    .p-font{
      font-size: 1.2em;
    }
    .button{
      width: 166px;
      height: 45px;
      font-size: 1.2em;
      outline: hidden;
    }
}
@media screen and (max-width: 360px){
  .section-one{
    top:0;
  }
  .section-one-animation{
    padding: 0 27px;
  }
  .section-one-text{
    margin-bottom: 10px;
  }
}

</style>
@section('content')

<div class="background-section-one">
        <img class="background-img" src="../images/img/header-fluid-blue.svg"  />
        <img
          class="background-img-orange-circle"
          src="../images/img/orange-circle.svg"
        />
        <img
          class="background-img-circle --circle1"
          src="../images/img/fluid-bright-circle.svg"
        />
        <img
          class="background-img-circle --circle2"
          src="../images/img/fluid-bright-circle.svg"
          
        />
        <img
          class="background-img-circle --circle3"
          src="../images/img/fluid-bright-circle.svg"
          
        />
        <section class="section-one contain" >
        
              <div class="section-one-text" data-aos="zoom-in">
                  
                  <h1 class="h1-font bold" >Development and programming</h1>
                  <p class="p-font">
                    Back and front-end development of learning and performance managment systems, as well as custom functions and iteractivity options making your courses compelling and user friendly.
                    <ul>
                        <li>Custom made tracking and reporting features</li>
                        <li>Flash to HTML5 conversion of existing courses to enable delivery for multiple platforms</li>
                        <li>Scenario based quizes</li>
                        <li>Englaging tools for webinars</li>
                        <li>Augumented reality integrated</li>
                    </ul>
                  </p>
                </div>
                <img data-aos="zoom-in"
                  class="section-one-animation"
                  src="../images/img/dev-page-illustration.svg"
                  
                />
          
          
        </section>
    </div>

<!--   SECTION TWO -->



<section class="contain relative">
    <img class="secTwoBg2" src="../images/img/orange-circle.svg">

    <img class="secTwoBg" src="../images/img/header-fluid-blue.svg">



    <div class="h2-font" style="margin-top: 280px; display: flex; justify-content: center">
        <h3>Our Works</h3>
    </div>
    <div id="slider">
            <img class="prethodni shadow-1" onclick="changeImage('previous')" src="../images/img/Picture2.png">
            <img class="shadow-1" style="margin-right: 5px" id="firstPart" src="" />
            <img class="shadow-1" style="margin-left: 5px" id="secondPart" src="" />
            <img class="sljedeci shadow-1" src="../images/img/Picture3.png" onclick="changeImage('next')">
    </div>
    <img class="secTwoBg3" src="../images/img/fluid-bright-circle.svg">
    <img class="secTwoBg4" src="../images/img/orange-circle.svg">



    <div class="section3 contain" >
        <div style="height: 50%">
            <p class="p-font" style="margin-top: 50px; display: flex; justify-content: center">Want to see more:</p>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button">Schedule a demo</button>
        </div>
    </div>
</section>
<section class="contain xliff-background-container">
        <img class="xliff-background" src="../images/img/light-blue-bg.svg">
    <div class="xliff-section">
        
        <h1 class="h1-font">XLIFF Translation</h1>
        <div class="xliff-container">
            <div class="xliff-item" 
                data-aos-anchor=".xliff-background-container"
                data-aos="zoom-in-right"
                data-aos-offset="0"
                data-aos-delay="0"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="false"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <img src="../images/xliff-icons/step1-icon-upload.svg" >
                <img class="dashed-line" src="../images/img/dashed-line.svg"
                data-aos-anchor=".xliff-background-container"
                data-aos="zoom-in-right"
                data-aos-offset="50"
                data-aos-delay="100"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="false"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <h5 class="h1-font">Upload your file<h5>
                <p class="p-font">
                    Upload XLF and select languages for translation
                </p>
            </div>
            
            <div class="xliff-item"
            data-aos-anchor=".xliff-background-container"
            data-aos="zoom-in-right"
            data-aos-offset="100"
            data-aos-delay="100"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="false"
            data-aos-once="true"
            data-aos-anchor-placement="top-center">
                <img src="../images/xliff-icons/step2-icon-download.svg">
                <img class="dashed-line dashed-line-rotate" src="../images/img/dashed-line.svg"
                data-aos-anchor=".xliff-background-container"
                data-aos="zoom-in-right"
                data-aos-offset="150"
                data-aos-delay="150"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="false"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <h5 class="h1-font">Download XLS<h5>
                <p class="p-font">
                    Download XLS file (excel) which contains all the data from your original XLF and additional columns for selected languages
                </p>

            </div>
            <div class="xliff-item"
            data-aos-anchor=".xliff-background-container"
                data-aos="zoom-in-right"
                data-aos-offset="200"
                data-aos-delay="200"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="false"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <img src="../images/xliff-icons/step3-icon-trans.svg">
                <img class="dashed-line" src="../images/img/dashed-line.svg"
                data-aos-anchor=".xliff-background-container"
                data-aos="zoom-in-right"
                data-aos-offset="250"
                data-aos-delay="250"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="false"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <h5 class="h1-font">Translate columns<h5>
                <p class="p-font">
                    Insert translations in given columns and upload your files (Original XLF and new XLS file with translations)
                </p>
                
            </div>
            <div class="xliff-item" 
            data-aos-anchor=".xliff-background-container"
                data-aos="zoom-in-right"
                data-aos-offset="300"
                data-aos-delay="300"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="false"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <img src="../images/xliff-icons/step4-icon-ready.svg">
                <h5 class="h1-font">Ready for download<h5>
                <p class="p-font">
                    Now server creates XLF files for all selected languages and then they are reay to download
                </p>
            </div>
        </div>
        <button class="button">See more</button>
    </div>
</section>
<section class="contain tools-container">
    <div class="tools">
        <div class="tools-info">
            <h1 class="h1-font">Tools and Technologies</h1>
            <p class="p-font">
                We design custom eLearning training that aligns with your strategic corporate objectives using a vareity of tools and technologies.
            </p>
        </div>
        <div class="tools-img">
            <div>
                <img src="https://via.placeholder.com/150">
            </div>
            <div>
                <img src="https://via.placeholder.com/150">
            </div>
            <div>
                <img src="https://via.placeholder.com/150">
            </div>
            <div>
                <img src="https://via.placeholder.com/150">
            </div>
            <div>
                <img src="https://via.placeholder.com/150">
            </div>
            <div>
                <img src="https://via.placeholder.com/150">
            </div>

        </div>
    
</section>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
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
@endsection