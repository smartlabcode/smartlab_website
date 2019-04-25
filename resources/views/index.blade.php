@extends('layouts.app')

@section('content')

       <h1>@lang('index.heading')</h1>

       <a href="{{ env('BLOG_DOMAIN') }}/blog/7/de" target="_blank">Visit some blog</a>

@endsection

