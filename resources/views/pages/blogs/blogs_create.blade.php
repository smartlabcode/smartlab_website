@extends('layouts.app')

<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}



@section('content')

    <h1>Blog create</h1>

    @include('parts.error_success')

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


        @include('parts.blog_tags_selector',[
            'type' => $type,
            'tags' => []
        ])

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

    <!-- Include summernote editor -->
    @include('parts.summernote')

@endsection