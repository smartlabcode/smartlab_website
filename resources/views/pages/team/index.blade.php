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
    .new-member{
        justify-content: flex-end;
    }
    .new-member .button-container{
        margin-top: 10px;
    }
    .preview-container{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    #team_member_image{
        width: 100%;
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
                        @if($member->deleted_at)
                        <a href="{{ route('team.delete', ['id'=> $member->id]) }}" class="btn btn-danger">Permanently Delete</a>
                        @else
                        <a href="{{ route('team.edit',['id'=> $member->id]) }}" class="btn btn-primary">Edit</a>
                        @endif
                        @if($member->deleted_at)
                            <a href="{{ route('team.restore', ['id'=> $member->id]) }}" class="btn btn-success">Restore</a>
                        @else
                            <a href="{{ route('team.delete', ['id'=> $member->id]) }}" class="btn btn-danger">Delete</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        <form id="new_member" class="card" action="{{route('team.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="preview-container">
                <div id="preview">

                </div>
                {{ $errors->first('image') }}
                <input id="team_member_image" type="file" name="image" class="btn btn-primary @if($errors->first('image')) is-invalid @endif" required/>
            </div>
            <div class="card-body card-body-flex new-member">
                <h5 class="card-title">Add new team member</h5>
                {{ $errors->first('name') }}
                <input class="card-text form-control @if($errors->first('name')) is-invalid @endif" type="text" name="name" placeholder="name" required />
                {{ $errors->first('title') }}
                <input class="card-text form-control @if($errors->first('title')) is-invalid @endif" type="text" name="title" placeholder="title" required/>
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
<script>
        let teamMemberImage = document.querySelector("#team_member_image");
        let preview = document.querySelector("#preview");
        teamMemberImage.addEventListener("change", handleFiles, false);
        function handleFiles() {
            const fileList = this.files;
            const img = document.createElement("img");
            let file = fileList[0];
            
            img.classList.add("card-img-top");
            img.setAttribute("id", "preview-image");
            img.file = file;
            if(document.getElementById("preview-image")){
                preview.innerHTML = "";
            }
            preview.appendChild(img);
            
            const reader = new FileReader();
            reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
            reader.readAsDataURL(file);
        }  
</script>
@endsection