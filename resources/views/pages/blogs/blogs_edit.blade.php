<!-- Extend main layout -->
@extends('layouts.app')

@section('content')

    <!-- Heading -->
    <h1>Blog edit</h1>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

    <!-- Form for editing existing blog -->
    <form id="editBlogForm" method="POST">

        <!-- Include token -->
        @csrf

        <!-- Set right method for the form -->
        @method('PUT')

        <!-- Include language selector for the blog and set page(type) from which it is included -->
        @include('parts.blog_language_selector', [
            'type' => 'edit'
        ])

        <!-- Check for session values and set them into variables -->
        @php
            $oldTitle = old('title');

            $tags = [];

            if($blog->tags){
                $tags = explode(',', $blog->tags);
            }

            $oldContent = old('content');
        @endphp

        <!-- Form elements -->
        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text" class="form-control" id="title" name="title" value="@if(isset($oldTitle))  {{ old('title') }} @else {{$blog->heading}} @endif" required>
        </div>
        <div class="form-group">
            <!-- Fake element for editor -->
            <textarea class="form-control" name="content" placeholder="Blog content" id="content" rows="15"></textarea>
        </div>

        <!-- Include tags selector for the blog and set neccessary data -->
        @include('parts.blog_tags_selector',[
           'type' => 'edit',
           'tags' => $tags
        ])

        <!-- Hidden input values used for holding specific values -->
        <input id="contentText" name="content" type="hidden" value="@if(isset($oldContent)) {{ old('content') }} @else {{$blog->text}} @endif"/>
        <input id="idValue" type="hidden" value="{{$blog->id}}">

        <!-- Submit form button -->
        <button id="editBlogSaveButton" onclick="submitEditForm()" class="btn btn-primary">Edit</button>
    </form>

    <!-- Loader element -->
    <div id="loaderContainer">
        <div class="loader"></div>
    </div>

    <!-- Include summernote editor -->
    @include('parts.summernote')

@endsection