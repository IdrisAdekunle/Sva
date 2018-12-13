@extends('layouts.app')


@section('content')



    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Edit User</h1>

            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item"><a href="#">Edit </a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Edit User</h3>
                    <div class="tile-body">
                        @include('errors.error')


                {{ Form::model($user, array('route' => array('users.update', $user->name), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, array('class' => 'form-control')) }}
                </div>

                <h5><b>Give Role</b></h5>

                <div class='form-group'>
                    @foreach ($roles as $role)
                        {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                    @endforeach
                </div>



                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}



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



    @endsection