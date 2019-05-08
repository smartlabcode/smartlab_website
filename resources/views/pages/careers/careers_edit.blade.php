@extends('layouts.app')

@section('content')

    <h2>Careers edit</h2>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

    <!-- Form for editing job -->
    <form id="editCareerForm" action="/careers/{{$job->id}}" method="POST">

    <!-- Include token -->
    @csrf
    <!-- Set form method -->
    @method('PUT')

    <!-- Set session values if they exist in variables -->
    @php
        $oldTitle = old('title');
        $oldBody = old('body');
    @endphp

        <!-- Form elements -->
        <div class="form-group">
            <label for="name">Title</label>                         <!-- Check if there is corresponding value in session and set it, if not use original value -->
            <input type="text" class="form-control" id="name" name="title" value="@if(isset($oldTitle)) {{ old('title') }} @else {{$job->title}} @endif">
        </div>
        <div class="form-group">
            <!-- Fake element for editor -->
            <textarea class="form-control" name="body" placeholder="Career content" id="content" rows="15"></textarea>
        </div>

        <!-- Hidden input values used for holding specific values -->
        <input id="contentText" name="content" type="hidden" value="@if(isset($oldBody)) {{ old('body') }} @else {{$job->body}} @endif"/>
        <input id="idValue" type="hidden" value="{{$job->id}}">

        <!-- Submit form button -->
        <button id="editCareerSaveButton" onclick="submitJobEditForm()" type="submit" class="btn btn-primary">Edit</button>
    </form>

    <!-- Loader element -->
    <div id="loaderContainer">
        <div class="loader"></div>
    </div>

    <!-- Include summernote editor -->
    @include('parts.summernote')

@endsection