@extends('layouts.app')

@section('content')

    <h1>Admin list</h1>

    <table class="table table-striped table-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>

    @foreach($admins as $admin)

        <tr>
            <th scope="row">1</th>
            <td>{{$admin->name}}</td>
            <td>{{$admin->lastname}}</td>
            <td>{{$admin->email}}</td>
            <td>@if($admin->roles_id == 1) Superadmin @else Admin @endif</td>
            <td><a href="admins/{{$admin->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
        </tr>

    @endforeach

        </tbody>
    </table>

@endsection