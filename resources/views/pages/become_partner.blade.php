@extends('layouts.app')
@section('title', '- Become our partner')
@section('css')
<link href="{{ asset('css/partner.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div>
    <div class="loader-container">
        <div class="css-animation-container">
            <div class="css-animation"></div>
        </div>
    </div>
    <section class="header-container margin-b-150 ">
        <img src="../images/partner/join-us-header-img.svg" alt="header background" class="header-background background-img">
        <div class="header-content contain">
            <div class="header-content-left">
                <h1 class="h1-font">@lang('partner.header')</h1>
                <p class="p-font">@lang('partner.info')</p>
                <a href="#partnership-options"><button class="button --gray">@lang('partner.options')</button></a>
            </div>
            <div class="header-content-right">
                <img src="../images/partner/partner-header-img.svg">
            </div>
        </div>

    </section>

    <section class="partner-container contain margin-b-150" style="position: relative">
        <div id="partnership-options">

        </div>
        <div class="partner-item">
            <img src="../images/partner/course-production-icon.svg">
            <div>
                <h2 class="h2-font">@lang('partner.course-header')</h2>
                <p class="p-font">@lang('partner.course-info')</p>
                <a href="#partner-contact"><button class="button" id="button-course" data-option="course">@lang('partner.become-partner')</button></a>
            </div>

        </div>
        <div class="partner-item">
            <img src="../images/partner/moodle-support-icon.svg">
            <div>
                <h2 class="h2-font">@lang('partner.moodle-header')</h2>
                <p class="p-font">@lang('partner.moodle-info')</p>
                <a href="#partner-contact"><button class="button" id="button-moodle" data-option="moodle">@lang('partner.become-partner')</button></a>
            </div>

        </div>
        <div class="partner-item">
            <img src="../images/partner/service-resseller-icon.svg">
            <div>
                <h2 class="h2-font">@lang('partner.service-header')</h2>
                <p class="p-font">@lang('partner.service-info')</p>
                <a href="#partner-contact"><button class="button" id="button-service" data-option="service">@lang('partner.become-partner')</button></a>
            </div>

        </div>
    </section>
    <div class="partnership-container">
        <img src="../images/partner/partner-body-bg.svg">
        <section class="partnership-usecase-container contain">

            <div class=" partnership-usecase">
                <h2 class="centar h1-font margin-b-50">@lang('partner.use-case-header')</h2>
                <img class="partnership-usecase-img" src="../images/partner/use-case-partnership.svg" />

                <h3 class="company h1-font">Company
                    from Germany</h3>
                <h3 class="smartlab"><img src="../images/smartlab-logo.svg" /> </h3>
                <div class="partnership-usecase-step --step1 centar">
                    <p class="p-font">@lang('partner.use-case-step1')</p>
                </div>
                <div class="partnership-usecase-step --step2 centar">
                    <p class="p-font">@lang('partner.use-case-step2')</p>
                </div>
                <div class="partnership-usecase-step --step3 centar">
                    <p class="p-font">@lang('partner.use-case-step3')</p>
                </div>
                <div class="partnership-usecase-step --step4 centar">
                    <p class="p-font">@lang('partner.use-case-step4')</p>
                </div>
                <div class="partnership-usecase-step --step5 centar">
                    <p class="p-font">@lang('partner.use-case-step5')</p>
                </div>

            </div>
        </section>
    </div>
    <section class="contain margin-b-150 margin-t-400">

        <div class="partnership-steps-container">
            <h2 class="centar h1-font margin-b-100">@lang('partner.six-steps')</h2>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>1</span>
                <div><img src="../images/partner/partnership-step1.svg" alt=""></div>
                <div>
                    <p class="p-font">@lang('partner.step1')</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>2</span>
                <div><img src="../images/partner/partnership-step2.svg" alt=""></div>
                <div>
                    <p class="p-font">@lang('partner.step2')</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>3</span>
                <div><img src="../images/partner/partnership-step3.svg" alt=""></div>
                <div>
                    <p class="p-font">@lang('partner.step3')</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>4</span>
                <div><img src="../images/partner/partnership-step4.svg" alt=""></div>
                <div>
                    <p class="p-font">@lang('partner.step4')</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>5</span>
                <div><img src="../images/partner/partnership-step5.svg" alt=""></div>
                <div>
                    <p class="p-font">@lang('partner.step5')</p>
                </div>

            </div>
            <div class="partnership-steps-item">
                <img src="../images/partner/use-case-bg.svg">
                <span>6</span>
                <div><img src="../images/partner/partnership-step6.svg" alt=""></div>
                <div>
                    <p class="p-font">@lang('partner.step6')</p>
                </div>

            </div>
        </div>
    </section>
    <section class="contain margin-b-150  partner-experience-container">
        <img class="partner-experience-bg" src="../images/partner/partnership-experience-bg.svg">

        <div class="partner-experience partners-text">
            <h2 class="centar h1-font margin-b-50">@lang('partner.partner-experience')</h2>
            <div class="partner-experience-logo">
                <img src="{{asset('/images/partners-logo/risk-crew.png')}}" alt="partner logo" id="partners-logo" />
            </div>
            <div class="partner-experience-content">
                <p class="p-font" id="partners-text">“We found SmartLab very professional to work with. They quickly understood the brief, they were proactive and easy to communicate with during the build phase and delivered a final product that met fully with our expectations.”</p>
                <div class="partner-experience-image">
                    <img src="{{asset('/images/partners-images/nick-r.jpg')}}" alt="partner" id="partners-image">
                    <p>
                        <span class="partner-experience-name" id="partners-name">Nick Roberts</span>
                        <span class="partner-experience-company" id="partners-company">Risk Crew</span>
                    </p>
                </div>

            </div>
            <div id="indicators"><span class="indicator indicator-opacity"></span><span class="indicator"></span></div>
        </div>
    </section>
    <!-- TODO dont delete this-->
    <section class="partner-form-section contain" id="partner-contact">
        @include('parts.break_space')
        @include('parts.error_success')


        <h2 class="text-center h1-font margin-b-100">Contact us and become our partner</h2>
        <form action="/bussiness" method="POST" enctype="multipart/form-data" class="partner-form">

            <!-- Include token -->
            @csrf
            <div class="partner-form-group">
                <div>
                    <label for="bussiness_name" class="p-font">*Company Name: </label>
                    <input type="text" name="bussiness_name" id="bussiness_name" required />
                </div>
                <div>
                    <label for="bussiness_website" class="p-font">*Company Website:</label>
                    <input type="text" name="bussiness_website" id="bussiness_website" required />
                </div>
            </div>
            <div class="partner-form-group">
                <div>
                    <label for="bussiness_person" class="p-font">*Responsible Person:</label>
                    <input type="text" name="bussiness_person" id="bussiness_person" required />
                </div>

                <div>
                    <label for="bussiness_email" class="p-font">*Email:</label>
                    <input type="email" name="bussiness_email" id="bussiness_email" required />
                </div>
            </div>
            <div class="partner-form-group">
                <div>
                    <label for="bussiness_phone_number" class="p-font">*Phone number:</label>
                    <input type="number" name="bussiness_phone_number" id="bussiness_phone_number" required />
                </div>
                <div>
                    <label for="bussiness_category" class="p-font">*Please Select</label>
                    <select name="bussiness_category" id="bussiness_category" required>
                        <option selected disabled>Choose category</option>
                        <option value="production">Course Production Partnership</option>
                        <option value="elearning">Moodle Support Partnership</option>
                        <option value="other">Service Reseller Partnership</option>
                    </select>
                </div>

            </div>
            <div class="partner-form-group">
                <div>
                    <label for="bussiness_message" class="p-font">*Note/Short Brief</label>
                    <textarea name="bussiness_message" id="bussiness_message" required></textarea>
                </div>
                <div>
                    <label for="uploadFileArea" class="p-font">@lang('careers.files')</label>
                    <div id="uploadFileArea" class="form-control">
                        <p id="uploadText"><span>@lang('careers.click-to') <br />@lang('careers.upload-files')</span></p>
                        <input id="inputFile" type="file" name="files[]" onchange="fileUploaded()" multiple />
                    </div>
                </div>
            </div>

            <!-- Submit form -->
            <button class="button --dark-blue">Submit</button>

        </form>


    </section>
</div>
@endsection
@section('js')
<script src=" {{ asset('/js/partner.min.js') }}"></script>
@endsection