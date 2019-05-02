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
        width: 600px;
        box-shadow: 2px 2px 2px rgba(150,150,150, 0.5), -2px 0 2px rgba(150,150,150, 0.5);
    }

    #translationsContainer textarea {
        resize: none;
        width: 100%;
        height: 70px;
    }
</style>

@section('content')

    @include('parts.error_success')

    <div id="translationsContainer">

        <form action="/translations" method="POST">

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
                            <td>
                                <textarea id="{{$key}}" name="{{$key}}">{{$item}}</textarea>
                            </td>
                        </tr>

                 @endforeach

                </tbody>
            </table>

            <input type="hidden" name="file_name" value="{{$page}}"/>
            <button id="saveTranslationsButton" type="submit" class="btn btn-primary">Save</button>

        </form>

    </div>

@endsection