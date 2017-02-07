@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Add New Lawyer</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/lawyers', 'Back', array('class' => 'btn btn-primary btn-xs')) }}
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
                        {!! Form::open(array('action' => 'Admin\LawyerController@saveLawyer','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-r">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Name<span class="pull-right">* required fields</span>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-group">
                                            {!! Form::label('prefix', 'Prefix') !!}
                                            {!! Form::text('prefix', '', array('class' => 'form-control')) !!}
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-group">
                                            {!! Form::label('first_name', 'First Name') !!}
                                            <span class="help-text">*</span>
                                            {!! Form::text('first_name', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-group">
                                            {!! Form::label('middle_name', 'Middle Name') !!}
                                            {!! Form::text('middle_name', '', array('class' => 'form-control')) !!}
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-group">
                                            {!! Form::label('last_name', 'Last Name') !!}
                                            <span class="help-text">*</span>
                                            {!! Form::text('last_name', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-group">
                                            {!! Form::label('suffix', 'Suffix') !!}
                                            {!! Form::text('suffix', '', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-r">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Contact<span class="pull-right">* required fields</span>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
                                            {!! Form::label('phone', 'Phone Number') !!}
                                            <span class="help-text">*</span>
                                            {!! Form::text('phone', '', array('class' => 'form-control', 'data-mask' => '(999) 999-9999', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
                                            {!! Form::label('email', 'E-mail Address') !!}
                                            {!! Form::text('email', '', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-r">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Address<span class="pull-right">* required fields</span>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">                                            
                                            {!! Form::label('label', 'Address Label') !!}
                                            {!! Form::text('label', '', array('class' => 'form-control')) !!}                                            
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">                                            
                                            {!! Form::label('address1', 'Address Line 1') !!}
                                            <span class="help-text">*</span>
                                            {!! Form::text('address1', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">                                            
                                            {!! Form::label('address2', 'Address Line 2') !!}
                                            {!! Form::text('address2', '', array('class' => 'form-control')) !!}                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
                                            {!! Form::label('state_id', 'Select State') !!}
                                            <span class="help-text">*</span>
                                            <select  name="state_id" id="state_id" class="form-control" required data-parsley-required-message="">
                                                <option value="">Select State</option>
                                                @if($states)
                                                @foreach($states as $state)
                                                <option value="{{$state->id}}" >{{$state->state_name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
                                            {!! Form::label('city_id', 'Select City') !!}
                                            <span class="help-text">*</span>
                                            <select name="city_id" id="city_id" class="form-control" required data-parsley-required-message="">
                                                <option value="">Select City</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">                                            
                                            {!! Form::label('region', 'Region/Province') !!}
                                            {!! Form::text('region', '', array('class' => 'form-control')) !!}                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">                                            
                                            {!! Form::label('zip', 'Zip/Postal Code') !!}
                                            <span class="help-text">*</span>
                                            {!! Form::text('zip', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">                                            
                                            {!! Form::label('country', 'Country') !!}
                                            {!! Form::text('country', '', array('class' => 'form-control')) !!}                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-r">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group padding0 text-center">                                
                                {!! Form::submit('Save', array('class' => 'btn btn-primary btn-lg')) !!}                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group padding0 text-center">                                
                                {!! Form::reset('Reset', array('class' => 'btn btn-invert btn-lg')) !!}                                
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#state_id').change(function () {
            var state_id = $(this).val();
            $.ajax({
                url: '<?php echo URL::to("/admin/get-cities"); ?>',
                type: "get",
                data: {'state_id': state_id},
                success: function (data) {
                    var myDb = JSON.parse(data);
                    $('#city_id').html('');
                    $('#city_id').append(' <option selected disabled>Select City</option>');
                    jQuery.each(myDb, function (key, value) {
                        $('#city_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>
@stop