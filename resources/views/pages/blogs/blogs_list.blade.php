@extends('layouts.app')

@section('content')

    <h1>Blogs list</h1>

    @include('parts.error_success')

    @include('parts.modal', ['title' => 'blog'])

    <table class="table table-striped table-light">

        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Created at</th>
            <th scope="col">Published/Unpublished</th>
            <th scope="col">Languages</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>

        <tbody>

            <!-- Loop through all blogs and get neccessary data -->
            @foreach($blogs as $key => $blog)

                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$blog->heading}}</td>
                    <td>{{$blog->name}} {{$blog->lastname}}</td>
                    <td>{{$blog->created_at}}</td>

                    <!-- Check published state and set appropriate button -->
                    <td class="publish">
                        @if($blog->published == 'false')
                            <button type="button" class="btn btn-dark btn-sm" onclick="changePublishState(true, {{$blog->id}})">Unpublished</button>
                        @else
                            <button type="button" class="btn btn-success btn-sm" onclick="changePublishState(false, {{$blog->id}})">Published</button>
                        @endif
                    </td>

                    <!-- Loop through languages of given blog and set appropriate country flags-->
                    <td>
                        @foreach(['en','de','bs'] as $lang)

                            <!-- Set blog languages to a temporary variable to be used in below if clausules -->
                            @php
                                $temp = explode(',', $blog->language);
                            @endphp

                             @if($lang == 'en' && in_array($lang, $temp))
                                 <a href="/blogs/{{$blog->id}}/edit/{{$lang}}">
                                     <img class="flagIcons" src="{{ asset('images/icons/001-united-kingdom.svg') }}">
                                 </a>
                             @elseif($lang == 'en' && !in_array($lang, $temp))
                                <a href="/blogs/{{$blog->id}}/add/{{$lang}}">
                                    <img class="flagIconsOpaque" src="{{ asset('images/icons/001-united-kingdom.svg') }}">
                                </a>
                             @elseif($lang == 'de' && in_array($lang, $temp))
                                <a href="/blogs/{{$blog->id}}/edit/{{$lang}}">
                                    <img class="flagIcons" src="{{ asset('images/icons/002-germany.svg') }}">
                                </a>
                             @elseif($lang == 'de' && !in_array($lang, $temp))
                                <a href="/blogs/{{$blog->id}}/add/{{$lang}}">
                                    <img class="flagIconsOpaque" src="{{ asset('images/icons/002-germany.svg') }}">
                                </a>
                             @elseif($lang == 'bs' && in_array($lang, $temp))
                                <a href="/blogs/{{$blog->id}}/edit/{{$lang}}">
                                    <img class="flagIcons" src="{{ asset('images/icons/003-bosnia-and-herzegovina.svg') }}">
                                </a>
                             @elseif($lang == 'bs' && !in_array($lang, $temp))
                                <a href="/blogs/{{$blog->id}}/add/{{$lang}}">
                                    <img class="flagIconsOpaque" src="{{ asset('images/icons/003-bosnia-and-herzegovina.svg') }}">
                                </a>
                             @endif

                        @endforeach
                    </td>

                    <!-- Delete button -->
                    <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="updateId({{$blog->id}})">Delete</button></td>

                </tr>

            @endforeach

        </tbody>
    </table>

    <!-- Add new blog element -->
    <div id="paperFabBlogList" onclick="redirectToCreatePage()">
        <span>+</span>
    </div>

    <script>

        /* THIS SCRIPT COULD CAUSE PROBLEMS IF IT IS IN app.js FILE*/

        // track id of selected blog
        var id = 0;
        function updateId(idNum) {
            id = idNum;
        }

        // send ajax request for publishing/unpublishing blog
        function changePublishState(value, id) {
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

        // after ajax returns success redirect to blogs list page
        function redirectToCreatePage() {
            var url = "/blogs/create";
            location.href = url;
        }

        // send ajax request for deleting blog
        function deleteAction() {
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