@extends('layouts.app')

@section('content')

    @foreach($subscribers as $subscriber)
        {{$subscriber}} <br/>
    @endforeach

@endsection