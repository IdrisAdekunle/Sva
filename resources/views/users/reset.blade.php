@extends('layouts.app')

@section('content')



    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-key"></i> Reset Password</h1>
                <p></p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item"><a href="#">Reset</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Reset Password</h3>
                    <div class="tile-body">
                        @include('errors.error')
                        @include('flash::message')
                        <form  method="POST"   action="{{ route('password') }} ">

                            {{ csrf_field()}}

                            <div class="form-group">

                                <input class="form-control" type="email" name="email" placeholder="Enter user email">
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="password" name="password" placeholder="New password">
                            </div>

                            <div class="form-group">

                                <input class="form-control" type="password" name="password_confirmation" placeholder="confirm password">
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


    @endsection