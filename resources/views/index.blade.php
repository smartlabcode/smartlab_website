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

        Name: <input type="text" name="name" />
        <br/>
        Lastname: <input type="text" name="lastname" />
        <br/>
        Email: <input type="email" name="email" />
        <br/>
        Subject: <input type="text" name="subject" />
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

    <h2>Schedule demo</h2>

    <form action="/demo" method="POST">

        <!-- Include token -->
        @csrf
        <div class="contact-section" id="contact">
            <div class="contact-form-container">

                <div class="contact-form-group">
                    <div>
                        <label for="name">*Name and Surname</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div>
                        <label for="company">Company</label>
                        <input type="text" name="company" id="company" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="subject">*Subject</label>
                        <input type="text" name="subject" id="subject" />
                    </div>
                    <div>
                        <label for="email">*Email</label>
                        <input type="email" name="email" id="email" />
                    </div>
                </div>
                <div class="contact-form-group">
                    <div>
                        <label for="date">*Meeting date</label>
                        <input type="date" name="date" id="date" />
                    </div>
                    <div>
                        <label for="time">*Meeting time</label>
                        <input type="time" name="time" id="time" />
                    </div>
                </div>
                <div class="contact-form-group textarea">
                    <label for="message">*Message</label>
                    <textarea name="message" rows="7" id="message"></textarea>
                </div>
                <input class="button submit" type="submit" value="Send" />

            </div>
        </div>

    </form>

    <h2>BLOGS</h2>

    @foreach($blogs as $blog)

        <div>
            <h2>{{$blog->heading}}</h2>
            <img style="width: 200px; height: 200px" src="{{$blog->image_path}}"/>
        </div>

    @endforeach

@endsection


