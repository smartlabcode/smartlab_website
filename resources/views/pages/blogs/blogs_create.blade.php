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

    .inactiveUpload {
        pointer-events: none;
        opacity: 0.87;
    }
</style>
@section('css')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
@endsection
@section('content')

@include('parts.break_space')

<div class="listTable">

    <!-- Heading -->
    <h1>Blog create</h1>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

    <!-- Form for creating blog -->
    <form id="addBlogForm" method="POST" enctype="multipart/form-data">

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
        } else
        {
        $type = 'add';
        $tags = [];
        }
        @endphp


<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <!-- Form elements -->
        <div id="formContainer">
            <div>

                <!-- Include language selector for the blog and set page(type) from which it is included -->
                @include('parts.blog_language_selector',[
                'type' => $type
                ])

                <div class="form-group">
                    <label for="title">Blog title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="">

                </div>

            </div>

            <!-- Uploading blog image -->
            <img id="imagePlaceholder" onclick="openUploadWindow()" class="@if(isset($language)) inactiveUpload @endif" src="@if (isset($blog->image_path)) {{$blog->image_path}} @else {{ asset('images/placeholder.png') }} @endif" />
            <input id="imageInput" type="file" accept="image/jpg,image/png,image/jpeg" name="image" onchange="showUploadedImage()" />

        </div>

        <div class="form-group">
            <label for="content">Blog text</label>
            <!-- Fake element for editor -->
            <textarea id="editor contentText" name="editor1"></textarea>
            {{-- <textarea class="form-control" name="content" placeholder="Blog content" id="content" rows="15"></textarea> --}}
        </div>

        <!-- Include tags selector for the blog and set neccessary data -->
        @include('parts.blog_tags_selector',[
        'type' => $type,
        'tags' => $tags
        ])

        <!-- Hidden input values used for holding specific values -->
        <input id="contentText" name="content" type="hidden" value="" />
        <input id="addToExistingBlog" type="hidden" name="existing" value="@if(isset($language)) true @else false @endif">
        <input id="blogId" type="hidden" name="blog_id" value="@if(isset($id)) {{$id}} @endif">

        <!-- Form submit button -->
        <button id="addBlogSaveButton" onclick="submitAddForm()" class="btn btn-primary">Save</button>
    </form>

</div>

<!-- Create loader element if this is not create blog page (id for create blog page is not set) -->
@if(isset($id))
<div id="loaderContainer">
    <div class="loader"></div>
</div>
@endif

<!-- Include summernote editor -->
{{-- @include('parts.summernote') --}}
@endsection
@section('js')
<script>
    CKEDITOR.config.height = 500;

    function openUploadWindow() {

        var upload = document.getElementById("imageInput");
        upload.click();
    }

    function showUploadedImage() {
        var file = document.getElementById("imageInput").files[0];

        _PREVIEW_URL = URL.createObjectURL(file);
        document.getElementById('imagePlaceholder').src = _PREVIEW_URL;

    }

    ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );

</script>
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script src="{{ asset('/js/app.js') }}"></script>
@endsection