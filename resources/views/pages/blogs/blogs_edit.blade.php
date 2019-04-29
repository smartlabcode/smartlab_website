@extends('layouts.app')

<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}

{{--<!-- include summernote css/js -->--}}
{{--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">--}}
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>--}}

@section('content')

    <h1>Blog edit</h1>

    @include('parts.error_success')

    <form id="editBlogForm" method="POST">

        @csrf
        @method('PUT')

        @include('parts.blog_language_selector', [
            'type' => 'edit'
        ])

        @php
            $oldTitle = old('title');
        @endphp

        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text" class="form-control" id="title" name="title" value="@if(isset($oldTitle))  {{ old('title') }} @else {{$blog->heading}} @endif" required>
        </div>

        <!-- WYSIWYG editor -->
        <div class="form-group">
            {{--<div id="content"></div>--}}
            <textarea class="form-control" name="content" placeholder="Blog content" id="content" rows="15"></textarea>
        </div>

        @php
            $tags = [];

            if($blog->tags){
                $tags = explode(',', $blog->tags);
            }

            $oldContent = old('content');
        @endphp

        @include('parts.blog_tags_selector',[
           'type' => 'edit',
           'tags' => $tags
        ])

        <input id="contentText" name="content" type="hidden" value="@if(isset($oldContent)) {{ old('content') }} @else {{$blog->text}} @endif"/>

        <input id="idValue" type="hidden" value="{{$blog->id}}">
        <button id="editBlogSaveButton" onclick="submitEditForm()" class="btn btn-primary">Edit</button>
    </form>

    <!-- loader -->
    <div id="loaderContainer">
        <div class="loader"></div>
    </div>

    @include('parts.summernote')

@endsection