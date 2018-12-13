@extends('layouts.app')

@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-institution"></i>Choose Department to Plan shift for</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Department</li>
                <li class="breadcrumb-item"><a href="#">Shift </a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                @include('flash::message')
                <div class="tile">
                    <h3 class="tile-title">Please Select department</h3>
                    <div class="tile-body">
                        @include('errors.error')

                        <form class="form form-horizontal" method="POST"   action=" {{route('ShowUpload')}}">

                            {{ csrf_field()}}

                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <select class="form-control" id="exampleSelect1" name="department" required>

                                                <option></option>
                                                @foreach($departments as $department)

                                                    <option value="{{$department->id}}">{{$department->name }}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="tile-footer">
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Next</button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>


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