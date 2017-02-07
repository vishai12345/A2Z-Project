@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            {{--Practice Area--}}
            @if(isset($page) && $page && $page=='category')
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Import Practice Area</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/categories', 'Back', array('class' => 'btn btn-primary btn-xs'))}}
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
                        {!! Form::open(array('action' => 'Admin\CategoryController@saveImportCategory', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">                                
                                {!! Form::label('import_file', 'Select CSV File') !!}
                                <span class="help-text">*</span>
                                {!! Form::file('import_file', array('required' => 'required',
                                'data-parsley-required-message' => 'Please Select CSV File Only')) !!}
                            </div>
                            <div class="form-group">                                
                                {!! Form::submit('Import', array('class' => 'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endif

            {{--States--}}
            @if(isset($page) && $page && $page=='state')
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Import State</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/states', 'Back', array('class' => 'btn btn-primary btn-xs'))}}
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
                        {!! Form::open(array('action' => 'Admin\StateController@saveImportState', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">                                
                                {!! Form::label('import_file', 'Select CSV File') !!}
                                <span class="help-text">*</span>
                                {!! Form::file('import_file', array('required' => 'required',
                                'data-parsley-required-message' => 'Please Select CSV File Only')) !!}
                            </div>
                            <div class="form-group">                                
                                {!! Form::submit('Import', array('class' => 'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
@stop