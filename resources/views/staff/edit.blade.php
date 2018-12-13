@extends('layouts.app')

@section('content')


    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Edit Staff</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Staff</li>
                <li class="breadcrumb-item"><a href="#">Edit </a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Edit Staff</h3>
                    <div class="tile-body">



                {{ Form::model($staff, array('route' => array('staff.update', $staff->name), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

                <div class="form-group">
                    {{ Form::label('SAP NO', 'SAP NO') }}
                    {{ Form::text('sap_no', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('Staff Name', 'Staff Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>


                        <div class="form-group">
                            <label class="control-label">Gender</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="Male" name="gender">Male
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="Female" name="gender">Female
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Department</label>
                            <select class="form-control" id="exampleSelect1" name="department_id">
                                <option value="{{$staff_department}}">{{$staff->department->name}}</option>
                                @foreach($departments as $department)

                                    <option value="{{$department->id}}">{{$department->name}}</option>

                                @endforeach

                            </select>
                        </div>


                        </div>



                {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}



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