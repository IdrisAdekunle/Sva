@extends('layouts.app')

@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-cubes"></i>View Staff Shift</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">View</li>
                <li class="breadcrumb-item"><a href="#">Shift </a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">View Staff Shift</h3>
                    <div class="tile-body">
                        @include('errors.error')
                <form class="form form-horizontal" method="POST"   action=" {{route('show')}}">

                    {{ csrf_field()}}

                    <div class="section">
                        <div class="section-body">
                            <div class="form-group">
                                <div class="input-group">

                                    <input type="text" class="form-control" placeholder="SAP NO" aria-describedby="basic-addon1" name="sap_no">
                                </div>
                            </div>

                            <div class="form-footer">
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">View</button>
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