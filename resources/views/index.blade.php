<!-- Extend main layout -->
@extends('layouts.app')

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
* {
  box-sizing: border-box;
}
body {
  margin: 0 auto;
  overflow-x: hidden;
}
.bold {
  font-weight: bold;
}
.h1-font {
  font-family: "Montserrat", sans-serif;
  font-size: 3.375em;
  margin-top: 0;
  color: var(--h1-color);
}
.h2-font {
  font-family: "Montserrat", sans-serif;
  font-size: 2em;
  color: var(--h2-color);
}
.p-font {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 2em;
  font-weight: lighter;
  color: var(--h1-color);
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
  top: -50px;
}
.background-img {
  position: absolute;
  /*width: calc(75vw - 100px);*/
  height: calc(150% - 200px);
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
  left: 35%;
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
  bottom: 50%;
  right: 50%;
}
.--circle3 {
  top: -100px;
  left: 15%;
}
.text-center {
  text-align: center;
}
.language {
  text-align: right;
}
.opacity {
  opacity: 0.5;
  color: white;
}
.margin-right-25 {
  margin-right: 25px;
}
#de {
  margin-right: 0;
}
.language span {
  padding-right: 10px;
}
.language p {
  padding-right: 10px;
}
.language-selector-container {
  display: inline-flex;
  align-items: center;
}

.language-selector-container span {
  padding-left: 10px;
}
.language-selector-container img {
  width: 20px;
  cursor: pointer;
  margin-right: 10px;
}
.language p {
  display: inline-block;
}
.active-language {
  opacity: 1;
}
/*.container {
  max-width: 100%;
  padding: 0 15%;
}*/
.nav-top {
  top: 0 !important;
  animation: top 0.2s ease-in-out forwards;
}
.margin-top-27 {
  margin-top: 27px;
}
@keyframes top {
  from {
    top: 50px;
  }
  to {
    top: 0px;
  }
}

.nav {
  z-index: 10;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: sticky;
  top: 50px;
  height: 50px;
  background: rgb(255, 255, 255);
  background: linear-gradient(
    90deg,
    rgba(255, 255, 255, 0.5) 20%,
    rgba(15, 117, 188, 1) 55%
  );
}
.logo {
  object-fit: contain;
  height: 50%;
}
.nav-list {
  list-style-type: none;
  display: flex;
  padding-left: 0;
  margin: 0;
  justify-content: space-around;
}
.nav-list a {
  display: inline-block;
  padding: 20px 0 20px 20px;
  color: white;
}
.nav-list:last-child {
  padding-right: 0;
}
.nav-list li {
  display: block;
  margin-left: 20px;
  text-transform: uppercase;
}
.nav-list li a {
  text-decoration: none;
}
.dropdown-container {
  display: inline;
  position: relative;
}
.dropdown-container img {
  height: 7px;
}

.nav-list li:hover .nav-list-dropdown {
  display: initial;
  visibility: visible;
  opacity: 1;
  pointer-events: all;
  z-index: 10;
}
/*.dropdown-container img {
  transition: transform 0.2s ease-in-out;
}
.nav-list li:hover .dropdown-container img {
  transform: rotate(-90deg);
}*/
.nav-list li:hover .nav-list-dropdown,
.nav-list-dropdown:hover {
  display: block;
  visibility: visible;
  opacity: 1;
  pointer-events: all;
  z-index: 10;
}
.nav-list-dropdown::before {
  content: "";
  position: absolute;
  left: 50%;
  top: -5px;
  height: 10px;
  width: 10px;
  transform: rotate(-45deg) translateX(-50%) translateY(-50%);
  background-color: var(--h2-color);
}
.nav-list-dropdown {
  border-radius: 10px;
  background-color: var(--h2-color);
  padding: 10px;
  position: absolute;
  white-space: nowrap;
  right: 4px;
  top: 25px;
  transform: translateX(50%);
  opacity: 0;
  margin-top: 5px;
  transition: all 0.2s ease-in-out;
  pointer-events: none;
  z-index: -2;
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
  text-align: center;
}
.nav-list-dropdown li {
  background-color: var(--button-bg-color);
  padding: 10px;
  margin: 10px;
}
.nav-list-dropdown a {
  padding: 10px;
}
.--join {
  display: flex !important;
  width: auto;
}
.--join-left {
  flex-basis: 50%;

  white-space: nowrap;
}
.--join-left a,
.--join-right a {
  padding-right: 20px;
  height: 100%;
}
.--join-left a {
  display: flex;
  padding-top: 0;
}
.--join-left span {
  align-self: center;
}
.--join-right {
  flex-basis: 50%;
  white-space: nowrap;
}

.section-one {
  margin-top: 100px;
  display: flex;
  padding-bottom: 100px;
}
.section-one-text {
  width: 50%;
  align-self: center;
  justify-content: space-between;
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

.button {
  cursor: pointer;
  border: none;
  border-radius: 35px;
  width: 260px;
  height: 70px;
  font-size: 20pt;
  color: white;
  padding: 20px 0px;
  background-color: var(--button-bg-color);
}
.section-two-background-top {
    transform: rotate(229deg) scale(0.5);
    position: absolute;
    z-index: -100;
    right: 59%;
    top: -12%;
}
.section-two-backgound-top-orange {
  position: absolute;
  width: 25%;
  left: -14%;
  top: -2%;
  z-index: -101;
}
.section-two-background-bot {
  width: 45%;
  position: absolute;
  z-index: -100;
  left: 90%;
  bottom: -15%;
}
.section-two {
  padding-top: 75px;
  padding-bottom: 75px;
  margin-top: 75px;
  position: relative;
}
.section-two-hero {
  text-align: center;
  padding-bottom: 50px;
}
.section-two-hero p {
}
.section-two-top {
  display: flex;
  min-height: 500px;
  background-color: white;
  border-radius: 15px;
  -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
  -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
  box-shadow: -1px -1px 15px 1px var(--shadow-color);
}
.section-two-top-orange-img {
  position: absolute;
  width: 50%;
  z-index: -100;
  right: -20%;
  bottom: 60%;
}
.section-two-background-bot-orange {
  position: absolute;
  width: 25%;
  z-index: -101;
  left: 90%;
  bottom: -10%;
}
.section-two-top-left {
  display: flex;
  flex-direction: column;
  padding: 50px;
  flex-basis: 45%;
}
.section-two-top-left img {
  object-fit: contain;
  height: 100%;
  width: 100%;
}
.section-two-top-left button {
  align-self: center;
  margin-top: 20px;
  width: 200px;
}
.section-two-top-right {
  position: relative;
  flex-basis: 55%;
  padding: 50px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}
.section-two-bot {
  min-height: 500px;
  display: flex;
  margin-top: 10px;
}
.section-two-bot-item {
  min-height: 400px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  background-color: white;
  width: 33%;
  padding-bottom: 20px;
  border-radius: 15px;
  -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
  -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
  box-shadow: -1px -1px 15px 1px var(--shadow-color);
}
.section-two-bot-item div {
  flex-basis: 52%;
}
.section-two-bot-item button {
  margin-top: 20px;
  margin-bottom: 20px;
}
.section-two-bot-item p,
.section-two-bot-item h2 {
  padding: 0 20px;
}
.section-two-bot-item h2 {
  margin-bottom: 0;
}
h2 span {
  display: block;
}
.section-two-bot-item img {
  padding-top: 20px;
  object-fit: contain;
  width: 100%;
  height: 300px;
}
.margin-both {
  margin: 0 10px;
}
.section-three {
  position: relative;
}
.about-orange-circle {
  position: absolute;
  top: 0;
  width: 25%;
  left: -280px;
  z-index: -100;
}
.about-us {
  text-align: center;
}
.flex {
  display: flex;
  flex-wrap: wrap;
  margin: 50px 0;
  justify-content: space-between;
}
.--four img {
  flex-basis: 24%;
  object-fit: cover;
  padding-top: 20px;
}
.--three img {
  flex-basis: 33%;
  object-fit: contain;
  padding-top: 20px;
}
.team {
  padding-top: 75px;
  position: relative;
}
.team-orange-circle {
  position: absolute;
  transform: rotate(-100deg);
  top: 0;
  width: 25%;
  right: -290px;
  z-index: -100;
}
.team-orange-circle-bottom {
  position: absolute;
  width: 20%;
  bottom: -70px;
  left: -190px;
  z-index: -101;
}
.team-blue-circle {
  position: absolute;
  width: 31%;
  left: -290px;
  bottom: -40px;
  transform: rotate(166deg);
  z-index: -100;
}
.partners-images {
  flex-basis: 50%;
  display: flex;
  flex-wrap: wrap;
}
.partners-images img {
  flex-basis: 45%;
  margin-right: 10px;
  margin-bottom: 10px;
}
.navigation-button {
  display: none;
}
.contact-orange-circle-r {
  position: absolute;
  width: 25%;
  right: -15%;
  top: 30%;
}
.contact-orange-circle-l {
  position: absolute;
  width: 25%;
  left: -16%;
  bottom: 0;
}
.contact-form-container {
  width: 60%;
  margin: 0 auto;
  padding-top: 300px;
}
.contact-form-container {
  color: white;
}
.contact-form-container h1 {
  color: white;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
}
.contact-form {
  display: flex;
  flex-direction: column;
  font-size: 1.3em;
  font-family: "Montserrat", sans-serif;
}
.contact-form-group {
  display: flex;
  flex-basis: 100%;
  justify-content: space-between;
  padding-top: 20px;
}
.contact-form-group div {
  flex-basis: 40%;
}
.contact-form-group input,
textarea {
  padding: 25px;
  border-radius: 10px;
  background-color: rgba(122, 161, 233, 0.5);
  border: 2px solid rgba(255, 255, 255, 0);
  resize: none;
}
input:focus,
textarea:focus {
  outline: none !important;
  border: 2px solid white;
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
.submit {
  align-self: flex-end;
  margin: 20px 0;
  background-color: var(--button-bg-orange);
}
.contact-section {
  width: 112%;
  left: -6%;
  background-image: url(images/img/footer-blue-bg.svg);
  background-repeat: no-repeat;
  background-size: 200vw;
  background-position-x: 40%;
  background-position-y: 33%;
  position: relative;
}
.button-overlay {
  display: none;
}
.button-clicked {
  top: 50px;
}
.overlay-clicked {
  top: 0;
}
.map img {
  object-fit: contain;
}
.footer {
  background-image: url("images/img/footer-blue-bg.svg");
  background-size: 200vw;
  background-position-x: 40%;
  background-position-y: 33%;
  width: 112%;
    left: -6%;
    position: relative;
}
.footer p {
  font-family: "Source Sans Pro", sans-serif;
  text-align: center;
  margin: 0;
  padding: 20px;
  font-size: 1.5em;
  font-weight: bold;
  color: white;
}
@media screen and (max-width: 970px) {
  .button-overlay {
    position: fixed;
    left: 10%;
    width: 85vw;
    height: 50px;
    background-color: rgba(111, 111, 111, 0.5);
    z-index: 100;
    top: 0;
  }
  .nav-list {
    position: absolute;
    width: 250px;
    z-index: -10;
    right: 10%;
    top: 50px;
    display: block;
    overflow: hidden;
    height: 0;
    transition: all 0.2s ease-in-out;
  }
  .nav-list li {
    margin-left: 12%;
  }
  .nav-list-dropdown li {
    margin-left: 10px;
  }
  .nav-list a {
    padding-left: 0;
  }
  .navigation-button {
    display: initial;
    position: relative;
    height: 40px;
    width: 40px;
    transform: translateY(100%);
    bottom: 30px;
    transition: all 0.2s ease-in-out;
  }
  .navigation-button-inner {
    position: absolute;
    width: 40px;
    height: 4px;
    background-color: white;
    transition: all 0.2s ease-in-out;
  }
  .navigation-button-inner::before {
    top: 10px;
    transition: all 0.2s ease-in-out;
  }
  .navigation-button-inner::after {
    top: 20px;
    transition: all 0.2s ease-in-out;
  }
  .navigation-button-inner::before,
  .navigation-button-inner::after {
    position: absolute;
    content: " ";
    width: 40px;
    height: 4px;
    background-color: white;
  }

  .navigation-button:hover .navigation-button-inner::after {
    transform: rotate(90deg);
    top: 0px;
  }
  .navigation-button:hover .navigation-button-inner::before {
    transform: rotate(-90deg);
    top: 0px;
  }
  .navigation-button:hover .navigation-button-inner {
    transform: rotate(45deg);
  }
  .navigation-button:hover {
    bottom: 20px;
  }
  .navigation-button:hover .nav-list {
    height: 300px;
    width: 90vw;
    z-index: 10;
  }
  .nav-list-dropdown {
    transform: translate(115%, 0%);
    top: -24px;
    box-shadow: none;
    width: 50vw;
  }
  .nav-list-dropdown::before {
    height: 20px;
    width: 20px;
    left: 5px;
    top: 20px;
    z-index: -1;
  }
  /*.nav-list:hover {
    height: 500px;
    z-index: 10;
  }*/
}
</style>

@section('content')
    <!-- Heading -->
   <!-- <h1>@lang('index.heading')</h1> -->

    <!-- Dummy link -->
    <!-- <a href="{{ env('BLOG_DOMAIN') }}/blog/7/de" target="_blank">Visit some blog</a> -->

   <!-- Include error/success messages to be listed if anything goes wrong -->
  @include('parts.error_success')

   <!-- <hr/> -->

    <!-- Form for sending contact message -->
   <!-- <form action="/contact" method="POST"> -->

       <!-- Include token -->
       <!-- @csrf 

       Title: <select name="title">
                  <option value="Mr." selected>Mr.</option>
                  <option value="Mrs.">Mrs.</option>
                </select>
          <br/>
       Name: <input type="text" name="name" />
          <br/>
       Lastname: <input type="text" name="lastname" />
          <br/>
       Email: <input type="email" name="email" />
          <br/>
        Message: <textarea name="message"></textarea> -->
            
       <!-- Submit form -->
       <!-- <button>Submit</button> 
        
  </form>

    <hr/> -->

    <!-- Form for sending subscription email -->
  <!-- <form action="/subscribe" method="POST"> -->

        <!-- Include token -->
      <!-- @csrf

        Email: <input name="email" type="email"/>
        <input name="language" type="hidden" value="{{App::getlocale()}}"/>
        <button>Subscribe</button>

    </form>

    <hr/>

    <h2>Bussiness contact</h2>
 
    <form action="/bussiness" method="POST" enctype="multipart/form-data"> -->
    
        <!-- Include token -->
        <!-- @csrf

        Bussiness name: <input type="text" name="bussiness_name" />
        <br/>
        Subject: <input type="text" name="bussiness_subject" />
        <br/>
        Email: <input type="email" name="bussiness_email" />
        <br/>
        Message: <textarea name="bussiness_message"></textarea>
        <br/>
        Files: <input type="file" name="files[]" multiple /> -->
        
        <!-- Submit form -->
        <!-- <button>Submit</button>

    </form>

    <img src="{{ asset('images/blog.jpg') }}"/> -->
    <!-- main page -->
    <!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="css/style.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Source+Sans+Pro"
      rel="stylesheet"
    />
    <title>Novi Web</title>
  </head>
  <body> -->
    <!-- <link href="{{ asset('css/index/styles.css') }}" rel="stylesheet"> -->
      <!--<nav id="nav" class="nav container">
        <img class="logo" src="images/img/smartlab-logo.svg" alt="logo" />
        <div id="nav-button" class="navigation-button">
          <div class="navigation-button-inner"></div>
          <ul class="nav-list">
            <li>
              <a href="#">what we do</a>
              <div class="dropdown-container">
                <img src="images/img/menu-arrow-down.svg" alt="arrow down" />
                <ul class="nav-list-dropdown">
                  <li><a href="#">Online Courses</a></li>
                  <li><a href="#">Educational Video Animation</a></li>
                  <li><a href="#">Programming</a></li>
                  <li><a href="#">Moodle</a></li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#">who we are</a>
              <div class="dropdown-container">
                <img src="images/img/menu-arrow-down.svg" alt="arrow down" />
                <ul class="nav-list-dropdown">
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#team">Our Team</a></li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#">join us</a>
              <div class="dropdown-container">
                <img src="images/img/menu-arrow-down.svg" alt="arrow down" />
                <ul class="nav-list-dropdown --join">
                  <li class="--join-left">
                    <a href="#"><span>Outsourcing</span></a>
                  </li>
                  <div class="--join-right">
                    <li><a href="#">Become A Patner</a></li>
                    <li><a href="#">Careers</a></li>
                  </div>
                </ul>
              </div>
            </li>
            <li><a href="#">blog</a></li>
            <li><a href="#">contact</a></li>
          </ul>
        </div>
        <div id="button-overlay" class="button-overlay"></div>
        <ul class="nav-list">
          <li>
            <a href="#">what we do</a>
            <div class="dropdown-container">
              <img src="images/img/menu-arrow-down.svg" alt="arrow down" />
              <ul class="nav-list-dropdown">
                <li><a href="#">Online Courses</a></li>
                <li><a href="#">Educational Video Animation</a></li>
                <li><a href="#">Programming</a></li>
                <li><a href="#">Moodle</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">who we are</a>
            <div class="dropdown-container">
              <img src="images/img/menu-arrow-down.svg" alt="arrow down" />
              <ul class="nav-list-dropdown">
                <li><a href="#about">About Us</a></li>
                <li><a href="#team">Our Team</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#">join us</a>
            <div class="dropdown-container">
              <img src="images/img/menu-arrow-down.svg" alt="arrow down" />
              <ul class="nav-list-dropdown --join">
                <li class="--join-left">
                  <a href="#"><span>Outsourcing</span></a>
                </li>
                <div class="--join-right">
                  <li><a href="#">Become A Patner</a></li>
                  <li><a href="#">Careers</a></li>
                </div>
              </ul>
            </div>
          </li>
          <li><a href="#">blog</a></li>
          <li><a href="#">contact</a></li>
        </ul>
      </nav> -->
      <div class="background-section-one">
        <img class="background-img" src="images/img/header-fluid-blue.svg" />
        <img
          class="background-img-orange-circle"
          src="images/img/orange-circle.svg"
        />
        <img
          class="background-img-circle --circle1"
          src="images/img/fluid-bright-circle.svg"
        />
        <img
          class="background-img-circle --circle2"
          src="images/img/fluid-bright-circle.svg"
        />
        <img
          class="background-img-circle --circle3"
          src="images/img/fluid-bright-circle.svg"
        />
        <div class="language">
          <p class="opacity margin-right-25">
            <span>Call: </span><span>+387 61 811 394</span>
            <span>+387 33 956 222</span>
          </p>
          <div class="language-selector-container">
            <span class="opacity">Language: </span>
            <img
              id="ba"
              class="opacity active-language"
              src="images/img/bh-flag.png"
              alt="Bosnian language"
            />
            <img
              id="gb"
              class="opacity"
              src="images/img/gb-flag.png"
              alt="English language"
            />
            <img
              id="de"
              class="opacity"
              src="images/img/de-flag.png"
              alt="German language"
            />
          </div>
        </div>
        <section class="section-one">
          <div class="section-one-text">
            <h2 class="h2-font">We design and develop</h2>
            <h1 class="h1-font bold">E-LEARNING SOLUTIONS</h1>
            <p class="p-font ">
              We are here to turn your ideas into high quality learning
              experience.
            </p>
            <button class="button margin-top-27">Get in touch</button>
          </div>
          <img
            class="section-one-animation"
            src="images/img/header-illustration.svg"
          />
        </section>
      </div>
      <section class="section-two">
        <img
          class="section-two-background-top"
          src="images/img/header-fluid-blue.svg"
        />
        <img
          class="section-two-backgound-top-orange"
          src="images/img/orange-circle.svg"
        />
        <img class="section-two-background-bot" src="images/img/blue-circle.svg" />
        <img
          class="section-two-background-bot-orange"
          src="images/img/orange-circle.svg"
        />
        <div class="section-two-hero">
          <div>
            <h1 class="h1-font">What We Do?</h1>
            <p class="h2-font">
              SmartLab offers different services with focus on the e-Learning
              industry.
            </p>
            <button class="button submit">Explore</button>
          </div>
        </div>
        <div>
          <div class="section-two-top">
            <div class="section-two-top-left">
              <img src="images/img/online-courses-img.svg" />
            </div>
            <div class="section-two-top-right">
              <img
                class="section-two-top-orange-img"
                src="images/img/orange-circle.svg"
              />
              <h2 class="h2-font">Online courses</h2>
              <p class="p-font">
                We design and devlop eLearning content from scratch and
                implement your ideas into high quality, engaging courses.
              </p>
              <button class="button">Learn More</button>
            </div>
          </div>
          <div class="section-two-bot">
            <div class="section-two-bot-item">
              <img src="images/img/video-animation-img.svg" />
              <div>
                <h2 class="h2-font">Educational video animation</h2>
                <p class="p-font">
                  Entertain and educate your trainees with our
                  attention-grabbing and engaging animated videos.
                </p>
              </div>

              <button class="button">Learn More</button>
            </div>
            <div class="section-two-bot-item margin-both">
              <img src="images/img/development-img.svg" />
              <div>
                <h2 class="h2-font">Development/ programming</h2>
                <p class="p-font">
                  Back and front-end development of custom functions and
                  interacitivty options making your courses compelling and user
                  friendly.
                </p>
              </div>
              <button class="button">Learn More</button>
            </div>
            <div class="section-two-bot-item">
              <img src="images/img/moodle-img.svg" />
              <div>
                <h2 class="h2-font">Moodle <span>LMS Adaptation</span></h2>
                <p class="p-font">
                  We use the leading open source learning mangement system
                  Moodle with customizable features to create private websites
                  with online coursed.
                </p>
              </div>

              <button class="button">Learn More</button>
            </div>
          </div>
        </div>
      </section>
      <section id="about" class="section-three">
        <img class="about-orange-circle" src="images/img/orange-circle.svg" />
        <div>
          <div class="about-us">
            <div>
              <h1 class="h1-font">About Us</h1>
              <h2 class="h2-font">
                SmartLab is an eLearning company whose goal is to help customers
                reach their learning goals
              </h2>
            </div>
            <div class="flex --four">
              <img src="https://via.placeholder.com/150" />
              <img src="https://via.placeholder.com/150" />
              <img src="https://via.placeholder.com/150" />
              <img src="https://via.placeholder.com/150" />
              <img src="https://via.placeholder.com/150" />
              <img src="https://via.placeholder.com/150" />
              <img src="https://via.placeholder.com/150" />
              <img src="https://via.placeholder.com/150" />
            </div>
          </div>
        </div>
      </section>
      <section id="team" class="team">
        <img class="team-orange-circle" src="images/img/orange-circle.svg" />
        <img class="team-blue-circle" src="images/img/blue-circle.svg" />
        <img class="team-orange-circle-bottom" src="images/img/orange-circle.svg" />
        <div>
          <h1 class="text-center h1-font">Our Team</h1>
          <div class="flex --four">
            <img src="https://via.placeholder.com/200" />
            <img src="https://via.placeholder.com/200" />
            <img src="https://via.placeholder.com/200" />
            <img src="https://via.placeholder.com/200" />
            <img src="https://via.placeholder.com/200" />
            <img src="https://via.placeholder.com/200" />
            <img src="https://via.placeholder.com/200" />
            <img src="https://via.placeholder.com/200" />
          </div>
        </div>
      </section>
      <section >
        <div>
          <h1 class="text-center h1-font">Partners</h1>
          <div class="flex">
            <div class="partners-images">
              <img src="https://via.placeholder.com/200" />
              <img src="https://via.placeholder.com/200" />
              <img src="https://via.placeholder.com/200" />
              <img src="https://via.placeholder.com/200" />
              <img src="https://via.placeholder.com/200" />
              <img src="https://via.placeholder.com/200" />
            </div>
            <div class="partners-text"></div>
          </div>
        </div>
      </section>
      <section class="contact-section">
        <img class="contact-orange-circle-r" src="images/img/orange-circle.svg" />
        <img class="contact-orange-circle-l" src="images/img/orange-circle.svg" />
        <div class="contact-form-container">
          <h1 class="text-center h1-font">Contact</h1>
          <form class="contact-form">
            <div class="contact-form-group">
              <div>
                <label for="name">*Name</label>
                <input type="text" name="name" />
              </div>
              <div>
                <label for="surnanme">*Surname</label>
                <input type="text" name="surname" />
              </div>
            </div>
            <div class="contact-form-group">
              <div>
                <label for="subject">*Subject</label>
                <input type="text" name="subject" />
              </div>
              <div>
                <label for="email">*Email</label>
                <input type="email" name="email" />
              </div>
            </div>
            <div class="contact-form-group textarea">
              <label for="message">*Message</label>
              <textarea name="message" rows="7"></textarea>
            </div>
            <input class="submit button" type="submit" value="Send" />
          </form>
        </div>
      </section>
      <footer class="footer">
        <div class="map">
          <img src="images/img/mapa-web.png" />
        </div>
        <div>
          <p>Copyright &copy 2019 SmartLab</p>
        </div>
      </footer>
    
    <style>

    

    
    </style>
    <!--<script src="js/nav.js"></script>
    <script src="js/language.js"></script> -->
  <!-- </body>
</html> -->

@endsection 

