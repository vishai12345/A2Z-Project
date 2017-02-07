@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Change Password</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if(Session::has('success_msg'))
                                <div class="alert alert-success">
                                    <h2>{{ Session::get('success_msg') }}</h2>
                                </div>
                            @endif
                            @if(Session::has('error_msg'))
                                <div class="alert alert-danger">
                                    <h2>{{ Session::get('error_msg') }}</h2>
                                </div>
                            @endif
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        {!! Form::open(array('action' => 'Admin\AdminController@updateAdminPassword', 'files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: <span class="help-text">*</span> required fields</p>
                            </div>
                            <div class="form-group">
                                {!! Form::label('old_password', 'Old Password') !!}
                                <span class="help-text">*</span>
                                {!! Form::password('old_password', array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter Old Password')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('password', 'New Password') !!}
                                <span class="help-text">*</span>
                                {!! Form::password('password', array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter New Password')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Confirm New Password') !!}
                                <span class="help-text">*</span>
                                {!! Form::password('password_confirmation', array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter Confirm Password',
                                'data-parsley-equalto' => 'password', 'data-parsley-equalto-message' => 'Confirm Password must be same as New Password',)) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Change Password', array('class' => 'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop