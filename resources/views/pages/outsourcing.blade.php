@extends('layouts.app')
@section('title', '- Outsource real person')
@section('css')
<link href="{{ asset('css/outsourcing.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<!--@include('parts.break_space')-->
<div class="loader-container">
    <div class="css-animation-container">
        <div class="css-animation"></div>
    </div>
</div>
<section class="header-container margin-b-150 ">
    <img src="{{asset('/images/partner/join-us-header-img.svg')}}" alt="header background" class="header-background background-img">
    <div class="header-content contain">
        <div class="header-content-left">
            <h1 class="h1-font">@lang('outsourcing.header')</h1>
            <p class="p-font">@lang('outsourcing.info')</p>
            <a href="#team-members-anchor"><button class="button --gray">@lang('outsourcing.people')</button></a>
        </div>
        <div class="header-content-right">
            <img src="{{asset('/images/partner/outsourcing-header-img.svg')}}" alt="Join us header background">
        </div>
    </div>
    <div id="team-members-anchor"></div>
</section>

<section>
    <div id="team-members" class="team-member contain">
        <!-- team skills Irfan K.-->
        <div class="team-skills">

            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="95">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="95">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Moodle</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="80">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>

            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Captivate</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="50">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>

            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Photoshop</p>
                    <span class="counter h2-font" data-note="50">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="50">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Animate</p>
                    <span class="counter h2-font" data-note="30">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="30">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Vyond</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="80">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">MailChimp</p>
                    <span class="counter h2-font" data-note="95">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="95">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Google Ads</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="80">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Social Media Advertising</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="80">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Irfan K.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.irfank-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.irfank-long-second-p')
                </p>
            </div>
            <button class="button">@lang('outsourcing.hire')</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/irfanK.jpg') }}" alt="Irfan K">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue1">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange1">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Irfan K.</h3>
                <h4 class="h4-font">eLearning Designer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">@lang('outsourcing.irfank-about-short')
                </p>
            </div>
            <div class="team-description-bottom">
                <!--<a href="{{asset('/pages/outsourcing_profile?0')}}"><button class="button">Read More</button></a>-->
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="https://www.linkedin.com/in/irfan-karisik-53ab54148" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
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
            <!-- Irfan S skills -->
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="100">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="100">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>

            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Illustrator</p>
                    <span class="counter h2-font" data-note="100">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="100">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>

            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Photoshop</p>
                    <span class="counter h2-font" data-note="95">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="95">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>

            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Indesign</p>
                    <span class="counter h2-font" data-note="80">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="80">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>

            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Edge Animate</p>
                    <span class="counter h2-font" data-note="95">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="95">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>

            </div>
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Animate</p>
                    <span class="counter h2-font" data-note="75">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="75">
                        <g fill="none">
                            <path class="path" stroke-width="20" stroke-linecap="round" stroke="#4885FA" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                    <svg class="line-main" height="80" width="230">
                        <g fill="none">
                            <path stroke-width="20" stroke-linecap="round" stroke="rgba(0, 53, 145, 0.15)" d="M5 60 l215 0"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Irfan S.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.irfans-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.irfans-long-second-p')
                </p>
            </div>
            <button class="button">@lang('outsourcing.hire')</button>
        </div>
        <div class="team-img-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
                <defs>
                    <clipPath id="clipPath">
                        <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
                    </clipPath>
                </defs>
            </svg>
            <div class="team-img">
                <img class="profile-image" src="{{ asset('images/team/irfanS.jpg') }}" alt="Irfan S">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue1">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange1">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Irfan S.</h3>
                <h4 class="h4-font">eLearning Designer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">

                    @lang('outsourcing.irfans-about-short')

                </p>
            </div>
            <div class="team-description-bottom">
                <!--<a href="{{asset('/pages/outsourcing_profile?4')}}"><button class="button">Read More</button></a>-->
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="https://www.linkedin.com/in/irfan-star%C4%8Devi%C4%87-863267154/" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let loaderContainer = document.querySelector(".loader-container");
        loaderContainer.classList.add("loaderEnd");
        setTimeout(function() {
            loaderContainer.style.display = "none";
        }, 1000)
    })
</script>
<script type="module" src=" {{ asset('/js/test.min.js') }}"></script>
@endsection