<!-- Extend main layout -->
@extends('layouts.app')

@section('content')

    <!-- Heading -->
   <h1>@lang('index.heading')</h1>

    <!-- Dummy link -->
   <a href="{{ env('BLOG_DOMAIN') }}/blog/7/de" target="_blank">Visit some blog</a>

   <!-- Include error/success messages to be listed if anything goes wrong -->
   @include('parts.error_success')

   <hr/>

    <!-- Form for sending -->
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
        <input name="language" type="hidden" value="{{App::getlocale()}}"/>
        <button>Subscribe</button>

    </form>

@endsection

