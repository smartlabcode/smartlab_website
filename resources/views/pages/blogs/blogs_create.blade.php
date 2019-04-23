@extends('layouts.app')

<style>
    #addBlogSaveButton {
        float: right;
    }
</style>

@section('content')

    <h1>Blog create</h1>

    <form action="/blogs" method="POST">

        @csrf

        <div class="form-group">
            <label for="language">Example select</label>
            <select class="form-control" name="language" id="language">
                <option value="en">English</option>
                <option value="de">German</option>
                <option value="bs">Bosnian</option>
            </select>
        </div>

        <div class="form-group">
            <label for="content">Example textarea</label>
            <textarea class="form-control" name="content" id="content" rows="15"></textarea>
        </div>

        <button id="addBlogSaveButton" type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection