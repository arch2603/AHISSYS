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
                        <form class="form-horizontal" role="form"
                              action="{{ $modify == 1 ? route('update_employee', ['employee_id' => 1]) : route('create_employee') }}"
                              method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Employee Number</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="emp_no" type="text" value="{{ old('emp_no') }}">
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
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input name="emp_email" type="text" value="{{ old('emp_email') }}">
                                    <small class="error">{{$errors->first('emp_email')}}</small>
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
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-md-6">
                                    <input name="emp_address" type="text" value="{{ old('emp_address') }}">
                                    <small class="error">{{$errors->first('emp_address')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">NPF</label>
                                <div class="col-md-6">
                                    <input name="emp_npf" type="text" value="{{ old('emp_npf') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Employee Type</label>
                                <div class="col-md-6">
                                    <select name="emp_type">

                                        <option id="emptype"></option>
                                        @foreach( $emp_types  as $emp_type)
                                            <option value="{{ $emp_type }}">{{ $emp_type }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gender</label>
                                <div class="col-md-6">
                                    <select name="emp_gender">
                                        <option id="empgender"></option>
                                        @foreach( $emp_gender  as $emp_gen)
                                            <option value="{{ $emp_gen }}">{{ $emp_gen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Date Of Birth</label>
                                <div class="col-md-6">
                                    <input name="emp_dob" type="text" class="fa fa-calendar dob" id="datepicker"
                                           value=""
                                           placeholder="&#xf073">
                                    <small class="error">{{$errors->first('emp_dob')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Martial Status</label>
                                <div class="col-md-6">
                                    <select name="emp_status">
                                        <option id="mstatus"></option>
                                        @foreach( $emp_mstatus  as $emp_mstat)
                                            <option value="{{ $emp_mstat }}">{{ $emp_mstat }}</option>
                                        @endforeach

                                    </select>
                                    <small class="error">{{$errors->first('emp_mstatus')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Division</label>
                                <div class="col-md-6">
                                    <input name="emp_division" type="text" value="{{ old('emp_division') }}">
                                    <small class="error">{{$errors->first('emp_division')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Employee Position</label>
                                <div class="col-md-6">
                                    <input name="emp_position" type="text" value="{{ old('emp_position') }}">
                                    <small class="error">{{$errors->first('emp_position')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <input value="SAVE" class="btn btn-success" type="submit">
                                    <a class=" btn btn-primary" href="{{ route('employees') }}">CANCEL</a>
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