@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Edit School</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/schools', 'Back', array('class' => 'btn btn-primary btn-xs'))}}
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                        {!! Form::open(array('action' => 'Admin\SchoolController@updateSchool', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">
                                {!! Form::label('state_id', 'Select State') !!}
                                <span class="help-text">*</span>
                                <select  name="state_id" id="state_id" class="form-control" required="required"
                                 data-parsley-required-message="Please Select State">
                                    <option value="">Select State</option>
                                    @if(isset($states) && $states)
                                    @foreach($states as $state)
                                    <option value="{{$state->id}}"
                                            @if($state->id==$school->state_id)
                                            selected="selected"
                                            @endif
                                            >{{$state->state_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">                                
                                {!! Form::hidden('school_id', $school->id) !!}
                                {!! Form::label('school_name', 'School Name') !!}
                                <span class="help-text">*</span>
                                {!! Form::text('school_name', $school->school_name, array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter School Name')) !!} <br>
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
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