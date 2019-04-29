<!-- Extend main layout -->
@extends('layouts.app')

@section('content')

    <!-- Heading -->
    <h1>Admin edit</h1>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

        <!-- Form for editing admin -->
        <form id="editAdminForm" action="/admins/{{$admin->id}}" method="POST">

            <!-- Include token -->
            @csrf
            <!-- Set form method -->
            @method('PUT')

            <!-- Set session values if they exist in variables-->
            @php
               $oldName = old('name');
               $oldLastname = old('lastname');
               $oldEmail = old('email');
               $oldPassword = old('password');
               $oldRole = old('role');
            @endphp

            <!-- Form elements -->
            <div class="form-group">
                <label for="name">Name</label>                                  <!-- Check if there is corresponding value in session and set it, if not use original value -->
                <input type="text" class="form-control" id="name" name="name" value="@if(isset($oldName)) {{ old('name') }} @else {{$admin->name}} @endif">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="@if(isset($oldLastname)) {{ old('lastname') }} @else {{$admin->lastname}} @endif">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="lastname" disabled value="@if(isset($oldEmail)) {{ old('email') }} @else {{$admin->email}} @endif">
            </div>

            <!-- Role selection -->
            <div class="form-group">
                <label for="roleSelect">Role</label>
                <select name="role" class="form-control" id="roleSelect">
                    <!-- If there is role value in session set it here, if not use original value -->
                    <option value="1" @if($oldRole == '1') selected @elseif($admin->roles_id == 1) selected @endif>Superadmin</option>
                    <option value="2" @if($oldRole == '2') selected @elseif($admin->roles_id == 2) selected @endif>Admin</option>
                </select>
            </div>

            <!-- Submit form button -->
            <button id="editUserSaveButton" type="submit" class="btn btn-primary">Edit</button>
        </form>

@endsection