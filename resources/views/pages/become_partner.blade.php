@extends('layouts.app')

@section('content')

    <!-- TODO dont delete this-->
    @include('parts.break_space')
    @include('parts.error_success')

    <h2>Partner contact</h2>

    <form action="/bussiness" method="POST" enctype="multipart/form-data">

        <!-- Include token -->
        @csrf

        Company Name: <input type="text" name="bussiness_name" />
        <br/>
        Company Website: <input type="text" name="bussiness_website" />
        <br/>
        Person: <input type="text" name="bussiness_person" />
        <br/>

        <select name="bussiness_category">
            <option selected disabled>Choose category</option>
            <option value="production">Production</option>
            <option value="elearning">Elearning</option>
            <option value="other">Other</option>
        </select>

        <br/>
        Email: <input type="email" name="bussiness_email" />
        <br/>

        Phone number: <input type="number" name="bussiness_phone_number" />
        <br/>

        Message: <textarea name="bussiness_message"></textarea>
        <br/>
        Files: <input type="file" name="files[]" multiple />

        <!-- Submit form -->
        <button>Submit</button>

    </form>


@endsection