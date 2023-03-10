@extends('employees.base')

@section('employee-form-content')
<section class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$modify == 1 ? 'Modify Employee' : 'New Employee'}}
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="{{ $modify == 1 ? route('update_employee', ['employee_id']) : route('create_employee') }}"
                          method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-6">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Employee Number</label>
                            <div class="col-md-6">
                                <input class="form-control" name="emp_no" type="text" value="{{ old('emp_number') }}">
                                <small class="error">{{$errors->first('emp_no')}}</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input name="emp_fname" type="text" value="{{ old('emp_fname') }}">
                                <small class="error">{{$errors->first('emp_fname')}}</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input name="emp_lname" type="text" value="{{ old('emp_lname') }}">
                                <small class="error">{{$errors->first('emp_lname')}}</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-6 control-label">Photo</label>
                            <div class="col-md-10">
                                <input id="image" type="file" class="form-control" name="image">
                            </div>
                            {{--<small class="error">{{$errors->first('emp_no')}}</small>--}}
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input value="SAVE" class="btn btn-success" type="submit">
<!--                                <a class=" btn btn-primary" href="{{ route('employees') }}">CANCEL</a>-->
                            </div>
                        </div>

                    </form>

                </div>

            </div><!--.panel panel-default -->
        </div><!-- .row -->
    </div><!-- end .container -->
</section>
@if(Storage::disk('local')->has('emp_fname' . '-' . 'emp_no' . '.jpg'))
<section class="row">
    <div class="col-md-offset-3">
        <img src="{{ route('employee.image', ['filename' => 'emp_fname' . '-' . 'emp_no'. '.jpg'] ) }}" alt="" class="img-responsive">
    </div>
</section>
@endif
@endsection