@extends('layouts.app')

@section('content')
<link href="{{ asset('css/outsourcing.min.css') }}" rel="stylesheet">
<!--@include('parts.break_space')-->
<section class="section-one">
    <img class="section-one-bg" src="{{ asset('images/partner/designer-developer-header-bg.svg') }}" />
    <div class="section-one-img-container contain">
        <div class="section-one-img-left-container">
            <div>
                <h1 class="h1-font">@lang('outsourcing.header')</h1>
                <p class="p-font">@lang('outsourcing.info')
                </p>
                <a href="#team-members"><button class="button">@lang('outsourcing.people')</button></a>
            </div>
        </div>
        <img class="section-one-img-right" src="{{ asset('images/partner/outsourcing-header-img.svg') }}" />
    </div>
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
                <img class="profile-image" src="{{ asset('images/team/irfo-k.jpg') }}" alt="Irfan K">
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
                <a href="{{asset('/pages/outsourcing_profile?0')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="https://www.linkedin.com/in/irfan-karisik-53ab54148" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
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
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="68">
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
                    <p class="skill-name p-font">HTML/CSS</p>
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
                    <p class="skill-name p-font">Wordpress</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="90">
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
            <!-- Opširan tekst za outsourcing_profile page Ibrahim Z.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.ibrahimz-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.ibrahimz-long-second-p')
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
                <img class="profile-image" src="{{ asset('images/team/ibro.jpg') }}" alt="Ibrahim Z">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue2">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange2">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Ibrahim Z.</h3>
                <h4 class="h4-font">eLearning / wordpress Developer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">
                    @lang('outsourcing.ibrahimz-about-short')

                </p>
            </div>
            <div class="team-description-bottom">
                <a href="{{asset('/pages/outsourcing_profile?1')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <!-- Haris M skills -->
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">PHP</p>
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
                    <p class="skill-name p-font">JavaScript</p>
                    <span class="counter h2-font" data-note="70">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="70">
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
                    <p class="skill-name p-font">Java</p>
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
                    <p class="skill-name p-font">C#</p>
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
                    <p class="skill-name p-font">HTML/CSS</p>
                    <span class="counter h2-font" data-note="70">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="70">
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
                    <p class="skill-name p-font">MySQL</p>
                    <span class="counter h2-font" data-note="70">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="70">
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
                    <p class="skill-name p-font">SQLite</p>
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
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Haris M.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.harism-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.harism-long-second-p')
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
                <img class="profile-image" src="{{ asset('images/team/hare.jpg') }}" alt="Haris M">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue3">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange3">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Haris M.</h3>
                <h4 class="h4-font">eLearning / JS Developer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">@lang('outsourcing.harism-about-short')
                </p>
            </div>
            <div class="team-description-bottom">
                <a href="{{asset('/pages/outsourcing_profile?2')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="https://www.linkedin.com/in/haris-musli%C4%87-619460137/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="https://github.com/thewhitewolf2411" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <!-- Amer M skills -->
        <div class="team-skills">
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
                    <p class="skill-name p-font">Adobe Ilustrator</p>
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
                    <p class="skill-name p-font">Adobe XD</p>
                    <span class="counter h2-font" data-note="99">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="99">
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
                    <p class="skill-name p-font">Adobe After Effects</p>
                    <span class="counter h2-font" data-note="77">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="77">
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
                    <p class="skill-name p-font">UI/UX Design</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="90">
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
                    <p class="skill-name p-font">Articulate Storyline</p>
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
                    <p class="skill-name p-font">Adobe Premiere Pro</p>
                    <span class="counter h2-font" data-note="65">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="65">
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
            <!-- Opširan tekst za outsourcing_profile page Amer M.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.amerm-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.amerm-long-second-p')
                </p>h.
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
                <img class="profile-image" src="{{ asset('images/team/amer.jpg') }}" alt="Amer M">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue4">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange4">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Amer M.</h3>
                <h4 class="h4-font">eLearning / multimedia Designer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">
                    @lang('outsourcing.amerm-about-short')

                </p>
            </div>
            <div class="team-description-bottom">
                <a href="{{asset('/pages/outsourcing_profile?3')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="https://www.linkedin.com/in/amer-masleša-5a6397161" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
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
                <img class="profile-image" src="{{ asset('images/team/irfo-s.jpg') }}" alt="Irfan S">
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
                <a href="{{asset('/pages/outsourcing_profile?4')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="https://www.linkedin.com/in/irfan-starcevic-863267154" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <!-- Aida R skills -->
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Adobe Photoshop</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="90">
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
                    <p class="skill-name p-font">Adobe InDesign</p>
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
                    <p class="skill-name p-font">Adobe Illustrator</p>
                    <span class="counter h2-font" data-note="93">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="93">
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
                    <p class="skill-name p-font">Adobe Acrobat Pro</p>
                    <span class="counter h2-font" data-note="85">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="85">
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
                    <p class="skill-name p-font">Articulate Storyline</p>
                    <span class="counter h2-font" data-note="70">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="70">
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
            <!-- Opširan tekst za outsourcing_profile page Aida R.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.aidar-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.aidar-long-second-p')
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
                <img class="profile-image" src="{{ asset('images/team/aida.jpg') }}" alt="Aida R">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue2">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange2">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Aida R.</h3>
                <h4 class="h4-font">eLearning / instructional Designer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">@lang('outsourcing.aidar-about-short')
                </p>
            </div>
            <div class="team-description-bottom">
                <a href="{{asset('/pages/outsourcing_profile?5')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="https://www.linkedin.com/in/aida-filipovi%C4%87-red%C5%BEovi%C4%87-4a034a1b" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <!-- Emir M skills -->
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">HTML/CSS</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="90">
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
                    <p class="skill-name p-font">JavaScript</p>
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
                    <p class="skill-name p-font">Adobe Photoshop</p>
                    <span class="counter h2-font" data-note="60">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="60">
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
                    <p class="skill-name p-font">React.js</p>
                    <span class="counter h2-font" data-note="70">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="70">
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
            <!-- Opširan tekst za outsourcing_profile page Emir M.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.emirm-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.emirm-long-second-p')
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
                <img class="profile-image" src="{{ asset('images/team/emir.jpg') }}" alt="Emir M">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue3">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange3">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Emir M.</h3>
                <h4 class="h4-font">Front-End / moodle developer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">@lang('outsourcing.emirm-about-short')
                </p>
            </div>
            <div class="team-description-bottom">
                <a href="{{asset('/pages/outsourcing_profile?6')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="https://github.com/emirm990" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
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
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="68">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="68">
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
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
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
                    <p class="skill-name p-font">Articulate
                        Storyline</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="90">
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
            <!-- Opširan tekst za outsourcing_profile page Florin B.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.florinb-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.florinb-long-second-p')
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
                <img class="profile-image" src="{{ asset('images/team/florin.jpg') }}" alt="Florin B">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue4">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange4">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Florin B.</h3>
                <h4 class="h4-font">Front-End Developer</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">@lang('outsourcing.florinb-about-short')
                </p>
            </div>
            <div class="team-description-bottom">
                <a href="{{asset('/pages/outsourcing_profile?7')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-member contain">
        <!-- Skills za outsourcing_profile page Mirza O.-->
        <div class="team-skills">
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">HTML/CSS</p>
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
                    <p class="skill-name p-font">PHP</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="90">
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
                    <p class="skill-name p-font">MySQL</p>
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
                    <p class="skill-name p-font">Google Cloud</p>
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
            <div class="line-container">
                <div>
                    <p class="skill-name p-font">Docker</p>
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
                    <p class="skill-name p-font">Kubernetes</p>
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
                    <p class="skill-name p-font">JavaScript</p>
                    <span class="counter h2-font" data-note="90">0</span><span class="h2-font">%</span>
                </div>
                <div>
                    <svg class="line-overlay" height="80" width="230" data-note="90">
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
                    <p class="skill-name p-font">REST API</p>
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
                    <p class="skill-name p-font">Microservice architectures</p>
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
        </div>
        <div class="team-description-long">
            <!-- Opširan tekst za outsourcing_profile page Mirza O.-->
            <div class="p-font">
                <p>
                    @lang('outsourcing.mirzao-long-first-p')
                </p>
                <p>
                    @lang('outsourcing.mirzao-long-second-p')
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
            <div class="team-img mirza">
                <img class="profile-image" src="{{ asset('images/team/mirza.jpg') }}" alt="Mirza O">
            </div>
            <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue2">
            <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange2">
        </div>
        <div class="team-description">
            <div>
                <h3 class="h3-font">Mirza O.</h3>
                <h4 class="h4-font">Full Stack / DevOps</h4>
                <h5 class="h5-font">Skills: </h5>
                <p class="p-font">@lang('outsourcing.mirzao-about-short')
                </p>
            </div>
            <div class="team-description-bottom">
                <a href="{{asset('/pages/outsourcing_profile?8')}}"><button class="button">Read More</button></a>
                <div class="team-description-bottom-social">
                    <div class="team-description-bottom-social-img-container --ln">
                        <a href="https://www.linkedin.com/in/mirza-oglecevac-b03266158" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3560.264 10238 32.563 30">
                                <g id="Group_339" data-name="Group 339" transform="translate(2736.264 5708)">
                                    <path id="Path_1171" data-name="Path 1171" class="cls-1" d="M8,42.662a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V23.413a.827.827,0,0,0-.812-.812H8.813A.827.827,0,0,0,8,23.413Z" transform="translate(816 4516.525)"></path>
                                    <path id="Path_1172" data-name="Path 1172" class="cls-1" d="M38.162,22.3a7.8,7.8,0,0,0-5.875,2.313A.409.409,0,0,1,31.6,24.3v-1a.827.827,0,0,0-.812-.812H24.913a.827.827,0,0,0-.812.813c.063,3.563,0,15.875,0,19.187a.827.827,0,0,0,.813.813H30.85a.827.827,0,0,0,.813-.812V32.05a4.655,4.655,0,0,1,.188-1.687A3.794,3.794,0,0,1,35.412,27.8c2.563,0,3.75,1.938,3.75,4.75v9.938a.827.827,0,0,0,.813.813h5.813a.827.827,0,0,0,.813-.812V31.737C46.537,25.3,42.85,22.3,38.162,22.3Z" transform="translate(809.963 4516.638)"></path>
                                    <path id="Path_1173" data-name="Path 1173" class="cls-1" d="M11.688,14.813h0c2.375,0,3.813-1.5,3.813-3.375A3.438,3.438,0,0,0,11.75,8C9.438,8,8,9.438,8,11.375A3.419,3.419,0,0,0,11.688,14.813Z" transform="translate(816 4522)"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="team-description-bottom-social-img-container --git">

                        <a href="https://github.com/MirzaazriM" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-8634 2822 36 35.119">

                                <g id="github" transform="translate(-8634 2816.635)">
                                    <path id="Path_1275" data-name="Path 1275" class="cls-2" d="M33.585,14.33a17.922,17.922,0,0,0-6.551-6.551A17.606,17.606,0,0,0,18,5.365,17.608,17.608,0,0,0,8.965,7.779,17.92,17.92,0,0,0,2.414,14.33,17.607,17.607,0,0,0,0,23.364,17.493,17.493,0,0,0,3.434,33.946a17.629,17.629,0,0,0,8.871,6.5,1.049,1.049,0,0,0,.937-.164.917.917,0,0,0,.3-.7q0-.07-.012-1.266t-.012-2.086l-.539.093a6.877,6.877,0,0,1-1.3.082,9.91,9.91,0,0,1-1.629-.164,3.64,3.64,0,0,1-1.57-.7A2.974,2.974,0,0,1,7.453,34.1l-.234-.539a5.857,5.857,0,0,0-.738-1.2,2.828,2.828,0,0,0-1.019-.891L5.3,31.357a1.721,1.721,0,0,1-.3-.281,1.286,1.286,0,0,1-.211-.328q-.07-.164.117-.27a1.52,1.52,0,0,1,.68-.1l.469.07a3.421,3.421,0,0,1,1.16.562,3.783,3.783,0,0,1,1.137,1.218,4.131,4.131,0,0,0,1.3,1.465,2.759,2.759,0,0,0,1.535.5,6.665,6.665,0,0,0,1.336-.117,4.661,4.661,0,0,0,1.055-.352,3.8,3.8,0,0,1,1.148-2.414,16.048,16.048,0,0,1-2.4-.422,9.565,9.565,0,0,1-2.2-.914A6.31,6.31,0,0,1,8.226,28.4,7.546,7.546,0,0,1,7,25.942a11.7,11.7,0,0,1-.48-3.516A6.836,6.836,0,0,1,8.367,17.6a6.3,6.3,0,0,1,.164-4.781,3.284,3.284,0,0,1,2.016.316,14.092,14.092,0,0,1,1.957.9q.621.374,1,.633a16.926,16.926,0,0,1,9,0l.891-.562a12.613,12.613,0,0,1,2.156-1.031,3.071,3.071,0,0,1,1.9-.258,6.24,6.24,0,0,1,.187,4.781,6.837,6.837,0,0,1,1.852,4.828A11.833,11.833,0,0,1,29,25.954a7.253,7.253,0,0,1-1.242,2.461,6.552,6.552,0,0,1-1.9,1.559,9.583,9.583,0,0,1-2.2.914,16.031,16.031,0,0,1-2.4.422,4.174,4.174,0,0,1,1.218,3.328v4.945a.934.934,0,0,0,.293.7,1.018,1.018,0,0,0,.926.164,17.627,17.627,0,0,0,8.871-6.5A17.5,17.5,0,0,0,36,23.364,17.621,17.621,0,0,0,33.585,14.33Z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script type="module" src=" {{ asset('/js/test.js') }}"></script>
@endsection