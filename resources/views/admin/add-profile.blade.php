@extends('admin.layout.default')
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Add New Social/Legal Profile</h5>
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
                            {!! Form::open(array('action' => 'Admin\ProfileController@saveProfile', 'files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <p>Note: * required fields</p>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('field_type', 'Profile Type') !!}
                                    <span class="help-text">*</span>
                                    <select name="field_type" id="field_type" class="form-control"
                                    data-parsley-required-message="Please Select Profile Type" required="required">
                                        <option value="">Select Type</option>
                                        <option value="1">Social Type</option>
                                        <option value="2">Legal Type</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('field_label', 'Profile Label') !!}
                                    <span class="help-text">*</span>
                                    {!! Form::text('field_label', '', array('class' => 'form-control', 'required' => 'required',
                                    'data-parsley-required-message' => 'Please Enter Profile Label')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('field_icon', 'Profile Icon') !!}
                                    <span class="help-text">*</span>
                                    {!! Form::file('field_icon', array('required' => 'required',
                                    'data-parsley-required-message' => 'Please Select Profile Icon')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('field_sample_value', 'Profile Sample Value') !!}
                                    {!! Form::text('field_sample_value', '', array('class' => 'form-control')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
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