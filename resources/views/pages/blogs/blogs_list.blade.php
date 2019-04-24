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

    .publish button {
        /*width: 70px;*/
        /*position: relative;*/
        /*left: 50%;*/
        /*margin-left: -35px;*/
    }

    .flagIcons {
        width: 24px;
        height: 24px;
        cursor: pointer;
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
            <th scope="col">Published/Unpublished</th>
            <th scope="col">Languages</th>
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
                <td class="publish">
                    @if($blog->published == 'false')
                        <button type="button" class="btn btn-success btn-sm" onclick="changePublishState(true, {{$blog->id}})">Publish</button>
                    @else
                        <button type="button" class="btn btn-dark btn-sm" onclick="changePublishState(false, {{$blog->id}})">Unpublish</button>
                    @endif
                </td>
                <td>

                    @if($blog->language == 'en')
                      <img class="flagIcons" src="{{asset('images/icons/001-united-kingdom.svg') }}">
                     @elseif($blog->language == 'de')
                        <img class="flagIcons" src="{{asset('images/icons/002-germany.svg') }}">
                      @else
                        <img class="flagIcons" src="{{asset('images/icons/003-bosnia-and-herzegovina.svg') }}">
                     @endif
                </td>
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

        function changePublishState(value, id) {
            console.log(id + ' --- ' + value);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method:'PUT',
                url:'/publish/' + id + '/' + value,
                success:function(data){
                    // reload page to  show updated list of blogs
                    location.reload();
                }
            });
        }

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