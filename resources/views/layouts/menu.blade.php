{{--@extends('layouts.app')--}}

<style>

    .nav-item{
      display: inline-block;
        margin-right: 15px;
        cursor: pointer;
    }

</style>

@section('menu')

    <li class="nav-item">What we do</li>
    <li class="nav-item">Who we are</li>
    <li class="nav-item">Join us</li>
    <li class="nav-item">
        <a href="https://blog.smartlab.ba" target="_blank">Blog</a>
    </li>
    <li class="nav-item">Contact</li>
    @auth
        <li class="nav-item">
            <a href="{{route('admins.index')}}">Admins</a>
        </li>
        <li class="nav-item">
            <a href="{{route('blogs.index')}}">Blogs</a>
        </li>
        <li class="nav-item"><a href="{{route('logout')}}">Logout</a></li>
    @endauth

@endsection