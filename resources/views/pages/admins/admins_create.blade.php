@extends('layouts.app')

<style>
    #addUserSaveButton {
        float: right;
    }
</style>

@section('content')

    <h1>Admin create</h1>

    @if(session('add_admin_message'))
        <div class="alert alert-success" role="alert">
            {{session('add_admin_message')}}
        </div>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif


    <form id="editAdminForm" action="/admins" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="lastname" placeholder="example@mail.com" value="">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="********">
            </div>

            <div class="form-group col-md-2">
                <button type="submit" style="position: relative; top: 31px;" class="btn btn-primary">Generate</button>
            </div>
        </div>

        <div class="form-group">
            <label for="roleSelect">Role</label>
            <select name="role" class="form-control" id="roleSelect">
                <option value="1">Superadmin</option>
                <option value="2" selected>Admin</option>
            </select>
        </div>

        <button id="addUserSaveButton" class="btn btn-primary">Save</button>

    </form>

@endsection