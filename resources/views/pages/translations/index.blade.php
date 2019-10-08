@extends('layouts.app')

<style>
    #translationsListContainer {
        width: 500px;
        margin: 0 auto;
        box-shadow: 2px 2px 2px rgba(150, 150, 150, 0.5), -2px 0 2px rgba(150, 150, 150, 0.5);
    }

    .translationLinks {
        text-transform: capitalize;
    }
</style>
@section('css')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
@endsection
@section('content')

@include('parts.break_space')

<div class="listTable">

    <div id="translationsListContainer">

        <h2>Translation files</h2>

        <table class="table table-striped table-light">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Page</th>
                </tr>
            </thead>

            <tbody>

                @foreach($files as $key => $file)

                <tr>
                    <td>{{++$key}}</td>
                    <td>
                        <a class="translationLinks" href="/translations/edit/{{$file}}">{{$file}}</a>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>

</div>

@endsection