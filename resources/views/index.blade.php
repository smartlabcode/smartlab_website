<!-- Extend main layout -->
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/index.min.css') }}" rel="stylesheet">
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

    <div class="section-one-animation"></div>



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
            <img data-src="{{asset('/images/team/irfo-k.jpg')}}" alt="Irfan K photo">
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
            <img data-src="{{asset('/images/team/ibro.jpg')}}" alt="Ibrahim Z photo">
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
            <img data-src="{{asset('/images/team/hare.jpg')}}" alt="Haris M photo">
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
            <img data-src="{{asset('/images/team/rizah.jpg')}}" alt="Rizah K photo">
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
            <img data-src="{{asset('/images/team/amer.jpg')}}" alt="Amer M photo">
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
            <img data-src="{{asset('/images/team/irfo-s.jpg')}}" alt="Irfan S photo">
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
            <img data-src="{{asset('/images/team/aida.jpg')}}" alt="Aida R photo">
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
            <img data-src="{{asset('/images/team/emir.jpg')}}" alt="Emir M photo">
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
            <img data-src="{{asset('/images/team/florin.jpg')}}" alt="Florin B photo">
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
          <div class="team-img mirza">
            <img data-src="{{asset('/images/team/mirza.jpg')}}" alt="Mirza O photo">
          </div>
          <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue2">
          <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange2">
        </div>
        <div class="team-description">
          <h3>Mirza O.</h3>
          <p>Full Stack/DevOps</p>
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
            <img data-src="{{asset('/images/team/emina.jpg')}}" alt="Emina K photo">
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
            <img data-src="{{asset('/images/team/team-blank.svg')}}" alt="Blank photo, could be you">
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
        <div>
          <p class="p-font" id="partners-text">
            “SmartLab team created a fantastic web based quiz for Afrika Presents with
            a downloadable badge. Incredible attention to details. Better than
            anticipated and they had a true understanding and delivered just what we
            were looking for. We look forward to working together again in future.”
          </p>
          <div>
            <img id="partners-image" src="{{asset('/images/partners-images/Mara.png')}}" alt="partner image" />
            <p id="partners-name" class="h2-font">Mara Menzies</p>
            <p id="partners-company" class="p-font">Afrika Presents Ltd</p>
          </div>
          <div id="indicators"><span class="indicator indicator-opacity"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span></div>
        </div>
      </div>
      <div class="partners-images">
        <img src="{{asset('/images/partners-logo/TheTrainingTerminal-2.png')}}" alt="TrainingTerminal logo" />
        <img src="{{asset('/images/partners-logo/FKC-2.png')}}" alt="Ficher, Knoblauch & co logo" />
        <img src="{{asset('/images/partners-logo/leanscape-2.png')}}" alt="leanscape logo" />
        <img src="{{asset('/images/partners-logo/WELLS-PARK-2.png')}}" alt="wells park communications logo" />
        <img src="{{asset('/images/partners-logo/loop-TV-2.png')}}" alt="loop tv logo" />
        <img src="{{asset('/images/partners-logo/zomppp-2.png')}}" alt="zomppp logo" />
        <img src="{{asset('/images/partners-logo/UAP-QMS-2.png')}}" alt="uap managment system logo" />
        <img src="{{asset('/images/partners-logo/tottem-2.png')}}" alt="totem learning logo" />
        <img src="{{asset('/images/partners-logo/safetycourses4u-2.png')}}" alt="safety courses for you logo" />
        <img src="{{asset('images/partners-logo/dimenzija_plus-2.png')}}/" alt="dimenzija plus logo" />
        <img src="{{asset('/images/partners-logo/TVSA-2.png')}}" alt="televizija sarajevo logo" />
        <img src="{{asset('/images/partners-logo/eloomi-4.png')}}" alt="eloomi logo" />
        <img src="{{asset('/images/partners-logo/FIN-2.png')}}" alt="fakultet islamskih nauka logo" />
        <img src="{{asset('/images/partners-logo/maisonprive-2.png')}}" alt="maison prive logo" />
        <img src="{{asset('/images/partners-logo/biramoporavak-2.png')}}" alt="biramo oporavak logo" />
        <img src="{{asset('/images/partners-logo/BDfD-2.png')}}" alt="bosnian doctors for disabled logo" />
      </div>
    </div>
  </div>
</section>
<section class="blog-section contain">
  <img class="blog-orange-circle-big" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background" />
  <img class="blog-orange-circle-small" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background" />
  <h2 class="text-center h1-font">@lang('index.blog_h2')</h2>
  <div class="blog-container">
    @foreach ($blogs as $blog)

    <a href="{{env('BLOG_DOMAIN')}}/blog/{{$blog->id}}/{{App::getlocale()}}" target="_blank" class="blog">
      <div class="img-container">
        <div class="img-container-overlay @if ($blog->id % 2 != 0) img-container-overlay-blue @else img-container-overlay-orange @endif">
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
    //blogs
    const animation = document.querySelector(".section-one-animation");
    lottie.loadAnimation({
      container: animation, // the dom element that will contain the animation
      renderer: 'svg',
      loop: true,
      autoplay: false,
      path: "{{asset('/images/home-animation')}}" // the path to the animation json

    });
    const options = {
      root: null,
      threshold: 0,
      rootMargin: "0px"
    };
    const animationObserver = new IntersectionObserver(function(entries, animationObserver) {
      entries.forEach(entry => {
        if (entry.isIntersecting && window.innerWidth > 768) {
          lottie.play();
        } else lottie.pause();
      })
    });

    animationObserver.observe(animation);
    let blogValue = document.querySelectorAll(".blog-value");
    let blogText = document.querySelectorAll(".blog-text");
    let temp;


    for (let i = 0; i < blogValue.length; i++) {
      temp = blogValue[i].value.replace(/(<([^>]+)>)/ig, "");;
      blogText[i].innerHTML = temp;
    }
    let teamImages = document.querySelectorAll(".team-img img");
    const teamImagesObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.src = entry.target.dataset.src;
          teamImagesObserver.unobserve(entry.target);
        }
      });
    }, options);
    for (let i = 0; i < teamImages.length; i++) {
      teamImagesObserver.observe(teamImages[i]);
    }

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
    let j = 1;

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
    const sectionTwoItems = document.querySelectorAll(".section-two-item");
    const options2 = {
      root: null,
      threshold: 0.5,
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