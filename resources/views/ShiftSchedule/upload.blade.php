@extends('layouts.app')

@section('content')


    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-calendar-o"></i> Plan </h1>
                <p></p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Shift schedule</li>
                <li class="breadcrumb-item"><a href="#">Plan schedule</a></li>
            </ul>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Plan Schedule</h3>
                    <div class="tile-body">

                        @include('errors.error')


                        <form  method="POST" action="{{ route('Store') }}">

                            {{ csrf_field()}}

                            <div class="col-md-4">
                                <label for="exampleSelect1"><b>Choose date:</b></label>
                                <select class="form-control" id="exampleSelect1" name="date" required>

                                    <option></option>
                                    @foreach($dates as $date)

                                        <option value="{{$date->id}}">{{$date->date->format('l jS \\of F Y ') }}</option>

                                    @endforeach

                                </select>
                            </div>

                            <input type="hidden" value="{{$department}}" name="department" />

                            <br/> <br/>

                            <div class="row">

                                <div class="form-group col-md-3">


                                    <select class="form-control" id="exampleSelect1" name="shift_1" required>>
                                        <option>Choose shift</option>

                                        @foreach($shift_1 as $shift_1)

                                            <option value="{{$shift_1->id}}"> {{$shift_1->name}}</option>

                                        @endforeach

                                    </select>

                                </div>


                                <div class="form-group col-md-9">

                                    <select class="form-control" id="select1" name="staff_m[]" multiple="" required>>
                                        <optgroup label="Select staff" >
                                            @foreach($staff_m as $staff_m)

                                                <option value="{{$staff_m->id}}"> {{$staff_m->name}}</option>

                                            @endforeach
                                        </optgroup>
                                    </select>

                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-md-3">

                                    <select class="form-control" id="exampleSelect1" name="shift_2" required>>
                                        <option>Choose shift</option>

                                        @foreach($shift_2 as $shift_2)

                                            <option value="{{$shift_2->id}}"> {{$shift_2->name}}</option>

                                        @endforeach

                                    </select>

                                </div>


                                <div class="form-group col-md-9">

                                    <select class="form-control" id="select2" name="staff_a[]" multiple="" required>>
                                        <optgroup label="Select staff" >


                                            @foreach($staff_a as $staff_a)

                                                <option value="{{$staff_a->id}}"> {{$staff_a->name}}</option>

                                            @endforeach


                                        </optgroup>
                                    </select>

                                </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-md-3">

                                    <select class="form-control" id="exampleSelect1" name="shift_3" required>>
                                        <option>Choose shift</option>

                                        @foreach($shift_3 as $shift_3)

                                            <option value="{{$shift_3->id}}"> {{$shift_3->name}}</option>

                                        @endforeach

                                    </select>

                                </div>


                                <div class="form-group col-md-9">

                                    <select class="form-control" id="select3" name="staff_n[]" multiple="" required>>
                                        <optgroup label="Select staff" >

                                            @foreach($staff_n as $staff_n)

                                                <option value="{{$staff_n->id}}"> {{$staff_n->name}}</option>

                                            @endforeach

                                        </optgroup>
                                    </select>

                                </div>

                            </div>

                            <br/>
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
    <script type="text/javascript" src="{{asset('js/plugins/select2.min.js')}}"></script>

    <script type="text/javascript">
        $('#select1').select2();
        $('#select2').select2();
        $('#select3').select2();

    </script>


@endsection