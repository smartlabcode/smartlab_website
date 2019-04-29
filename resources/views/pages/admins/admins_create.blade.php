@extends('layouts.app')

@section('content')

    <h1>Admin create</h1>

    @include('parts.error_success')

    <form id="addAdminForm" action="{{ route('admins.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="name">Name</label>
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
                <button id="generatePasswordButton" class="btn btn-primary" onclick="generatePassword()">Generate</button>
            </div>
        </div>

        <div class="form-group">
            <label for="roleSelect">Role</label>
            <select name="role" class="form-control" id="roleSelect">
                <option value="1" @if(old('role') == '1') selected @endif>Superadmin</option>
                <option value="2" @if(old('role') == '2') selected @endif>Admin</option>
            </select>
        </div>

        <button id="addUserSaveButton" type="submit" class="btn btn-primary">Save</button>

    </form>

@endsection