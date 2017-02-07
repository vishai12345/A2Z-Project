@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Edit Jurisdiction</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/jurisdictions', 'Back', array('class' => 'btn btn-primary btn-xs'))}}
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
                        {!! Form::open(array('action' => 'Admin\JurisdictionController@updateJurisdiction', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">
                                {!! Form::hidden('jurisdiction_id', $jurisdiction->id) !!}
                                {!! Form::label('jurisdiction_name', 'Jurisdiction Name') !!}
                                <span class="help-text">*</span>
                                {!! Form::text('jurisdiction_name', $jurisdiction->jurisdiction_name, array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter Jurisdiction Name')) !!}
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