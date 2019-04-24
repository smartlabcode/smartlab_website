@extends('layouts.app')

<style>

    #addUserSaveButton {
        float: right;
    }

    #generatePasswordButton {
        position: relative;
        top: 31px;
    }

</style>

@section('content')

    <h1>Admin create</h1>

    <form id="editAdminForm" action="/admins" method="POST">

        @csrf

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
            <input type="email" class="form-control" id="lastname" placeholder="example@mail.com" name="email">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="********" name="password">
            </div>

            <div class="form-group col-md-2">
                <button id="generatePasswordButton" class="btn btn-primary" onclick="generatePassword()">Generate</button>
            </div>
        </div>

        <div class="form-group">
            <label for="roleSelect">Role</label>
            <select name="role" class="form-control" id="roleSelect">
                <option value="1">Superadmin</option>
                <option value="2" selected>Admin</option>
            </select>
        </div>

        <button id="addUserSaveButton" type="submit" class="btn btn-primary">Save</button>

    </form>

    <script>

        function generatePassword() {
            event.preventDefault();

            var length = Math.floor(Math.random() * 4) + 8;
            document.getElementById("password").value = makePassword(length);
        }

        function makePassword(length) {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < length; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
        }

    </script>
@endsection