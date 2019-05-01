@extends('layouts.app')

<style>
    .translationLinks {
        text-transform: capitalize;
    }
</style>

@section('content')

    <div>

        @foreach($files as $file)

            <div>
                <a class="translationLinks" href="/translations/edit/{{$file}}">{{$file}}</a>
            </div>

        @endforeach

    </div>

@endsection