@extends('layouts.app')

@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                <p></p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                        <div class="info">
                            <h4>Users</h4>
                            <p><b>{{$users}}</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-small info coloured-icon"><i class="icon fa fa-users"></i>
                        <div class="info">
                            <h4>Staff</h4>
                            <p><b>{{$staff}}</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-small warning coloured-icon"><i class="icon fa fa-cubes"></i>
                        <div class="info">
                            <h4>Shifts</h4>
                            <p><b>{{$shifts}}</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget-small danger coloured-icon"><i class="icon fa fa-institution"></i>
                        <div class="info">
                            <h4>Departments</h4>
                            <p><b>{{$departments}}</b></p>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="col-md-6">
                    <div class="tile">
                        <h3 class="tile-title">Today's shift</h3>
                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>Name</th>
                                <th>Morning Shift</th>
                                <th>Afternoon Shift</th>
                                <th>Night Shift</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>OIL MILL</td>

                                <td>{{$oil_mill_m}}</td>
                                <td>{{$oil_mill_a}}</td>
                                <td>{{$oil_mill_n}}</td>


                            </tr>
                            <tr>
                                <td>CEREAL MILL</td>
                                <td>{{$cereal_mill_m}}</td>
                                <td>{{$cereal_mill_a}}</td>
                                <td>{{$cereal_mill_n}}</td>
                            </tr>
                            <tr>
                                <td>FISH FEED</td>
                                <td>{{$fish_feed_m}}</td>
                                <td>{{$fish_feed_a}}</td>
                                <td>{{$fish_feed_n}}</td>
                            </tr>
                            <tr>
                                <td> FEED MILL 1</td>
                                <td>{{$feed_mill_1_m}}</td>
                                <td>{{$feed_mill_1_a}}</td>
                                <td>{{$feed_mill_1_n}}</td>
                            </tr>
                            <tr>
                                <td>FEED MILL 2 </td>
                                <td>{{$feed_mill_2_m}}</td>
                                <td>{{$feed_mill_2_a}}</td>
                                <td>{{$feed_mill_2_n}}</td>
                            </tr>

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

@endsection
