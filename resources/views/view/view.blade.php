@extends('layouts.app')

@section('content')

<style>

    .image {
        height: 350px;
        width: 100%;
        display: block;
    }
</style>

    <main class="app-content">
    <div class="col-lg-4">
        <div class="bs-component">
            <div class="card">
                <h4 class="card-header">Staff Details</h4>
                <div class="card-body">
                    <h5 class="card-title">{{$staff_details->staff->sap_no}} </h5>
                    <h6 class="card-subtitle text-muted">{{$staff_details->staff->name}} </h6>
                </div>
                {!! Html::image('staff images/' .$staff_details->staff->image, 'image', ['class' => 'image']) !!}
                <div class="card-body">

                  <b> <p class="card-text">{{$staff_details->department->name}}</p> </b>
                    <br/>
                 <b>   <p class="card-text">{{$staff_details->shift->name}}</p> </b>



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