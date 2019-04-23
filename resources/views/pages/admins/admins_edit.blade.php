@extends('layouts.app')

<style>
    #editUserSaveButton {
        float: right;
    }
</style>

@section('content')

    <h1>Admin edit</h1>

        @if(session('edit_admin_message'))
            <div class="alert alert-success" role="alert">
                {{session('edit_admin_message')}}
            </div>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif


        <form id="editAdminForm" action="/admins/{{$admin->id}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$admin->name}}">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{$admin->lastname}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="lastname" disabled value="{{$admin->email}}">
            </div>
            <div class="form-group">
                <label for="roleSelect">Role</label>
                <select name="role" class="form-control" id="roleSelect">
                    <option value="1" @if($admin->roles_id == 1) selected @endif>Superadmin</option>
                    <option value="2" @if($admin->roles_id == 2) selected @endif>Admin</option>
                </select>
            </div>

            <button id="editUserSaveButton" type="submit" class="btn btn-primary">Edit</button>
        </form>

@endsection