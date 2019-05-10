@extends('layouts.app')

<style>

    .card-img-top {
        height: 150px;
    }

    #imagesContainer {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    #inputFile {
        display: none;
    }

</style>

@section('content')

    @include('parts.error_success')

    <div id="imagesContainer">

        @foreach($links as $link)

            <div id="{{$link['name']}}" class="card" style="width: 18rem;">
                <img src="{{env('APP_BASE_URL')}}/{{$link['path']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$link['name']}}</h5>
                    <button class="btn btn-primary" onclick="setImageElement(this)">Change</button>
                </div>
            </div>

        @endforeach

    </div>

    <form id="imageForm" action="/assets" method="POST" enctype="multipart/form-data">

        @csrf

        <input id="image_name" type="hidden" name="image_name"/>
        <input id="inputFile" type="file" accept="image/jpg,image/png,image/jpeg" name="files[]" onchange="showUploadedImage()" />
    </form>


    <script>

        var firstParent = "";

        function setImageElement(event) {
            firstParent = event.parentNode.parentNode;
            document.getElementById('image_name').value = firstParent.id;

            document.getElementById("inputFile").click();
        }

        function showUploadedImage() {
            var file = document.getElementById("inputFile").files[0];

            _PREVIEW_URL = URL.createObjectURL(file);
            firstParent.getElementsByTagName('img')[0].src = _PREVIEW_URL;

            // submit form
            document.getElementById('imageForm').submit();
        }

    </script>

@endsection