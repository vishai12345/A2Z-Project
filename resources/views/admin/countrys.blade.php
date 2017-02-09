@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Country List</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped stock_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID </th>
                                    <th>Country Name</th>
									 <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @if(isset($countrys) && $countrys)
                                @foreach ($countrys as $country)
                                <tr>
                                    <td>{{ ++$i }}</td>
									<td>{{$country->id}}</td>
                                    <td>{{ $country->country_name }}</td>
                                    <td>
                                        {{ Html::link('admin/edit-country/'.$country->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ Html::link('admin/delete-country/'.$country->id, '',
                                        array('class' => 'btn btn-danger btn-xs fa fa-trash', 'onClick' => 'javascript: return confirm("Are you sure want to delete this!");'))}}
                                    </td>
                                </tr>
								@endforeach
                                @else
                                <tr>
                                    <td colspan="5">No Record Exists</td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                @if($countrys && $countrys->links())
                                <tr>
                                    <td colspan="5" align="center">
                                        <nav class="pagination"> {{ $countrys->links() }} </nav>
                                    </td>
                                </tr>
                                @endif
                                <tr class="records">
                                    <td colspan="5" align="center">Total Records: {{ $countrys->total() }}</td>
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
                    <h5>Add New Country</h5>
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
                        {!! Form::open(array('action' => 'Admin\CountryController@saveCountry', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-r">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">                               
                                {!! Form::label('country_name', 'Country Name') !!}
                                <span class="help-text">*</span>
                                {!! Form::text('country_name', '', array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter Country Name')) !!}
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