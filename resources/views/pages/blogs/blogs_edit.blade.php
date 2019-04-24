
<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>

@extends('layouts.app')


<style>
    #editBlogSaveButton {
        float: right;
    }
</style>

@section('content')

    <h1>Blog edit</h1>

    <form id="editBlogForm" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="language">Blog language</label>
            <select class="form-control" name="language" id="language">
                <option value="en">English</option>
                <option value="de">German</option>
                <option value="bs">Bosnian</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$blog->heading}}">
        </div>

        <!-- WYSIWYG editor -->
        <div class="form-group">
            <div id="content" onload="set()"></div>
        </div>

        <input id="contentText" name="content" type="hidden" value="{{$blog->text}}"/>

        <input id="idValue" type="hidden" value="{{$blog->id}}">
        <button id="editBlogSaveButton" onclick="submitEditForm()" class="btn btn-primary">Edit</button>
    </form>

    <script>

        function submitEditForm() {
            event.preventDefault();
            // get language
            let lang = document.getElementById("language").value;

            // get id
            let id = document.getElementById("idValue").value;

            // change action route
            let form = document.getElementById("editBlogForm");

            // set content
            let content = form.getElementsByClassName('note-editable')[0];
            let text = content.innerHTML;
            console.log(text);
            document.getElementById("contentText").value = text;

            form.action = "/blogs/" + id + "/" + lang;

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