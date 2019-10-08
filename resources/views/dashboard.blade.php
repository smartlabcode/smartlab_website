<!-- Extend main layout -->
@extends('layouts.app')

<style>
    #mainDashboardContainer {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }

    #mainDashboardContainer>a {
        text-decoration: none;
    }

    #mainDashboardContainer>a>div {
        margin: 10px;
        width: 200px;
        height: 200px;
        box-shadow: 2px 2px 2px rgba(150, 150, 150, 0.5);
    }

    #mainDashboardContainer>a>div:hover {
        box-shadow: 4px 4px 4px rgba(150, 150, 150, 0.5), -4px 0 4px rgba(150, 150, 150, 0.5);
    }
</style>
@section('css')
<link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
@endsection
@section('content')

@include('parts.break_space')

<!-- dashboard content -->
<div class="container">

    <div id="mainDashboardContainer">

        <!-- Show admins and subscribers pages only to super admins -->
        @if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)

        <a href="{{route('admins.index')}}">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Admins</div>
                <div class="card-body">
                    <h5 class="card-title">Admins Management</h5>
                    <p class="card-text">Create, edit or delete admins.</p>
                </div>
            </div>
        </a>

        <a href="/subscribers">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Subscribers</div>
                <div class="card-body">
                    <h5 class="card-title">Subscribers List</h5>
                    <p class="card-text">See list of all newsletter subscribers.</p>
                </div>
            </div>
        </a>

        <a href="/careers">
            <div class="card text-white mb-3" style="max-width: 18rem; background-color: orange">
                <div class="card-header">Careers</div>
                <div class="card-body">
                    <h5 class="card-title">Jobs List</h5>
                    <p class="card-text">See list of all added jobs.</p>
                </div>
            </div>
        </a>

        @endif

        <a href="{{route('blogs.index')}}">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Blogs</div>
                <div class="card-body">
                    <h5 class="card-title">Blogs Management</h5>
                    <p class="card-text">Create, edit, delete, publish, unpublish blogs.</p>
                </div>
            </div>
        </a>

        <a href="/logs">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Logs</div>
                <div class="card-body">
                    <h5 class="card-title">System Logs</h5>
                    <p class="card-text">Check the error reports from the system.</p>
                </div>
            </div>
        </a>

        <a href="/assets">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Images</div>
                <div class="card-body">
                    <h5 class="card-title">System Images</h5>
                    <p class="card-text">Change images in the system.</p>
                </div>
            </div>
        </a>

        <a href="/translations">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Translations</div>
                <div class="card-body">
                    <h5 class="card-title">System Translations</h5>
                    <p class="card-text">Edit existing translations of the system.</p>
                </div>
            </div>
        </a>

    </div>

</div>

@endsection