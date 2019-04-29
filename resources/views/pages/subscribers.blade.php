<!-- Extend main layout -->
@extends('layouts.app')

@section('content')

    <!-- List of subscribers -->
    <table class="table table-striped table-light">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subscriber email</th>
            </tr>
        </thead>

        <tbody>

            <!-- Loop through subscribers and create rows -->
            @foreach($subscribers as $key => $subscriber)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$subscriber}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection