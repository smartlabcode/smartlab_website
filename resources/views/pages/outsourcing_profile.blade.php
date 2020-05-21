@extends('layouts.app')
@section('css')
<link href="{{ asset('css/outsourcingProfile.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<section class="section-one">
    <img class="section-one-bg" src="{{ asset('images/partner/designer-developer-header-bg.svg') }}" alt="header background" />
</section>
<section class="team-member contain">
    <div class="team-img-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
            <defs>
                <clipPath id="clipPath">
                    <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
                </clipPath>
            </defs>
        </svg>
        <div class="team-img">
            <img class="profile-image" src="{{ asset('images/team/team-blank.svg') }}" alt="profile picture">
        </div>
        <img src="{{ asset('images/img/blue-circle.svg') }}" class="team-blue2" alt="blue circle">
        <img src="{{ asset('images/img/orange-circle.svg') }}" class="team-orange2" alt="orange circle">
    </div>
    <div class="team-description">


    </div>
</section>
<section class="skills-container contain">

</section>
<section class="outsourcing-about team-description-long contain">

</section>

@endsection
@section('js')
<script type="module" src="{{ asset('/js/outsourcing_profile.min.js') }}"></script>
@endsection