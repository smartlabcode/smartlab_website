@extends('layouts.app')
@section('title', '- Custom eLearning solutions')
@section('css')
<link href="{{ asset('css/index.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="loader-container">
  <div class="css-animation-container">
    <div class="css-animation"></div>
  </div>
</div>
<div class="background-section-one"> <img class="background-img" src="{{asset('/images/img/header-illustration-group.svg')}}" alt="blue background image" /> <img class="background-img-circle --circle1" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="bright circle background" /> <img class="background-img-circle --circle2" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="bright circle background" /> <img class="background-img-circle --circle3" src="{{asset('/images/img/fluid-bright-circle.svg')}}" alt="bright circle background" />
  <section class="section-one contain">
    <div class="section-one-text">
      <h2 class="h2-font">@lang('index.heading_h2')</h2>
      <h1 class="h1-font bold">@lang('index.heading_h1')</h1>
      <p class="p-font "> @lang('index.heading_p')</p> <a href="#contact"><button class="button margin-top-27">@lang('index.heading_button')</button></a>
    </div>
    <div class="section-one-animation"></div>
  </section>
</div>
<section class="section-two contain"> <img class="section-two-top-orange-img" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" /> <img class="section-two-background-top" src="{{asset('/images/img/header-fluid-blue.svg')}}" alt="header blue background" /> <img class="section-two-backgound-top-orange" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" /> <img class="section-two-background-bot" src="{{asset('/images/img/blue-circle.svg')}}" alt="blue background circle" /> <img class="section-two-background-bot-orange" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" />
  <div class="section-two-hero">
    <div>
      <h2 class="h1-font">@lang('index.section_two_h2')</h2>
      <p class="p-font"> @lang('index.section_two_p')</p> <a href="#anchor"><button id="pinned-element1" class="button submit button-orange">@lang('index.section_two_button')</button></a>
    </div>
  </div>
  <div id="anchor">
    <div class="section-two-top section-two-item">
      <div class="section-two-top-left"> <img src="{{asset('/images/img/online-courses-img.svg')}}" alt="online courses" /></div>
      <div class="section-two-top-right">
        <h3 class="h2-font">@lang('index.section_two_top_right_h2')</h3>
        <p class="p-font"> @lang('index.section_two_top_right_p')</p> <a href="{{asset('/pages/courses')}}"><button class="button">@lang('index.section_two_top_right_button')</button></a>
      </div>
    </div>
    <div class="section-two-bot">
      <div class="section-two-bot-item section-two-item"> <img class="--width-margin-top" src="{{asset('/images/img/video-animation-img.svg')}}" alt="video and animation" />
        <div>
          <h3 class="h2-font">@lang('index.section_two_bot_left_h2')</h3>
          <p class="p-font"> @lang('index.section_two_bot_left_p')</p> <a href="{{asset('/pages/animations')}}"><button class=" button">@lang('index.section_two_bot_left_button')</button></a>
        </div>
      </div>
      <div class="section-two-bot-item margin-both section-two-item"> <img src="{{asset('/images/img/development-img.svg')}}" alt="development" />
        <div>
          <h3 class="h2-font">@lang('index.section_two_bot_mid_h2')</h3>
          <p class="p-font"> @lang('index.section_two_bot_mid_p')</p> <a href="{{asset('/pages/programming')}}"><button class="button">@lang('index.section_two_bot_mid_button')</button></a>
        </div>
      </div>
      <div class="section-two-bot-item section-two-item"> <img class="--width-margin-top" src="{{asset('/images/img/moodle-img.svg')}}" alt="moodle" />
        <div>
          <h3 class="h2-font">@lang('index.section_two_bot_right_h2')</h3>
          <p class="p-font"> @lang('index.section_two_bot_right_p')</p> <a href="{{asset('/pages/moodle')}}"><button class="button">@lang('index.section_two_bot_right_button')</button></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about" class="section-three contain"> <img class="about-orange-circle" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" />
  <div>
    <div class="about-us">
      <div class="mission-vision">
        <div class="mission">
        <h2 class="h1-font">@lang('index.about_us_mission_h2')</h2>
        <h3 class="p-font"> @lang('index.about_us_mission_h3')</h3>
      </div>
        <div class="vision">
        <h2 class="h1-font">@lang('index.about_us_vision_h2')</h2>
        <h3 class="p-font"> @lang('index.about_us_vision_h3')</h3>
      </div>
      </div>
      <div id="aboutUs" class="flex about-us">
        <div>
          <h4>@lang('index.about_us_circle1')</h4>
          <div class="note-display --border-right --border-bottom" data-note="98">
            <div class="circle"> <svg width="150" height="150" class="circle__svg">
                <filter id="dropshadow" width="130%" height="130%">
                  <feOffset result="offOut" in="SourceGraphic" dx="0" dy="0"></feOffset>
                  <feColorMatrix result="matrixOut" in="offOut" type="matrix" values="0 0 0 0 0 0 0.21 0 0 0 0 0 0.57 0 0 0 0 0 0.5 0"></feColorMatrix>
                  <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="3"></feGaussianBlur>
                  <feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend>
                </filter>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>
              <div class="percent"> <span class="percent__int">0</span> <span class="percent__sign">%</span></div>
            </div>
          </div>
        </div>
        <div>
          <h4>@lang('index.about_us_circle2')</h4>
          <div class="note-display --border-right --border-bottom" data-note="80">
            <div class="circle"> <svg width="150" height="150" class="circle__svg">
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>
              <div class="percent"> <span class="percent__int">0</span> <span class="percent__sign">%</span></div>
            </div>
          </div>
        </div>
        <div>
          <h4>@lang('index.about_us_circle3')</h4>
          <div class="note-display --border-right --border-bottom" data-note="80">
            <div class="circle"> <svg width="150" height="150" class="circle__svg">
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>
              <div class="percent"> <span class="percent__int">0</span> <span class="percent__sign">%</span></div>
            </div>
          </div>
        </div>
        <div>
          <h4>@lang('index.about_us_circle4')</h4>
          <div class="note-display --border-bottom" data-note="85">
            <div class="circle"> <svg width="150" height="150" class="circle__svg">
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>
              <div class="percent"> <span class="percent__int">0</span> <span class="percent__sign">%</span></div>
            </div>
          </div>
        </div>
        <div class="--border-right ">
          <h4>@lang('index.about_us_circle5')</h4>
          <div class="note-display" data-note="90">
            <div class="circle"> <svg width="150" height="150" class="circle__svg">
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>
              <div class="percent"> <span class="percent__int">0</span> <span class="percent__sign">%</span></div>
            </div>
          </div>
        </div>
        <div class="--border-right">
          <h4>@lang('index.about_us_circle6')</h4>
          <div class="note-display" data-note="70">
            <div class="circle"> <svg width="150" height="150" class="circle__svg">
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>
              <div class="percent"> <span class="percent__int">0</span> <span class="percent__sign">%</span></div>
            </div>
          </div>
        </div>
        <div class="--border-right">
          <h4>@lang('index.about_us_circle7')</h4>
          <div class="note-display" data-note="65">
            <div class="circle"> <svg width="150" height="150" class="circle__svg">
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>
              <div class="percent"> <span class="percent__int">0</span> <span class="percent__sign">%</span></div>
            </div>
          </div>
        </div>
        <div>
          <div class="note-display" data-note="100">
            <h4>@lang('index.about_us_circle8')</h4>
            <div class="circle"> <svg width="150" height="150" class="circle__svg">
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--path"></circle>
                <circle cx="75" cy="75" r="50" class="circle__progress circle__progress--fill" style="filter:url(#dropshadow)"></circle>
              </svg>
              <div class="percent"> <span class="percent__int">0</span> <span class="percent__sign">%</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="team" class="team contain"> <img class="team-orange-circle" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" /> <img class="team-blue-circle" src="{{asset('/images/img/blue-circle.svg')}}" alt="blue background circle" /> <img class="team-orange-circle-bottom" src="{{asset('/images/img/orange-circle.svg')}}" alt="background orange circle" />
  <div>
    <h2 class="text-center h1-font">@lang('index.team_h2')</h2>
    <h3 class="p-font" style='text-align: center;'> @lang('index.team_h3')</h3>
    <div class="flex --four">
      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/irfanK.jpg')}}" alt="Irfan K photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Irfan K.</h3>
          <p>Project Manager</p>
        </div>
      </div>
      {{-- <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/ibro.jpg')}}" alt="Ibrahim Z photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue2" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange2" alt="team background">
        </div>
        <div class="team-description">
          <h3>Ibrahim Z.</h3>
          <p>eLearning /wordpress Developer</p>
        </div>
      </div> --}}
      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/irfanS.jpg')}}" alt="Irfan S photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue2" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange2" alt="team background">
        </div>
        <div class="team-description">
          <h3>Irfan S.</h3>
          <p>Art Director</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/rizahK.jpg')}}" alt="Rizah K photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue4" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange4" alt="team background">
        </div>
        <div class="team-description">
          <h3>Rizah K.</h3>
          <p>Founder & CEO</p>
        </div>
      </div>

      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/dinoC.jpg')}}" alt="Dino C photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Dino Č.</h3>
          <p>Front-End Developer</p>
        </div>
      </div>

      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/amraC.jpg')}}" alt="Amra C photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Amra Č.</h3>
          <p>Office Manager</p>
        </div>
      </div>

      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/kenanB.jpg')}}" alt="Kenan B photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Kenan B.</h3>
          <p>Full Stack Developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/alminK.jpg')}}" alt="Almin K photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue3" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange3" alt="team background">
        </div>
        <div class="team-description">
          <h3>Almin K.</h3>
          <p>eLearning Designer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/esadO.jpg')}}" alt="Esad O photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue3" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange3" alt="team background">
        </div>
        <div class="team-description">
          <h3>Esad O.</h3>
          <p>Quality Assurance</p>
        </div>
      </div>

      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/harun.jpg')}}" alt="Harun L photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Harun L.</h3>
          <p>Multimedia Designer</p>
        </div>
      </div>


      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/kenanS.jpg')}}" alt="Dino C photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Kenan S.</h3>
          <p>Multimedia Designer</p>
        </div>
      </div>

      {{-- <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/armin.jpg')}}" alt="Armin photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Armin H.</h3>
          <p>eLearning Developer</p>
        </div> --}}
      {{-- </div> --}}

      <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/ernad.jpg')}}" alt="Ernad photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Ernad B.</h3>
          <p>eLearning Developer</p>
        </div>
      </div>

          {{-- <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/adiK.jpg')}}" alt="Adi photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Adi K.</h3>
          <p>UX/UI Designer</p>
        </div>
      </div> --}}

            <div class="team-member">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/mustafa.jpg')}}" alt="Mustafa photo"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue1" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange1" alt="team background">
        </div>
        <div class="team-description">
          <h3>Mustafa M.</h3>
          <p>Business Development Assistant</p>
        </div>
      </div>

        
      <a class="team-member" href="{{asset('/pages/careers')}}">
        <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
              <clipPath id="clipPath">
                <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
              </clipPath>
            </defs>
          </svg>
          <div class="team-img blank"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src="{{asset('/images/team/team-blank.svg')}}" alt="Blank photo, could be you"></div> <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue4" alt="team background"> <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange4" alt="team background">
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
      <div class="partners-text"> <img class="partners-text-background" src="{{asset('/images/bg-testimonial.svg')}}" alt="partners background" />
        <div style="padding-top: 0px">

          @if(app()->getLocale() == 'en')
            <p class="p-font" id="partners-text" style="height: 150px;"> “SmartLab team created a fantastic web-based quiz for Afrika Presents with a downloadable badge. Incredible attention to details. Better than anticipated and they had a true understanding and delivered just what we were looking for. We look forward to working together again in the future.”</p>
          @elseif(app()->getLocale() == 'de')
            <p class="p-font" id="partners-text" style="height: 150px;"> “Das SmartLab-Team hat ein fantastisches webbasiertes Quiz für Afrika Presents mit einem herunterladbaren Badge erstellt. Unglaubliche Aufmerksamkeit für Details. Besser als erwartet und sie hatten ein echtes Verständnis und lieferten genau das, wonach wir gesucht haben. Wir freuen uns darauf, in Zukunft wieder zusammenzuarbeiten.”</p>
          @elseif(app()->getLocale() == 'bs')
            <p class="p-font" id="partners-text" style="height: 150px;"> “SmartLab tim kreirao je fantastičan internetski kviz za Afrika Presents sa značkom koja se može preuzeti. Nevjerovatna pažnja prema detaljima. Bolje nego što se očekivalo, imali su istinsko razumijevanje i isporučili upravo ono što smo tražili. Radujemo se ponovnoj suradnji u budućnosti.”</p>
          @else
            <p class="p-font" id="partners-text" style="height: 150px;"> “SmartLab team created a fantastic web-based quiz for Afrika Presents with a downloadable badge. Incredible attention to details. Better than anticipated and they had a true understanding and delivered just what we were looking for. We look forward to working together again in the future.”</p>
          @endif

          <div> 
            <img id="partners-image" src="{{asset('/images/partners-images/Mara.png')}}" alt="partner image" />
            <p id="partners-name" class="h2-font">Mara Menzies</p>
            <p id="partners-company" class="p-font">Afrika Presents Ltd</p>
          </div>
          <div id="indicators">
            <span class="indicator indicator-opacity"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span><span class="indicator"></span>
          </div>
        </div>
      </div>

      <div class="partners-images"> 
        <a href="https://www.thetrainingterminal.com/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/TheTrainingTerminal-2.png')}}" alt="TrainingTerminal logo" /></a> 
        <a href="https://www.fkc-online.com/index.php/de" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/FKC-2.png')}}" alt="Ficher, Knoblauch & co logo" /></a> 
        <a href="https://www.leanscape.io/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/leanscape-2.png')}}" alt="leanscape logo" /></a> 
        <a href="https://www.belfor.com/en/us" target="_blank" rel="noopener" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/belfor.gif')}}" alt="SHL" /></a> 
        <a href="http://de.loop-tv.eu/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/loop-TV-2.png')}}" alt="loop tv logo" /></a> 
        <a href="https://zomppp.de/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/zomppp-2.png')}}" alt="zomppp logo" /></a> 
        <a><img data-src="{{asset('/images/partners-logo/UAP-QMS-2.png')}}" alt="uap managment system logo" /></a> 
        <a href="https://www.totemlearning.com/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/tottem-2.png')}}" alt="totem learning logo" /></a>
        <a href="https://www.safetycourses4u.com/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/safetycourses4u-2.png')}}" alt="safety courses for you logo" /></a> 
        <a href="http://dimenzijaplus.ba/" target="_blank" rel="noopener"><img data-src="{{asset('images/partners-logo/dimenzija_plus-2.png')}}/" alt="dimenzija plus logo" /></a> 
        <a href="http://tvsa.ba/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/TVSA-2.png')}}" alt="televizija sarajevo logo" /></a> 
        {{-- <a href="https://eloomi.com/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/eloomi-4.png')}}" alt="eloomi logo" /></a>  --}}
        <a href="https://fin.unsa.ba/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/FIN-2.png')}}" alt="fakultet islamskih nauka logo" /></a> 
        <a><img data-src="{{asset('/images/partners-logo/maisonprive-2.png')}}" alt="maison prive logo" /></a> 
        <a href="http://www.biramoporavak.com/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/biramoporavak-2.png')}}" alt="biramo oporavak logo" /></a> 
        {{-- <a><img data-src="{{asset('/images/partners-logo/BDfD-2.png')}}" alt="bosnian doctors for disabled logo" /></a></div> --}}
        
        <a href="https://euinfo.ba/en/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/eu_info_centar.png')}}" alt="EU Info Centar" /></a> 
        <a href="https://www.giz.de/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/giz_logo.gif')}}" alt="GIZ" /></a> 

        <a href="https://www.adsfbih.gov.ba/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/ads_bih.gif')}}" alt="ADS FBIH" /></a> 
        <a href="http://shkolla-bridge.info/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/bridge.gif')}}" alt="bridge" /></a> 

        <a href="https://obuke.adu.vladars.net/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/adurs_logo.gif')}}" alt="ADURS" /></a> 
        <a href="https://2gimnazija.edu.ba/bs/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/druga_gim_logo.gif')}}" alt="Druga Gimnazija Sarajevo" /></a> 
        <a href="https://www.osce.org/" style="text-align: center"><img style="margin-top: 22%" data-src="{{asset('/images/partners-logo/osce_logo.png')}}" alt="OSCE" /></a> 
        <a href="https://www.savethechildren.net/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/sci_logo.gif')}}" alt="SCI" /></a> 
        <a href="https://www.worldcc.com/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/wcc_logo.gif')}}" alt="WORLDCC" /></a> 
        <a href="https://civitasonlineucionica.ba/" style="text-align: center"><img style="width: 75%; margin-top: 20%" data-src="{{asset('/images/partners-logo/civitas_logo.png')}}" alt="Civitas" /></a> 
        <a href="https://www.ba.undp.org/content/bosnia_and_herzegovina/en/home.html" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/undp_logo.gif')}}" alt="UNDP" /></a>
        <a href="https://wellspark.co.uk/" target="_blank" rel="noopener"><img data-src="{{asset('/images/partners-logo/WELLS-PARK-2.png')}}" alt="wells park communications logo" /></a> 
        <a href="https://edu.shlakademija.ba/" style="text-align: center"><img style="width: 75%; margin-top: 8%" data-src="{{asset('/images/partners-logo/shl_logo.gif')}}" alt="SHL" /></a> 


    </div>

  </div>
</section>
<section class="blog-section contain"> <img class="blog-orange-circle-big" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background" /> <img class="blog-orange-circle-small" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange circle background" />
  <h2 class="text-center h1-font">@lang('index.blog_h2')</h2>
  <h3 class="p-font"> @lang('index.blog_h3')</h3>
  <div class="blog-container"> @foreach ($blogs as $blog)<a href="{{env('BLOG_DOMAIN')}}/blog/{{$blog->id}}/{{App::getlocale()}}" target="_blank" rel="noopener" class="blog">
      <div class="img-container">
        <div class="img-container-overlay"></div> <img data-src='{{asset("$blog->image_path")}}' alt="blog background image" class="blog-image" /> <svg class="wave" viewBox="0 0 500 500">
          <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
        </svg>
      </div>
      <div>
        <h3 class="h2-font">{{$blog->heading}}</h3>
        <p><span>{{$blog->created_at}}</span> <span>{{$blog->name}}</span></p> <input class="blog-value" type="hidden" value='{{$blog->text}}'>
        <p class="blog-text p-font"></p>
      </div>
    </a>@endforeach<div class="blog-button"> <a href="{{env('BLOG_DOMAIN')}}/{{App::getlocale()}}" target="_blank" rel="noopener"><button class="button">@lang('index.blog_button')</button></a></div>
  </div>
</section>
<section class="contact-section" name="contact"><img class="contact-orange-circle-r" src="{{asset('/images/img/orange-circle.svg')}}" alt="background orange circle" /> <img class="contact-orange-circle-l" src="{{asset('/images/img/orange-circle.svg')}}" alt="background orange circle" />
  <div class="contact-form-container ">
    <div id="contact"></div>
    <p>@lang('index.contact_p')</p>
    <h2 class="text-center h1-font">@lang('index.contact_h2')</h2> @include('parts.error_success')
    <div id="contact-form"></div>
    <form class="contact-form" action="/contact" method="POST"> @csrf<div class="contact-form-group">

        <div> <label for="name">*@lang('index.formName')</label> <input type="text" name="name" id="name" required /></div>
        <div> <label for="surnanme">*@lang('index.formSurname')</label> <input type="text" name="lastname" id="lastname" required /></div>
      </div>
      <div class="contact-form-group">
        <div> <label for="subject">*@lang('index.formSubject')</label> <input type="text" name="subject" id="subject" required /></div>
        <div> <label for="email">*@lang('index.formEmail')</label> <input type="email" name="email" id="email" required /></div>
      </div>
      <div class="contact-form-group textarea"> <label for="message">*@lang('index.formMessage')</label><textarea name="message" rows="7" id="message" required></textarea></div>
      <input class="button submit button-orange" value="@lang('index.formSend')" type="submit">
      @captcha
    </form>
  </div>

</section>
@endsection
@section('js')
<script src="{{ asset('/js/index.js') }}"></script>
@endsection