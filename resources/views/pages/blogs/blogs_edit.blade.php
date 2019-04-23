@extends('layouts.app')

<style>
    #editBlogSaveButton {
        float: right;
    }
</style>

@section('content')

    <h1>Blog edit</h1>

    <form action="/blogs" method="POST">

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

        <button id="editBlogSaveButton" type="submit" class="btn btn-primary">Edit</button>
    </form>

@endsection