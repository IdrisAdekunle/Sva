@extends('layouts.app')

@section('content')

    <main class="app-content">

    <div class="col-md-12">
        <div class="card card-mini">
            <div class="card-header">
                <h1> Error Code 401 </h1>
            </div>
            <div class="card-body">
               <h1>You Do Not Have Access To View This Page</h1>
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