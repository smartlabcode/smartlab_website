<!-- Extend main layout -->
@extends('layouts.app')
@section('css')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
@endsection
@section('content')

@include('parts.break_space')

<div class="listTable">

    <!-- Heading -->
    <h1>Blogs list</h1>

    <!-- Include error/success messages to be listed if anything goes wrong -->
    @include('parts.error_success')

    <!-- Include modal for deleting blog, with neccessary variables -->
    @include('parts.modal', [
    'title' => 'Delete blog',
    'message' => 'Are you sure?',
    'action' => 'deleteAction()'
    ])

    <!-- Include modal for publishing/unpublishing blog, with neccessary variables -->
    @include('parts.modal_publish', [
    'title' => 'Change blog state',
    'message' => 'Are you sure?',
    'action' => 'publishUnpublishBlog()'
    ])

    <!-- List of blogs -->
    <table class="table table-striped table-light">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Created at</th>
                <th scope="col">Published/Unpublished</th>
                <th scope="col">Languages</th>
                <th scope="col">Preview</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>

            <!-- Loop through blogs data and create new rows -->
            @foreach($blogs as $key => $blog)

            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$blog->heading}}</td>
                <td>{{$blog->name}} {{$blog->lastname}}</td>
                <td>{{$blog->created_at}}</td>

                <!-- Check published state and set appropriate button -->
                <td class="publish">
                    @if($blog->published == 'false')
                    <button type="button" data-toggle="modal" data-target="#publish" class="btn btn-dark btn-sm" onclick="changePublishState(true, {{$blog->id}})">Unpublished</button>
                    @else
                    <button type="button" data-toggle="modal" data-target="#publish" class="btn btn-success btn-sm" onclick="changePublishState(false, {{$blog->id}})">Published</button>
                    @endif
                </td>

                <!-- Loop through languages of given blog and set appropriate country flags-->
                <td>
                    @foreach(['en','de','bs'] as $lang)

                    <!-- Set blog languages to a temporary variable, in order to be used in below IF clausules -->
                    @php
                    $temp = explode(',', $blog->language);
                    @endphp

                    <!-- Check if current language is in the $temp array, if yes set language as set, if not set language as not set (flag with opacity) -->
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

                <!-- Blog preview button -->
                <td><a href="{{ env('BLOG_DOMAIN')  }}/blog/{{$blog->id}}/{{ App::getlocale() }}/true" target="_blank"><img src="{{ asset('images/icons/open-in-new.svg') }}" /></a></td>

                <!-- Delete button -->
                <td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="updateId({{$blog->id}})">Delete</button></td>

            </tr>

            @endforeach

        </tbody>
    </table>

</div>

<!-- Buton for redirecting to create blog page -->
<div id="paperFabBlogList" onclick="redirectToCreatePage()">
    <span>+</span>
</div>

@endsection
@section('js')
<script>
    /* THIS SCRIPT COULD CAUSE PROBLEMS IF IT IS IN app.js FILE*/

    // track id of selected blog
    var id = 0;

    function updateId(idNum) {
        id = idNum;
    }

    // send ajax request for publishing/unpublishing blog
    function publishUnpublishBlog() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: 'PUT',
            url: '/publish/' + blogId + '/' + blogState,
            success: function(data) {
                // reload page to  show updated list of blogs
                location.reload();
            }
        });
    }

    // publish/unpublish event --> track id and current state of selected blog
    var blogId = 0;
    var blogState = 0;

    function changePublishState(value, id) {
        blogId = id;
        blogState = value;
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
            method: 'DELETE',
            url: '/blogs/' + id,
            success: function(data) {
                // reload page to  show updated list of blogs
                location.reload();
            }
        });
    }
</script>
<script src="{{ asset('/js/app.js') }}"></script>
@endsection