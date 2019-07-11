@extends('layouts.app')
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
        color: var(--h2-color) !important;
    }

    .h3-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 1.4em;
        margin-top: 0;
        margin-bottom: 0;
        color: var(--h1-color);
    }

    .h4-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 1.4em;
        margin-top: 0;
        margin-bottom: 15px;
        color: var(--h2-color);
    }

    .h5-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 1.4em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4em;
        color: #354144 !important;
    }

    .contain {
        max-width: 1440px;
        width: 90%;
        margin: 0 auto;
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

    .button:hover {
        background-color: white;
        color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
    }

    .nav-list {
        color: rgb(20, 33, 61) !important;
    }

    .grey {
        color: rgb(20, 33, 61) !important;
    }

    .arrow::before {
        background-color: rgb(20, 33, 61) !important;
    }

    .arrow:hover:before {
        transform: rotateX(-180deg) translate(-100%, -170%);
        animation: arrow 0.2s ease-in-out forwards !important;
    }

    .nav-top p {
        color: rgb(20, 33, 61) !important;
    }

    .nav-top label {
        color: rgb(20, 33, 61) !important;
    }

    @keyframes arrow {
        0% {
            background-color: var(--h1-color);
        }

        50% {
            background-color: var(--h1-color);
        }

        100% {
            background-color: white;
        }
    }

    .section-one {
        height: 75%;
        position: relative;
    }

    .section-one-bg {
        position: absolute;
        width: 3000px;
        top: -184%;
        /* bottom: -80%; */
        /* left: -25vw; */
        right: -30%;
        z-index: -100;
    }

    .section-one-img-container {
        position: relative;
        max-height: 600px;
        height: 600px;
        margin-top: 10%;
        margin-bottom: 10%;
    }

    .section-one-img-left-container {
        position: relative;
        max-height: 600px;
        height: 600px;
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 10%;
    }

    .section-one-img-left {
        position: absolute;
    }

    .--part1 {
        left: -50px;
        bottom: -20px;
        width: 60%;
    }

    .--part2 {
        top: -40px;
        right: 70px;
        width: 40%;
    }

    .section-one-img-right {
        width: 40%;
        max-height: 600px;
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .team-member {
        display: flex;
        justify-content: left;
        align-items: center;
        margin-bottom: 50px !important;
        padding: 80px 100px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        border-radius: 15px;
    }

    .team-img-container {
        position: relative;
    }

    .team-mask {
        position: absolute;
        z-index: 0;
        top: 0;
    }


    .team-img-container {
        position: relative;
        height: 325px;
    }

    .team-img {
        z-index: 20;
        position: relative;
        padding-top: 0 !important;
        z-index: 20;
        position: relative;
        padding-top: 0 !important;
        transform: rotate(-154deg);
        clip-path: url(#clipPath);
        height: 325px;
        width: 285px;
    }

    .team-img img {
        transform: rotate(154deg);
        object-fit: contain;
        position: absolute;
        top: 0;
        padding-top: 0 !important;
        width: 100%;
        object-position: 0px 50px;
    }

    .team-blue1 {
        position: absolute;
        top: -6px;
        width: 70%;
        transform: rotate(242deg);
        z-index: 10;
    }

    .team-orange1 {
        position: absolute;
        right: 132px;
        bottom: -23px;
        width: 60%;
        z-index: 10;
    }

    .team-blue2 {
        position: absolute;
        bottom: -17px;
        right: -5px;
        width: 41%;
        transform: rotate(0deg);
        z-index: 10;
    }

    .team-orange2 {
        position: absolute;
        right: 142px;
        bottom: 65px;
        transform: rotate(32deg);
        width: 65%;
        z-index: 10;
    }

    .team-blue3 {
        position: absolute;
        bottom: 6px;
        width: 31%;
        right: 8px;
        transform: rotate(242deg);
        z-index: 10;
    }

    .team-orange3 {
        position: absolute;
        right: 77px;
        top: -6px;
        width: 81%;
        z-index: 10;
        transform: rotate(-106deg);
    }

    .team-blue4 {
        position: absolute;
        width: 42%;
        transform: rotate(2deg);
        z-index: 10;
        bottom: 29px;
        left: -13px;
    }

    .team-orange4 {
        position: absolute;
        right: -28px;
        bottom: -38px;
        width: 81%;
        z-index: 10;
    }

    .team-description {
        text-align: left;
        margin-left: 100px;
        width: 68%;
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

    .team-description-bottom {
        display: flex;
        margin-top: 50px;
    }

    .team-description-bottom-social {
        display: flex;
    }

    .team-description-bottom-social-img-container {
        border-radius: 50%;
        height: 69px;
        width: 69px;
        margin-left: 10px;
        cursor: pointer;
    }

    .--ln {
        background-color: #2ca7e0;
        border: 1px solid #2ca7e0;
        transition: background-color 0.2s ease-in-out;
    }

    .--git {
        background-color: #000000;
        border: 1px solid #000000;
        transition: background-color 0.2s ease-in-out;
    }

    .team-description-bottom-social-img-container svg {
        width: 35px;
        height: 35px;
        transform: translate(47%, 47%);
    }

    .--ln:hover {
        background-color: white;
    }

    .team-description-bottom-social-img-container:hover .cls-1 {
        fill: #2ca7e0;
    }

    .team-description-bottom-social-img-container:hover .cls-2 {
        fill: #000000;
    }

    .--git:hover {
        background-color: white;
    }

    .cls-1 {
        fill: white;
        transition: fill 0.2s ease-in-out;
    }

    .cls-2 {
        fill: white;
        transition: fill 0.2s ease-in-out;
    }

    .team-member a {
        color: white;
        display: inline-block;
        width: 100%;
        height: 100%;
        line-height: 70px;
        border-radius: 35px;
        overflow: hidden;
    }

    .button:hover a {
        color: var(--button-bg-color);
    }

    .button a:hover {
        text-decoration: none;
    }

    .team-description-long {
        display: none;
    }

    .team-skills {
        display: none;
    }

    .team-description h3 {
        font-size: 3rem;
    }

    @media only screen and (max-width: 1400px) {
        .section-one-img-container {
            display: flex;
        }

        .section-one-bg {
            position: absolute;
            width: 2500px;
            top: -130%;
            /* bottom: -80%; */
            /* left: -25vw; */
            right: -46%;
            z-index: -100;
        }
    }

    @media only screen and (max-width: 1330px) {
        .section-one-bg {
            right: -60%;
        }

        .section-one-img-left-container {

            width: 60%;

        }
    }

    @media only screen and (max-width: 1200px) {
        .team-member {
            padding: 40px 50px;
        }

        .team-description {
            margin-left: 50px;
        }

        .section-one-img-left-container {
            margin-top: 0%;
        }

        .section-one-img-right {
            position: static;
        }
    }

    @media only screen and (max-width: 1140px) {
        .section-one-bg {
            right: -80%;
        }
    }

    @media only screen and (max-width: 900px) {
        .team-description {
            margin-left: 0;
            margin-top: 50px;
            width: 100%;
        }

        .section-one {
            height: 100%;
        }

        .team-description h3,
        .team-description h4,
        .team-description h5 {
            text-align: center;
        }

        .team-description-bottom {
            justify-content: space-between;
        }

        .team-member {
            flex-direction: column;
        }

        .section-one-img-container {
            max-height: 750px;
            height: 750px;
            display: flex;
            flex-direction: column-reverse;
        }

        .section-one-img-left-container {
            width: 100%;
            text-align: center;
        }

        .section-one-img-right {
            max-height: unset;
            height: unset;
            position: static;
            width: 100%;
        }

        .section-one-bg {
            top: -56%;
            right: -50%;
            width: 1500px
        }
    }

    @media only screen and (max-width: 600px) {
        .section-one-bg {
            top: -59%;
        }

        .team-description-bottom {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .team-description-bottom .button {
            margin-bottom: 25px;
        }
    }

    @media only screen and (max-width: 425px) {
        .section-one {
            height: 120%;
        }

        .section-one-bg {
            top: -52%;
            width: 1000px;
        }
    }
</style>
@section('content')

<!--@include('parts.break_space')-->
<section class="section-one">
    <img class="section-one-bg" src="{{ asset('images/partner/designer-developer-header-bg.svg') }}" />
    <div class="section-one-img-container contain">
        <div class="section-one-img-left-container">
            <div>
                <h1 class="h1-font">Outsource Real Person</h1>
                <p class="p-font">If you want to outsource an eLearning designer, educative video
                    animator, front end or back end developer you are on the
                    right place.
                </p>
                <button class="button">Available People</button>
            </div>
        </div>
        <img class="section-one-img-right" src="{{ asset('images/partner/outsourcing-header-img.svg') }}" />
    </div>
</section>
<section>
    <div class="team-member contain">
        <!-- team skills Irfan K.-->
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Photoshop</p>
                    <span class="counter h2-font" data-note="70">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="70">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Wordpress</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">HTML/CSS</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Irfan K.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/irfo-k.png') }}" alt="Irfan K">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue1">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange1">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Irfan K.</h3>
                <h4 class="h4-font">eLearning Designer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?0')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <div class="team-skills">
            <!-- team skills Ibrahim Z.-->
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Photoshop</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">HTML/CSS</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Wordpress</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Ibrahim Z.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/ibro.png') }}" alt="Ibrahim Z">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue2">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange2">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Ibrahim Z.</h3>
                <h4 class="h4-font">eLearning /wordpress Developer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?1')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Haris M.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/hare.png') }}" alt="Haris M">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue3">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange3">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Haris M.</h3>
                <h4 class="h4-font">eLearning/JS Developer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?2')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Amer M.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/amer.png') }}" alt="Amer M">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue4">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange4">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Amer M.</h3>
                <h4 class="h4-font">eLearning/multimedia Designer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?3')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Irfan S.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/irfo-s.png') }}" alt="Irfan S">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue1">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange1">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Irfan S.</h3>
                <h4 class="h4-font">eLearning Designer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?4')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Aida R.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/aida.png') }}" alt="Aida R">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue2">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange2">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Aida R.</h3>
                <h4 class="h4-font">eLearning/instructional Designer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?5')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Emir M.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/emir.png') }}" alt="Emir M">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue3">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange3">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Emir M.</h3>
                <h4 class="h4-font">Front-End/moodle developer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?6')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Florin B.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/florin.png') }}" alt="Florin B">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue4">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange4">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Florin B.</h3>
                <h4 class="h4-font">Front-End Developer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?7')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Mirza O.-->
            <div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/mirza.png') }}" alt="Mirza O">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue2">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange2">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Mirza O.</h3>
                <h4 class="h4-font">Full Stack/DevOps</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?8')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="team-member contain">
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="50">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="68">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="80">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <svg class="line-overlay" height="80" width="230" data-note="90">
                    <g fill="none">
                        <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0" />
                    </g>
                </svg>
                <svg class="line-main" height="80" width="230">
                    <g fill="none">
                        <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0" />
                    </g>
                </svg>
            </div>
        </div> -->
    <!--<div class="team-description-long"> -->
    <!-- Opširan tekst za outsourcing_profile page Emina K.-->
    <!--<div class="p-font">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                    hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis
                </p>
            </div>
            <button class="button">Hire me</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/emina.png') }}" alt="Emina K">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue3">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange3">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Emina K.</h3>
                <h4 class="h4-font">PR/Administration Manager</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat, Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit...
                </p>
            </div>
            <div class="team-description-bottom">
                <button class="button"><a href="{{asset('/pages/outsourcing_profile?9')}}">Read More</a></button>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)" />
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)" />
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</section>
<script type="module" src=" {{ asset('/js/test.js') }}"></script>
@endsection