<!-- Extend main layout -->
@extends('layouts.app')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
  :root {
    --shadow-color: rgba(0, 53, 145, 0.15);
    --button-bg-color: #4885fa;
    --button-bg-orange: #ff931f;
    --h2-color: #4885FA;
    --h1-color: #14213d;
    --p-color: #c9d6e2;
    scroll-behavior: smooth;
  }

  html {
    overflow-x: hidden;
  }

  nav {
    display: none !important;
  }

  * {
    box-sizing: border-box;
  }

  body {
    margin: 0 auto;
    overflow-x: hidden;
    background-color: white !important;
  }

  .contain {
    max-width: 1600px;
    width: 90%;
    margin: 0 auto;
  }

  .bold {
    font-weight: bold;
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
    display: none;
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


  .margin-top-27 {
    margin-top: 27px;
  }







  /*.dropdown-container img {
  transition: transform 0.2s ease-in-out;
}
.nav-list li:hover .dropdown-container img {
  transform: rotate(-90deg);
}*/


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
    font-size: 1.4em !important;
    font-weight: 500;
    color: white;
    background-color: var(--button-bg-color);
    border: 1px solid var(--button-bg-color);
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

  .section-two-background-top {
    transform: rotate(230deg);
    width: 100%;
    position: absolute;
    z-index: -100;
    right: 80%;
    top: 6%;

  }

  .section-two-backgound-top-orange {
    position: absolute;
    width: 25%;
    left: -25vw;
    top: -5%;
    z-index: -101;
  }

  .section-two-background-bot {
    width: 100%;
    position: absolute;
    z-index: -100;
    left: 80%;
    bottom: -15%;
    transform: rotate(30deg);
  }

  .section-two {
    margin-top: 5%;
    position: relative;
  }

  .section-two-hero {
    text-align: center;
    padding-bottom: 50px;
    margin-top: 300px;
  }

  .section-two-hero p {}

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
    width: 25%;
    z-index: -100;
    right: -11%;
    bottom: 62%;
  }

  .section-two-background-bot-orange {
    position: absolute;
    width: 50%;
    z-index: -101;
    left: 80%;
    bottom: -5%;
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
    margin-top: 20px;
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
    -webkit-box-shadow: -1px -1px 25px 1px var(--shadow-color);
    -moz-box-shadow: -1px -1px 25px 1px var(--shadow-color);
    box-shadow: -1px -1px 25px 1px var(--shadow-color);
  }

  .section-two-bot-item div {
    display: flex;
    height: 400px;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
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
    margin-bottom: 0.5rem;
  }

  h2 span {
    display: block;
  }

  .section-two-bot-item img {
    padding: 20px;
    object-fit: contain;
    width: 100%;
    height: 300px;
  }

  .--width-margin-top {
    margin-top: 10px;
    width: 97%;
  }

  .margin-both {
    margin: 0 20px;
  }

  .section-three {
    position: relative;
    margin-top: 250px;
  }

  .about-orange-circle {
    position: absolute;
    top: -30%;
    width: 50%;
    transform: rotate(-150deg);
    left: -40vw;
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

  .about-us div {
    flex-basis: 25%;

  }

  .about-us p {
    margin-top: 25px;
    font-family: "Montserrat", sans-serif;
  }

  .--border-right {
    border-right: 1px solid var(--shadow-color);
  }

  .--border-bottom {
    border-bottom: 1px solid var(--shadow-color);

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
    margin-top: 250px;
    position: relative;
  }

  .team-orange-circle {
    position: absolute;
    transform: rotate(-111deg);
    top: 0;
    width: 35%;
    right: -30vw;
    z-index: -100;
  }

  .team-orange-circle-bottom {
    position: absolute;
    width: 20%;
    /* bottom: -70px; */
    bottom: -5%;
    left: -26vw;
    /* left: -340px; */
    z-index: -101;
  }

  .team-blue-circle {
    position: absolute;
    width: 50%;
    /* left: -420px; */
    left: -40vw;
    transform: rotate(282deg);
    z-index: -100;
  }

  .testemonials {
    margin-top: 250px;
  }

  .partners-images {
    flex-basis: 35%;
    display: flex;
    flex-wrap: wrap;
    align-items: baseline;
  }

  #indicators {
    display: flex;
    flex-direction: row;
    width: 200px;
    justify-content: space-around;
    margin-top: 50px;
  }

  #indicators span {
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: var(--h2-color);
    opacity: 0.5;
  }
  
  .indicator-opacity {
    opacity: 1 !important;
  }

  .partners-text {
    flex-basis: 60%;
    background-image: url(images/img/quotation-marks.svg);
    background-size: 50%;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 15%;

  }

  .partners-text div {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .partners-text .p-font {
    margin-bottom: 0;
    font-style: italic;
  }

  .partners-text .h2-font {
    margin-bottom: 0px;
  }

  .partners-text img {
    margin-top: 50px;
    border-radius: 50%;
    object-fit: contain;
    width: 85px;
    height: 85px;
  }

  .partners-images img {
    max-width: 45%;
    margin-right: 10px;
    margin-bottom: 10px;
    object-fit: contain;
  }

  .blog-section {
    position: relative;
    text-align: center;
    margin-top: 250px;
  }

  .blog-section .button {
    margin-top: 100px;
    margin-bottom: 25px;
  }

  .blog-orange-circle-big {
    position: absolute;
    width: 31%;
    right: -9vw;
    z-index: -100;
    bottom: 0;
  }

  .blog-orange-circle-small {
    position: absolute;
    width: 11%;
    right: -12vw;
    bottom: 30%;
    transform: rotate(-180deg);
  }

  .blog-container {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding-top: 25px;
  }

  .blog {
    -webkit-box-shadow: -1px -1px 25px 1px var(--shadow-color);
    -moz-box-shadow: -1px -1px 25px 1px var(--shadow-color);
    box-shadow: -1px -1px 25px 1px var(--shadow-color);
    flex-basis: 24%;
    text-align: center;
    max-height: 515px;
    overflow: hidden;
    text-overflow: ellipsis;
    border-radius: 10px;
    background-color: white;
    cursor: pointer;
    transition: box-shadow 0.2s ease-in;
  }

  .blog:hover {
    -webkit-box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
    -moz-box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
    box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
  }

  .blog .p-font {
    position: relative;
    /* -webkit-line-clamp: 3; */
    /* -webkit-box-orient: vertical; */
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 1.4em;
    line-height: 1.4;
    height: 117px;
    /* padding-bottom: 14px; */
  }

  .blog .p-font::after {
    position: absolute;
    content: "...";
    bottom: 0;
    right: 0;
    font-size: 1.em;
    /* line-height: 1em; */
    padding-left: 15px;
    padding-right: 10px;
    padding-bottom: 4px;
    background-color: white;
    font-weight: 500;
  }

  .blog div:not(.img-container) {
    padding: 10px;
  }

  .blog img {
    height: 300px;
    width: 100%;
    position: absolute;
    top: -20px;
    right: 0;
    z-index: -5;
    object-fit: cover;
    filter:grayscale(100%);
  }
  .img-container {
    display: inline-block;
    position: relative;
    width: 100%;
    height: 300px;
    vertical-align: middle;
    overflow: hidden;
  }
  .img-container-overlay{
    height: 100%;
    width: 100%;
    position: aboslute;
  }
  .img-container-overlay-blue{
    background-color: rgba(0,0,255, 0.6);
  }
  .img-container-overlay-orange{
    background-color:rgba(255,140,0, 0.7);
  }
  .blog span {
    opacity: 0.5;
  }

  .wave {
    transform: rotateX(-180deg) rotateY(-180deg);
    display: inline-block;
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 101%;
  }

  



  .contact-orange-circle-r {
    position: absolute;
    width: 25%;
    right: -15%;
    top: 18%;
  }

  .contact-orange-circle-l {
    position: absolute;
    width: 25%;
    left: -16%;
    bottom: 0;
  }

  .contact-form-container {
    width: 50%;
    margin: 0 auto;
    padding-top: 300px;
  }

  .contact-form-container .h1-font {
    color: white;
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
    background-color: rgba(122, 161, 233, 0.5);
    border: 2px solid rgba(255, 255, 255, 0);
    resize: none !important;
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

  .button-orange:hover {
    background-color: white !important;
    color: var(--button-bg-orange) !important;
    border: 1px solid var(--button-bg-orange) !important;
  }

  .submit {
    align-self: flex-end;
    margin-top: 20px;
    margin-bottom: 250px;
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
    background-image: url(images/img/footer-blue-bg.svg);
    background-repeat: no-repeat;
    background-size: 234vw;
    background-position-x: 40%;
    background-position-y: 40%;
    position: relative;
    margin-top: 150px;
    padding-top: 80px;
  }

  .contact-form-container p {
    font-family: "Montserrat", sans-serif;
    font-size: 1.3em;
    text-align: center;
    padding-bottom: 50px;
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

  .submit {
    font-size: 1.5em;
  }



  @media screen and (min-width: 2000px) {
    .background-img {
      top: -250px;
      right: -500px;
    }

    .background-img-orange-circle {
      right: 1210px;
    }

    .section-two-background-top {
      right: 105%;
    }

    .section-two-backgound-top-orange {
      left: -33vw;
    }

    .section-two-background-bot {
      left: 100%;
    }

    .section-two-background-bot-orange {
      left: 100%;
    }

    .team-orange-circle {
      right: -36vw;
    }

    .team-orange-circle-bottom {
      left: -32vw;
    }

    .contact-section {
      background-position-y: 36%;
    }
  }

  @media screen and (max-width: 1500px) {
    .partners-images {
      flex-basis: 40%;
    }

    .contact-section {
      background-size: 230vw;
      background-position-y: 47%;
    }
  }

  @media screen and (max-width: 1400px) {
    .background-img {
      height: 125%;
      top: -25%;
      right: -25%;
    }

    .section-one {
      justify-content: space-around;
    }
  }

  @media screen and (max-width: 1200px) {
    .contain {
      width: 95%;

    }

    .blog-container {
      justify-content: space-evenly;
    }

    .blog {

      flex-basis: 35%;
      max-height: 550px;
      margin-bottom: 40px;
    }

    .blog div {
      padding-top: 0 !important;
    }

  }

  @media screen and (max-width: 1175px) {
    .button {
      width: 208px;
      height: 56px;
    }

    .section-two-bot {
      min-height: 600px;
    }

    .section-two-bot-item {
      min-height: 600px;
    }

    .section-two-bot-item div {
      min-height: 500px;
    }

    .blog {
      flex-basis: 45%;
    }

    .img-container img {
      left: 0;
    }

    .blog-orange-circle-big {
      bottom: 100px;
    }

    .blog-orange-circle-small {
      bottom: 22%;
    }
  }

  @media screen and (max-width: 1026px) {
    .background-img-orange-circle {
      top: -95px;
      right: 588px;
    }

    .--circle3 {
      left: -15%;
    }

    .section-two-bot {
      flex-direction: column;
    }

    .section-two-bot-item {
      display: flex;
      min-height: 350px;
      width: 100%;
      flex-direction: row;
    }

    .section-two-bot-item div {
      height: unset;
      flex-basis: 55%;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      text-align: left;
      min-height: auto;
      padding: 10px;
      text-align: left;
      align-items: flex-start;
    }

    .section-two-bot-item img {
      display: flex;
      flex-direction: column;
      flex-basis: 45%;
      padding: 10px;
    }

    .section-two-bot-item h2 {
      margin-bottom: 2rem;
    }

    .margin-both {
      margin: 20px 0;
    }

    .contact-section {
      background-position-y: 48%;
      background-size: 270vw;
    }
  }

  @media screen and (max-width: 900px) {
    .submit {
      margin: 28px 0;
    }

    .background-img {
      top: -13%;
      right: -108%;
      transform: rotate(70deg);
    }

    .section-two-hero h2,
    .about-us h2 {
      padding: 0 15%;
    }

    .section-one {
      flex-direction: column;
      align-items: center;
      padding-bottom: 0;
    }

    .section-one-text {
      width: 100%;
      text-align: center;
      margin-bottom: 100px;
      margin-top: 100px;
    }

    .section-one-animation {
      height: auto;
      width: 70%;
    }

    .section-two-top-orange-img {
      bottom: 76%;
    }

    .section-two-backgound-top-orange {
      left: -20vw;
      top: 0%;
    }

    .section-two-background-top {
      right: 80%;
      top: 3%;
    }

    .section-two-background-bot {
      left: 88%;
    }

    .section-two-background-bot-orange {
      left: 89%;
    }

    .contact-form-container {
      width: 80%;
    }

    .blog {
      flex-basis: 45%;
    }

    .blog-container {
      justify-content: space-between;
    }

    .blog-orange-circle-big {
      right: 84vw;
    }

    .blog img {
      left: 0;
    }

    .section-two {
      margin-top: 20%;
    }

    .section-two-top {
      min-height: 350px;
    }

    .section-two-top-left {
      padding: 10px;
    }

    .section-two-top-right {
      padding: 10px;
      text-align: left;
    }

    .section-two-bot-item {}

    .section-two-bot-item div {}

    .section-two-bot-item .p-font,
    .section-two-bot-item .h2-font {
      padding-left: 0;
    }

    .section-two-bot-item img {}
  }

  @media screen and (max-width: 776px) {
    .contact-section {
      background-size: 376vw;
    }

    .contact-form-container p {
      font-size: 1em;
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

    .section-two {
      margin-top: 30%;
    }

    .section-two-top {
      flex-direction: column;
    }

    .section-two-top-right {
      text-align: center;
      align-items: center;
    }

    .section-two-bot-item {
      flex-direction: column;
    }

    .section-two-bot-item div {
      align-items: center;
      text-align: center;
    }

    .section-two-bot-item .h2-font {
      margin-bottom: 8px;
    }

    .section-two-bot-item button {
      margin: 0;
    }

    .blog {
      flex-basis: 100%;
      max-height: 567px;
    }

    .contact-section {
      margin-top: -25%;
      background-size: 345vw;
      height: auto;
    }

    .blog-section {
      z-index: 5;
    }

    .img-container img {
      width: 100%;
    }

    .contact-form-group {
      flex-direction: column;
    }

    .footer {
      width: auto;
      left: auto;
      top: -20px;
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
      width: 166px;
      height: 45px;
      font-size: 1.2em;
      outline: hidden;
    }

    .footer p {
      font-size: 1.1em;
    }

    .blog-section .button {
      margin-top: 30px;
    }

    .submit {
      font-size: 1em;
    }

    .--border-right {
      border-right: 0;
    }

    .--border-bottom {
      border-bottom: 0;
    }

    .about-us div {
      flex-basis: 50%;
    }
  }

  @media screen and (max-width: 425px) {


    .background-img {
      top: 3%;
    }

    .section-one-animation {
      height: 270px;
      padding: 0;
      margin-top: 50px;
    }

    .section-two-bot-item button {
      margin-top: 25px;
    }

    .section-two-top button {
      margin: 25px;
    }

    .section-one-text {
      margin-bottom: 50px;
    }

    .section-one {
      margin-bottom: 40px;
    }

    .section-two {
      margin-bottom: 40px;
    }

    .section-three {
      margin-top: 80px;
    }

    .blog-section {
      margin-top: 80px;
    }

    .team {
      padding-top: 0;
      margin-top: 75px;
    }

    .contact-form-container {
      padding-top: 230px;
    }

    .contact-section {
      background-size: 605vw;
      margin-top: 10%;
    }

    .contact-orange-circle-l {
      left: -8%;
    }

    .contact-orange-circle-r {
      right: -12%;
      top: 21%;
    }

    .blog-section .button {
      margin-bottom: -50px;
    }

    .blog {
      margin-bottom: 10px;
    }

    .footer {
      top: 0;
    }

    .section-two-hero .submit {
      margin-bottom: 50px;
      margin-top: 15px;
    }

    .section-two-top {
      margin-bottom: -10px;
    }

    .section-two-bot-item {
      margin-bottom: 10px;
      margin-top: 5px;
    }

    .about-us .h1-font {
      padding-top: 50px;
    }

    .testemonials .flex {
      flex-direction: column-reverse;
    }

    .testemonials .h1-font {
      margin-top: 100px;
    }

    .partners-images img {
      max-width: 25%;
      margin: 10px;
    }

    .partners-images {
      margin-top: 50px;
      margin-bottom: 50px;
      justify-content: center;
    }

    .submit {
      margin-bottom: 60px;
    }
  }

  @media screen and (max-width: 375px) {
    .section-two-hero .submit {
      margin-bottom: -20px;
      margin-top: 15px;
    }

    .contact-section {
      background-size: 645vw;
    }
  }

  @media screen and (max-width: 360px) {
    .section-one {
      top: 0;
    }

    .section-one-animation {
      padding: 0 27px;
    }

    .section-one-text {
      margin-bottom: 10px;
    }

    .section-two {
      margin-top: -160px;
    }

    .contact-section {
      background-size: 790vw;
      background-position-y: 45%;
    }

    .footer {
      background-position-y: -360%;
    }

    iframe {
      height: 400px;
    }

    .--border-right {
      border: none;
    }

    .--border-bottom {
      border: none;
    }

    .margin-both {
      margin-bottom: 10px;
    }
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



    /*.nav-list:hover {
    height: 500px;
    z-index: 10;
  }*/
  }

  /* about us animation starts */
  .display-container {
    margin: auto;
    display: flex;
  }

  .note-display {
    display: flex;
    flex-direction: column;
    align-items: center;

  }

  .circle {
    position: relative;
  }

  .circle__svg {
    transform: rotate(-90deg);
  }

  .circle__progress {
    fill: none;
    stroke-width: 10px;
    stroke-opacity: 0.3;
    stroke-linecap: butt;
  }

  .circle__progress--fill {
    --initialStroke: 314;
    --transitionDuration: 0;
    stroke-opacity: 1;
    stroke-dasharray: var(--initialStroke);
    stroke-dashoffset: var(--initialStroke);
    transition: stroke-dashoffset var(--transitionDuration) ease;
  }

  .note-display .circle__progress {
    stroke: var(--h2-color);
  }

  .percent {
    width: 100%;
    top: 50%;
    left: 50%;
    position: absolute;
    font-weight: bold;
    text-align: center;
    line-height: 28px;
    transform: translate(-50%, -50%);
  }

  .percent__int {
    font-size: 28px;
    font-family: "Montserrat", sans-serif;
    color: var(--h2-color);
    font-weight: 400;
  }

  .percent__sign {
    font-size: 16px;
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    color: var(--h2-color);
  }

  .label {
    font-size: 14px;
    text-transform: uppercase;
    margin-top: 15px;
  }

  /* about us animation ends */
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

<div class="background-section-one">
  <img class="background-img" src="images/img/header-fluid-blue.svg" alt="blue background image" />
  <img class="background-img-orange-circle" src="images/img/orange-circle.svg" alt="orange background circle" />
  <img class="background-img-circle --circle1" src="images/img/fluid-bright-circle.svg" alt="bright circle background" />
  <img class="background-img-circle --circle2" src="images/img/fluid-bright-circle.svg" alt="bright circle background" />
  <img class="background-img-circle --circle3" src="images/img/fluid-bright-circle.svg" alt="bright circle background" />
  <div class="language">
    <p class="opacity margin-right-25">
      <span>Call: </span><span>+387 61 811 394</span>
      <span>+387 33 956 222</span>
    </p>
    <div class="language-selector-container">
      <span class="opacity">Language: </span>
      <img id="ba" class="opacity active-language" src="images/img/bh-flag.png" alt="Bosnian language" />
      <img id="gb" class="opacity" src="images/img/gb-flag.png" alt="English language" />
      <img id="de" class="opacity" src="images/img/de-flag.png" alt="German language" />
    </div>
  </div>
  <section class="section-one contain">

    <div class="section-one-text" data-aos="zoom-in">
      <h2 class="h2-font">We design and develop</h2>
      <h1 class="h1-font bold">E-LEARNING SOLUTIONS</h1>
      <p class="p-font ">
        We are here to turn your ideas into high quality learning
        experience.
      </p>
      <button class="button margin-top-27">Get in touch</button>
    </div>
    <img data-aos="zoom-in" class="section-one-animation" src="images/img/header-illustration.svg" alt="header ilustration" />


  </section>
</div>
<section class="section-two contain">
  <img class="section-two-top-orange-img" src="images/img/orange-circle.svg" alt="orange background circle" />
  <img class="section-two-background-top" src="images/img/header-fluid-blue.svg" alt="header blue background" />
  <img class="section-two-backgound-top-orange" src="images/img/orange-circle.svg" alt="orange background circle" />
  <img class="section-two-background-bot" src="images/img/blue-circle.svg" alt="blue background circle" />
  <img class="section-two-background-bot-orange" src="images/img/orange-circle.svg" alt="orange background circle" />
  <div class="section-two-hero">
    <div>
      <h2 class="h1-font">What We Do?</h2>
      <p class="p-font">
        In our everyday work, everything is related to "pure creativity, Articulate design and development, Moodle LMS, custom eLearning
        solutions and much more". We're ready to take on any challenge! Using our highly collaborative design approach, we'll build your
        custom solution from the ground up.
      </p>
      <button id="pinned-element1" class="button submit button-orange">Explore</button>
    </div>
  </div>
  <div id="anchor">
    <div class="section-two-top" data-aos-anchor="#anchor" data-aos="zoom-in-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true" data-aos-anchor-placement="top">
      <div class="section-two-top-left">
        <img src="images/img/online-courses-img.svg" alt="online courses" />
      </div>
      <div class="section-two-top-right">
        <h2 class="h2-font">Online courses</h2>
        <p class="p-font">
          We design and devlop eLearning content from scratch and
          implement your ideas into high quality, engaging courses.
        </p>
        <button class="button">Learn More</button>
      </div>
    </div>
    <div class="section-two-bot">
      <div class="section-two-bot-item" data-aos-anchor=".section-two-bot" data-aos="zoom-in-up" data-aos-offset="100" data-aos-delay="100" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true" data-aos-anchor-placement="top">
        <img class="--width-margin-top" src="images/img/video-animation-img.svg" alt="video and animation" />
        <div>
          <h2 class="h2-font">Educational <span>video animation</span></h2>
          <p class="p-font">
            Entertain and educate your trainees with our
            attention-grabbing and engaging animated videos.
          </p>
          <button class="button">Learn More</button>
        </div>


      </div>
      <div class="section-two-bot-item margin-both" data-aos-anchor=".section-two-bot" data-aos="zoom-in-up" data-aos-offset="200" data-aos-delay="200" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true" data-aos-anchor-placement="top">
        <img src="images/img/development-img.svg" alt="development" />
        <div>
          <h2 class="h2-font">Development/ <span>programming</span></h2>
          <p class="p-font">
            Back and front-end development of custom functions and
            interacitivty options making your courses compelling and user
            friendly.
          </p>
          <button class="button">Learn More</button>
        </div>

      </div>
      <div class="section-two-bot-item" data-aos-anchor=".section-two-bot" data-aos="zoom-in-up" data-aos-offset="300" data-aos-delay="300" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true" data-aos-anchor-placement="top">
        <img class="--width-margin-top" src="images/img/moodle-img.svg" alt="moodle" />
        <div>
          <h2 class="h2-font">Moodle <span>LMS Adaptation</span></h2>
          <p class="p-font">
            We use the leading open source learning mangement system
            Moodle with customizable features to create private websites
            with online coursed.
          </p>
          <button class="button">Learn More</button>
        </div>


      </div>
    </div>
  </div>
</section>
<section id="about" class="section-three contain">
  <img class="about-orange-circle" src="images/img/orange-circle.svg" alt="orange background circle" />
  <div>
    <div class="about-us">
      <div>
        <h2 class="h1-font">About Us</h2>
        <h3 class="h2-font">
          SmartLab is an eLearning company whose goal is to help customers
          reach their learning goals
        </h3>
      </div>

      <div id="aboutUs" class="flex about-us">
        <div>
          <p>Online<br>Courses</p>
          <div class="note-display --border-right --border-bottom" data-note="98">
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">
                <filter id="dropshadow" height="130%">
                  <feGaussianBlur in="SourceAlpha" stdDeviation="3" /> <!-- stdDeviation is how much to blur -->
                  <feOffset dx="0" dy="0" result="offsetblur" /> <!-- how much to offset -->
                  <feComponentTransfer>
                    <feFuncA type="linear" slope="0.3" /> <!-- slope is the opacity of the shadow -->
                  </feComponentTransfer>
                  <feMerge>
                    <feMergeNode /> <!-- this contains the offset blurred image -->
                    <feMergeNode in="SourceGraphic" /> <!-- this contains the element that the filter is applied to -->
                  </feMerge>
                </filter>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>

              <div class="percent">
                <span class="percent__int">0</span>
                <span class="percent__sign">%</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <p>Moodle LMS<br>Implementation</p>
          <div class="note-display --border-right --border-bottom" data-note="80">
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">

                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>

              <div class="percent">
                <span class="percent__int">0</span>
                <span class="percent__sign">%</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <p>Web Design<br>and Development</p>
          <div class="note-display --border-right --border-bottom" data-note="80">
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">

                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>

              <div class="percent">
                <span class="percent__int">0</span>
                <span class="percent__sign">%</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <p>Educational<br>Video Animation</p>
          <div class="note-display --border-bottom" data-note="85">
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">

                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>

              <div class="percent">
                <span class="percent__int">0</span>
                <span class="percent__sign">%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="--border-right ">
          <p>Consulting About<br>eLearning Features</p>
          <div class="note-display" data-note="90">
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">

                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>

              <div class="percent">
                <span class="percent__int">0</span>
                <span class="percent__sign">%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="--border-right">
          <p>Inhouse Training<br>and Seminars</p>
          <div class="note-display" data-note="70">
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">

                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>

              <div class="percent">
                <span class="percent__int">0</span>
                <span class="percent__sign">%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="--border-right">
          <p>Mobile App<br>Development</p>
          <div class="note-display" data-note="65">
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">

                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>

              <div class="percent">
                <span class="percent__int">0</span>
                <span class="percent__sign">%</span>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="note-display" data-note="100">
            <p>Fun<br>at work</p>
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">

                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>

              <div class="percent">
                <span class="percent__int">0</span>
                <span class="percent__sign">%</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section id="team" class="team contain">
  <img class="team-orange-circle" src="images/img/orange-circle.svg" alt="orange background circle" />
  <img class="team-blue-circle" src="images/img/blue-circle.svg" alt="blue background circle" />
  <img class="team-orange-circle-bottom" src="images/img/orange-circle.svg" alt="background orange circle" />
  <div>
    <h2 class="text-center h1-font">Our Team</h2>
    <div class="flex --four">
      <img src="https://via.placeholder.com/200" alt="team members" />
      <img src="https://via.placeholder.com/200" alt="team members" />
      <img src="https://via.placeholder.com/200" alt="team members" />
      <img src="https://via.placeholder.com/200" alt="team members" />
      <img src="https://via.placeholder.com/200" alt="team members" />
      <img src="https://via.placeholder.com/200" alt="team members" />
      <img src="https://via.placeholder.com/200" alt="team members" />
      <img src="https://via.placeholder.com/200" alt="team members" />
    </div>
  </div>
</section>
<section class="contain testemonials">
  <div>
    <h2 class="text-center h1-font">Partners</h2>
    <div class="flex">
      <div class="partners-images">
        <img src="../images/partners-logo/TheTrainingTerminal-2.png" alt="TrainingTerminal logo" />
        <img src="../images/partners-logo/FKC-2.png" alt="Ficher, Knoblauch & co logo" />
        <img src="../images/partners-logo/leanscape-2.png" alt="leanscape logo" />
        <img src="../images/partners-logo/WELLS-PARK-2.png" alt="wells park communications logo" />
        <img src="../images/partners-logo/loop-TV-2.png" alt="loop tv logo" />
        <img src="../images/partners-logo/zomppp-2.png" alt="zomppp logo" />
        <img src="../images/partners-logo/UAP-QMS-2.png" alt="uap managment system logo" />
        <img src="../images/partners-logo/tottem-2.png" alt="totem learning logo" />
        <img src="../images/partners-logo/safetycourses4u-2.png" alt="safety courses for you logo" />
        <img src="../images/partners-logo/dimenzija_plus-2.png" alt="dimenzija plus logo" />
        <img src="../images/partners-logo/TVSA-2.png" alt="televizija sarajevo logo" />
        <img src="../images/partners-logo/eloomi-4.png" alt="eloomi logo" />
        <img src="../images/partners-logo/FIN-2.png" alt="fakultet islamskih nauka logo" />
        <img src="../images/partners-logo/maisonprive-2.png" alt="maison prive logo" />
        <img src="../images/partners-logo/biramoporavak-2.png" alt="biramo oporavak logo" />
        <img src="../images/partners-logo/BDfD-2.png" alt="bosnian doctors for disabled logo" />
      </div>
      <div class="partners-text">
        <div>
          <p class="p-font" id="partners-text">
            “SmartLab team created a fantastic web based quiz for Afrika Presents with
            a downloadable badge. Incredible attention to details. Better than
            anticipated and they had a true understanding and delivered just what we
            were looking for. We look forward to working together again in future.”
          </p>
          <div>
            <img id="partners-image" src="../images/partners-images/Mara.png" alt="partner image" />
            <p id="partners-name" class="h2-font">Mara Menzies</p>
            <p id="partners-company" class="p-font">Afrika Presents Ltd</p>
          </div>
          <div id="indicators"><span class="indicator indicator-opacity"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog-section contain">
  <img class="blog-orange-circle-big" src="images/img/orange-circle.svg" alt="orange circle background" />
  <img class="blog-orange-circle-small" src="images/img/orange-circle.svg" alt="orange circle background" />
  <h2 class="text-center h1-font">Blog</h2>
  <div class="blog-container">
    <div class="blog" data-aos-anchor=".blog-section" data-aos="zoom-in-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true" data-aos-anchor-placement="top">
      <div class="img-container">
      <div class="img-container-overlay img-container-overlay-blue"></div>
        <img src="images/blog/augmented-reality-investment-e1473173317384.jpg" alt="blog post">
        <svg class="wave" viewBox="0 0 500 500">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>


      <div>
        <h2 class="h2-font">Blog Title</h2>
        <p><span>05.07.2019.</span> <span>Haris M.</span></p>
        <p class="p-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc odio, mollis in fringilla at, cursus aliquam felis. Curabitur in cursus orci. Vestibulum convallis lectus risus, at varius nisl egestas vel. Suspendisse laoreet ex quis odio aliquet mollis. Duis quis porta magna. Nam dignissim enim lectus, sit amet porta metus interdum a. Praesent pulvinar justo vel lectus dictum, at fermentum neque lobortis. Sed vitae nisl eget augue convallis convallis nec at nisi. Nullam fermentum lorem metus, sit amet tincidunt velit convallis non. Proin sed finibus mauris. Sed orci metus, fringilla sed sollicitudin at, efficitur in ipsum. Pellentesque egestas ex quis tempor sagittis. Integer at nulla scelerisque, luctus quam vel, feugiat sem. Donec molestie eu lacus ut egestas. Pellentesque urna justo, tempus a est sed, bibendum interdum nisl.</p>
      </div>
    </div>
    <div class="blog" data-aos-anchor=".blog-section" data-aos="zoom-in-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true" data-aos-anchor-placement="top">
      <div class="img-container">
        <div class="img-container-overlay img-container-overlay-orange"></div>
        <img src="images/img/blog-post-2.png" alt="blog post">
        <svg class="wave" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h2 class="h2-font">Blog Title</h2>
        <p><span>05.07.2019.</span> <span>Haris M.</span></p>
        <p class="p-font ">Sed scelerisque vulputate dui at mattis. Donec porta, lorem in vehicula efficitur, est libero suscipit est, id sollicitudin urna diam non sapien. Quisque porttitor, dui non porttitor efficitur, ante magna pulvinar purus, sit amet pretium nunc ipsum vel libero. Suspendisse venenatis lacus hendrerit, porttitor massa ac, consequat lectus. Praesent tempor congue nulla, nec dictum purus viverra nec. Mauris at felis metus. Vivamus egestas libero ac lectus consequat ullamcorper. Vestibulum ullamcorper ornare quam, eget ullamcorper sem malesuada sit amet. Aliquam tincidunt eleifend nulla, non dignissim odio suscipit id. Praesent quis quam leo.</p>
      </div>
    </div>
    <div class="blog" data-aos-anchor=".blog-section" data-aos="zoom-in-up" data-aos-offset="300" data-aos-delay="150" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true" data-aos-anchor-placement="top">
      <div class="img-container ">
      <div class="img-container-overlay img-container-overlay-blue"></div>
        <img src="images/blog/webinar-learning-experience-1170x769.jpg" alt="blog post">
        <svg class="wave" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h2 class="h2-font">Blog Title</h2>
        <p><span>05.07.2019.</span> <span>Haris M.</span></p>
        <p class="p-font ">Quisque a nisi iaculis, finibus neque quis, consectetur nisi. Nam id sollicitudin orci. Sed interdum, ante sed condimentum laoreet, augue sem tempor ligula, sed viverra lorem purus sit amet turpis. Duis odio tortor, fermentum a leo a, tempus bibendum nisl. Nunc aliquet dui ut arcu pulvinar, a mollis orci porta. Suspendisse interdum nulla est. Curabitur eget metus congue, accumsan velit quis, lobortis arcu. Phasellus et dignissim erat. Sed quis est in magna suscipit pretium id eget leo. Mauris scelerisque pellentesque odio, id porta ligula efficitur a. Fusce in fermentum nulla. Etiam cursus enim non nisi sollicitudin posuere. Phasellus malesuada tempus magna ut varius. Quisque posuere ut metus in mattis. Duis molestie dui eget odio fringilla, sed porta enim venenatis.</p>
      </div>
    </div>
    <div class="blog" data-aos-anchor=".blog-section" data-aos="zoom-in-up" data-aos-offset="400" data-aos-delay="200" data-aos-duration="300" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="true" data-aos-anchor-placement="top">
      <div class="img-container">
      <div class="img-container-overlay img-container-overlay-orange"></div>
        <img src="images/blog/androidpit-youtube-hero-2-1-585x385.jpg" alt="blog post">
        <svg class="wave" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h2 class="h2-font">Blog Title</h2>
        <p><span>05.07.2019.</span> <span>Haris M.</span></p>
        <p class="p-font">Morbi diam lorem, fermentum sit amet felis non, venenatis eleifend arcu. Vestibulum mauris nulla, aliquam eu consequat eget, mollis non sem. Cras massa enim, lobortis in sodales eu, lobortis a nisi. Fusce sodales accumsan nisl sit amet ullamcorper. Sed vel lorem nec quam luctus pellentesque at nec magna. Pellentesque ac luctus arcu, eu fermentum justo. Nulla pulvinar tellus at auctor tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur lobortis bibendum metus id tempus. Nulla convallis tempor mauris, at blandit risus semper ac. Phasellus vel neque id felis tristique viverra. Praesent commodo, nunc eu imperdiet lobortis, quam tortor feugiat tortor, id convallis purus turpis et nibh.</p>
      </div>
    </div>
  </div>
  <button class="button">Show more</button>
</section>
<section class="contact-section">
  <img class="contact-orange-circle-r" src="images/img/orange-circle.svg" alt="background orange circle" />
  <img class="contact-orange-circle-l" src="images/img/orange-circle.svg" alt="background orange circle" />
  <div class="contact-form-container">
    <p>If our web site didn’t answer to all your questions, feel free to contact us with any specific question,
      project proposal or just a introduction meeting request.</p>
    <h2 class="text-center h1-font">Contact</h2>
    <form class="contact-form">
      <div class="contact-form-group">
        <div>
          <label for="name">*Name</label>
          <input type="text" name="name" id="name"/>
        </div>
        <div>
          <label for="surnanme">*Surname</label>
          <input type="text" name="surname" id="surname"/>
        </div>
      </div>
      <div class="contact-form-group">
        <div>
          <label for="subject">*Subject</label>
          <input type="text" name="subject" id="subject" />
        </div>
        <div>
          <label for="email">*Email</label>
          <input type="email" name="email" id="email"/>
        </div>
      </div>
      <div class="contact-form-group textarea">
        <label for="message">*Message</label>
        <textarea name="message" rows="7" id="message"></textarea>
      </div>
      <input class="button submit" type="submit" value="Send" />
    </form>
  </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    AOS.init();

    // about us circle animation start 
    const aboutUs = document.querySelector("#aboutUs");
    let i = 0;
    let isInViewport = function(elem) {
      let bounding = elem.getBoundingClientRect();
      console.log(bounding.top);
      return (
        bounding.top < 400
      );
    };
    window.addEventListener("scroll", function(event) {
      if (isInViewport(aboutUs)) {
        for (i = i; i <= 1; i++) {
          displays.forEach(display => {

            let int = Number(display.dataset.note);
            console.log(int);
            strokeTransition(display, int)
            increaseNumber(display, int)
          });
        }
      }
    });
    const displays = document.querySelectorAll(".note-display");
    const transitionDuration = 900;



    function strokeTransition(display, number) {
      let progress = display.querySelector(".circle__progress--fill");
      let radius = progress.r.baseVal.value;
      let circumference = 2 * Math.PI * radius;
      let offset = (circumference * (100 - number)) / 100;

      progress.style.setProperty("--initialStroke", circumference);
      progress.style.setProperty(
        "--transitionDuration",
        `${transitionDuration}ms`
      );

      setTimeout(() => (progress.style.strokeDashoffset = offset), 100);
    }

    function increaseNumber(display, number) {
      let element = display.querySelector(`.percent__int`),
        interval = transitionDuration / number,
        counter = 0;

      let increaseInterval = setInterval(() => {
        if (counter === number) {
          window.clearInterval(increaseInterval);
        }
        element.textContent = counter;
        counter++;
      }, interval);
    }
    // about us circle animation end


    let partnersText = document.querySelector("#partners-text");
    let partnersImage = document.querySelector("#partners-image");
    let partnersName = document.querySelector("#partners-name");
    let partnersCompany = document.querySelector("#partners-company");
    let indicators = document.querySelectorAll(".indicator");
   
    
      
    

    let partners = [{
      text: "SmartLab team created a fantastic web based quiz for Afrika Presents with a downloadable badge. Incredible attention to details. Better than anticipated and they had a true understanding and delivered just what we were looking for. We look forward to working together again in future.",
      image: "../images/partners-images/Mara.png",
      name: "Mara Menzies",
      company: "Afrika Presents Ltd"
    }, {
      text: "Ima da ih opjevam!",
      image: "https://www.fokus.ba/wp-content/uploads/2018/12/halid-beslic-1.jpg",
      name: "Halid Bešlić",
      company: "Bešlić Inc"
    }, {
      text: "I'll be back!",
      image: "https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2018/01/the_terminator_still.jpg",
      name: "Terminator",
      company: "Time Traveling Ltd"
    }, {
      text: "Ja došao onako",
      image: "https://pbs.twimg.com/profile_images/727765055132057600/dfF6JL_C_400x400.jpg",
      name: "Slučajni prolaznik",
      company: "Prolazništvo"
    }, {
      text: "Čisto da se popuni",
      image: "https://image.shutterstock.com/image-photo/menacing-silhouette-hooded-man-shadow-260nw-137674373.jpg",
      name: "Niko Nikić",
      company: "Nema"
    }];
    console.log(partnersText, partnersImage, partnersName, partnersCompany, indicators, partners);
    let j = 1;
    
    function partnersChange(partners) {
      partnersText.innerText = partners.text;
      partnersImage.src = partners.image;
      partnersName.innerText = partners.name;
      partnersCompany.innerText = partners.company;
    }
    for(let i=0; i<indicators.length; i++){
      indicators[i].addEventListener("click", function(){
        for(let m=0;m<indicators.length;m++){
          indicators[m].classList.remove("indicator-opacity");
        }
        j = i;
        indicators[i].classList.add("indicator-opacity");
        partnersChange(partners[j]);
      })
    }
    setInterval(function() {
      console.log(j, indicators.length);
      if(j == indicators.length){
        indicators[j-1].classList.remove("indicator-opacity");
        j=0;
      }
      indicators[j].classList.add("indicator-opacity");
      if(j>0){
        indicators[j-1].classList.remove("indicator-opacity");
      }
      partnersChange(partners[j]);
      j++;
    }, 5000)

  });
</script>
<!--<script src="js/nav.js"></script>
     -->
<!-- </body>
</html> -->

@endsection