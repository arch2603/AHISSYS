@extends('layouts.app-template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard Management
            </h1>
            <ol class="breadcrumb">
                <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
                {{--<li class="active">Employee Mangement</li>--}}
            </ol>
        </section>
        <br>
    @yield('dashboard-form-content')
    {{--@yield('employee-view-content')--}}
    <!-- /.content -->
    </div>
@endsection