<!-- Extend main layout -->
@extends('layouts.app')

@section('content')

    <!-- Heading -->
    <h1>Blog create</h1>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

    <!-- Form for creating blog -->
    <form id="addBlogForm" method="POST">

        <!-- Include token -->
        @csrf

        <!-- Check for session values and set them into variables -->
        @php
            $oldContent = old('content');
            $oldTitle = old('title');

            if(isset($id))
            {
                $type= 'add-edit';
                $tags = explode(',', $blog->tags);
            }  else
            {
                $type = 'add';
                $tags = [];
            }
        @endphp

        <!-- Include language selector for the blog and set page(type) from which it is included -->
        @include('parts.blog_language_selector',[
            'type' => $type
        ])

        <!-- Form elements -->
        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                   value="@if(isset($oldTitle)) {{ old('title') }} @elseif(isset($language)) {{$blog->heading}} @endif">
        </div>
        <div class="form-group">
            <label for="content">Blog text</label>
            <!-- Fake element for editor -->
            <textarea class="form-control" name="content" placeholder="Blog content" id="content" rows="15"></textarea>
        </div>

        <!-- Include tags selector for the blog and set neccessary data -->
        @include('parts.blog_tags_selector',[
            'type' => $type,
            'tags' => $tags
        ])

        <!-- Hidden input values used for holding specific values -->
        <input id="contentText" name="content" type="hidden" value="@if(isset($oldContent)) {{ old('content') }} @elseif(isset($blog->text)) {{$blog->text}} @endif"/>
        <input id="addToExistingBlog" type="hidden" name="existing" value="@if(isset($language)) true @else false @endif">
        <input id="blogId" type="hidden" name="blog_id" value="@if(isset($id)) {{$id}} @endif">

        <!-- Form submit button -->
        <button id="addBlogSaveButton" onclick="submitAddForm()" class="btn btn-primary">Save</button>
    </form>

    <!-- Create loader element if this is not create blog page (id for create blog page is not set) -->
    @if(isset($id))
        <div id="loaderContainer">
            <div class="loader"></div>
        </div>
    @endif

    <!-- Include summernote editor -->
    @include('parts.summernote')

@endsection