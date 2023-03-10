@extends('dashboard.base')
@section('dashboard-form-content')
    <!-- Main Employee Content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="box-title"> Dashboard</h4>

                    </div>
                    <div class="col-sm-4">
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in as {{ Auth::user()->name }}
                        </div>
                        {{--<a class="btn btn-primary" href="{{ route('new_employee') }}">Add--}}
                            {{--New--}}
                            {{--Employee--}}
                        {{--</a>--}}
                    </div>
                </div> <!--.row -->
            </div><!--end .box-header -->
        </div><!--end of .box -->
    </section>

@endsection
