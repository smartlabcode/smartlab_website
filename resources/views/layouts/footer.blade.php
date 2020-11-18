@section('footer')
<footer>
    <!--<img class="footer-background" src="images/footer-dark.svg" />-->
    <div class="contain">
        <div class="footer-top-row">
            <nav class="footer-top-column --left">
                <ul>
                    <li><a href="/#anchor">@lang('menu.first_item')</a></li>
                    <li><a href="/#about">@lang('menu.second_item')</a></li>
                    <li><a href="{{asset('/pages/partner')}}">@lang('menu.third_item')</a></li> <!-- TODO do we have this page, we need to set link-->
                    <li><a href="{{env('BLOG_DOMAIN')}}/{{App::getlocale()}}" target="_blank" rel="noopener">@lang('menu.fourth_item')</a></li>
                    <li><a href="/#contact">@lang('menu.fifth_item')</a></li>
                </ul>
            </nav>
            <div class="footer-top-column phone --center">
                <div>
                    <img src="{{asset('/images/footer/social-icons/phone-receiver.svg')}}" alt="phone" />
                    <div class="footer-phone-container">
                        <p>
                            <a href="tel: 00387 33 956 222">+387 33 956 222</a>
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('/images/footer/social-icons/mail.svg')}}" alt="email" />
                    <p>
                        <a href=" mailto:hello&#64;smartlab.ba">hello&#64;smartlab.ba</a>
                    </p>
                </div>
            </div>
            <div class="footer-top-column --center nowrap">
                <img src="{{asset('/images/footer/social-icons/location.svg ')}}" alt="location" />
                <address>
                    <a href="https://www.google.com/maps/place/SmartLab/@43.8542408,18.3870703,17z/data=!3m1!4b1!4m5!3m4!1s0x4758c8c48c458d13:0xd3b7b0136b05bfe5!8m2!3d43.854237!4d18.389259" target="_blank" rel="noopener">
                        <p>Bulevar Meše Selimovića 81A,</p>
                        <p><span class="wrap">Sarajevo,</span> <span>@lang('footer.state')</span></p>
                    </a>
                </address>
            </div>
            <div class="footer-top-column --right">

                <a class="footer-button" href="https://www.google.com/maps/place/SmartLab/@43.8470448,18.361753,15z/data=!4m2!3m1!1s0x0:0xd3b7b0136b05bfe5?sa=X&ved=2ahUKEwjtwqSSkYztAhWRtYsKHTYmBB0Q_BIwCnoECBIQBQ" target="_blank" rel="noopener">
                    <span>@lang('footer.findUs')</span>
                </a>
            </div>
        </div>
        <div class="footer-bot-row">
            <div class="footer-bot-column --left ">
                <a href="#"><img src="{{asset('/images/footer/social-icons/smartlab-white.svg')}}" class="footer-bot-icons" alt="smartlab logo" /></a>

            </div>
            <div class="footer-bot-column --center">
                Copyright &copy; <?php echo date('Y')?> SmartLab
            </div>
            <div class="footer-bot-column --right">
                <div class="social-icons-container">
                    <a href="https://www.facebook.com/smartlabsarajevo/" target="_blank" rel="noopener"><img src="{{asset('/images/footer/social-icons/fb-icon.svg')}}" class="footer-bot-icons" alt="facebook icon" /></a>
                    <a href="https://www.linkedin.com/company/smartlab-sarajevo" target="_blank" rel="noopener"><img src="{{asset('/images/footer/social-icons/linkedin-icon.svg')}}" class=" footer-bot-icons" alt="linkedin icon" /></a>
                    <a href="#" target="_blank" rel="noopener">
                        <a href="skype:rizah.kabasi?chat"><img src="{{asset('/images/footer/social-icons/skype-icon.svg')}}" class="footer-bot-icons" alt="skype icon" /></a>
                    </a>
                    <a href="#" target="_blank" rel="noopener">
                        <a href="https://www.youtube.com/channel/UCCvpynG5iChYpBhvTJ8NwWQ" target="_blank" rel="noopener"><img src="{{asset('/images/footer/social-icons/youtube-icon.svg')}}" class="footer-bot-icons no-right-margin" alt="youtube icon" /></a>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection