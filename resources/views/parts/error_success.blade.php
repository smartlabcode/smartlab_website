<!-- If there is a message key in session print it -->
@if(session('message'))
    <div class="alert alert-success" role="alert">
        {{session('message')}}
    </div>
@endif

<!-- If there is a error key in session print it -->
@if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
@endif

<!-- Check if errors array in session has values and print them if yes -->
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
@endif