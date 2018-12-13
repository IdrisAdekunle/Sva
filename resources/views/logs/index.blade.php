@extends('layouts.app')

@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-bar-chart"></i> Logs</h1>
                @include('flash::message')
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"> Dashboard </li>
                <li class="breadcrumb-item active"><a href="#">logs</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>staff id</th>
                                <th>staff Name</th>
                                <th>Date/Time</th>
                                <th>created by</th>
                                <th>Department</th>
                                <th>Shift</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($logs as $log)

                                    <td> {{$log->sap_no}}  </td>
                                    <td> {{$log->name }}  </td>
                                    <td> {{  $log->created_at->format('F d, Y h:ia') }}</td>
                                    <td>{{ $log->viewed_by }} </td>
                                    <td> {{$log->department}}  </td>
                                    <td>{{$log->shift}} </td>


                            </tr>



                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>



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