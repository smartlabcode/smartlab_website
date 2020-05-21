@extends('layouts.app')
@section('css')
<style>
    .main-container {
        min-height: 100vh;
    }

    #image {
        width: 100%;
    }

    footer {
        position: static;
    }

    .project-header-container {
        margin-top: 60px;
        padding-top: 60px;
        margin-bottom: 60px;
        text-align: center;
    }

    .project-description-container {
        text-align: center;
        margin-top: 25px;
        padding-bottom: 50px;
    }

    .content-container {
        width: 98%;
        min-height: calc(100vh - 70px);
        margin: 0 auto;
        background-color: #fff;
        border-radius: 15px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
    }

    .iframe-container {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
    }

    .iframe-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>
@endsection
@section('content')
<div class="loader-container">
    <div class="css-animation-container">
        <div class="css-animation"></div>
    </div>
</div>
<div class="main-container">
    <div class="content-container">
        <div class="project-header-container">
            <h1 id="project-header">Project header</h1>
        </div>
        <div id="image-container">
            <img id="image" src="" alt="project image">

        </div>
        <div id="iframe-container" class="iframe-container">
            <iframe id="iframe" src="" title="" allowfullscreen="true"></iframe>
        </div>
        <div class="project-description-container">
            <p id="project-description">Project description</p>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function(event) {
        let loaderContainer = document.querySelector(".loader-container");
        setTimeout(function() {
            loaderContainer.style.display = 'none';
        }, 1000);
        let projectHeader = document.querySelector("#project-header");
        let projectDescription = document.querySelector("#project-description");
        let imageContainer = document.querySelector("#image-container");
        let iframeContainer = document.querySelector("#iframe-container");
        let imagePath = window.localStorage.getItem("imagePath");
        let header = window.localStorage.getItem("header");
        let description = window.localStorage.getItem("description");
        let serverPath = window.location.origin;
        let image = document.querySelector("#image");
        let iframe = document.querySelector("#iframe");
        iframe.title = header;
        let fileExtension = imagePath.split('.').pop();
        console.log(imagePath, fileExtension, header, description);
        if (fileExtension == "html") {
            imageContainer.style.display = "none";
            iframe.src = imagePath;
        } else if (fileExtension == "jpg" || fileExtension == "png") {
            iframeContainer.style.display = "none";
            image.src = serverPath + imagePath;
        } else {
            imageContainer.style.display = "none";
            iframe.src = imagePath;
        }

        projectHeader.innerHTML = header;
        projectDescription.innerHTML = description;
    });
</script>
@endsection