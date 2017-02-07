@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Jurisdictions</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped stock_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jurisdiction</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @if(isset($jurisdictions) && $jurisdictions)
                                @foreach ($jurisdictions as $jurisdiction)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $jurisdiction->jurisdiction_name }}</td>
                                    <td>
                                        {{ Html::link('admin/edit-jurisdiction/'.$jurisdiction->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ Html::link('admin/delete-jurisdiction/'.$jurisdiction->id, '',
                                        array('class' => 'btn btn-danger btn-xs fa fa-trash', 'onClick' => 'javascript: return confirm("Are you sure want to delete this!");'))}}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3">No Record Exists</td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                @if($jurisdictions && $jurisdictions->links())
                                    <tr>
                                        <td colspan="3" align="center">
                                            <nav class="pagination"> {{ $jurisdictions->links() }} </nav>
                                        </td>
                                    </tr>
                                @endif
                                <tr class="records">
                                    <td colspan="3" align="center">Total Records: {{ $jurisdictions->total() }}</td>
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
                    <h5>Add New Jurisdiction</h5>
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
                        {!! Form::open(array('action' => 'Admin\JurisdictionController@saveJurisdiction', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">
                                {!! Form::label('jurisdiction_name', 'Jurisdiction Name') !!}
                                <span class="help-text">*</span>
                                {!! Form::text('jurisdiction_name', '', array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter Jurisdiction Name')) !!}
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