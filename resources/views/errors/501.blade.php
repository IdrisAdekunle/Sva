@extends('layouts.app')

@section('content')

    <main class="app-content">

    <div class="col-md-12">
        <div class="card card-mini">
            <div class="card-header">
                <h1> No Shift Found </h1>
            </div>
            <div class="card-body">
                <h1> Staff Does Not Belong To Any Shift Today </h1> <br/>
                <h1> Kindly Tell Staff To Go Back Home Or Call Shift Supervisor For More Information </h1>
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