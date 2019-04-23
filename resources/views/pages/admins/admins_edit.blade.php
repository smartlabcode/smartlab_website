@extends('layouts.app')

@section('content')

    <h1>Admin edit</h1>

        <form id="editAdminForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" value="{{$admin->name}}">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" placeholder="Lastname" value="{{$admin->lastname}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="lastname" placeholder="example@mail.com" disabled value="{{$admin->email}}">
            </div>
            <div class="form-group">
                <label for="roleSelect">Role</label>
                <select class="form-control" id="roleSelect">
                    <option value="1" @if($admin->roles_id == 1) selected @endif>Superadmin</option>
                    <option value="2" @if($admin->roles_id == 2) selected @endif>Admin</option>
                </select>
            </div>
        </form>

@endsection