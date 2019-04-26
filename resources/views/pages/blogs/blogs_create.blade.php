@extends('layouts.app')

<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>

@section('content')

    <h1>Blog create</h1>

    <form id="addBlogForm" method="POST">

        @csrf

        @php
            if(isset($id))
            {
                $type= 'add-edit';
            }  else
            {
                $type = 'add';
            }
        @endphp

        @include('parts.blog_language_selector',[
            'type' => $type
        ])

        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                   value="@if(isset($language)) {{$blog->heading}} @else @endif">
        </div>

        <div class="form-group">
            <label for="content">Blog text</label>
            <textarea class="form-control" name="content" placeholder="Blog content" id="content" rows="15"></textarea>
        </div>

        <input id="contentText" name="content" type="hidden" value="@if(isset($blog->text)) {{$blog->text}} @endif"/>
        <input id="addToExistingBlog" type="hidden" name="existing" value="@if(isset($language)) true @else false @endif">
        <input id="blogId" type="hidden" name="blog_id" value="@if(isset($id)) {{$id}}@endif">

        <button id="addBlogSaveButton" onclick="submitAddForm()" class="btn btn-primary">Save</button>
    </form>

    @if(isset($id))
        <div id="loaderContainer">
            <div class="loader"></div>
        </div>
    @endif

    <!-- Scripts for Summernote -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>
    <script>

        // initilize summernote
        $(document).ready(function() {
            $('#content').summernote({
                placeholder: '',
                tabsize: 10,
                height: 300
            });
        });

        // wait for Summernote to be created and then set blog text value in it
        setTimeout(function() {

            let container = document.getElementsByClassName('note-editable')[0];

            let text = document.getElementById("contentText");
            container.innerHTML = text.value;

            var loader = document.getElementById("loaderContainer");
            loader.parentNode.removeChild(loader);

        }, 2000);

    </script>

@endsection