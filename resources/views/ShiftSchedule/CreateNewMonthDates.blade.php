@extends('layouts.app')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-calendar"></i> Create New Month Dates</h1>
                <p>Create All the Dates For New Month Schedules</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dates For New Month Schedule</a></li>
            </ul>
        </div>

        @include('flash::message')
        <div class="row">
    <div class="col-md-6">
        <form  method="POST" action="{{ route('Date') }}" id="form">

            {{ csrf_field()}}
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">Create new months for department </h3>
            </div>

            <div class="tile-body">
                <div class="col-md-6">
                    <select class="form-control" id="exampleSelect1" name="department" required>

                        <option>Choose department </option>
                        @foreach($departments as $department)

                            <option value="{{$department->id}}">{{$department->name }}</option>

                        @endforeach

                    </select>
                </div>
                <br/><br/>
                <p>This Button can be used to create dates for the new month schedules for department.</p>
                <a class="btn btn-info" id="demoSwal" href="#">Upload New Month Dates</a>
            </div>
        </div>
        </form>
    </div>
    </div>
    </main>



    <!-- Essential javascripts for application to work-->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('js/plugins/bootstrap-notify.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/sweetalert.min.js')}}"></script>

    <script type="text/javascript">


        $('#demoSwal').click(function(){
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover previous dates!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, Upload New Dates!",
                    cancelButtonText: "No, cancel !",
                    closeOnConfirm: false,
                    closeOnCancel: false

                },
                function(isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: 'Created!',
                            text: 'Your new dates for the department has been created!',
                            type: 'success'
                        }, function() {
                            form.submit();
                        });
                    } else {
                        swal("Cancelled", "New dates upload cancelled :)", "error");
                    }


                });
        });
    </script>


    @endsection