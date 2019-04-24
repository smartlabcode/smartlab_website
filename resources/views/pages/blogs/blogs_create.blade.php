@extends('layouts.app')

<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>


<style>
    #addBlogSaveButton {
        float: right;
    }
</style>

@section('content')

    <h1>Blog create</h1>

    <form id="addBlogForm" method="POST">

        @csrf

        <div class="form-group">
            <label for="language">Blog language</label>
            <select class="form-control" name="language" id="language" @if(isset($language)) disabled @endif>
                <option value="en" @if(isset($language) && $language == 'en') selected @endif>English</option>
                <option value="de" @if(isset($language) && $language == 'de') selected @endif>German</option>
                <option value="bs" @if(isset($language) && $language == 'bs') selected @endif>Bosnian</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                   value="@if(isset($language)) {{$blog->heading}} @endif">
        </div>

        <div class="form-group">
            <label for="content">Blog text</label>
            <textarea class="form-control" name="content" placeholder="Blog content" id="content" rows="15"></textarea>
        </div>

        <input id="contentText" name="content" type="hidden" value="{{$blog->text}}"/>

        <button id="addBlogSaveButton" onclick="submitAddForm()" class="btn btn-primary">Save</button>
    </form>

    <script>

        function submitAddForm() {
            event.preventDefault();

            // change action route
            let form = document.getElementById("addBlogForm");

            // set content
            let content = form.getElementsByClassName('note-editable')[0];
            let text = content.innerHTML;
            console.log(text);
            document.getElementById("contentText").value = text;

            form.action = "/blogs";

            form.submit();
        }

    </script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>
    <script>

        $(document).ready(function() {
            $('#content').summernote({
                placeholder: '',
                tabsize: 10,
                height: 300
            });
        });

        setTimeout(function() {
            console.log("on load...");

            // let content = document.getElementById("content");
            // console.log(content);
            let container = document.getElementsByClassName('note-editable')[0];

            let text = document.getElementById("contentText");
            container.innerHTML = text.value;

        }, 2000);

    </script>

@endsection