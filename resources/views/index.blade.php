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

    <!-- Form for sending contact message -->
   <form action="/contact" method="POST">

       <!-- Include token -->
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

       <!-- Submit form -->
       <button>Submit</button>

   </form>

    <hr/>

    <!-- Form for sending subscription email -->
    <form action="/subscribe" method="POST">

        <!-- Include token -->
        @csrf

        Email: <input name="email" type="email"/>
        <input name="language" type="hidden" value="{{App::getlocale()}}"/>
        <button>Subscribe</button>

    </form>

    <hr/>

    <h2>Bussiness contact</h2>

    <form action="/bussiness" method="POST" enctype="multipart/form-data">

        <!-- Include token -->
        @csrf

        Bussiness name: <input type="text" name="bussiness_name" />
        <br/>
        Subject: <input type="text" name="bussiness_subject" />
        <br/>
        Email: <input type="email" name="bussiness_email" />
        <br/>
        Message: <textarea name="bussiness_message"></textarea>
        <br/>
        Files: <input type="file" name="files[]" multiple />

        <!-- Submit form -->
        <button>Submit</button>

    </form>

    <img src="{{ asset('images/blog.jpg') }}"/>

@endsection

