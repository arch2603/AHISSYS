@extends('users.base')
@section('user-form-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{$modify == 1 ? 'Modify User' : 'New User'}}
                    </div><!--end of .panel-heading -->

                    <div class="panel-body">
                        <form class="form-horizontal" role="form"
                              action="{{ $modify == 1 ? route('users-mgmnt.update_user', ['user_id' => $user_id] ) : route('create_user') }}"
                              method="post">
                            {{ csrf_field() }}
                            {{--<input type="hidden" name="_method" value="PATCH">--}}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-md-2 control-label">User Name</label>
                                <div class="col-md-10 ">
                                    <input name="user_name" type="text" class="form-control"
                                           value="{{ old('user_name') ? old('user_name') : $user_name}}">
                                    <small class="error">{{$errors->first('user_name')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">First Name</label>
                                <div class="col-md-10">
                                    <input name="first_name" type="text" class="form-control"
                                           value="{{ old('first_name') ? ucfirst(old('first_name')) : ucfirst($first_name) }}">
                                    <small class="error">{{$errors->first('first_name')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-2 control-label">Last Name</label>
                                <div class="col-md-10">
                                    <input name="last_name" type="text" class="form-control"
                                           value="{{ old('last_name') ? (old('last_name')) : ($last_name) }}">
                                    <small class="error">{{$errors->first('last_name')}}</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-2 control-label">Email</label>
                                <div class="col-md-10">
                                    <input name="email" type="text" class="form-control" value="{{ old('email') ? old('email') : $email }}">
                                    <small class="error">{{$errors->first('email')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-2 control-label">Password</label>
                                <div class="col-md-10">
                                    <input name="password" type="password" class="form-control"
                                           value="{{ old('password') ? old('password') : $password }}">
                                    <small class="error">{{$errors->first('password')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="col-md-2 control-label">Confirm
                                    Password</label>
                                <div class="col-md-10">
                                    <input name="password_confirmation" type="password" class="form-control"
                                           value="{{ old('password_confirmation')? old('password_confirmation'): $password }}">
                                    <small class="error">{{$errors->first('password_confirmation')}}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 ">
                                    <input value="SAVE" class="btn btn-success" type="submit">
                                    <a type="button" class="btn btn-primary"
                                       href="{{ route('users-mgmnt.index') }}">CANCEL</a>
                                </div>
                            </div>
                        </form>
                        <!-- end .panel-body -->
                    </div>
                </div>
            </div>
        </div><!-- end .row -->
    </div><!-- end .container -->
@endsection