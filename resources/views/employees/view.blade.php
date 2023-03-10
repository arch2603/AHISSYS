@extends('employees.base')
@section('employee-view-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Employee Profile</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="" action="{{ route('emps-mgmnt.index') }}">
                        @foreach ($employees as $employee)
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="employeenumber" class="col-md-2 control-label">Emloyee Number</label>
                            <div class="col-md-10 ">
                                <input id="employeenumber" type="text" class="form-control" name="employeenumber" value="{{ $employee->emp_no }}">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="firstname" class="col-md-2 control-label">First Name</label>
                            <div class="col-md-10">
                                <input id="firstname" type="text" class="form-control" name="firstname"
                                       value="{{ $employee->emp_fname }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-2 control-label">Last Name</label>
                            <div class="col-md-10">
                                <input id="lastname" type="text" class="form-control" name="lastname"
                                       value="{{ $employee->emp_lname }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_email" class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input id="emp_email" type="text" class="form-control" name="emp_email"
                                       value="{{ $employee->emp_email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_address" class="col-md-2 control-label">Address</label>
                            <div class="col-md-10">
                                <input id="emp_address" type="text" class="form-control" name="emp_address">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_npf" class="col-md-2 control-label">NPF</label>
                            <div class="col-md-10">
                                <input id="emp_npf" type="text" class="form-control" name="emp_npf">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_gender" class="col-md-2 control-label">Gender</label>
                            <div class="col-md-10">
                                <input id="emp_gender" type="text" class="form-control" name="emp_gender"
                                       value="{{ $employee->emp_gender }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_dob" class="col-md-2 control-label">Date of Birth</label>
                            <div class="col-md-10">
                                <input id="emp_dob" type="text" class="form-control" name="emp_dob"
                                       value="{{ $employee->emp_dob }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_date_hired" class="col-md-2 control-label">Hired Date</label>
                            <div class="col-md-10">
                                <input id="emp_date_hired" type="text" class="form-control" name="emp_date_hired"
                                       value="{{ $employee->emp_date_hired }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_mstatus" class="col-md-2 control-label">Martial Status</label>
                            <div class="col-md-10">
                                <input id="emp_mstatus" type="text" class="form-control" name="emp_mstatus" value="{{ $employee->emp_mstatus}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_division" class="col-md-2 control-label">Martial Status</label>
                            <div class="col-md-10">
                                <input id="emp_division" type="text" class="form-control" name="emp_division"
                                       value="{{ $employee->emp_division}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emp_position" class="col-md-2 control-label">Position</label>
                            <div class="col-md-10">
                                <input id="emp_position" type="text" class="form-control" name="emp_position" value="{{ $employee->emp_position}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Return
                                </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div><!--end of .panel-default -->
        </div><!-- .col-md-8 -->
    </div><!-- end of .row -->
</div><!-- end of .container -->

@endsection