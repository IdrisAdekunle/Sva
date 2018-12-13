@extends('layouts.app')


@section('content')







    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-cubes"></i> Shifts</h1>
                @include('flash::message')
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Shift</li>
                <li class="breadcrumb-item active"><a href="#">All</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>

                                <th>Shift Name</th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($shifts as $shift)



                                    <td> {{$shift->name}}  </td>
                                    <td>

                                        @can('Edit Shift')

                                            <a  data-toggle="modal" data-target="#EditShift{{$shift->id}}">   <i class="fa fa-pencil" aria-hidden="true"> </i> </a>
                                            &nbsp; &nbsp;

                                        @endcan

                                        @can('Delete Shift')
                                            <a data-toggle="modal" data-target="#confirmDelete{{$shift->id}}">  <i class="fa fa-trash" aria-hidden="true"></i> </a>

                                        @endcan
                                    </td>
                                </tr>

                                @include('shift_modal.delete')
                                @include('shift_modal.edit')
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