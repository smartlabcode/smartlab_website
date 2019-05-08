<!-- Extend main layout -->
@extends('layouts.app')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
html{
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
.contain{
    max-width: 1200px;
    width: 90%;
    margin: 0 auto;
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
    width: 30%;
    z-index: -100;
    right: -15%;
    bottom: 68%;
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
.--width-margin-top{
    margin-top: 10px;
    width: 97%;
}
.margin-both {
  margin: 0 20px;
}
.section-three {
  position: relative;
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
.about-us div{
  flex-basis: 25%;
  padding-bottom: 10px;
  padding-top: 10px;
}
.--border-right{
  border-right: 3px solid grey;
}
.--border-bottom{
  border-bottom: 3px solid grey;
  
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
.partners-images {
  flex-basis: 35%;
  display: flex;
  flex-wrap: wrap;
  align-items: baseline;
}
.partners-text{
  flex-basis: 60%;
  background-image: url(images/img/quotation-marks.svg);
  background-size: 50%;
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
}
.partners-text div{
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.partners-text .p-font{
  margin-bottom: 0;
  font-style: italic;
}
.partners-text .h2-font{
  margin-bottom: 0px;
}
.partners-text img{
  margin-top: 35px;
  border-radius: 50%;
}
.partners-images img {
  max-width: 45%;
  margin-right: 10px;
  margin-bottom: 10px;
  object-fit: contain;
}
.blog-section{
  position: relative;
  text-align: center;
}
.blog-section .button{
  margin-top: 100px;
  margin-bottom: 25px;
}
.blog-orange-circle-big{
  position: absolute;
    width: 31%;
    right: -9vw;
    z-index: -100;
    bottom: 0;
}
.blog-orange-circle-small{
  position: absolute;
    width: 11%;
    right: -12vw;
    bottom: 30%;
    transform: rotate(-180deg);
}
.blog-container{
  position: relative;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding-top: 25px;
}
.blog{
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
.blog:hover{
  -webkit-box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
  -moz-box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
  box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
}
.blog .p-font{
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
.blog .p-font::after{
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
.blog div:not(.img-container){
  padding: 10px;
}
.blog img{
  position: relative;
  left: -25%;
  top: -10%;
  object-fit: contain;
  object-position: 0% 0%;
}
.blog span{
  opacity: 0.5;
}
svg {
  transform: rotateX(-180deg) rotateY(-180deg);
  display: inline-block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 101%;
}
.img-container {
  display: inline-block;
  position: relative;
  width: 100%;
  vertical-align: middle;
  overflow: hidden;
}
.navigation-button {
  display: none;
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
.submit {
  align-self: flex-end;
  margin: 20px 0;
  background-color: var(--button-bg-orange);
  border: 1px solid var(--button-bg-orange);

}
.submit:hover{
    background-color: white;
    color: var(--button-bg-orange);
    border: 1px solid var(--button-bg-orange);
}
.contact-section {
  width: 112%;
  left: -6%;
  background-image: url(images/img/footer-blue-bg.svg);
  background-repeat: no-repeat;
  background-size: 200vw;
  background-position-x: 40%;
  background-position-y: 35%;
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
  top: -18px;
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
.submit{
  font-size: 1.5em;
}
@media screen and (max-width: 1500px){
  .partners-images{
    flex-basis: 40%;
  }
}
@media screen and (max-width: 1400px){
  .background-img{
    height: 125%;
    top: -25%;
    right: -25%;
  }
  .section-one{
    justify-content: space-around;
  }
}
@media screen and (max-width: 1200px){
    .contain{
        width: 95%;
        margin:0 auto;
    }
    .blog-container{
      justify-content: space-evenly;
    }
    .blog{
      
      flex-basis: 35%;
      max-height: 550px;
      margin-bottom: 40px;
    }
    .blog div{
      padding-top: 0 !important;
    }
    
}
@media screen and (max-width: 1175px){
  .button{
    width: 208px;
    height: 56px;
  }
  .section-two-bot{
    min-height: 600px;
  }
  .section-two-bot-item{
    min-height: 600px;
  }
  .section-two-bot-item div{
    min-height: 500px;
  }
  .blog{
    flex-basis: 45%;
  }
  .img-container img{
    left: 0;
  }
  .blog-orange-circle-big{
    bottom: 100px;
  }
  .blog-orange-circle-small{
    bottom: 22%;
  }
}
@media screen and (max-width: 1026px){
  .section-two-bot{
        flex-direction: column;
    }
    .section-two-bot-item{
        display: flex;
        min-height: 350px;
        width: 100%;
        flex-direction: row;
    }
    .section-two-bot-item div{
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
    .section-two-bot-item img{
        display: flex;
        flex-direction: column;
        flex-basis: 45%;
        padding: 10px;
    }
    .section-two-bot-item h2 {
        margin-bottom: 2rem;
}
.margin-both{
        margin: 20px 0;
    }
    .contact-section{
        background-position-y: 40%;
        background-size: 270vw;
    }
}
@media screen and (max-width: 900px){
  .submit{
    margin: 28px 0;
  }
  .background-img{
    top: -13%;
    right: -108%;
    transform: rotate(70deg);
  }
    .section-two-hero h2, .about-us h2{
        padding: 0 15%;
    }
    .section-one{
        flex-direction: column;
        align-items: center;
        padding-bottom: 0;
    }
    .section-one-text{
        width: 100%;
        text-align: center;
        margin-bottom: 100px;
        margin-top: 100px;
    }
    .section-one-animation{
        height: auto;
        width: 70%;
    }
    .section-two-top-orange-img{
        bottom: 76%;
    }
    .section-two-backgound-top-orange{
        left: -20vw;
        top: 0%;
    }
    .section-two-background-top{
      right: 80%;
    top: 3%;
    }
    .section-two-background-bot{
      left: 88%;
    }
    .section-two-background-bot-orange{
      left: 89%;
    }
    
    
    .contact-form-container{
        width: 80%;
    }
    
    .blog{
      flex-basis: 45%;
    }
    .blog-container{
      justify-content: space-between;
    }
    .blog-orange-circle-big{
      right: 84vw;
    }
    .blog img{
      left:0;
    }
    .section-two-top{
      min-height: 350px;
    }
    .section-two-top-left{
      padding: 10px;
    }
    .section-two-top-right{
      padding: 10px;
      text-align: left;
    }
    .section-two-bot-item{
      
    }
    .section-two-bot-item div{
      
    }
    .section-two-bot-item .p-font, .section-two-bot-item .h2-font{
      padding-left: 0;
    }
    .section-two-bot-item img{
      
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
    .section-two-top{
      flex-direction: column;
    }
    .section-two-top-right{
      text-align: center;
      align-items: center;
    }
    .section-two-bot-item{
      flex-direction: column;
    }
    .section-two-bot-item div{
      align-items: center;
      text-align: center;
    }
    .section-two-bot-item .h2-font{
      margin-bottom: 8px;
    }
    .section-two-bot-item button{
      margin:0;
    }
    .blog{
      flex-basis: 100%;
      max-height: 567px;
    }
    .contact-section{
      margin-top: -25%;
      background-size: 345vw;
      height: auto;
    }
    .blog-section{
      z-index: 5;
    }
    .img-container img{
      width: 100%;
    }
    .contact-form-group{
      flex-direction: column;
    }
    .footer{
      width: auto;
      left: auto;
      top: -20px;
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
    .footer p{
      font-size: 1.1em;
    }
    .blog-section .button{
      margin-top: 30px;
    }
    .submit{
      font-size: 1em;
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
  .section-two{
    padding-top: 130px;
  }
  .contact-section{
    background-size: 513%;
    background-position-y: 51%;
  }
  .footer{
    background-position-y: -360%;
  }
  iframe{
    height: 400px;
  }
  .partners-images img{
    max-width: 60%;
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
        <img class="background-img" src="images/img/header-fluid-blue.svg"  />
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
        <section class="section-one contain" >
        
              <div class="section-one-text" data-aos="zoom-in">
                  <h2 class="h2-font"  >We design and develop</h2>
                  <h1 class="h1-font bold" >E-LEARNING SOLUTIONS</h1>
                  <p class="p-font " >
                    We are here to turn your ideas into high quality learning
                    experience.
                  </p>
                  <button class="button margin-top-27">Get in touch</button>
                </div>
                <img data-aos="zoom-in"
                  class="section-one-animation"
                  src="images/img/header-illustration.svg"
                  
                />
          
          
        </section>
      </div>
      <section class="section-two contain">
          <img
          class="section-two-top-orange-img"
          src="images/img/orange-circle.svg"
        />
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
            <h2 class="h2-font">
              SmartLab offers different services with focus on the e-Learning
              industry.
            </h2>
            <button id="pinned-element1" class="button submit">Explore</button>
          </div>
        </div>
        <div id="anchor">
          <div class="section-two-top"
          data-aos-anchor="#anchor"
          data-aos="zoom-in-up"
          data-aos-offset="100"
          data-aos-delay="50"
          data-aos-duration="300"
          data-aos-easing="ease-in-out"
          data-aos-mirror="false"
          data-aos-once="true"
          data-aos-anchor-placement="top"
          >
            <div class="section-two-top-left">
              <img src="images/img/online-courses-img.svg" />
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
            <div class="section-two-bot-item"
            data-aos-anchor=".section-two-bot"
            data-aos="zoom-in-up"
            data-aos-offset="100"
            data-aos-delay="100"
            data-aos-duration="300"
            data-aos-easing="ease-in-out"
            data-aos-mirror="false"
            data-aos-once="true"
            data-aos-anchor-placement="top">
              <img class="--width-margin-top" src="images/img/video-animation-img.svg" />
              <div>
                <h2 class="h2-font">Educational <span>video animation</span></h2>
                <p class="p-font">
                  Entertain and educate your trainees with our
                  attention-grabbing and engaging animated videos.
                </p>
                <button class="button">Learn More</button>
              </div>

              
            </div>
            <div class="section-two-bot-item margin-both" data-aos-anchor=".section-two-bot"
            data-aos="zoom-in-up"
            data-aos-offset="200"
            data-aos-delay="200"
            data-aos-duration="300"
            data-aos-easing="ease-in-out"
            data-aos-mirror="false"
            data-aos-once="true"
            data-aos-anchor-placement="top">
              <img src="images/img/development-img.svg" />
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
            <div class="section-two-bot-item" data-aos-anchor=".section-two-bot"
            data-aos="zoom-in-up"
            data-aos-offset="300"
            data-aos-delay="300"
            data-aos-duration="300"
            data-aos-easing="ease-in-out"
            data-aos-mirror="false"
            data-aos-once="true"
            data-aos-anchor-placement="top">
              <img class="--width-margin-top" src="images/img/moodle-img.svg" />
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
            <div class="flex about-us">
                <div class="--border-right --border-bottom"> 
                    <img src="https://via.placeholder.com/150" />
                </div>
                <div class="--border-right --border-bottom">
                    <img src="https://via.placeholder.com/150" />
                </div >
                <div class="--border-right --border-bottom">
                    <img src="https://via.placeholder.com/150" />
                </div>
                <div class="--border-bottom">
                    <img src="https://via.placeholder.com/150" />
                </div>
                <div class="--border-right ">
                    <img src="https://via.placeholder.com/150" />
                </div>
                <div class="--border-right">
                    <img src="https://via.placeholder.com/150" />
                </div>
                <div class="--border-right">
                    <img src="https://via.placeholder.com/150" />
                </div>
                <div >
                    <img src="https://via.placeholder.com/150" />
                </div>
              
            </div>
          </div>
        </div>
      </section>
      <section id="team" class="team contain">
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
      <section class="contain">
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
            <div class="partners-text">
              <div>
                <p class="p-font">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum rhoncus massa. Fusce dapibus accumsan volutpat. Pellentesque lobortis ex nibh, ac mattis sapien varius semper. Curabitur congue dui non libero congue, non varius dui iaculis. Nam ut accumsan urna. Curabitur eget mattis tellus, ut euismod turpis.
                </p>
                <div>
                    <img src="https://via.placeholder.com/100" />
                    <p class="h2-font">Joanna Kowalska</p>
                    <p class="p-font">Nike co.</p>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="blog-section contain">
        <img class="blog-orange-circle-big" src="images/img/orange-circle.svg" />
        <img class="blog-orange-circle-small" src="images/img/orange-circle.svg" />
        <h1 class="text-center h1-font">Blog</h1>
        <div class="blog-container">
          <div class="blog">
              <div class="img-container">
                  <img src="images/img/blog-post-1.png">
                  <svg viewBox="0 0 500 500">
                    <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                  </svg>
                </div>
            
            
            <div>
              <h2 class="h2-font">Blog Title</h2>
              <p><span>05.07.2019.</span> <span>Haris M.</span></p>
              <p class="p-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc odio, mollis in fringilla at, cursus aliquam felis. Curabitur in cursus orci. Vestibulum convallis lectus risus, at varius nisl egestas vel. Suspendisse laoreet ex quis odio aliquet mollis. Duis quis porta magna. Nam dignissim enim lectus, sit amet porta metus interdum a. Praesent pulvinar justo vel lectus dictum, at fermentum neque lobortis. Sed vitae nisl eget augue convallis convallis nec at nisi. Nullam fermentum lorem metus, sit amet tincidunt velit convallis non. Proin sed finibus mauris. Sed orci metus, fringilla sed sollicitudin at, efficitur in ipsum. Pellentesque egestas ex quis tempor sagittis. Integer at nulla scelerisque, luctus quam vel, feugiat sem. Donec molestie eu lacus ut egestas. Pellentesque urna justo, tempus a est sed, bibendum interdum nisl.</p>
            </div>
          </div>
          <div class="blog">
              <div class="img-container">
                  <img src="images/img/blog-post-2.png">
                  <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                    <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                  </svg>
                </div>
              <div>
                <h2 class="h2-font">Blog Title</h2>
                <p><span>05.07.2019.</span> <span>Haris M.</span></p>
                <p class="p-font ">Sed scelerisque vulputate dui at mattis. Donec porta, lorem in vehicula efficitur, est libero suscipit est, id sollicitudin urna diam non sapien. Quisque porttitor, dui non porttitor efficitur, ante magna pulvinar purus, sit amet pretium nunc ipsum vel libero. Suspendisse venenatis lacus hendrerit, porttitor massa ac, consequat lectus. Praesent tempor congue nulla, nec dictum purus viverra nec. Mauris at felis metus. Vivamus egestas libero ac lectus consequat ullamcorper. Vestibulum ullamcorper ornare quam, eget ullamcorper sem malesuada sit amet. Aliquam tincidunt eleifend nulla, non dignissim odio suscipit id. Praesent quis quam leo.</p>
              </div>
            </div>
            <div class="blog">
                <div class="img-container">
                    <img src="images/img/blog-post-1.png">
                    <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                      <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                    </svg>
                  </div>
                <div>
                  <h2 class="h2-font">Blog Title</h2>
                  <p><span>05.07.2019.</span> <span>Haris M.</span></p>
                  <p class="p-font ">Quisque a nisi iaculis, finibus neque quis, consectetur nisi. Nam id sollicitudin orci. Sed interdum, ante sed condimentum laoreet, augue sem tempor ligula, sed viverra lorem purus sit amet turpis. Duis odio tortor, fermentum a leo a, tempus bibendum nisl. Nunc aliquet dui ut arcu pulvinar, a mollis orci porta. Suspendisse interdum nulla est. Curabitur eget metus congue, accumsan velit quis, lobortis arcu. Phasellus et dignissim erat. Sed quis est in magna suscipit pretium id eget leo. Mauris scelerisque pellentesque odio, id porta ligula efficitur a. Fusce in fermentum nulla. Etiam cursus enim non nisi sollicitudin posuere. Phasellus malesuada tempus magna ut varius. Quisque posuere ut metus in mattis. Duis molestie dui eget odio fringilla, sed porta enim venenatis.</p>
                </div>
              </div>
              <div class="blog">
                  <div class="img-container">
                      <img src="images/img/blog-post-2.png">
                      <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
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
            <input class="button submit" type="submit" value="Send" />
          </form>
        </div>
      </section>
      <footer class="footer">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5754.153583595637!2d18.389259!3d43.854237!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3b7b0136b05bfe5!2sSmartLab!5e0!3m2!1sen!2sus!4v1557213572662!5m2!1sen!2sus" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div>
          <p>Copyright &copy 2019 SmartLab</p>
        </div>
      </footer>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <!--<script src="js/nav.js"></script>
     -->
  <!-- </body>
</html> -->

@endsection 

