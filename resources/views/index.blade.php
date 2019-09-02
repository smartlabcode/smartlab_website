<!-- Extend main layout -->
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/index.min.css') }}" rel="stylesheet">
<div class="loader-container">
  <div class="css-animation-container">
    <div class="css-animation"></div>
  </div>
</div>
<div class="background-section-one">
  <img class="background-img" src="{{asset('/images/img/header-illustration-group.svg')}}" alt="blue background image" />
  <img class="background-img-circle --circle1" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="bright circle background" />
  <img class="background-img-circle --circle2" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="bright circle background" />
  <img class="background-img-circle --circle3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="bright circle background" />

  <section class="section-one contain">

    <div class="section-one-text">
      <h2 class="h2-font">@lang('index.heading_h2')</h2>
      <h1 class="h1-font bold">@lang('index.heading_h1')</h1>
      <p class="p-font ">
        @lang('index.heading_p')
      </p>
      <a href="#contact"><button class="button margin-top-27">@lang('index.heading_button')</button></a>
    </div>

    <div class="section-one-animation">



    </div>



  </section>
</div>
<section class="section-two contain">
  <img class="section-two-top-orange-img" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" />
  <img class="section-two-background-top" src="{{asset('/images/img/header-fluid-blue.svg')}}" alt="header blue background" />
  <img class="section-two-backgound-top-orange" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" />
  <img class="section-two-background-bot" src="{{asset('/images/img/blue-circle.svg')}}" alt="blue background circle" />
  <img class="section-two-background-bot-orange" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" />
  <div class="section-two-hero">
    <div>
      <h2 class="h1-font">@lang('index.section_two_h2')</h2>
      <p class="p-font">
        @lang('index.section_two_p')
      </p>
      <!-- TODO where should explore button lead -->
      <a href="#anchor"><button id="pinned-element1" class="button submit button-orange">@lang('index.section_two_button')</button></a>
    </div>
  </div>

  <div id="anchor">
    <div class="section-two-top section-two-item">
      <div class="section-two-top-left">
        <img src="{{asset('/images/img/online-courses-img.svg')}}" alt="online courses" />
      </div>
      <div class="section-two-top-right">
        <h2 class="h2-font">@lang('index.section_two_top_right_h2')</h2>
        <p class="p-font">
          @lang('index.section_two_top_right_p')
        </p>
        <a href="{{asset('/pages/courses')}}"><button class="button">@lang('index.section_two_top_right_button')</button></a>
      </div>
    </div>
    <div class="section-two-bot">
      <div class="section-two-bot-item section-two-item">
        <img class="--width-margin-top" src="{{asset('/images/img/video-animation-img.svg')}}" alt="video and animation" />
        <div>
          <h2 class="h2-font">@lang('index.section_two_bot_left_h2')</h2>
          <p class="p-font">
            @lang('index.section_two_bot_left_p')
          </p>
          <a href="{{asset('/pages/animations')}}"><button class=" button">@lang('index.section_two_bot_left_button')</button></a>
        </div>


      </div>
      <div class="section-two-bot-item margin-both section-two-item">
        <img src="{{asset('/images/img/development-img.svg')}}" alt="development" />
        <div>
          <h2 class="h2-font">@lang('index.section_two_bot_mid_h2')</h2>
          <p class="p-font">
            @lang('index.section_two_bot_mid_p')
          </p>
          <a href="{{asset('/pages/programming')}}"><button class="button">@lang('index.section_two_bot_mid_button')</button></a>
        </div>

      </div>
      <div class="section-two-bot-item section-two-item">
        <img class="--width-margin-top" src="{{asset('/images/img/moodle-img.svg')}}" alt="moodle" />
        <div>
          <h2 class="h2-font">@lang('index.section_two_bot_right_h2')</h2>
          <p class="p-font">
            @lang('index.section_two_bot_right_p')
          </p>
          <a href="{{asset('/pages/moodle')}}"><button class="button">@lang('index.section_two_bot_right_button')</button></a>
        </div>

      </div>
    </div>
  </div>
</section>
<section id="about" class="section-three contain">
  <img class="about-orange-circle" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" />
  <div>
    <div class="about-us">
      <div>
        <h2 class="h1-font">@lang('index.about_us_h2')</h2>
        <h3 class="p-font">
          @lang('index.about_us_h3')
        </h3>
      </div>

      <div id="aboutUs" class="flex about-us">
        <div>
          <p>@lang('index.about_us_circle1')</p>
          <div class="note-display --border-right --border-bottom" data-note="98">
            <div class="circle">
              <svg width="150" height="150" class="circle__svg">
                <filter id="dropshadow" width="130%" height="130%">
                  <feOffset result="offOut" in="SourceGraphic" dx="0" dy="0"></feOffset>
                  <feColorMatrix result="matrixOut" in="offOut" type="matrix" values="0 0 0 0 0 0 0.21 0 0 0 0 0 0.57 0 0 0 0 0 0.5 0"></feColorMatrix>
                  <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="3"></feGaussianBlur>
                  <feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend>
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
          <p>@lang('index.about_us_circle2')</p>
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
          <p>@lang('index.about_us_circle3')</p>
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
          <p>@lang('index.about_us_circle4')</p>
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
          <p>@lang('index.about_us_circle5')</p>
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
          <p>@lang('index.about_us_circle6')</p>
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
          <p>@lang('index.about_us_circle7')</p>
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
            <p>@lang('index.about_us_circle8')</p>
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
  <img class="team-orange-circle" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" />
  <img class="team-blue-circle" src="{{asset('/images/img/blue-circle.svg')}}" alt="blue background circle" />
  <img class="team-orange-circle-bottom" src="{{asset('/images/img/orange-circle.svg')}}" alt="background orange circle" />
  <div>
    <h2 class="text-center h1-font">@lang('index.team_h2')</h2>
    <div class="flex --four">
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/irfo-k.jpg')}}" alt="Irfan K photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1">
        </div>
        <div class="team-description">
          <h3>Irfan K.</h3>
          <p>eLearning Designer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/ibro.jpg')}}" alt="Ibrahim Z photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue2">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange2">
        </div>
        <div class="team-description">
          <h3>Ibrahim Z.</h3>
          <p>eLearning /wordpress Developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/hare.jpg')}}" alt="Haris M photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue3">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange3">
        </div>
        <div class="team-description">
          <h3>Haris M.</h3>
          <p>eLearning/JS Developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/rizah.jpg')}}" alt="Rizah K photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue4">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange4">
        </div>
        <div class="team-description">
          <h3>Rizah K.</h3>
          <p>Founder & CEO</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/amer.jpg')}}" alt="Amer M photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1">
        </div>
        <div class="team-description">
          <h3>Amer M.</h3>
          <p>eLearning/multimedia Designer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/irfo-s.jpg')}}" alt="Irfan S photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue2">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange2">
        </div>
        <div class="team-description">
          <h3>Irfan S.</h3>
          <p>eLearning Designer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/aida.jpg')}}" alt="Aida R photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue3">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange3">
        </div>
        <div class="team-description">
          <h3>Aida R.</h3>
          <p>eLearning/instructional Designer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/emir.jpg')}}" alt="Emir M photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue4">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange4">
        </div>
        <div class="team-description">
          <h3>Emir M.</h3>
          <p>Front-End/moodle developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/florin.jpg')}}" alt="Florin B photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1">
        </div>
        <div class="team-description">
          <h3>Florin B.</h3>
          <p>Front-End Developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/mirza.jpg')}}" alt="Mirza O photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue2">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange2">
        </div>
        <div class="team-description">
          <h3>Mirza O.</h3>
          <p>
            Full Stack/DevOps</p>
        </div>
      </div>
      <div class="team-member">

        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/emina.jpg')}}" alt="Emina K photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue3">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange3">
        </div>
        <div class="team-description">
          <h3>Emina K.</h3>
          <p>PR/Administration Manager</p>
        </div>
      </div>

      <a class="team-member" href="{{asset('/pages/careers')}}">
        <div class="team-img-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img blank">
            <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/team-blank.svg')}}" alt="Blank photo, could be you">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue4">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange4">
        </div>
        <div class="team-description">
          <h3>You?</h3>
          <p>Feel Free to Join Us</p>
        </div>
      </a>

    </div>
  </div>
</section>
<section class="contain testemonials">
  <div>
    <h2 class="text-center h1-font">@lang('index.partners_h2')</h2>
    <div class="flex">

      <div class="partners-text">
        <img class="partners-text-background" src="{{asset('/images/bg-testimonial.svg')}}" alt="partners background" />
        <div>
          <p class="p-font" id="partners-text">
            “SmartLab team created a fantastic web-based quiz for Afrika Presents with a downloadable badge. Incredible attention to details. Better than anticipated and they had a true understanding and delivered just what we were looking for. We look forward to working together again in the future.”
          </p>
          <div>
            <img id="partners-image" src="{{asset('/images/partners-images/Mara.png')}}" alt="partner image" />
            <p id="partners-name" class="h2-font">Mara Menzies</p>
            <p id="partners-company" class="p-font">Afrika Presents Ltd</p>
          </div>
          <div id="indicators"><span class="indicator indicator-opacity"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span></div>
        </div>
      </div>
      <div class="partners-images">
        <a href="https://www.thetrainingterminal.co/" target="_blank"><img data-src="{{asset('/images/partners-logo/TheTrainingTerminal-2.png')}}" alt="TrainingTerminal logo" /></a>
        <a href="https://www.fkc-online.com/index.php/de" target="_blank"><img data-src="{{asset('/images/partners-logo/FKC-2.png')}}" alt="Ficher, Knoblauch & co logo" /></a>
        <a href="https://www.leanscape.io/" target="_blank"><img data-src="{{asset('/images/partners-logo/leanscape-2.png')}}" alt="leanscape logo" /></a>
        <a href="https://wellspark.co.uk/" target="_blank"><img data-src="{{asset('/images/partners-logo/WELLS-PARK-2.png')}}" alt="wells park communications logo" /></a>
        <a href="http://de.loop-tv.eu/" target="_blank"><img data-src="{{asset('/images/partners-logo/loop-TV-2.png')}}" alt="loop tv logo" /></a>
        <a href="https://zomppp.de/" target="_blank"><img data-src="{{asset('/images/partners-logo/zomppp-2.png')}}" alt="zomppp logo" /></a>
        <a><img data-src="{{asset('/images/partners-logo/UAP-QMS-2.png')}}" alt="uap managment system logo" /></a>
        <a href="https://www.totemlearning.com/" target="_blank"><img data-src="{{asset('/images/partners-logo/tottem-2.png')}}" alt="totem learning logo" /></a>
        <a href="https://www.safetycourses4u.com/" target="_blank"><img data-src="{{asset('/images/partners-logo/safetycourses4u-2.png')}}" alt="safety courses for you logo" /></a>
        <a href="http://dimenzijaplus.ba/" target="_blank"><img data-src="{{asset('images/partners-logo/dimenzija_plus-2.png')}}/" alt="dimenzija plus logo" /></a>
        <a href="http://tvsa.ba/" target="_blank"><img data-src="{{asset('/images/partners-logo/TVSA-2.png')}}" alt="televizija sarajevo logo" /></a>
        <a href="https://eloomi.com/" target="_blank"><img data-src="{{asset('/images/partners-logo/eloomi-4.png')}}" alt="eloomi logo" /></a>
        <a href="https://fin.unsa.ba/" target="_blank"><img data-src="{{asset('/images/partners-logo/FIN-2.png')}}" alt="fakultet islamskih nauka logo" /></a>
        <a><img data-src="{{asset('/images/partners-logo/maisonprive-2.png')}}" alt="maison prive logo" /></a>
        <a href="http://www.biramoporavak.com/" target="_blank"><img data-src="{{asset('/images/partners-logo/biramoporavak-2.png')}}" alt="biramo oporavak logo" /></a>
        <a><img data-src="{{asset('/images/partners-logo/BDfD-2.png')}}" alt="bosnian doctors for disabled logo" /></a>
      </div>
    </div>
  </div>
</section>
<section class="blog-section contain">
  <img class="blog-orange-circle-big" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background" />
  <img class="blog-orange-circle-small" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background" />
  <h2 class="text-center h1-font">@lang('index.blog_h2')</h2>
  <div class="blog-container">
    <!--<a href="{{env('BLOG_DOMAIN')}}/{{App::getlocale()}}" target="_blank" class="blog">
      <div class="img-container">
        <div class="img-container-overlay img-container-overlay-blue ">
        </div>
        <img src='{{asset("/images/blog/blog1.jpg")}}' alt="blog" />
        <svg class="wave" viewBox="0 0 500 500">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h2 class="h2-font">‘Out of the box’ learning</h2>
        <p><span>February 14, 2018</span><span>-</span> <span>Rizah K.</span></p>
        <input class="blog-value" type="hidden" value='Whenever one thinks of certain processes that develop around us, it is easy to conclude that those processes have a massive impact in our everyday life. The change is seen best when comparing between the childhood of those who were born in the middle or at the end of the 80s and the childhood of nowadays children. Often times we hear how those changes are negative and very harmful for individuals and the society in general. Nevertheless, I would like to focus on certain features and altogether to distinguish what has changed and what hasn’t. This way we will find out how does our everyday life really look like.'>
        <p class="blog-text" class="p-font">Whenever one thinks of certain processes that develop around us, it is easy to conclude that those processes have a massive impact in our everyday life. The change is seen best when comparing between the childhood of those who were born in the middle or at the end of the 80s and the childhood of nowadays children. Often times we hear how those changes are negative and very harmful for individuals and the society in general. Nevertheless, I would like to focus on certain features and altogether to distinguish what has changed and what hasn’t. This way we will find out how does our everyday life really look like.</p>
      </div>
    </a>
    <a href="{{env('BLOG_DOMAIN')}}/{{App::getlocale()}}" target="_blank" class="blog">
      <div class="img-container">
        <div class="img-container-overlay img-container-overlay-orange ">
        </div>
        <img src='{{asset("/images/blog/nova.jpg")}}' alt="blog" />
        <svg class="wave" viewBox="0 0 500 500">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h2 class="h2-font">Road to ACE</h2>
        <p><span>February 14, 2018</span><span>-</span> <span>Irfan S.</span></p>
        <input class="blog-value" type="hidden" value='From the very beginning one asks himself: What is Adobe and how did it come up with a certificate? – The Adobe Company was created in 1982 and has massively changed the digital world. Today, it possesses numerous applications in its collection, where the most known are: Adobe Photoshop which treats the photography, Adobe Illustrator which is closely connected with the printing preparations and vector graphics, InDesign, Premiere Pro, After Effects etc.'>
        <p class="blog-text" class="p-font">From the very beginning one asks himself: What is Adobe and how did it come up with a certificate? – The Adobe Company was created in 1982 and has massively changed the digital world. Today, it possesses numerous applications in its collection, where the most known are: Adobe Photoshop which treats the photography, Adobe Illustrator which is closely connected with the printing preparations and vector graphics, InDesign, Premiere Pro, After Effects etc.</p>
      </div>
    </a>
    <a href="{{env('BLOG_DOMAIN')}}/{{App::getlocale()}}" target="_blank" class="blog">
      <div class="img-container">
        <div class="img-container-overlay img-container-overlay-blue ">
        </div>
        <img src='{{asset("/images/blog/blog2.png")}}' alt="blog" />
        <svg class="wave" viewBox="0 0 500 500">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h2 class="h2-font">E-learning In Everyday Life</h2>
        <p><span>March 6, 2018</span><span>-</span> <span>Medina K.</span></p>
        <input class="blog-value" type="hidden" value='E-learning is becoming the most used mean of education. It has already been applied in many schools, mainly in higher institutions. Thus, according to many researchers, it is not merely easy, but it has become advantageous in regarding to traditional reading. This conclusion comes from comparing its advantages and disadvantages, which results with greater benefits than drawbacks. In this article I will elaborate the effect of e-learning in our daily routines.'>
        <p class="blog-text" class="p-font">E-learning is becoming the most used mean of education. It has already been applied in many schools, mainly in higher institutions. Thus, according to many researchers, it is not merely easy, but it has become advantageous in regarding to traditional reading. This conclusion comes from comparing its advantages and disadvantages, which results with greater benefits than drawbacks. In this article I will elaborate the effect of e-learning in our daily routines.</p>
      </div>
    </a>
    <a href="{{env('BLOG_DOMAIN')}}/{{App::getlocale()}}" target="_blank" class="blog">
      <div class="img-container">
        <div class="img-container-overlay img-container-overlay-orange ">
        </div>
        <img src='{{asset("/images/blog/blog3.jpg")}}' alt="blog" />
        <svg class="wave" viewBox="0 0 500 500">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h2 class="h2-font">Augmented reality</h2>
        <p><span>September 28, 2018</span> <span>-</span> <span>Haris M.</span></p>
        <input class="blog-value" type="hidden" value='Remember Pokémon GO? That game that made people walk using their mobile phones? Ever taught what is the technology behind that concept? Technology used in making entire world go chasing Pokémon around forests and through the city is called Augmented Reality. Concept of Augmented Reality is fairly simple. Electrical devices with microprocessors, camera and display use real-world environment to superimpose 2D and 3D models into it through display. That is how Pokémon  Go game worked. Using level field as starting point, Augmented Reality technology imposed Pokémon characters and Poke balls and other elements of the game via camera and display. Augmented Reality (in further text AR) has been explored for many applications. Since 1970s and 1980s, there has been development of technologies meant for everyday use, i.e. „horizontal“ across all applications rather than a specific „vertical“ market.'>
        <p class="blog-text" class="p-font">Remember Pokémon GO? That game that made people walk using their mobile phones? Ever taught what is the technology behind that concept? Technology used in making entire world go chasing Pokémon around forests and through the city is called Augmented Reality. Concept of Augmented Reality is fairly simple. Electrical devices with microprocessors, camera and display use real-world environment to superimpose 2D and 3D models into it through display. That is how Pokémon Go game worked. Using level field as starting point, Augmented Reality technology imposed Pokémon characters and Poke balls and other elements of the game via camera and display. Augmented Reality (in further text AR) has been explored for many applications. Since 1970s and 1980s, there has been development of technologies meant for everyday use, i.e. „horizontal“ across all applications rather than a specific „vertical“ market.</p>
      </div>
    </a> -->

    @foreach ($blogs as $blog)

    <a href="{{env('BLOG_DOMAIN')}}/blog/{{$blog->id}}/{{App::getlocale()}}" target="_blank" class="blog">
      <div class="img-container">
        <div class="img-container-overlay">
        </div>
        <img src='{{asset("$blog->image_path")}}' alt="blog" />
        <svg class="wave" viewBox="0 0 500 500">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h2 class="h2-font">{{$blog->heading}}</h2>
        <p><span>{{$blog->created_at}}</span> <span>{{$blog->name}}</span></p>
        <input class="blog-value" type="hidden" value='{{$blog->text}}'>
        <p class="blog-text" class="p-font"></p>
      </div>
    </a>

    @endforeach

    <div class="blog-button">
      <a href="{{env('BLOG_DOMAIN')}}/{{App::getlocale()}}" target="_blank"><button class="button">@lang('index.blog_button')</button></a>
    </div>

  </div>

</section>


<!-- TODO this isnt good, there is too much space among form elements -->
<section class="contact-section" name="contact">

  <img class="contact-orange-circle-r" src="{{asset('/images/img/orange-circle.svg')}}" alt="background orange circle" />
  <img class="contact-orange-circle-l" src="{{asset('/images/img/orange-circle.svg')}}" alt="background orange circle" />
  <div class="contact-form-container ">
    <div id="contact"></div>
    <p>@lang('index.contact_p')</p>
    <h2 class="text-center h1-font">@lang('index.contact_h2')</h2>
    @include('parts.error_success')

    <!-- TODO after empty form is submitted empty fields should be marked somehow (maybe red border) -->
    <form class="contact-form" action="/contact" method="POST">
      <!-- Include token -->
      @csrf
      <div class="contact-form-group">
        <div>
          <label for="name">*@lang('index.formName')</label>
          <input type="text" name="name" id="name" required />
        </div>
        <div>
          <label for="surnanme">*@lang('index.formSurname')</label>
          <input type="text" name="lastname" id="lastname" required />
        </div>
      </div>
      <div class="contact-form-group">
        <div>
          <label for="subject">*@lang('index.formSubject')</label>
          <input type="text" name="subject" id="subject" required />
        </div>
        <div>
          <label for="email">*@lang('index.formEmail')</label>
          <input type="email" name="email" id="email" required />
        </div>
      </div>
      <div class="contact-form-group textarea">
        <label for="message">*@lang('index.formMessage')</label>
        <textarea name="message" rows="7" id="message" required></textarea>
      </div>
      <button class="button submit button-orange" value="Send">Send</button>
    </form>
  </div>
</section>


<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    if (window.innerWidth <= 425) {
      console.log(window.innerWidth);
      document.querySelector(".section-two").setAttribute("id", "about");
    }
    var browser = (function() {
      var test = function(regexp) {
        return regexp.test(window.navigator.userAgent);
      }
      switch (true) {
        case test(/edge/i):
          return "edge";
        case test(/opr/i) && (!!window.opr || !!window.opera):
          return "opera";
        case test(/chrome/i) && !!window.chrome:
          return "chrome";
        case test(/trident/i):
          return "ie";
        case test(/firefox/i):
          return "firefox";
        case test(/safari/i):
          return "safari";
        default:
          return "other";
      }
    })();
    if (browser == "edge") {
      let teamImg = document.querySelectorAll(".team-img img");
      document.querySelector(".join").style = "transform: translateX(0)";
      for (let i = 0; i < teamImg.length - 1; i++) {
        console.log(teamImg[i])
        teamImg[i].style = "border-radius:170% 90% 150% 130%; height:300px; object-fit: cover; object-position: unset;"
      }
    }
    //blogs
    const animation = document.querySelector(".section-one-animation");

    let animationData = lottie.loadAnimation({
      container: animation, // the dom element that will contain the animation
      renderer: 'svg',
      loop: true,
      autoplay: false,
      path: "{{asset('/images/home-animation')}}" // the path to the animation json

    });
    lottie.setQuality("medium");
    let ready = false;
    let loaderContainer = document.querySelector(".loader-container");
    animationData.addEventListener("DOMLoaded", function() {
      ready = true;
      lottie.play();
      loaderContainer.classList.add("loaderEnd");
      setTimeout(function() {
        loaderContainer.style.display = "none";
      }, 1000)

    })
    lottie.setQuality("medium");
    const options = {
      root: null,
      threshold: 0,
      rootMargin: "0px"
    };
    const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          lottie.play();
        } else lottie.pause();
      })
    });

    animationObserver.observe(animation);
    let blogValue = document.querySelectorAll(".blog-value");
    let blogText = document.querySelectorAll(".blog-text");
    let temp;
    for (let i = 0; i < blogValue.length; i++) {
      temp = blogValue[i].value.replace(/(<([^>]+)>)/ig, "");
      blogText[i].innerHTML = temp;
    }
    const optionsTeam = {
      root: null,
      threshold: 0.1,
      rootMargin: "300px"
    };

    let teamImages = document.querySelectorAll(".team-img img");
    const teamImagesObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.src = entry.target.dataset.src;
          teamImagesObserver.unobserve(entry.target);
        }
      });
    }, optionsTeam);
    for (let i = 0; i < teamImages.length; i++) {
      teamImagesObserver.observe(teamImages[i]);
    }
    let partnerLogos = document.querySelectorAll(".partners-images img");
    const partnerLogosObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.src = entry.target.dataset.src;
          partnerLogosObserver.unobserve(entry.target);
        }
      });
    }, optionsTeam);
    for (let i = 0; i < partnerLogos.length; i++) {
      partnerLogosObserver.observe(partnerLogos[i]);
    }
    console.log(partnerLogos);
    //blogs end
    // about us circle animation start 
    const aboutUs = document.querySelector("#aboutUs");
    let i = 0;
    const displays = document.querySelectorAll(".note-display");
    const transitionDuration = 900;

    const observer = new IntersectionObserver(function(entries, observer) {
      entries.forEach(entry => {

        if (entry.isIntersecting) {
          for (i = i; i <= 1; i++) {
            displays.forEach(display => {
              let int = Number(display.dataset.note);
              strokeTransition(display, int)
              increaseNumber(display, int)
              observer.unobserve(display);
            });
          }
        }


      });
    }, options);

    observer.observe(aboutUs);

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
    let partnersTextContainer = document.querySelector(".partners-text");




    let partners = [{
      text: "“SmartLab team created a fantastic web-based quiz for Afrika Presents with a downloadable badge. Incredible attention to details. Better than anticipated and they had a true understanding and delivered just what we were looking for. We look forward to working together again in the future.”",
      image: "{{asset('/images/partners-images/Mara.png')}}",
      name: "Mara Menzies",
      company: "Afrika Presents Ltd"
    }, {
      text: "“I worked with SmartLab on a new website conceptualisation and development, finding their team to be efficient, effective and responsive as we worked through the iterations. Rizah in particular generated some strong ideas and ensured that tight timelines were adhered to.”",
      image: "{{asset('/images/partners-images/paul.png')}}",
      name: "Paul Mallee",
      company: "MaisonPrive Holiday Homes LLC"
    }, {
      text: "“The Training Terminal was in need of an experienced elearning developer. We tried several compaines, however, SmartLab team with their skills, dedication and ability stood out from the rest. Highly recommended.”",
      image: "{{asset('/images/partners-images/mark.png')}}",
      name: "Mark Illingworth ",
      company: "The Training Terminal"
    }, {
      text: "“It’s a great pleasure to be working with Smartlab – they are exactly how international collaboration should work to the benefit of agencies and customers; and they form an essential part of our future client offer”.",
      image: "{{asset('/images/partners-images/Nick.png')}}",
      name: "Nick Saalfeld",
      company: "Wells Park Communications"
    }];
    let j = 0;

    function testemonialsChange() {

      if (j == indicators.length) {
        indicators[j - 1].classList.remove("indicator-opacity");
        j = 0;
      }
      indicators[j].classList.add("indicator-opacity");
      if (j > 0) {
        indicators[j - 1].classList.remove("indicator-opacity");
      }
      partnersChange(partners[j]);
      j++;
    }
    let interval;
    const observer2 = new IntersectionObserver(function(entries, observer2) {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            interval = setInterval(testemonialsChange, 5000);
          } else {
            window.clearInterval(interval, 5000);
          }
        });
      },
      options);
    observer2.observe(partnersTextContainer);

    function partnersChange(partners) {
      partnersText.innerText = partners.text;
      partnersImage.src = partners.image;
      partnersName.innerText = partners.name;
      partnersCompany.innerText = partners.company;
    }
    for (let i = 0; i < indicators.length; i++) {
      indicators[i].addEventListener("click", function() {
        for (let m = 0; m < indicators.length; m++) {
          indicators[m].classList.remove("indicator-opacity");
        }
        j = i;
        indicators[i].classList.add("indicator-opacity");
        partnersChange(partners[j]);
      })
    }
    let testemonials = document.querySelector(".testemonials");

    let xDown = null;
    let yDown = null;

    function getTouches(evt) {
      return evt.touches || // browser API
        evt.originalEvent.touches; // jQuery
    }
    testemonials.addEventListener('touchstart', handleTouchStart, false);
    testemonials.addEventListener('touchmove', handleTouchMove, false);
    testemonials.addEventListener('touchend', handleTouchEnd, false);

    function handleTouchEnd(evt) {
      console.log(evt);
      interval = setInterval(testemonialsChange, 5000);
    }

    function handleTouchStart(evt) {
      const firstTouch = getTouches(evt)[0];
      xDown = firstTouch.clientX;
      yDown = firstTouch.clientY;
    };

    function handleTouchMove(evt) {

      if (!xDown || !yDown) {
        return;
      }

      var xUp = evt.touches[0].clientX;
      var yUp = evt.touches[0].clientY;

      var xDiff = xDown - xUp;
      var yDiff = yDown - yUp;

      if (Math.abs(xDiff) > Math.abs(yDiff)) {
        window.clearInterval(interval, 5000);
        /*most significant*/
        if (xDiff > 0) {
          /* left swipe */

          j++;
          if (j < indicators.length) {
            console.log(j, indicators.length);
            for (let m = 0; m < indicators.length; m++) {
              indicators[m].classList.remove("indicator-opacity");
            }
            indicators[j].classList.add("indicator-opacity");
            partnersChange(partners[j]);
          } else {
            j = 0;
            console.log(j, indicators.length);
            for (let m = 0; m < indicators.length; m++) {
              indicators[m].classList.remove("indicator-opacity");
            }
            indicators[j].classList.add("indicator-opacity");
            partnersChange(partners[j]);
          }

        } else {
          /* right swipe */
          window.clearInterval(interval, 5000);
          if (j >= 1) {
            j--;
            console.log(j, indicators.length);
            for (let m = 0; m < indicators.length; m++) {
              indicators[m].classList.remove("indicator-opacity");
            }
            indicators[j].classList.add("indicator-opacity");
            partnersChange(partners[j]);
          } else {
            j = indicators.length - 1;
            for (let m = 0; m < indicators.length; m++) {
              indicators[m].classList.remove("indicator-opacity");
            }
            indicators[j].classList.add("indicator-opacity");
            partnersChange(partners[j]);
          }

        }
      } else {
        if (yDiff > 0) {
          /* up swipe */
        } else {
          /* down swipe */
        }
      }
      /* reset values */
      xDown = null;
      yDown = null;
    };
    const sectionTwoItems = document.querySelectorAll(".section-two-item");
    const options2 = {
      root: null,
      threshold: 0.1,
      rootMargin: "0px"
    };
    const sectionTwoItemsObserver = new IntersectionObserver(function(entries, sectionTwoItemsObserver) {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            sectionTwoItemsObserver.unobserve(entry.target);
          }
        });
      },
      options2);
    sectionTwoItems.forEach(item => {
      sectionTwoItemsObserver.observe(item);
    });
  });
</script>
@endsection