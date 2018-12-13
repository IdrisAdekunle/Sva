@extends('layouts.app')

@section('content')


    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-cubes"></i>Create Department</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Department</li>
                <li class="breadcrumb-item"><a href="#">Create </a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Create Department</h3>
                    <div class="tile-body">
                        @include('errors.error')
                        <form class="form form-horizontal" method="POST"   action="{{ url('departments') }} ">

                            {{ csrf_field()}}

                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="department" aria-describedby="basic-addon1" name="name">
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
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

@endsection