@extends('layouts.app')

@section('content')

    @include('parts.break_space')

    <div class="listTable">


        <!-- Include error/success messages to be listed if anything goes wrong -->
        @include('parts.error_success')

        <!-- Include modal and set fneccessary data -->
        @include('parts.modal', [
            'title' => 'Delete job',
            'message' => 'Are you sure?',
            'action' => 'deleteAction()'
        ])

        <h2>Careers list</h2>

        <!-- List of jobs -->
        <table class="table table-striped table-light" style="max-width: 650px; margin: 0 auto;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

            <!-- Loop through jobs data and create new rows -->
            @foreach($jobs as $key => $job)

                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$job->title}}</td>
                    <td><a href="careers/{{$job->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="updateId({{$job->id}})">Delete</button>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

    </div>

    <!-- Buton for redirecting to create carrers page -->
    <div id="paperFab" onclick="redirectTocreatePage()">
        <span>+</span>
    </div>


    <script>

        /* THIS SCRIPT COULD CAUSE PROBLEMS IF IT IS IN app.js FILE */

        // track id of selected job
        var id = 0;
        function updateId(idNum) {
            id = idNum;
        }

        // after ajax returns success redirect to careers list page
        function redirectTocreatePage() {
            var url = "/careers/create";
            location.href = url;
        }

        // send ajax request for deleting job
        function deleteAction() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method:'DELETE',
                url:'/careers/' + id,
                success:function(data){
                    // reload page to  show updated list of jobs
                    location.reload();
                }
            });
        }
    </script>


@endsection