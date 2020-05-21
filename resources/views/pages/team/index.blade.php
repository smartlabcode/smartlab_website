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
        justify-content: space-between;
        margin-top: 50px;
    }
    .card-container .card{
        flex-basis: 32%;
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
</style>
@endsection
@section('content')
@include('parts.break_space')
<div class="container">
    <h1>Team members</h1>
    <div class="card-container">
        @foreach($members as $member)
            @php
                $imagePath = asset('storage') . '/team/' . $member['photo'];
            @endphp
            <div class="card">
                <img class="card-img-top" src="{{$imagePath}}" alt="Card image cap">
                <div class="card-body card-body-flex">
                    <h5 class="card-title">{{$member->name}}</h5>
                    <p class="card-text">{{$member->title}}</p>
                    <div>
                        <a href="{{ route('team.edit',['id'=> $member->id]) }}" class="btn btn-primary">Edit</a>
                        @if($member->deleted_at)
                            <a href="{{ route('team.restore', ['id'=> $member->id]) }}" class="btn btn-success">Restore</a>
                        @else
                            <a href="{{ route('team.delete', ['id'=> $member->id]) }}" class="btn btn-danger">Delete</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('/js/app.js') }}"></script>
@endsection