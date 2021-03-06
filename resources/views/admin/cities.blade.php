@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Cities</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped stock_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>City </th>
                                    <th>State</th>
                                    <th>State Code</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @if(isset($cities) && $cities)
								@foreach($states as $state)
                                @foreach ($cities as $city)
								@if($state->id == $city->state_id)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $city->city_name }}</td>
                                    <td>{{ $state->state_name}}</td>
                                    <td>{{ $state->state_code}}</td>
                                    <td>
                                        {{ Html::link('admin/edit-city/'.$city->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ Html::link('admin/delete-city/'.$city->id, '',
                                        array('class' => 'btn btn-danger btn-xs fa fa-trash', 'onClick' => 'javascript: return confirm("Are you sure want to delete this!");'))}}
                                    </td>
                                </tr>
								@endif
                                @endforeach
								@endforeach
                                @else
                                <tr>
                                    <td colspan="5">No Record Exists</td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                @if($cities && $cities->links())
                                <tr>
                                    <td colspan="5" align="center">
                                        <nav class="pagination"> {{ $cities->links() }} </nav>
                                    </td>
                                </tr>
                                @endif
                                <tr class="records">
                                    <td colspan="5" align="center">Total Records: {{ $cities->total() }}</td>
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
                    <h5>Add New City</h5>
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
                        {!! Form::open(array('action' => 'Admin\CityController@saveCity', 'method'=>'post', 'class'=>'lawisterForm')) !!}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-r">
                            <div class="form-group">
                                <p>Note: * required fields</p>
                            </div>
                            <div class="form-group">
                                {!! Form::label('state_id', 'Select State') !!}
                                <span class="help-text">*</span>
                                <select  name="state_id" id="state_id" class="form-control" required="required"
                                         data-parsley-required-message="Please Select State">
                                    <option value="" >Select State</option>
                                    @if($states)
                                    @foreach($states as $state)
                                    <option value="{{$state->id}}" >{{$state->state_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">                               
                                {!! Form::label('city_name', 'City Name') !!}
                                <span class="help-text">*</span>
                                {!! Form::text('city_name', '', array('class' => 'form-control', 'required' => 'required',
                                'data-parsley-required-message' => 'Please Enter City Name')) !!}
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