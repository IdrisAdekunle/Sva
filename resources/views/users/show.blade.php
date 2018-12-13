@extends('layouts.app')


@section('content')


    <main class="app-content">


    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Created User Info</h3>
            <table class="table table-bordered">
                <thead>

                <tr>
                    <th>Name</th>
                    <th>EMail</th>
                    <th>Role Given</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td> {{$user->name }}   </td>
                    <td> {{$user->email}}  </td>
                    <td> {{  $user->roles()->pluck('name')->implode(' ') }}</td>

                </tr>

                </tbody>
            </table>
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