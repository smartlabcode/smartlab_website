@extends('layouts.app')

@section('content')

    <!-- TODO dont delete this-->
    @include('parts.break_space')
    @include('parts.error_success')

    <h2>Career contact</h2>

    <form action="/careers" method="POST" enctype="multipart/form-data">

        <!-- Include token -->
        @csrf

        Name: <input type="text" name="name" />
        <br/>
        Lastname: <input type="text" name="lastname" />
        <br/>
        Subject: <input type="text" name="subject" />
        <br/>

        <select name="category">
            <option selected disabled>Choose category</option>
            <option value="designer">Designer</option>
            <option value="developer">Developer</option>
            <option value="ux-ui-designer">UX/UI Designer</option>
            <option value="practitioner">Practitioner</option>
        </select>

        Email: <input type="email" name="email" />
        <br/>

        Phone number: <input type="number" name="phone_number" />
        <br/>

        Message: <textarea name="message"></textarea>
        <br/>
        Files: <input type="file" name="files[]" multiple />

        <!-- Submit form -->
        <button>Submit</button>

    </form>


@endsection