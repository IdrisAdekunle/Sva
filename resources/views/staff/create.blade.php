@extends('layouts.app')

@section('content')



    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-user-plus"></i> Add Staff</h1>
                <p></p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Staff</li>
                <li class="breadcrumb-item"><a href="#">Add</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Add Staff</h3>
                    <div class="tile-body">
                        @include('errors.error')
                            <form  method="POST"  enctype="multipart/form-data" action="{{ url('staff') }} ">

                                {{ csrf_field()}}

                            <div class="form-group">
                                <label class="control-label">Staff ID</label>
                                <input class="form-control" type="text"name="sap_no" placeholder="Enter staff id">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Staff Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter first name">
                            </div>

                                <div class="form-group">
                                    <label for="exampleSelect1">Department</label>
                                    <select class="form-control" id="exampleSelect1" name="department_id">
                                        <option>Choose department here</option>
                                        @foreach($department as $department)

                                        <option value="{{$department->id}}">{{$department->name}}</option>

                                            @endforeach

                                    </select>
                                </div>


                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" value="Male" name="gender">Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" value="Female" name="gender">Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Upload staff image</label>
                                <input class="form-control" type="file" name="image">
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
    <script type="text/javascript">
        if(document.location.hostname == 'pratikborsadiya.in') {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>



@endsection