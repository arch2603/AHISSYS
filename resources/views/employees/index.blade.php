@extends('employees.base')
@section('employee-form-content')
    <!-- Main Employee Content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="box-title"> List of Employees</h4>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary" href="{{ route('new_employee') }}">Add
                            New
                            Employee
                        </a>
                    </div>
                </div> <!--.row -->
            </div><!--end .box-header -->


            <!--<pre> </pre> -->
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <form method="POST" action="{{ route('emps-mgmnt.search') }}">
                    {{ csrf_field() }}
                    @component('layouts.search', ['title' => 'Search'])
                        @component('layouts.two-cols-searchemp-row', ['attributes' => ['First Name', 'Last Name'],
                        'oldvalues' => [isset($searchattributes) ? $searchattributes['emp_fname'] : '', isset($searchattributes) ? $searchattributes['emp_lname'] : '']])
                        @endcomponent
                    <br>
                        @component('layouts.two-cols-searchemp-row', ['attributes' => ['Employee Number'],
                    'oldvalues' => [isset($searchattributes) ? $searchattributes['emp_no'] : ''] ])
                        @endcomponent
                    @endcomponent
                </form>
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-hover dataTable" id="employee-table"
                                   aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th width="200">Employee Number</th>
                                    <th width="200">First Name</th>
                                    <th width="200">Last Name</th>
                                    <th width="200">Photo</th>
                                    <th width="200">Email</th>
                                    <th width="200"></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$employee->emp_no}}</td>
                                        <td>{{$employee->emp_fname}}</td>
                                        <td>{{$employee->emp_lname}}</td>
                                        <td>{{$employee->emp_oname}}</td>
                                        <td>{{$employee->emp_email}}</td>
                                        <td>
                                            <a class="btn btn-warning col-sm-3 col-xs-5 btn-margin"
                                               href="{{ route('emp-test')}}">Update</a>
<!--                                            <a class="btn btn-success col-sm-6 col-xs-5 btn-margin" href="{{ route('show_employee', ['employee_id' => $employee->id]) }} ">View Profile</a>-->
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div><!--.col-sm-12 -->
                    </div><!-- .row-->
                </div><!--#example2_wrapper.dataTables -->
            </div><!-- .box-body -->
        </div><!-- end .box -->
        </div>
    </section>


@endsection