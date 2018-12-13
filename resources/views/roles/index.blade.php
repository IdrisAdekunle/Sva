@extends('layouts.app')


@section('content')





    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-shield"></i> Roles</h1>
                @include('flash::message')
                @include('errors.error')
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Roles</li>
                <li class="breadcrumb-item active"><a href="#">All Roles</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($roles as $role)


                                    <td> {{$role->name }}   </td>
                                    <td> {{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }} </td>
                                    @can('Administer roles & permissions')
                                        <td>
                                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}">   <i class="fa fa-pencil" aria-hidden="true"> </i> </a>
                                            &nbsp; &nbsp;
                                            <a data-toggle="modal" data-target="#confirmDelete{{$role->id}}">  <i class="fa fa-trash" aria-hidden="true"></i> </a>


                                        </td>
                                    @endcan
                                </tr>


                                @include('role_modal.delete')

                            @endforeach
                            </tbody>
                        </table>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>





@endsection