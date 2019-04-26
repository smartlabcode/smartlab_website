@extends('layouts.app')

@section('content')

    <table class="table table-striped table-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Source</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>

            @foreach($logs as $key => $log)

                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$log->type}}</td>
                    <td>{{$log->source}}</td>
                    <td>{{$log->created_at}}</td>
                </tr>

            @endforeach

        </tbody>
    </table>

@endsection