@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>States</h5>
                    {{ Html::link('admin/import-state', 'Import State', array('class' => 'btn btn-primary btn-xs pull-right'))}}
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped stock_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>State</th>
                                    <th>State Code</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @if(isset($states) && $states)
                                @foreach ($states as $state)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $state->state_name }}</td>
                                    <td>{{ $state->state_code}}</td>
                                    <td>
                                        {{ Html::link('admin/edit-state/'.$state->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ Html::link('admin/delete-state/'.$state->id, '',
                                        array('class' => 'btn btn-danger btn-xs fa fa-trash', 'onClick' => 'javascript: return confirm("Are you sure want to delete this!");'))}}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4">No Record Exists</td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                @if($states && $states->links())
                                    <tr>
                                        <td colspan="4" align="center">
                                            <nav class="pagination"> {{ $states->links() }} </nav>
                                        </td>
                                    </tr>
                                @endif
                                <tr class="records">
                                    <td colspan="4" align="center">Total Records: {{ $states->total() }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Add New State</h5>
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
                        {!! Form::open(array('action' => 'Admin\StateController@saveState', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">
                                {!! Form::label('state_name', 'State') !!}
                                <span class="help-text">*</span>
                                {!! Form::text('state_name', '', array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter State Name')) !!}
                            </div>
                            <div class="form-group">                                
                                {!! Form::label('state_code', 'State Code') !!}
                                {!! Form::text('state_code', '', array('class' => 'form-control')) !!}
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