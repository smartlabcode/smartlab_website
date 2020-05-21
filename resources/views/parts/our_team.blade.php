
<section id="team" class="team contain">
  <img class="team-orange-circle" src="{{asset('/images/img/orange-circle.svg')}}" alt="orange background circle" /> 
  <img class="team-blue-circle" src="{{asset('/images/img/blue-circle.svg')}}" alt="blue background circle" /> 
  <img class="team-orange-circle-bottom" src="{{asset('/images/img/orange-circle.svg')}}" alt="background orange circle" />
  <div>
    <h2 class="text-center h1-font">@lang('index.team_h2')</h2>
    <div class="flex --four">
      @foreach ($teamMembers as $teamMember)
        @php
          $imagePath = asset('storage') . '/team/' . $teamMember['photo'];
        @endphp
        <div class="team-member">
          <div class="team-img-container"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="2189.72 4884 379.064 396.477" class="team-mask">
              <defs>
                <clipPath id="clipPath">
                  <path d="M94.773,4.745c75.489-25.516,161.5,56.6,172.423,133.442,13.424,94.574-90.134,153.618-147.957,167.637C59.091,320.363,11.322,268.811.8,154.877-6.4,77.363,35.671,24.773,94.773,4.745Z"></path>
                </clipPath>
              </defs>
            </svg>
            <div class="team-img"> <img src="{{asset('/images/team/team-blank.svg')}}" data-src={{$imagePath}} alt="{{$teamMember['name']}} photo">
            </div>
             <img src="{{asset('/images/img/blue-circle.svg')}}" class="team-blue{{rand(1,4)}}" alt="team background">
            <img src="{{asset('/images/img/orange-circle.svg')}}" class="team-orange{{rand(1,4)}}" alt="team background">
          </div>
          <div class="team-description">
            <h3>{{$teamMember["name"]}}</h3>
            <p>{{$teamMember["title"]}}</p>
          </div>
        </div>
      @endforeach
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