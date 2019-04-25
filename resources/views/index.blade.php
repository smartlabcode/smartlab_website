@extends('layouts.app')

@section('content')

       <h1>@lang('index.heading')</h1>

       <a href="{{ env('BLOG_DOMAIN') }}/blog/7/de" target="_blank">Visit some blog</a>


       @if(session('message'))
              <div class="alert alert-success" role="alert">
                     {{session('message')}}
              </div>
       @endif

       @if($errors->any())
              @foreach($errors->all() as $error)
                     <div class="alert alert-danger" role="alert">
                            {{$error}}
                     </div>
              @endforeach
       @endif

       <hr/>

       <form action="/contact" method="POST">

              @csrf

           Title: <select name="title">
                      <option value="Mr." selected>Mr.</option>
                      <option value="Mrs.">Mrs.</option>
                    </select>
              <br/>
          Name: <input type="text" name="name" />
              <br/>
           Lastname: <input type="text" name="lastname" />
              <br/>
           Email: <input type="email" name="email" />
              <br/>
            Message: <textarea name="message"></textarea>

           <button>Submit</button>
       </form>

    <hr/>

    <form action="/subscribe" method="POST">

        @csrf

        Email: <input name="email" type="email"/>
        <button>Subscribe</button>

    </form>

@endsection

