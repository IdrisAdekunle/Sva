@extends('layouts.app')


@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-calendar"></i> Change Staff Schedule</h1>
                @include('flash::message')
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">All Schedules</li>
                <li class="breadcrumb-item active"><a href="#">schedules</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>staff name</th>
                                <th>department</th>
                                <th>shift</th>
                                <th>date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($shiftSchedule as $shiftSchedule)
                                <tr>


                                    <td> {{$shiftSchedule->staff->name}}  </td>
                                    <td>{{$shiftSchedule->department->name}} </td>
                                    <td> {{$shiftSchedule->shift->name}}</td>
                                    <td> {{$shiftSchedule->date->date->format('F d, Y h:ia')}}</td>
                                    <td>
                                          @can('Change Staff Shift')

                                            <a href="{{ route('edit', $shiftSchedule->id) }}">   <i class="fa fa-pencil" aria-hidden="true"> </i> </a>
                                            &nbsp; &nbsp;

                                              @endcan
                                    </td>
                                </tr>



                            @endforeach
                            </tbody>
                        </table>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

@endsection