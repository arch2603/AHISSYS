@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>{{$modify == 1 ? 'Modify User' : 'New User'}}</h4>
            <form action="{{ $modify == 1 ? route('update_user', ['user_id' => 1]) : route('create_user') }}" method="post">
                <div class="medium-4  columns">
                    <label>User Name</label>
                    <input name="user_name" type="text" value="{{ old('user_name') }}">
                    <small class="error">{{$errors->first('user_name')}}</small>
                </div>
                <div class="medium-4  columns">
                    <label>Name</label>
                    <input name="name" type="text" value="{{ old('name') }}">
                    <small class="error">{{$errors->first('name')}}</small>
                </div>
                <div class="medium-8  columns">
                    <label>Last Name</label>
                    <input name="" type="text" value="{{ old('') }}">
                    <small class="error">{{$errors->first('')}}</small>
                </div>
                <div class="medium-8  columns">
                    <label>Address</label>
                    <input name="address" type="text" value="{{ old('address') }}">
                    <small class="error">{{$errors->first('address')}}</small>
                </div>
                <div class="medium-4  columns" >
                    <label>zip_code</label>
                    <input name="zip_code" type="text" value="{{ old('zip_code') }}">
                </div>
                <div class="medium-4  columns">
                    <label>City</label>
                    <input name="city" type="text" value="{{ old('city') }}">
                </div>

                <div class="medium-12  columns">
                    <label>Email</label>
                    <input name="email" type="text" value="{{ old('email') }}">
                    <small class="error">{{$errors->first('email')}}</small>
                </div>
                <div class="medium-12  columns">
                    <input value="SAVE" class="button success hollow" type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection