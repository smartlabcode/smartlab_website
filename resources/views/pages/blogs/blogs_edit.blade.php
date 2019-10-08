<!-- Extend main layout -->
@extends('layouts.app')

<style>
    #imagePlaceholder {
        display: inline-block;
        width: 250px !important;
        height: 250px !important;
        cursor: pointer;
        box-shadow: 2px 2px 2px rgba(150, 150, 150, 0.5), -2px 0 2px rgba(150, 150, 150, 0.5);
    }


    #imageInput {
        display: none;
    }

    #formContainer {
        display: flex;
        flex-direction: row;
        width: 100%;
        justify-content: space-between;
    }

    #formContainer>div {
        width: calc(100% - 300px);
    }
</style>
@section('css')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
@endsection
@section('content')

@include('parts.break_space')

<div class="listTable">

    <!-- Heading -->
    <h1>Blog edit</h1>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

    <!-- Form for editing existing blog -->
    <form id="editBlogForm" method="POST" enctype="multipart/form-data">

        <!-- Include token -->
        @csrf

        <!-- Set right method for the form -->
        @method('PUT')

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
        <div id="formContainer">

            <div>
                <!-- Include language selector for the blog and set page(type) from which it is included -->
                @include('parts.blog_language_selector', [
                'type' => 'edit'
                ])

                <div class="form-group">
                    <label for="title">Blog title</label>
                    <input type="text" class="form-control" id="title" name="title" value="@if(isset($oldTitle))  {{ old('title') }} @else {{$blog->heading}} @endif" required>
                </div>

            </div>

            <!-- Uploading blog image -->
            <img id="imagePlaceholder" onclick="openUploadWindow()" src="{{ asset($blog->image_path) }}" />
            <input id="imageInput" type="file" accept="image/jpg,image/png,image/jpeg" name="image" onchange="showUploadedImage()" />

        </div>

        <br />

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
        <input id="contentText" name="content" type="hidden" value="@if(isset($oldContent)) {{ old('content') }} @else {{$blog->text}} @endif" />
        <input id="idValue" type="hidden" value="{{$blog->id}}">
        <input id="oldImageName" type="hidden" name="old_image_name" value="{{$blog->image_path}}">

        <!-- Submit form button -->
        <button id="editBlogSaveButton" onclick="submitEditForm()" class="btn btn-primary">Edit</button>
    </form>

</div>

<!-- Loader element -->
<div id="loaderContainer">
    <div class="loader"></div>
</div>

<!-- Include summernote editor -->
@include('parts.summernote')



@endsection
@section('js')
<script>
    function openUploadWindow() {

        var upload = document.getElementById("imageInput");
        upload.click();
    }

    function showUploadedImage() {
        var file = document.getElementById("imageInput").files[0];

        _PREVIEW_URL = URL.createObjectURL(file);
        document.getElementById('imagePlaceholder').src = _PREVIEW_URL;

    }
</script>
<script src="{{ asset('/js/app.js') }}"></script>
@endsection