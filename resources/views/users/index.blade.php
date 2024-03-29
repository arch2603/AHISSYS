@extends('users.base')

@section('user-form-content')
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="box-title">List of users</h3>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary" href="{{ route('create_user') }}">add new user</a>
                    </div>
                </div>
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div><!-- end .box-body -->

                <form method="POST" action="{{ route('users-mgmnt.search') }}">
                    {{--{{ csrf_field() }}--}}
                    @component('layouts.search', ['title' => 'Search'])

                        @component('layouts.two-cols-search-row', ['attributes' => ['User Name', 'First Name'],
                        'oldvalues' => [isset($searchattributes) ? $searchattributes['user_name'] : '',
                        isset($searchattributes) ? $searchattributes['u_fname'] : '']])
                        @endcomponent
                        {{--<pre>@php--}}
                            {{--print_r($searchattributes);--}}
                        {{--@endphp</pre>--}}
                        </br>
                        @component('layouts.two-cols-search-row', ['attributes' => ['Last Name', 'Email'],
                        'oldvalues' => [isset($searchattributes) ? $searchattributes['last_name'] : '',
                        isset($searchattributes) ? $searchattributes['email'] : ''] ])
                        @endcomponent
                    @endcomponent
                    </form>
                {{--<h4>Users</h4>--}}
                {{--<div class="medium-2 "><a class="button hollow success" href="{{ route('new_user') }}">ADD NEW USER</a></div>--}}

                <!--<pre> </pre> -->
                    <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2"
                                            rowspan="1" colspan="1" aria-label="Name: activate to sort column descending"
                                            aria-sort="ascending">User Name
                                        </th>
                                        <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Email: activate to sort column ascending">First Name
                                        </th>
                                        <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Email: activate to sort column ascending">Last Name
                                        </th>
                                        {{--<th width="20%" class="sorting hidden-xs" tabindex="0" aria-controls="example2"--}}
                                        {{--rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">--}}
                                        {{--Email--}}
                                        {{--</th>--}}
                                        <th width="20%" class="sorting hidden-xs" tabindex="0" aria-controls="example2"
                                            rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">
                                            Email
                                        </th>
                                        <th tabindex="0" aria-controls="example2" rowspan="1" colspan="3"
                                            aria-label="Action: activate to sort column ascending">Modify User Profile
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr role="row" class="odd">
                                            <td class="hidden-xs">{{$user->user_name}}</td>
                                            <td class="sorting_1">{{ ($user->u_fname)}}</td>
                                            <td class="sorting_1">{{ ($user->last_name)}}</td>
                                            <td class="hidden-xs">{{$user->u_email}}</td>
                                            <td>
                                                <form class="row" method="POST"
                                                      action="{{ route('users-mgmnt.destroy', ['id' => $user->id] ) }}"
                                                      onsubmit="return confirm('Are you sure')">

                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                    <a class="btn btn-warning col-sm-3 col-xs-5 btn-margin"
                                                       href="{{ route('show_user', ['user_id' => $user->id]) }}">EDIT
                                                    </a>
                                                    <!--<a class="hollow button warning" href="">BOOK A ROOM</a>-->
                                                @if ($user->user_name != Auth::user()->user_name)<!-- check if the current user logged in is the user being deleted -->
                                                    <button type="submit"
                                                            class="btn btn-danger col-sm-3 col-xs-5 btn-margin">
                                                        Delete
                                                    </button>
                                                    @endif

                                                </form>

                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th width="10%" rowspan="1" colspan="1">User Name</th>
                                        <th width="20%" rowspan="1" colspan="1">First Name</th>
                                        <th width="20%" rowspan="1" colspan="1">Last Name</th>
                                        <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Email</th>
                                        {{--<th class="hidden-xs" width="20%" rowspan="1" colspan="1">Last Name</th>--}}
                                        <th rowspan="1" colspan="2">Modify User Profile</th>
                                    </tr>
                                    </tfoot>
                                </table><!--end of #user-table -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1
                                    to {{count($users)}} of {{count($users)}} entries
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    {{--{{ $users->links() }}--}}
                                </div>
                            </div>
                        </div>
                    </div><!--end of table-wrapper -->

                </div><!-- box body -->
            </div>
        </section>
        </div>

    @endsection