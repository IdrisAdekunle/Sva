@extends('layouts.app')

@section('content')


    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Edit Staff Shift Schedule</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Staff Schedule</li>
                <li class="breadcrumb-item"><a href="#">Edit </a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Edit Staff Schedule</h3>
                    <div class="tile-body">


                        <form method="post" action="{{route('update',$schedule->id)}}" >

                            {{ method_field('PUT') }}

                            {{csrf_field()}}

                        <div class="form-group">

                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="staff" value="{{$schedule->staff->name}}">

                        </div>

                        <div class="form-group">

                            <label class="control-label">Department</label>
                            <input class="form-control" type="text" name="department" value="{{$schedule->department->name}}">

                        </div>


                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <input class="form-control" type="text" name="staff" value="{{$schedule->date->date->format('F d, Y h:ia')}}">

                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Shift</label>
                            <select class="form-control" id="exampleSelect1" name="shift_id">
                                <option value="{{$staff_shift}}">{{$schedule->shift->name}}</option>
                                @foreach($shift as $shift)

                                    <option value="{{$shift->id}}">{{$shift->name}}</option>

                                @endforeach

                            </select>
                        </div>
                            <div class="tile-footer">
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

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



@endsection