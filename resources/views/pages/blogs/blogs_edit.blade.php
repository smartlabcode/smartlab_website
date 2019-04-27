@extends('layouts.app')

<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}

{{--<!-- include summernote css/js -->--}}
{{--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">--}}
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>--}}

@section('content')

    <h1>Blog edit</h1>

    <form id="editBlogForm" method="POST">

        @csrf
        @method('PUT')

        @include('parts.blog_language_selector', [
            'type' => 'edit'
        ])

        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$blog->heading}}" required>
        </div>

        <!-- WYSIWYG editor -->
        <div class="form-group">
            {{--<div id="content"></div>--}}
            <textarea class="form-control" name="content" placeholder="Blog content" id="content" rows="15"></textarea>
        </div>

        <input id="contentText" name="content" type="hidden" value="{{$blog->text}}"/>

        <input id="idValue" type="hidden" value="{{$blog->id}}">
        <button id="editBlogSaveButton" onclick="submitEditForm()" class="btn btn-primary">Edit</button>
    </form>

    <!-- loader -->
    <div id="loaderContainer">
        <div class="loader"></div>
    </div>

    @include('parts.summernote')

@endsection