<!-- Extend main layout -->
@extends('layouts.app')
@section('css')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
@endsection
@section('content')

@include('parts.break_space')

<div class="listTable">

    <!-- Heading -->
    <h1>Admin create</h1>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

    <!-- Form for creating new admin -->
    <form id="addAdminForm" action="{{ route('admins.store') }}" method="POST">

        <!-- Include token -->
        @csrf

        <!-- Form elements-->
        <div class="form-group">
            <label for="name">Name</label> <!-- If there is name value in session set it here -->
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname" value="{{ old('lastname') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="lastname" placeholder="example@mail.com" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="********" name="password" value="{{ old('password') }}">
            </div>

            <div class="form-group col-md-2">
                <!-- Generates new password for the admin -->
                <button id="generatePasswordButton" class="btn btn-primary" onclick="generatePassword()">Generate</button>
            </div>
        </div>

        <!-- Role selection -->
        <div class="form-group">
            <label for="roleSelect">Role</label>
            <select name="role" class="form-control" id="roleSelect">
                <!-- If there is role value in session set it here (for example if user submitted invalid form old inputs wont be deleted) -->
                <option value="1" @if(old('role')=='1' ) selected @endif>Superadmin</option>
                <option value="2" @if(old('role')=='2' ) selected @endif>Admin</option>
            </select>
        </div>

        <!-- Submit form button -->
        <button id="addUserSaveButton" type="submit" class="btn btn-primary">Save</button>

    </form>

</div>

@endsection
@section('js')
<script src="{{ asset('/js/app.js') }}"></script>
@endsection