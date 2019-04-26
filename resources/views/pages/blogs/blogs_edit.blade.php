@extends('layouts.app')

<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>

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
            <input type="text" class="form-control" id="title" name="title" value="{{$blog->heading}}">
        </div>

        <!-- WYSIWYG editor -->
        <div class="form-group">
            <div id="content"></div>
        </div>

        <input id="contentText" name="content" type="hidden" value="{{$blog->text}}"/>

        <input id="idValue" type="hidden" value="{{$blog->id}}">
        <button id="editBlogSaveButton" onclick="submitEditForm()" class="btn btn-primary">Edit</button>
    </form>

    <!-- loader -->
    <div id="loaderContainer">
        <div class="loader"></div>
    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>
    <script>

        // initilize Summernote
        $(document).ready(function() {
            $('#content').summernote({
                placeholder: '',
                tabsize: 10,
                height: 300,
                popover: {
                    image: [
                        ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone', 'floatCenter']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                }

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