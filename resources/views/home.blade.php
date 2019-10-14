@extends('layouts.app-template')
@section('content')
<div class="container">
    <div class="row">
        <br>
        <div class="col-md-20" style="margin: auto; width: 120%; padding: 2px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="home-heading" style="text-align: center; color: #9c3328; font-family: Arial, Verdana, sans-serif; font-weight: bold">Employee Time Keeper System v.{{$version}}</h4>
                    <br>
                    <img class="thumbnail" style="margin: auto; width: 80%; padding: 1px" src="images/hrimage2.jpg">
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as {{ Auth::user()->u_fname }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection