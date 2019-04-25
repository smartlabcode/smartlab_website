@extends('layouts.app')

@section('content')

       <h1>@lang('index.heading')</h1>

       <a href="{{ env('BLOG_DOMAIN') }}/blog/7/de" target="_blank">Visit some blog</a>


       <form action="/contact" method="POST">
           <select name="title">
                  <option value="Mr." selected>Mr.</option>
                  <option value="Mrs.">Mrs.</option>
           </select>
          <input type="text" name="name" />
           <input type="text" name="lastname" />
          <input type="email" name="email" />
            <textarea name="message"></textarea>

           <button>Submit</button>
       </form>

@endsection

