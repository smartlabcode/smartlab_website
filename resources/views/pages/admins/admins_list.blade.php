@extends('layouts.app')

<style>

    #paperFab {
        background-color: #3490dc;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        cursor: pointer;
        position: fixed;
        bottom: 25px;
        right: 25px;
    }

    #paperFab:hover {
        box-shadow: 2px 2px 2px rgba(150,150,150, 0.5), -2px 0px 2px rgba(150,150,150, 0.5);
    }

    #paperFab span {
        font-size: 30px;
        position: relative;
        left: 16px;
        color: #fff;
    }

</style>

@section('content')

    <h1>Admin list</h1>

    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
    @endif

    <table class="table table-striped table-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>

    @include('parts.modal', ['title' => 'admin'])

    @foreach($admins as $key => $admin)

        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$admin->name}}</td>
            <td>{{$admin->lastname}}</td>
            <td>{{$admin->email}}</td>
            <td>@if($admin->roles_id == 1) Superadmin @else Admin @endif</td>
            <td><a href="admins/{{$admin->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
            <td>
                @if($admin->roles_id !== 1)
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="updateId({{$admin->id}})">Delete</button>
                @endif
            </td>
        </tr>

    @endforeach

        </tbody>
    </table>

    <div id="paperFab" onclick="redirectTocreatePage()">
        <span>+</span>
    </div>

    <script>

        var id = 0;
        function updateId(idNum) {
            id = idNum;
        }

        function redirectTocreatePage() {
            var url = "/admins/create";
            location.href = url;
        }

        function deleteAction() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method:'DELETE',
                url:'/admins/' + id,
                success:function(data){
                    // reload page to  show updated list of admins
                    location.reload();
                }
            });
        }
    </script>

@endsection