@extends('layouts.app')

<style>
    #saveTranslationsButton {
        float:right;
    }

    #translationsContainer {
        display: flex;
        justify-content: center;

    }

    #translationsContainer table {
        width: 500px;
    }
</style>

@section('content')

    <div id="translationsContainer">
        <form action="" method="POST">

            @csrf
            @method('PUT')

            <table class="table table-striped table-light">

                <thead>
                <tr>
                    <th scope="col">Key</th>
                    <th scope="col">Value</th>
                </tr>
                </thead>

                <tbody>


                @foreach($data as $key => $item)

                    <tr>
                        <td>{{$key}}</td>
                        <td><input id="{{$key}}" value="{{$item}}"/></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

            <button id="saveTranslationsButton" type="submit" class="btn btn-success btn-sm">Save</button>

        </form>

    </div>

@endsection