@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Organizations</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped stock_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Organization</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @if(isset($organizations) && $organizations)
                                @foreach ($organizations as $organization)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $organization->organization_name }}</td>
                                    <td>
                                        {{ Html::link('admin/edit-organization/'.$organization->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ Html::link('admin/delete-organization/'.$organization->id, '',
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
                                @if($organizations && $organizations->links())
                                    <tr>
                                        <td colspan="3" align="center">
                                            <nav class="pagination"> {{ $organizations->links() }} </nav>
                                        </td>
                                    </tr>
                                @endif
                                <tr class="records">
                                    <td colspan="3" align="center">Total Records: {{ $organizations->total() }}</td>
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
                    <h5>Add New Organization</h5>
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
                        {!! Form::open(array('action' => 'Admin\OrganizationController@saveOrganization', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">
                                {!! Form::label('organization_name', 'Organization Name') !!}
                                <span class="help-text">*</span>
                                {!! Form::text('organization_name', '', array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter Organization Name')) !!}
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