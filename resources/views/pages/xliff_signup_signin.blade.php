@extends('layouts.app')

@section('content')

    @include('parts.break_space')

    <h2>Xliff sign up or sign in</h2>

    <h3>Sign up</h3>

    @include('parts.error_success')

    <form action="/xlf/signup" method="POST">

        @csrf

        <input type="hidden" name="name" value="Xlf User" />
        <input type="email" name="email" /><br/>
        <input type="password" name="password" /><br/>
        <input type="password" name="password_confirmation" /><br/>

        <button type="submit">Register</button>
    </form>

    <br/>

    <h3>Sign in</h3>

    <form action="/xlf/signin" method="POST">

        @csrf

        <input type="email" name="email" /><br/>
        <input type="password" name="password" /><br/>

        <button type="submit">Login</button>
    </form>



@endsection