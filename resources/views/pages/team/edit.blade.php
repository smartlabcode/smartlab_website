<!-- Extend main layout -->
@extends('layouts.app')
@section('css')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
<style>
    footer{
        display: none;
    }
    .card-container{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 50px;
    }
    .card-container .card{
        flex-basis: 50%;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .card-body-flex{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }
    h1{
        margin-top: 50px;
        text-align: center;
    }
    .button-container{
        margin-top: 20px;
    }
    .card-body-flex input,textarea{
        width: 100%;
    }
</style>
@endsection
@section('content')
@include('parts.break_space')
<div class="container">
    <h1>Team member: {{$member->id}}</h1>
    <div class="card-container">
            @php
                $imagePath = asset('storage') . '/team/' . $member['photo'];
            @endphp
            <form class="card" action="{{$member->id}}/update" enctype="multipart/form-data" method="POST">
                @csrf
                <img class="card-img-top" src="{{$imagePath}}" alt="Card image cap">
                <!-- <input type="hidden" name="image" value="{{$member['photo']}}" /> -->
                <input type="file" name="image" class="btn btn-primary"/>
                <div class="card-body card-body-flex">
                    <input class="card-title form-control" type="text" name="name" value="{{$member->name}}"/>
                    <input class="card-text form-control" type="text" name="title"  value="{{$member->title}}" />
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{route('team.index')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('/js/app.js') }}"></script>
@endsection