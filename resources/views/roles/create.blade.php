@extends('layouts.app')

@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-shield"></i>Create Role</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Role</li>
                <li class="breadcrumb-item"><a href="#">Create </a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Create Role</h3>
                    <div class="tile-body">
                        @include('errors.error')

                {{ Form::open(array('url' => 'roles')) }}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>


                <div class='form-group'>
                    <div class="tile-body">
                        <h4>Assign Permissions</h4>
                        <select class="form-control" id="demoSelect" name="permissions[]" multiple="">
                            <optgroup label="Select Permissions" >
                                @foreach ($permissions as $permission)

                               <option value="{{$permission->id}}">{{$permission->name}}</option>

                                    @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <br/>

                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}


            </div>
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
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('js/plugins/select2.min.js')}}"></script>

    <script type="text/javascript">

        $('#demoSelect').select2();
    </script>



    @endsection
