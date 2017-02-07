@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Edit Practice Area</h5>
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
                        {!! Form::open(array('action' => 'Admin\CategoryController@updateCategory', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">                                
                                {!! Form::hidden('category_id', $category->id) !!}
                                {!! Form::label('category_name', 'Name') !!}
                                <span class="help-text">*</span>
                                {!! Form::text('category_name', $category->category_name, array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter Practice Area Name')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('status', 'Status') !!} </br>
                                <div class="radio radio-success radio-inline">
                                    {!! Form::radio('status', '1', ($category->status == 1) ? true : false, array('id' => 'status1')) !!}
                                    <label for="status1">
                                        Enable
                                    </label>
                                </div>
                                <div class="radio radio-danger radio-inline">
                                    {!! Form::radio('status', '0', ($category->status == 0) ? true : false, array('id' => 'status2')) !!}
                                    <label for="status2">
                                        Disable
                                    </label>
                                </div>
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