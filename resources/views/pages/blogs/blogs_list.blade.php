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

    <h1>Blogs list</h1>

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
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Created at</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($blogs as $key => $blog)

            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$blog->heading}}</td>
                <td>{{$blog->name}} {{$blog->lastname}}</td>
                <td>{{$blog->created_at}}</td>
                <td><a href="/blogs/{{$blog->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                <td><button class="btn btn-danger btn-sm" onclick="deleteBlog({{$blog->id}})">Delete</button></td>
            </tr>

        @endforeach

        </tbody>
    </table>

    <div id="paperFab" onclick="redirectToCreatePage()">
        <span>+</span>
    </div>

    <script>
        function redirectToCreatePage() {
            var url = "/blogs/create";
            location.href = url;
        }

        function deleteBlog(id) {
            console.log(id);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method:'DELETE',
                url:'/blogs/' + id,
                success:function(data){
                    // reload page to  show updated list of blogs
                    location.reload();
                }
            });
        }
    </script>

@endsection