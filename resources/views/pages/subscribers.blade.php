<!-- Extend main layout -->
@extends('layouts.app')

<style>
    #subscribersContainer {
        width: 500px;
        margin: 0 auto;
        box-shadow: 2px 2px 2px rgba(150,150,150, 0.5), -2px 0 2px rgba(150,150,150, 0.5);
    }
</style>

@section('content')

    <div id="subscribersContainer">
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
                    <td>{{++$key}}</td>
                    <td>{{$subscriber}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@endsection