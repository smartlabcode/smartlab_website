@extends('layouts.app')

<style>
    #editBlogSaveButton {
        float: right;
    }
</style>

@section('content')

    <h1>Blog edit</h1>

    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif


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

        <div class="form-group">
            <label for="content">Blog text</label>
            <textarea class="form-control" name="content" id="content" rows="15">{{$blog->text}}</textarea>
        </div>

        <input id="idValue" type="hidden" value="{{$blog->id}}">
        <button id="editBlogSaveButton" onclick="submitEditForm()" class="btn btn-primary">Edit</button>
    </form>

    <script>
        function submitEditForm() {
            // get language
            let lang = document.getElementById("language").value;

            // get id
            let id = document.getElementById("idValue").value;

            // change action route
            let form = document.getElementById("editBlogForm");
            form.action = "/blogs/" + id + "/" + lang;

            form.submit();
        }
    </script>
@endsection