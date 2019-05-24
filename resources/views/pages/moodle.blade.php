<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Title</title>
</head>
<body  style="height: 100%; margin: 0 auto">
<style>


    @section('content')


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
        max-width: 1200px;
        margin: 0 auto;
    }

    /* SECTION TWO CSS*/


    .h2-secTwo{
        margin-top: 280px;
        display: flex;
        justify-content: center;
    }

    .sectionTwo{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #slider {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        position: relative;
    }

    #slider div {
        display: flex;
        height: 400px;
        width: calc(100% + 50px);

    }

    .slider-left {
        width: 50%;
        margin-right: 5px;

        border-radius: 15px;
    }

    .slider-left img {
        object-fit: cover;
        width: 100%;
        border-radius: 15px;
    }

    .slider-right {
        width: 50%;
        margin-left: 5px;
        border-radius: 15px;
    }

    .slider-right img {
        object-fit: cover;
        width: 100%;
        border-radius: 15px;
    }

    #slider>img {
        height: 100%;
        border-radius: 10px;
        display: inline-block;
    }
    #slider>img:first-child {
        margin-right: 5px;
        width: 50px;
        height: 50px;
        position: absolute;
        display: inline-block;
        top: 45%;
        left: -15px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 100;
    }

    #slider>img:last-child {
        margin-left: 5px;
        width: 50px;
        height: 50px;
        position: absolute;
        display: inline-block;
        top: 45%;
        right: -65px;
        border-radius: 100%;
        cursor: pointer;
        z-index: 100;
    }

    .button{
        z-index: 5;
        cursor: pointer;
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




    /* SECTION FOUR CSS*/
    .section4{
        padding-top: 0;
        align-items: center;
        display: flex;

    }

    .sec4text {
        padding-top: 7%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .sec4textP{
        margin-top: -32px;
        font-size: 1.5em;
    }
    .pics{
        flex-basis: 50%;

    }
    .pics1-1{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .pics1-2{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding-top: 50px;
    }

    @media screen and (min-width: 1900px) {
        #slider div {
            height: 500px;
        }
        .secTwoBg2{
            top: 820px;
        }
        .section3{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 5%;
        }
        .sec3text{
            font-family: "Montserrat", sans-serif;
            font-size: 2.2em;
            color: var(--h2-color);
        }

        #slider >img:first-child {
            width: 80px;
            height: 80px;
            margin-left: -12px;
            top:220px;
        }

        #slider >img:last-child {
            width: 80px;
            height: 80px;
            margin-right: -15px;
            top: 220px;
        }

        .secOneBg2{
            width: 500px;
            top: -23%;
            left: 45%;
        }

        .secOneBg{
            right: -75%;
            top: -10%;
            width: 125%;
        }

        .h1-font{
            font-size: 3em;
        }

        #slider >img:last-child {
            top: 275px;
        }

        #slider >img:first-child {
            top: 275px;
        }

        .p-font{
            font-size: 2.2em;
        }
        .h2-font{
            font-size: 3em;
        }

        .slider-right img{
            width: 100%;
            height: 120%;
            object-fit: cover;
        }

        .slider-left img{
            width: 100%;
            height: 120%;
            object-fit: cover;
        }

        .pics1-2 img {
            width: 160px;
            height: 141%;
            justify-content: space-around;
            margin: 10px;
        }

        .pics1-1 img {
            width: 160px;
            height: 141%;
            justify-content: space-around;
            margin: 10px;
        }

        .section4 {
            padding-top: 0;
            margin-top: 5%;

        }

        .sec4text {
            padding-top: 7%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-right: 60px;
        }

        .sec4textP{
            margin-top: -32px;
            font-size: 1.5em;
        }

        .button{
            width: 320px;
            height: 80px;

        }
        .pics1-2 img{
            margin: 5px;
            width: 230px;
            height: 230px;
        }

        .pics1-1 img{
            width: 230px;
            height: 230px;
            margin: 5px;
        }

    }

    @media screen and (max-width: 1900px) {

        .section3{
            align-items: center;
        }

        .section4{
            padding-top: 0;

            /* padding-left: 425px; */
            align-items: center;
            display: flex;
        }

        .pics1-1{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .pics1-1 img{
            width: 190px;
            height: 190px;
        }

        .pics1-2 img{
            width: 190px;
            height: 190px;
        }

        .pics1-2{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-top: 50px;
        }

        .sec4text{
            padding-top: 7%;
            text-align: center;
            flex-basis: 40%;
            padding-right: 10%;
        }
        #slider{
            height: 450px;
            width: 80%;
            display: flex;
        }

        .sec3text{
            font-family: "Montserrat", sans-serif;
            font-size: 2.2em;
            color: var(--h2-color);
        }
        .secOneBg{
            width: 100%;
            right: -50%;
            top: -10%;
        }
        .secOneBg2{
            width: 500px;
            top: -30%;
            left: 38%;
        }
    }

    @media screen and (max-width: 1450px){

        .sec3text{
            font-family: "Montserrat", sans-serif;
            font-size: 1.8em;
            color: var(--h2-color);
        }

        .h1-font{

            font-size: 2.2em;
        }

        .h2-font{
            font-size: 1.7em;
        }

        .p-font{
            font-size: 1.5em;
        }

        .button{
            width: 230px;
            height: 70px;
            font-size: 1.4em;
            outline: hidden;
        }

        .section3{
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .secOneBg {
            position: absolute;
            z-index: -100;
            top: -37%;
            right: -24%;
            height: 180%;
            width: 90%;
        }

        .secOneBg2{
            width: 300px;
            position: absolute;
            top: -25%;
            left: 30%;
            transform: rotate(197deg);
            z-index: -110;
        }

        #slider{
            height: 60%;
        }

        .secOneImg{
            padding-right: 0;
        }
        .h2-secTwo{
            margin-top: 230px;
        }

        .secTwoBg {
            left: -1046px;
            width: 100%;
            top: 100%;
        }

        .secTwoBg2{
            top: 660px;
            left: -458px;
        }

        .section1-1 {
            padding-top: 150px;
        }

        .sec4text {
            padding-top: 4%;
            flex-basis: 40%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sec4textP{
            margin-top: -32px;
            font-size: 1.7em;
        }

        .pics1-2 img {
            width: 160px;
            height: 160px;
            justify-content: space-around;
            margin: 10px;
        }

        .pics1-1 img {
            width: 160px;
            height: 160px;
            justify-content: space-around;
            margin: 10px;
        }
    }

    @media screen and (max-width: 1100px) {

        .sec3text{
            font-family: "Montserrat", sans-serif;
            font-size: 1.8em;
            color: var(--h2-color);

        }
        .section4{
            padding-top: 0;
            margin: 10%;
        }

        .sec4text {
            padding-top: 7%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-right: 60px;
        }

        .sec4textP{
            margin-top: -32px;
            font-size: 1.5em;
        }

        .h1-font {
            font-size: 1.7em;
        }

        .h2-font{
            font-size: 1.5em;
        }

        .h2-secTwo {
            margin-top: 120px;
        }

        .p-font{
            font-size: 1.5em;
        }

        .button{
            width: 140px;
            height: 50px;
            font-size: 0.9em;
            outline: hidden;
        }

        .section3{
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .secOneBg {

            position: absolute;
            z-index: -100;
            top: -40%;
            right: -40%;
        }
        .secTwoBg{
            left: -70%;
            width: 105%;
            top: 100%;
        }

        .secTwoBg2{
            top: 654px;
            left: -435px;

        }

        .section1-1 {
            padding-top: 120px;
        }

        .secOneImg{
            flex-basis: 50%;
            padding-right: 75px;
        }

        .section1{
            padding-left: 10%;
        }

        .secOneBg2 {
            left: 40%;
            top: -25%;
        }

        .pics1-2 img {
            width: 160px;
            height: 160px;
            justify-content: space-around;
            margin: 10px;
        }

        .pics1-1 img {
            width: 160px;
            height: 160px;
            justify-content: space-around;
            margin: 10px;
        }
    }

    @media screen and (max-width: 800px){

        .section1 {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-top: 0;
        }

        .section1-1 {
            padding-top: 120px;
        }

        .uls {
            margin-top: 10px;
        }

        .h1-font {
            margin-left: -15px;
        }

        .p-font {
            font-size: 1.3em;
            margin-left: -15px;
        }

        .secOneBg {
            position: absolute;
            top: -30%;
            right: -45%;
            transform: rotate(0deg);
            width: 100%;
        }
        .secOneBg2 {
            position: absolute;
            top: -20%;
            left: 30%;
        }

        .secOneImg {
            padding-right: 7%;
            padding-bottom: 7%;

        }

        .sectionTwo {
            margin-top: 0;
        }

        .secTwoBg {
            width: 107%;
            top: 96%;
            left: -72%;
        }

        .secTwoBg2 {
            width: 60%;
            position: absolute;
            top: 85%;
            left: -33%;

        }
        .h2-secTwo{
            margin-top: 30px;
            margin-bottom: 45px;
        }

        .section1-1{
            /* padding-top: 100px;*/
        }

        /*slider*/
        #slider{
            height: 60%;
            display: flex;
        }

        #slider div{
            width: calc(100% + 0);
        }

        .slider-right img{
            display: flex;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        #slider>img:last-child{
            right: -17px;
        }

        .slider-left img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        /* section3*/
        .section3{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 0;
        }
        .sec3text{
            font-family: "Montserrat", sans-serif;
            font-size: 1.8em;
            color: var(--h2-color);
        }
        .button{
            margin-top: -25px;
        }

        /*section4*/
        .section4 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -5%;
        }
        .sec4text{
            width: 70%;
        }


        .pics1-1 img {
            width: 90px;
            height: 90px;
            justify-content: space-around;
            margin: 5px;
        }

        .pics1-2 img {
            width: 90px;
            height: 90px;
            justify-content: space-around;
            margin-top: -25px;
        }


        .pics {
            margin-top: 15px;
        }

    }

    @media screen and (max-width: 650px) {

        /*section 1 to 320px*/
        .section1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -20%;
        }
        .section1-1{
            padding-top: -280px;
        }

        .uls {
            margin-top: 10px;
        }

        .h1-font {
            margin-left: -15px;
        }

        .p-font {
            font-size: 1.3em;
            margin-left: 18px;
            width: 88%;
            padding-left: 6%;
        }

        .secOneBg {
            position: absolute;
            top: -30%;
            right: -100%;
            transform: rotate(53deg);
            width: 145%;

        }

        .secOneBg2 {
            position: absolute;
            top: -8%;
            left: 65%;
        }

        .secOneImg {
            width: 350px;
            margin-right: 15px;
            padding-right: 10%;
            padding-bottom: 4%;
        }

        /*section 2 to 320px*/

        .sectionTwo {
            margin-top: 0;
        }

        .secTwoBg {
            width: 107%;
            top: 110%;
            left: -72%;
        }

        .secTwoBg2 {
            width: 60%;
            position: absolute;
            top: 95%;
            left: -31%;
        }
        .h2-secTwo{
            margin-top: 0;
        }

        /*slider*/

        #slider{
            height: auto;
            margin-top: 50%;
        }

        #slider div{
            height: 300px;
            width: 100%;
        }

        .slider-right{
            display: none !important;
        }
        .slider-left{
            width: 110%;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        #slider > img:first-child {
            width: 35px;
            height: 35px;
            position: relative;
            top: -222px;
            left: 45px;
        }

        #slider > img:last-child {
            width: 35px;
            height: 35px;
            position: relative;
            top: -560px;
            right: -345px;
        }

        .slider-left img{
            object-fit: cover;
            width: 70%;
            height: 70%;
            margin-top: -82%;
        }

        /* section3*/
        .section3{
            margin-top: -50%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sec3text{
            margin-top: -70%;
            font-family: "Montserrat", sans-serif;
            font-size: 1.3em;
            color: var(--h2-color);
        }

        .button{
            height: 53%;
            margin-top: -68%;
            display: flex;
            justify-content: center;
            font-size: 1rem;
            width: 98%;
        }

        /*section4*/
        .section4 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -30%;
        }

        .sec4text{
            margin-top: 50px;
            text-align: center;

            width: 75%;
        }


        .pics1-1 img {
            width: 90px;
            height: 90px;
            justify-content: space-around;
            margin: 5px;
        }

        .pics1-2 img {
            width: 90px;
            height: 90px;
            justify-content: space-around;
            margin-top: -25px;
        }

        .pics {
            margin-top: 15px;
        }

        #contact{

            margin-top: -33%;
        }


    }

    @media screen and (max-width: 450px){
        #slider > img:last-child {
            top: -380px;
            right: -220px;
        }

        .sec4textP{
            padding-left: 40px;
        }

        .uls{
            margin-left: 8px;
        }

        .secTwoBg {
            width: 107%;
            top: 850px;
            left: -72%;
        }
        .sec4text {
            margin-top: 100px;
        }

        #contact {
            margin-top: -40% !important;
        }

        .secTwoBg2 {
            width: 60%;
            position: absolute;
            top: 100% ;
            left: -30%;
        }
        #slider >img:last-child{
            top: -111px;
            right: 28px;
        }
        #slider >img:first-child{
            top: -110px;
            left: 24px;
        }
        .slider-left{
            margin-top: -10%;
            width: 300px;
            height: 220px;
        }

        .section1-1{
            padding-top: 100px;

        }

        .section3{
            margin-top: -35%;
        }

        .section4{
            margin-top: -25%;
        }

        .sec3text {
            margin-top: -60%;
        }

        .slider-left img{
            object-fit: cover;
            width: 100%;
            height: 65%;
            margin-top: -70%;
        }
        .sectionTwo{
            margin-top: 30px;
        }
        .submit {
            align-self: center !important;
        }

        .secOneBg{
            top: -35%;
            right: -100%;
        }
        .secOneImg{
            width: 80%;
            margin-top: 10%;
        }
        .h1-font{
            margin-left: 45px;
        }
        .p-font{
            margin-left: 24px;
            width: 79%;
            padding-left: 0;
        }
    }

    @media screen and (max-width: 376px){
        #slider >img:last-child{
            top: -60px;
            right: 28px;
        }
        #slider >img:first-child{
            top: -55px;
        }
        .sec4textP{
            width: 125%;
        }

        .sec3text{
            margin-top: -30%;
        }
        #slider{
            margin-top: 20%;
        }
        .section3{
            margin-top: -50%;
        }

        .section4{
            margin-top: -15%;
        }

        .secOneImg{
            margin-top: 10%;
        }

        .sectionTwo{
            margin-top: 10%;
        }
        .secTwoBg {
            width: 107%;
            top: 820px;
            left: -72%;
        }

        .slider-left img{
            object-fit: cover;
            width: 100%;
            height: 55%;
            margin-top: -60%;
        }

        .secTwoBg2 {
            width: 60%;
            position: absolute;
            top: 100% ;
            left: -30%;
        }

        .slider-left{
            margin-top: -10%;
            width: 300px;
            height: 220px;
        }

        #contact{
            margin-top: -50%;
        }

        .submit {
            align-self: center !important;
        }

        .secOneBg{
            top: -35%;
            right: -100%;
        }
        .section1-1 {
            padding-top: 150px;
        }

        .h1-font{
            margin-left: 45px
        }
        .button{
            width: 165px;
            font-size: 1.2em!important;
            height: 61px;
            margin-top: -38%;
        }
    }



    @media screen and (max-width: 350px) {


        .section1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -20%;
        }

        .uls {
            margin-top: 10px;
        }

        .h1-font {
            margin-left: -15px;
        }

        .p-font {
            font-size: 1em;
            margin-left: -15px;
        }

        .section1-1 {
            padding-top: 150px;
        }

        .secOneBg {
            position: absolute;
            top: -30%;
            right: -110%;
            transform: rotate(53deg);
            width: 145%;
        }

        .secOneBg2 {
            position: absolute;
            top: -8%;
            left: 65%;
        }

        .secOneImg {
            width: 90%;
        }

        .sectionTwo {
            margin-top: 50px;
        }

        .secTwoBg {
            width: 107%;
            top: 1025px;
            left: -72%;
        }

        .secTwoBg2 {
            width: 60%;
            position: absolute;
            top: 120%;
            left: -30%;
        }

        .h2-secTwo{
            margin-top: 1px;
        }

        #slider{
            height: auto;
            margin-top: 23%;
        }

        #slider div{
            height: 300px;
            width: 100%;
        }

        .slider-right{
            display: none !important;
        }

        #slider > img:first-child {
            width: 35px;
            height: 35px;
            position: relative;
            top: -80px;
            left: -16px;
        }

        #slider > img:last-child {
            width: 35px;
            height: 35px;
            position: relative;
            top: -418px;
            right: -208px;

        }

        .slider-left img{
            object-fit: cover;
            width: 140%;
            height: 55%;
            margin-top: -70%;
        }

        .section3{
            margin-top: -45%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sec3text{
            margin-top: -40%;
            font-family: "Montserrat", sans-serif;
            font-size: 1.3em;
            color: var(--h2-color);
        }

        .button{
            height: 53%;
            margin-top: -50%;
            display: flex;
            justify-content: center;
            font-size: 1rem;
            width: 98%;

        }

        /*section4*/
        .section4 {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -75%;
        }

        .pics1-1 img {
            width: 90px;
            height: 90px;
            justify-content: space-around;
            margin: 5px;
        }

        .pics1-2 img {
            width: 90px;
            height: 90px;
            justify-content: space-around;
            margin: 5px;
        }

        .pics {
            margin-top: 15px;
        }

        .submit {
            align-self: center;
        }
    }

    @media screen and (max-width: 1000px){

        .contact-form-group{
            flex-direction: column;
        }
    }

    .contact-form-container {
        width: 50%;
        margin: 0 auto;
    }

    .contact-form-container {
        color: var(--h1-color);
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        font-size: 1.3em;
        font-family: "Montserrat", sans-serif;
        margin-bottom: 0;
    }

    .contact-form-group {
        display: flex;
        flex-basis: 100%;
        justify-content: space-between;
        padding-top: 20px;
    }

    .contact-form-group div {
        flex-basis: 47%;
    }

    .contact-form-group input,
    textarea {
        padding: 15px 25px;
        border-radius: 10px;
        /*background-color: rgba(122, 161, 233, 0.5);*/
        border: 1px solid rgba(122, 161, 233, 0.5);
        resize: none !important;
        box-sizing: border-box;
    }

    input:focus,
    textarea:focus {
        outline: none !important;
        border: 1px solid rgba(122, 161, 233, 1);
    }

    .contact-form-group label,
    .contact-form-group input,
    .contact-form-group textarea {
        width: 100%;

        margin-top: 5px;
    }

    .textarea {
        display: flex;
        flex-direction: column;
    }

    .button-orange:hover {

        color: var(--button-bg-orange) !important;
        border: 1px solid var(--button-bg-orange) !important;
    }

    .submit {
        align-self: flex-end;
        margin-top: 20px;
        background-color: var(--button-bg-orange);
        border: 1px solid var(--button-bg-orange);
    }

    .submit:hover {
        background-color: transparent;
        color: white;
        border: 1px solid white;
    }

    .contact-section {
        width: 112%;
        left: -6%;
        position: relative;
        height: 0;
        overflow: hidden;
        transition: all 0.2s ease-in-out;
        margin-top: 5%;
    }

    .contact-form-container p {
        font-family: "Montserrat", sans-serif;
        font-size: 1.3em;
        text-align: center;
        padding-bottom: 50px;
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

    .small{

        display: flex;
        align-items: center;
        flex-direction: column;
    }

</style>

<div class="section1 contain">
    <img class="secOneBg2" src="{{'/images/orange-circle.svg'}}">
    <img class="secOneBg" src="{{'/images/header-fluid-blue.svg'}}">


    <div class="section1-1">
        <h3 class="h1-font">
            @lang('moodle.MoodleLMS')
        </h3>

        <p style="text-align: center; margin-left: 15px; font-size: 1.2em;" class="p-font">
            @lang('moodle.secOneP1')
        </p>

        <ul style="margin-left: 15px; font-size: 1.2em;" class="p-font bold">
            <li class="uls"> @lang('moodle.secOneUlFirst')</li>
            <li class="uls">@lang('moodle.secOneUlSecond')</li>
            <li class="uls">@lang('moodle.secOneUlThird')</li>
            <li class="uls">@lang('moodle.secOneUlFourth')</li>
        </ul>
    </div>

    <div class="secOneImg">
        <img src="{{'/images/moodle-img.svg'}}">
    </div>
</div>

<!--   SECTION TWO -->

<div class=" sectionTwo contain">
    <img class="secTwoBg2" src="{{'/images/orange-circle.svg'}}">
    <img class="secTwoBg" src="{{'/images/header-fluid-blue.svg'}}">

    <div class="h2-font h2-secTwo">
        <h3>@lang('moodle.sec2h2')</h3>
    </div>

    <div id="slider">
        <img class="shadow-1" src="{{'/images/Picture2.png'}}" onclick="changeImage('previous')" >
        <div>
            <div class="slider-left shadow-1"><img id="firstPart" src="" /></div>
            <div class="slider-right shadow-1"><img id="secondPart" src="" /></div>
        </div>
        <img class="shadow-1" src="{{'/images/Picture3.png'}}" onclick="changeImage('next')">
    </div>

</div>

<div class="section3 contain" >
    <div style="height: 50%">
        <h5 class="sec3text">@lang('moodle.sec2h22')</h5>
    </div>
    <div style="height: 50%; margin-top: 5%; display: flex; justify-content: center">
        <button id="button" class="button">@lang('moodle.buttonSchedule')</button>
    </div><br>
</div><br>


<section id="contact" class="contact-section">
    <div class="contact-form-container">
        <form class="contact-form">
            <div class="contact-form-group">
                <div>
                    <label for="name">@lang('moodle.contactName')</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div>
                    <label for="company">@lang('moodle.contactCompany')</label>
                    <input type="text" name="company" id="company" />
                </div>
            </div>
            <div class="contact-form-group">
                <div>
                    <label for="subject">@lang('moodle.contactSubject')</label>
                    <input type="text" name="subject" id="subject" />
                </div>
                <div>
                    <label for="email">@lang('moodle.contactEmail')</label>
                    <input type="text" name="email" id="email"/>
                </div>
            </div>
            <div class="contact-form-group">
                <div>
                    <label for="date">@lang('moodle.contactDate')</label>
                    <input type="date" name="date" id="date" />
                </div>
                <div>
                    <label for="email">@lang('moodle.contactTime')</label>
                    <input type="time" name="time"/>
                </div>
            </div>
            <div class="contact-form-group textarea">
                <label for="message">@lang('moodle.contactMessage')</label>
                <textarea name="message" id="message" rows="7"></textarea>
            </div>
            <input class="button submit button-orange" type="submit" value="@lang('moodle.buttonSend')" />
        </form>
    </div>
</section>
<!-- SECTION FOUUUUURRR-->

<div class="section4 contain">
    <div class="sec4text">
        <h1 style="text-align: center !important;" class="h1-font">@lang('moodle.sec3h2')</h1>
        <div class="sec4textP">
            <p style="margin-top: 50px; text-align: center; margin-left: 13px">@lang('moodle.sec3p')</p>
        </div>

    </div>
    <div class="pics">
        <div class="pics1-1">
            <img src="{{'/images/moodle-logo-39b36ce704607472-512x512.png'}}">
            <img src="{{'/images/bbb-logo.png'}}">
            <img src="{{'/images/php_PNG28.png'}}">
        </div>
        <div class="pics1-2">
            <div  class="small">
                <img src="{{'/images/scorm.png'}}">
            </div>
            <div class="small" >
                <img src="{{'/images/ispring-logo_1640x414.png'}}">
            </div>
            <div>
                <img src="{{'/images/GAMIFICATION-NATION-2-LOGO-e1527579917733.png'}}">
            </div>
        </div>
    </div>
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
        if(window.innerWidth>768){
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

        }else{
            if(imgOne < images.length-1 && par == "next"){

                imgOne++;
            }else if(imgOne !== 0 && par == "previous"){
                imgOne--;
            }
            imgOneSrc = images[imgOne];
            document.getElementById("firstPart").src=imgOneSrc;
        }

    }


    let button = document.querySelector("#button");
    let form = document.querySelector("#contact");
    button.addEventListener("click", function(){
        console.log("clicked", form.clientHeight);
        if(form.clientHeight != 0){
            form.style.height = 0;
        }else{
            form.style.height = 100 + "%";
        }
    });

</script>

</body>
</html>

