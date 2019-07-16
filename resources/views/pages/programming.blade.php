<!-- Extend main layout -->
@extends('layouts.app')

<style>
    /* SECTION ONE */
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885FA;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        scroll-behavior: smooth;
    }

    body {
        background: white !important;
        overflow-x: hidden !important;
        overflow-y: hidden !important;
    }

    html {
        overflow-x: hidden !important;
    }





    .bold {
        font-weight: bold;
    }

    .button:focus {
        outline: 0;
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
        color: var(--h2-color);
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.5em;
        font-weight: 300;
        color: var(--h1-color);
    }

    .shadow-1 {
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
        width: 85vw;
        /* max-height: 124vh; */
        top: -406px;
        right: -300px;
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
        bottom: -12%;
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

    .section-one-text ul {
        padding-top: 20px;
        font-weight: 500;
        list-style-type: circle;
    }

    /*.section-one-text h2,
.section-one-text h1 {
  font-size: 2em;
}*/
    .section-one-animation {
        object-fit: contain;
        height: 75vh;
        width: 60%;
        min-width: 350px;
        margin-left: 0;
        margin-right: -3%;
    }

    .contain {
        max-width: 1440px;
        width: 90%;
        margin: 0 auto;
    }

    /* SECTION TWO*/
    /*.section-two {
        margin-top: 300px !important;
    }*/

    .center {
        text-align: center;
    }

    #slider {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        position: relative;
    }

    #slider>div {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
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

    .popup-click {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
        z-index: 99;
    }

    .popup {
        max-width: 1440px;
        width: 90vw;
        /* height: calc(100vh - 75px); */
        /* height: 90vh; */
        position: fixed;
        margin: 0 auto;
        top: 50%;
        padding: 20px;
        left: 50%;
        z-index: 10;
        transform: translateX(-50%) translateY(-50%);
        border-radius: 30px;
        display: none !important;
    }

    .shadow-2 {
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        background-color: white;
        z-index: 110;
        display: block !important;
    }

    .popup-content {
        width: 100%;
        height: 100%;
        z-index: 110;
    }

    .popup-container {
        width: 100%;
        height: 0%;
        margin: 0 auto;
    }

    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 0vw;
        height: 0vh;
        background-color: rgba(0, 53, 145, 0.9);
        z-index: 110;
    }

    .close {
        position: absolute;
        right: -25px;
        top: -25px;
        display: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: var(--button-bg-orange);
        color: white !important;
        opacity: 1 !important;
        padding-top: 14px;
        padding-left: 18px;
        transition: 0.2s transform ease-in-out;

    }

    .close:hover {
        transform: scale(1.2);
    }

    #popup-image {
        width: 100%;
    }

    .slider-left {
        flex-basis: 49%;
        background-color: white;
        border-radius: 15px;
        padding: 10px;
        /*max-height: 370px;*/
        cursor: pointer;
        position: relative;
    }

    #left-img-overlay {
        position: absolute;
        left: 10px;
        width: calc(100% - 20px)
    }

    #right-img-overlay {
        position: absolute;
        right: 10px;
        width: calc(100% - 20px)
    }

    #prev {
        position: absolute;
        left: -25px;
        top: calc(50% - 25px);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        z-index: 100;
        cursor: pointer;
        transition: transform 0.2s ease-in-out;
    }


    #next {
        position: absolute;
        right: -25px;
        top: calc(50% - 25px);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        z-index: 100;
        cursor: pointer;
        transition: transform 0.2s ease-in-out;
    }

    #next:hover,
    #prev:hover {
        transform: scale(1.1);
    }

    .slider-right {
        cursor: pointer;
        flex-basis: 49%;
        background-color: white;
        border-radius: 15px;
        position: relative;
        padding: 10px;
        /*max-height: 370px;*/
    }

    .slider-left img {
        object-fit: cover;
        width: 100%;
        border-radius: 15px;
        height: 350px;
    }

    .slider-right img {
        object-fit: cover;
        width: 100%;
        border-radius: 15px;
        height: 350px;
    }

    .slider-right {
        width: 50%;
        margin-left: 5px;
        background-color: white;
        border-radius: 15px;
        position: relative;
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

    .button {
        font-family: "Montserrat", sans-serif;
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

    .button:hover {
        background-color: white;
        color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 1.8em;
        color: var(--h2-color);
    }

    .section3 {
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        height: 200px;
        width: 100%;

    }

    .secTwoBg {
        top: -23%;
        transform: rotate(242deg);
        position: absolute;
        left: -97%;
        /* left: -1052px; */
        z-index: -120;
        /* display: flex; */
        /* justify-content: flex-start; */
        width: 108%;
    }

    .secTwoBg2 {
        width: 50%;
        /* width: 800px; */
        position: absolute;
        top: -41%;
        z-index: -130;
        left: -43%;
    }

    .secTwoBg3 {
        width: 400px;
        position: absolute;
        transform: rotate(166deg);
        z-index: -130;
        display: flex;
        justify-content: flex-end;
        left: 84%;
        top: 110%;
    }

    .secTwoBg4 {
        width: 15%;
        position: absolute;
        z-index: -130;
        left: 86%;
        /* top: 0; */
        top: 0;
        /* top: 192%; */
    }

    .relative {
        position: relative;

    }

    .contact-form-container {
        width: 50%;
        margin: 0 auto;

    }

    .contact-form-container .h1-font {
        color: var(--h1-color);
    }

    .contact-form-container {
        color: var(--h1-color);
    }

    .contact-form-container h1 {
        color: var(--h1-color);
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
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
        padding-right: 0;
        border-radius: 10px;
        border: 1px solid rgba(122, 161, 233, 0.5);
        resize: none !important;
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
        background-color: white !important;
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
        color: var(--button-bg-orange);
        border: 1px solid var(--button-bg-orange);
    }

    .contact-section {
        width: 112%;
        left: -6%;
        position: relative;
        padding-top: 80px;
        overflow: hidden;
        height: 0%;
        transition: all 0.5s ease-in;
    }

    .contact-form-container p {
        font-family: "Montserrat", sans-serif;
        font-size: 1.3em;
        text-align: center;
        padding-bottom: 50px;
    }

    /* SECTION THREE*/
    .xliff-container {
        display: flex;
        justify-content: space-between;
        margin: 100px auto;

    }

    .xliff-container .h1-font {
        font-size: 1.6em;
    }

    .xliff-section .button {
        box-sizing: border-box;
        background-color: var(--h1-color);
        border: 1px solid var(--h1-color);

    }

    .xliff-section .button:hover {
        background-color: transparent;
        color: var(--h1-color);
        border: 1px solid var(--h1-color);
    }

    .xliff-item .p-font {
        font-size: 1.2em;
    }

    .xliff-item {
        max-width: 200px;
        flex-basis: 25%;
        position: relative;
    }

    .xliff-item:nth-child(even) {
        margin-top: 50px;
    }

    .xliff-section {
        text-align: center;
        flex-basis: 100%;
    }

    .xliff-section h1 {}

    .xliff-section h3 {
        font-size: 2.5em;
        font-weight: bold;
    }

    .xliff-background {
        object-fit: cover;
        position: absolute;
        left: -20%;
        width: 110vw;
        z-index: -100;
    }

    .xliff-background-container {

        position: relative;
        margin-top: 225px !important;
        margin-bottom: 250px !important;
        display: flex;
        align-items: center;
    }

    .dashed-line {
        position: absolute;
        top: 30%;
        right: -83%;
        width: 60%;
    }

    .dashed-line-rotate {
        transform: rotate(147deg) !important;
        top: 6%;
    }

    .tools-container {
        position: relative;
    }

    .tools {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-top: 400px;
    }

    .tools-info {
        flex-basis: 30%;
    }

    .tools-img {
        flex-basis: 50%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .tools-img div {
        flex-basis: 30%;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 20px;
        width: 140px;
        height: 140px;
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .tools-img-margin-both {
        margin: 0 0;
    }

    .tools-img img {
        width: 90px;
        margin-top: 1rem;
        flex-basis: 100%;
        object-fit: contain;
    }

    .tools-img p {
        margin: 1rem 0;
        font-size: 1.3em;
        font-family: "Montserrat", sans-serif;

    }

    .circle-r {
        animation: circle-clip-path-r 0.5s ease-in;
        animation-fill-mode: forwards;
        /*clip-path: circle(10%);*/
    }

    .circle-l {
        animation: circle-clip-path-l 0.5s ease-in;
        animation-fill-mode: forwards;
        /*clip-path: circle(10%);*/
    }

    .slider-indicator {
        justify-content: center !important;
    }

    .slider-indicator span {
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background-color: var(--h2-color);
    }

    .active-indicator {
        background-color: var(--h1-color) !important;
    }

    @keyframes circle-clip-path-r {
        from {
            clip-path: circle(10% at 100% 50%);
        }

        to {
            clip-path: circle(75% at 50% 50%);
        }
    }

    @keyframes circle-clip-path-l {
        from {
            clip-path: circle(10% at 0% 50%);
        }

        to {
            clip-path: circle(75% at 50% 50%);
        }
    }

    @media screen and (min-width: 2000px) {
        .background-img {
            top: -250px;
            right: -500px;
        }

        .background-img-orange-circle {
            right: 1210px;
        }

        .secTwoBg {
            left: -117%;
        }

        .secTwoBg2 {
            top: -195px;
            left: -939px;
        }

        .secTwoBg4 {
            top: 0;
            left: 94%;
        }

        .xliff-background {
            width: 107vw;
            transform: translate(-26%, -8%);
        }

        .xliff-section {
            top: 325px;
        }

        .tools-container {}
    }

    @media screen and (max-width: 1530px) {
        .xliff-container {
            margin: 30px auto;
        }

        .xliff-background {
            transform: translate(3%, -3%);
        }

        .xliff-section {
            top: 125px;
        }
    }

    @media screen and (max-width: 1440px) {
        .section-one-animation {
            margin-right: -8%;
        }
    }

    @media screen and (max-width: 1400px) {
        .background-img {
            width: 97vw;
            max-height: 180%;
        }



        .section-one {
            justify-content: space-around;
        }

        .background-img-orange-circle {
            top: -181px;
            right: 545px;
        }

        .secTwoBg4 {
            left: 94%;
            top: 0;
        }

        .secTwoBg2 {
            top: -225px;
        }

    }

    @media screen and (max-width: 1320px) {


        .background-img-orange-circle {
            top: -181px;
            right: 635px;
        }

        .xliff-background {
            width: 135vw;
        }

        .dashed-line {
            position: absolute;
            top: 27%;
            right: -38%;
            width: 50%;
        }

        .dashed-line-rotate {
            transform: rotate(147deg) !important;
            top: 6%;
        }

        .tools-container {}
    }

    @media screen and (max-width: 1200px) {
        .contain {
            width: 95%;
            margin: 0 auto;
            margin-bottom: 100px;
        }

        .section-one-text {
            padding-right: 0;
        }

        .dashed-line {
            right: -28%;
            width: 40%;
        }

        .xliff-background-container {
            margin-top: 0 !important;
        }
    }

    @media screen and (max-width: 1175px) {


        .background-img-orange-circle {
            right: 530px;
        }

        .button {
            width: 208px;
            height: 56px;
        }

    }

    @media screen and (max-width: 1065px) {



        .dashed-line {
            right: -23%;
            width: 35%;
        }
    }


    @media screen and (max-width: 1030px) {
        .section-one {
            /*position: relative;
            top: 0px;*/
        }

        .section-one-animation {
            height: 70vh;
            width: 59%;
            margin: 0px;
            transform: translateX(5%);
        }


        .background-img {
            width: 110vw;
        }

        .dashed-line {
            right: -16%;
            width: 35%;
        }

        .w-100 {
            width: 100% !important;
        }

        .xliff-background {
            width: 145vw;
            top: 13%;
        }

        .background-img-orange-circle {
            right: 302px;
        }

    }

    @media screen and (max-width: 900px) {
        .background-img {
            top: -13%;
            right: -61%;
            transform: rotate(62deg);
        }

        .background-img-orange-circle {
            right: -16%;
            top: 38%;
        }

        .--circle3 {
            top: 71%;

        }

        .--circle2 {

            right: -21%;
        }

        .section-one ul {
            text-align: left;
        }

        .section-one {
            flex-direction: column;
            align-items: center;
            padding-bottom: 0;
        }

        .section-one-text {
            width: 100%;
            text-align: center;
            margin-top: 100px;
        }

        .section-one-animation {
            height: 70vw;
            width: 70%;
            transform: translateX(0%);
        }

        .contact-form-container {
            width: 80%;
        }

        .xliff-background {
            width: 170vw;
        }


    }

    @media screen and (max-width: 768px) {
        .popup-click-right {
            display: none;
        }

        .slider-right {
            position: absolute;
            background-color: transparent;
            width: 97%;
        }

        .slider-left {
            flex-basis: 100%;
        }

        #right-iframe img {
            opacity: 0;
        }

        #right-iframe {
            opacity: 0;
        }

        .background-img-orange-circle {
            right: -67px;
            top: 47%;
            transform: rotate(30deg);
        }



        .xliff-background {
            width: 170vw;
            top: -3%;
        }

        .xliff-background-container {
            margin-top: 0 !important;
        }

        .section3 {
            margin-bottom: 0 !important;
        }

        .--circle2 {
            bottom: 0%;
            right: 74%;
        }

        .--circle3 {
            top: -100px;
            left: 84%;
        }

        .xliff-item .p-font {
            font-size: 1em;
        }

        .xliff-item {
            max-width: 200px;
            flex-basis: 25%;
            position: relative;
            padding: 0 10px;
            font-size: 11px;
        }

        .tools {
            align-items: center;
            flex-direction: column;
        }

        .tools-img-margin-both {
            margin: 0 0;
        }

        .tools-info {
            text-align: center;
            margin-bottom: 50px;
        }
    }

    @media screen and (max-width: 600px) {
        #app {
            width: 100% !important;
            margin: 0 !important;
        }

        .background-img {
            top: 1%;
            right: -87%;
            transform: rotate(67deg);
            width: 145%;
        }

        .h1-font {
            font-size: 1.5em;
        }

        .h2-font {
            font-size: 1.3em;
        }

        .p-font {
            font-size: 1.2em;
        }

        .button {
            font-size: 1.2em;
            outline: hidden;
        }

        .xliff-container {
            flex-wrap: wrap;
            justify-content: center;
        }

        .xliff-item {
            flex-basis: 100%;
            max-width: 80%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .xliff-item img {
            width: 50%;
        }

        .dashed-line {
            display: none;
        }

        .xliff-background {
            width: 558%;
            top: 15%;
        }

        .xliff-item:nth-child(even) {
            margin-bottom: 40px;

        }

        .xliff-background-container {}

        .tools-container {}

        .tools-img {
            flex-basis: 30%;
            align-items: center;
        }



        .tools-info {
            flex-basis: 60%;
        }

        .background-img-orange-circle {
            right: -71px;
            top: 49%;
        }

        .--circle2 {
            bottom: 77%;
            right: -15%;
        }

        .--circle3 {
            top: 74%;
            left: -9%;
        }

        .secTwoBg4 {

            left: 89%;
            /* top: 0; */
            top: 0;
            /* top: 192%; */
        }

        .contact-form-group {
            flex-direction: column;
        }
    }

    @media screen and (max-width: 550px) {
        .tools-img div {
            flex-basis: 45%;
        }
    }

    @media screen and (max-width: 425px) {
        .button {
            font-size: 1.2em !important;
        }

        .background-img {
            top: 3%;
        }



        .our-works {
            margin-top: 200px !important;
        }

        .section-one {
            margin-bottom: 40px;
        }

        .section-two {
            margin-top: 80px !important;
        }

        .section-one-text {
            margin-top: 0;
        }

        .tools-container {}

        .section3 {
            margin-bottom: 0 !important;
        }

        .contain {
            margin-bottom: 0 !important;
        }

        .xliff-background {
            width: 644%;
            top: 8%;
        }

        .xliff-background-container {
            margin-top: 0 !important;
        }

        #slider>img:last-child {
            right: -14px;
        }

        #slider>img:first-child {
            left: 5px;
        }

        .our-works .h1-font {
            margin-top: 30px;
            margin-bottom: 80px;
        }


    }

    @media screen and (max-width: 360px) {
        .section-one {
            top: 0;
        }

        .background-section-one {
            margin-top: 125px;
        }


        .background-img-orange-circle {
            right: -25px;
            /* bottom: -89%; */
            top: 61%;
            transform: rotate(-308deg);
        }

        .--circle1 {
            top: 60%;
        }

        .--circle3 {
            top: 15%;
            left: 70%;
        }

        .xliff-background {
            width: 747%;
            top: 16%;
        }

        .section-one-animation {
            margin-top: 0;
            margin-left: 0;
            margin-right: 0;
        }

        .section-one-text {
            margin-bottom: 10px;
        }

        .secTwoBg4 {
            top: 0;
        }

        .tools-container {}

    }
</style>
@section('content')

<div class="background-section-one">
    <img class="background-img" src="{{asset('/images/img/header-illustration-group.svg')}}" alt="blue background image" />
    <img class="background-img-circle --circle1" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background" />
    <img class="background-img-circle --circle2" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background" />
    <img class="background-img-circle --circle3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background" />
    <section class="section-one contain">

        <div class="section-one-text">

            <h1 class="h1-font bold">@lang('programming.heading')</h1>
            <p class="p-font">
                @lang('programming.title')
                <ul class="p-font">
                    <li>@lang('programming.liOne')</li>
                    <li>@lang('programming.liTwo')</li>
                    <li>@lang('programming.liThree')</li>
                    <li>@lang('programming.liFour')</li>
                    <li>@lang('programming.liFive')</li>
                </ul>
            </p>
        </div>
        <div class="section-one-animation"></div>


    </section>
</div>


<!--   SECTION TWO -->
<section class="contain relative section-two">
    <img class="secTwoBg2" src="{{asset('/images/img/orange-circle.svg')}}">
    <img class="secTwoBg" src="{{asset('/images/img/header-fluid-blue.svg')}}">
    <h2 class="h1-font center">@lang('programming.ourWorks')</h2>
    <div id="slider">
        <div class="popup-overlay"></div>
        <div class="popup">
            <span class="close"> X </span>
            <div class="popup-container">
                <div class="popup-content">
                    <img id="popup-image" src="">
                </div>
            </div>

        </div>
        <div>
            <div class="slider-left shadow-1">
                <div class="popup-click popup-click-left">

                </div>
                <div id="left-iframe">
                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/Q3cZOOmbJdE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                    <img id="left-img-overlay" src="">
                    <img id="left-img" src="" class="circle-l">
                </div>
                <img id="prev" class="prethodni shadow-1" src="{{asset('/images/img/Picture2.png')}}" alt="previuos slide">
            </div>
            <div class="slider-right shadow-1">
                <div class="popup-click popup-click-right">

                </div>
                <div id="right-iframe">
                    <img id="right-img-overlay" src="">
                    <img id="right-img" class="circle-r" src="">
                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/s5xDYxh2SAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                </div>
                <img id="next" class="sljedeci shadow-1" src="{{asset('/images/img/Picture3.png')}}" alt="next slide">
            </div>
        </div>
        <div class="slider-indicator"></div>
    </div>
    <img class="secTwoBg3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="circle background">
    <div class="section3 contain">
        <div style="height: 50%">
            <p class="p-font" style="margin-top: 50px; display: flex; justify-content: center; font-weight: 500">@lang('programming.wantSeeMore')</p>
        </div>
        <div style="height: 50%; margin-top: 30px; display: flex; justify-content: center">
            <button class="button" id="schedule">@lang('programming.demo')</button>
        </div>
        <img class="secTwoBg4" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background">
    </div>
    <div class="contact-section" id="contact">
        <div class="contact-form-container">
            <h2 class="text-center h1-font">@lang('programming.contact')</h2>
            <form class="contact-form" action="/demo" method="POST">
                <!-- Include token -->
                @csrf
                <div class="contact-form-group">
                    <div>
                        <label for="name">*@lang('programming.nameSurname')</label>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div>
                        <label for="company">@lang('programming.company')</label>
                        <input type="text" name="company" id="company" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="subject">*@lang('programming.subject')</label>
                        <input type="text" name="subject" id="subject" required />
                    </div>
                    <div>
                        <label for="email">*@lang('programming.email')</label>
                        <input type="email" name="email" id="email" required />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="date">*@lang('programming.date')</label>
                        <input type="date" name="date" id="date" required />
                    </div>
                    <div>
                        <label for="time">*@lang('programming.time')</label>
                        <input type="time" name="time" id="time" required />
                    </div>
                </div>
                <div class="contact-form-group textarea">
                    <label for="message">*@lang('programming.time')</label>
                    <textarea name="message" rows="7" id="message" required></textarea>
                </div>
                <input class="button submit" type="submit" value="Send" />
            </form>
        </div>
    </div>
</section>
<section class="contain xliff-background-container w-100">
    <img class="xliff-background" src="{{asset('/images/img/light-blue-bg.svg')}}" alt="light blue background">
    <div class="xliff-section">

        <h1 class="h1-font">@lang('programming.xliffTranslation')</h1>
        <div class="xliff-container">
            <div class="xliff-item">
                <img src="{{asset('/images/xliff-icons/step1-icon-upload.svg')}}" alt="step one upload">
                <img class="dashed-line" src="{{asset('/images/img/dashed-line.svg')}}" alt="dashed line">
                <div>
                    <h5 class="h1-font">@lang('programming.uploadFile')</h5>
                    <p class="p-font">
                        @lang('programming.uploadFileText')
                    </p>
                </div>
            </div>

            <div class="xliff-item">
                <img src="{{asset('/images/xliff-icons/step2-icon-download.svg')}}" alt="step two download">
                <img class="dashed-line dashed-line-rotate" src="{{asset('/images/img/dashed-line.svg')}}" alt="dashed line">
                <div>
                    <h5 class="h1-font">@lang('programming.downloadXls')</h5>
                    <p class="p-font">
                        @lang('programming.downloadXlsText')
                    </p>
                </div>
            </div>
            <div class="xliff-item">
                <img src="{{asset('/images/xliff-icons/step3-icon-trans.svg')}}" alt="step three translate">
                <img class="dashed-line" src="{{asset('/images/img/dashed-line.svg')}}" alt="dashed line">
                <div>
                    <h5 class="h1-font">@lang('programming.translateColumns')</h5>
                    <p class="p-font">
                        @lang('programming.translateColumnsText')
                    </p>
                </div>
            </div>
            <div class="xliff-item">
                <img src="{{asset('/images/xliff-icons/step4-icon-ready.svg')}}" alt="step four ready">
                <div>
                    <h5 class="h1-font">@lang('programming.downloadReady')</h5>
                    <p class="p-font">
                        @lang('programming.explanationText')
                    </p>
                </div>
            </div>
        </div>
        <a href="/pages/xlf"><button class="button">@lang('programming.seeMore')</button></a>
    </div>
</section>
<section class="contain tools-container">
    <div class="tools">
        <div class="tools-info">
            <h1 class="h1-font">@lang('programming.toolsTechnologies')</h1>
            <p class="p-font">
                @lang('programming.toolsTechnologiesText')
            </p>
        </div>
        <div class="tools-img">
            <div>
                <img src="{{asset('/images/tools/php_PNG28.png')}}" alt="php logo">
                <p>@lang('programming.php')</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/HTML5CSS3Logos.svg')}}" alt="HTML & CSS logo">
                <p>@lang('programming.htmlCss')</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/1200px-Unofficial_JavaScript_logo_2.svg.png')}}" alt="javascript logo">
                <p>@lang('programming.js')</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/WordPress-logotype-wmark.png')}}" alt="wordpress logo">
                <p>@lang('programming.wp')</p>
            </div>
            <div class="tools-img-margin-both">
                <img src="{{asset('/images/tools/github.svg')}}" alt="github logo">
                <p>@lang('programming.github')</p>
            </div>
            <div>
                <img src="{{asset('/images/tools/1280px-Unity_Technologies_logo.svg.png')}}" alt="unity logo">
                <p>@lang('programming.unity')</p>
            </div>

        </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        const animation = document.querySelector(".section-one-animation");
        lottie.loadAnimation({
            container: animation, // the dom element that will contain the animation
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: "{{asset('/images/dev-animation')}}" // the path to the animation json

        });
        const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
            entries.forEach(entry => {
                console.log(entry);
                if (entry.isIntersecting) {
                    lottie.play();
                } else lottie.pause();
            })
        });
        animationObserver.observe(animation);
        var imgOne = 0;
        var imgTwo = 1;

        var images = [

            "{{asset('/images/mockups/ar-aplikacija-dev.png')}}",
            '{{asset("/images/mockups/dl-fin-unsa-ba.png")}}',
            '{{asset("/images/mockups/ar-aplikacija-dev.png")}}',
            '{{asset("/images/mockups/edu-smartlab-ba.png")}}',
            '{{asset("/images/mockups/fin-unsa-ba.png")}}',
            '{{asset("/images/mockups/xliff-mockup.png")}}'
        ];
        let popupClickLeft = document.querySelector(".popup-click-left");
        let popupClickRight = document.querySelector(".popup-click-right");
        let popupVideo = document.querySelector(".popup-content");
        let popupImage = document.querySelector("#popup-image");
        let closePopup = document.querySelector(".close");
        let popup = document.querySelector(".popup");
        let popupOverlay = document.querySelector(".popup-overlay");

        closePopup.addEventListener("click", popupClose);
        popupOverlay.addEventListener("click", popupClose);

        function popupClose() {
            popupImage.src = "";
            closePopup.style.display = "none";
            popup.classList.remove("shadow-2");
            popupOverlay.style.width = "0vw";
            popupOverlay.style.height = "0vh";
        }

        function popupContent(imgIndex) {
            popupImage.src = images[imgIndex];
            console.log(images[imgIndex])
            closePopup.style.display = "inline-block";
            popup.classList.add("shadow-2");
            popupOverlay.style.width = "100vw";
            popupOverlay.style.height = "100vh";
        }
        let rightImg = document.querySelector("#right-img");
        let leftImg = document.querySelector("#left-img");
        let leftImgOverlay = document.querySelector("#left-img-overlay");
        let rightImgOverlay = document.querySelector("#right-img-overlay");

        function clipPath(elem1, elem2) {
            elem1.classList.remove("circle-r");
            elem2.classList.remove("circle-l");
            void elem1.offsetWidth;
            void elem2.offsetWidth;
            elem1.classList.add("circle-r");
            elem2.classList.add("circle-l");
        }
        popupClickLeft.addEventListener("click", () => popupContent(imgOne));
        popupClickRight.addEventListener("click", () => popupContent(imgTwo));
        let prev = document.querySelector("#prev");
        let next = document.querySelector("#next");

        console.log(rightImg)
        prev.addEventListener("click", function() {
            changeImage("previous");
            clipPath(rightImg, leftImg);
        });
        next.addEventListener("click", function() {
            changeImage("next");
            clipPath(rightImg, leftImg);
        });
        let sliderIndicator = document.querySelector(".slider-indicator");
        for (let i = 0; i < images.length; i++) {
            let span = document.createElement("span");
            sliderIndicator.appendChild(span);



        }

        console.log(imgOne, imgTwo)

        function changeImage(par) {
            var currentLeft, currentRight;
            console.log("left: ", imgOne, "right: ", imgTwo);
            leftImgOverlay.src = images[imgOne];
            rightImgOverlay.src = images[imgTwo];
            for (let i = 0; i < images.length; i++) {
                sliderIndicator.childNodes[i].classList.remove("active-indicator");
                sliderIndicator.childNodes[imgOne].classList.add("active-indicator");
                sliderIndicator.childNodes[imgTwo].classList.add("active-indicator");
            }

            if (par == "next") {
                if (imgTwo == images.length - 1) {
                    imgOne = imgTwo;
                    imgTwo = 0;
                } else {
                    imgOne = imgTwo;
                    imgTwo = imgTwo + 1;
                }
            } else if (par == "previous") {
                if (imgOne == 0) {
                    imgOne = images.length - 1;
                    imgTwo = imgOne - 1;
                } else {
                    imgTwo = imgOne;
                    imgOne = imgTwo - 1;
                }

            }

            var imgOneSrc = images[imgOne];
            var imgTwoSrc = images[imgTwo];

            document.getElementById("left-img").src = imgOneSrc;
            document.getElementById("right-img").src = imgTwoSrc;
            //leftImgOverlay.style.width = document.querySelector(".slider-left").offsetWidth - 20;


        }

        changeImage("demo");

        let schedule = document.querySelector("#schedule");
        let contact = document.querySelector("#contact");


        schedule.addEventListener("click", function() {
            if (contact.clientHeight != 80) {
                contact.style.height = 0;
            } else {
                if (window.innerWidth <= 600) {
                    contact.style.height = 115 + "%";
                } else {
                    contact.style.height = 90 + "%";
                }

            }
        });
    });
</script>
@endsection