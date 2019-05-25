@extends('layouts.app')

@section('content')

    @include('parts.break_space')

    <div class="listTable">

    <h2>Careers create</h2>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

        <!-- Form for editing job -->
        <form id="addCareerForm" action="/careers/store" method="POST">

            <!-- Include token -->
            @csrf

            <!-- Set session values if they exist in variables -->
            @php
                $oldTitle = old('title');
                $oldBody = old('body');
            @endphp

            <!-- Form elements -->
            <div class="form-group">
                <label for="name">Title</label>                         <!-- Check if there is corresponding value in session and set it, if not use original value -->
                <input type="text" class="form-control" id="name" name="title" value="@if(isset($oldTitle)) {{ old('title') }} @endif">
            </div>
            <div class="form-group">
                <!-- Fake element for editor -->
                <textarea class="form-control" name="body" placeholder="Career content" id="content" rows="15"></textarea>
            </div>

            <!-- Hidden input values used for holding specific values -->
            <input id="contentText" name="body" type="hidden" value="@if(isset($oldBody)) {{ old('body') }} @endif"/>
            <input id="idValue" type="hidden" value="">

            <!-- Submit form button -->
            <button id="addCareerSaveButton" onclick="submitJobAddForm()" type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

    <!-- Loader element -->
    @if(isset($id))
        <div id="loaderContainer">
            <div class="loader"></div>
        </div>
    @endif

    <!-- Include summernote editor -->
    @include('parts.summernote')

@endsection