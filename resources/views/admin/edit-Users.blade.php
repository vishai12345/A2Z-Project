@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Edit Profile: {{ $user->firstname }} {{ $user->lastname }}</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/users', 'Back', array('class' => 'btn btn-primary btn-xs')) }}
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-r">
                            <div class="tabs-container">
                                <div class="tabs-left">

                                    <ul class="nav nav-tabs" id="edit-lawyer-tabs">
                                        <li class="{{ (isset($tab_type) && $tab_type=='personal') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-user-profile/'.$user->id.'/personal' , 'Personal Detail')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='profile-photo') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-user-profile/'.$user->id.'/profile-photo' , 'Profile Photo')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='address') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-user-profile/'.$user->id.'/address' , 'Offices & Addresses')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='contacts') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-user-profile/'.$user->id.'/contacts' , 'Contact Details')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='about-you') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-user-profile/'.$user->id.'/about-you' , 'About You')}}
                                        </li>
                                    </ul>

                                    <div class="tab-content ">
                                        <div class="tab-pane active">

                                            @if(isset($tab_type) && $tab_type=='personal')
                                            <div class="panel-body">
                                                <h2>Personal Details</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\UserController@updateUser','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('first_name', 'First Name') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('first_name', $user->firstname, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('last_name', 'Last Name') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('last_name', $user->lastname, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('user_id', $user->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='profile-photo')
                                            <div class="panel-body">
                                                <h2>Profile Photo</h2>
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\UserController@updateUser','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::label('profile_photo', 'Profile Photo') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                            {!! Form::file('profile_photo', array('required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('user_id', $user->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <img src="{{ URL::asset('public/images/') }}/{{ isset($user->image_url) ? $user->image_url : 'profile.png' }}"
                                                         width="200" height="200" class="img-responsive" />
                                                </div>
                                            </div>
                                            @endif

                                       

                                            @if(isset($tab_type) && $tab_type=='address')
                                            <div class="panel-body">
                                                <h2>Offices & Addresses</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Address</th>
                                                                <th>Default</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($tutoradds) && $tutoradds)
                                                            @foreach($tutoradds AS $tutoradd)
                                                            <tr>
                                                                <td>
                                                                    @if($tutoradd->street)
                                                                    {{$tutoradd->street.', '}} @endif													
                                                                    @if($tutoradd->city_name)
                                                                    {{$tutoradd->city_name.', '}}
                                                                    @endif
                                                                    @if($tutoradd->postcode)
                                                                    {{$tutoradd->postcode.', '}}<br/>
                                                                    @endif
                                                                    @if($tutoradd->country)
                                                                    {{$tutoradd->country}}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($user->status == 1)
                                                                    <label class="label label-success">Default</label>
                                                                    @else
                                                                    {{ Html::link('admin/set-default/' .$tab_type. '/' .$user->id. '/' .$tutoradd->id, 'Set Default', '')}}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ Html::link('admin/edit-lawyer-info/' .$tab_type. '/' .$user->id. '/' .$tutoradd->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                                    &nbsp;&nbsp;
                                                                    {{ Html::link('admin/delete-User-info/' .$tab_type. '/' .$user->id. '/' .$tutoradd->id, '', array('class' => 'btn btn-danger btn-xs fa fa-trash'))}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            @endif
											

                                            @if(isset($tab_type) && $tab_type=='contacts')
                                            <div class="panel-body">
                                                <h2>Contact Details</h2>
                                                {!! Form::open(array('action' => 'Admin\UserController@updateUser','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('phone', 'Phone Number') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('phone', $user->mobile, array('class' => 'form-control', 'data-mask' => '(999) 999-9999', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('email', 'email') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('email', $user->email, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('user_id', $user->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='about-you')
                                            <div class="panel-body">
                                                <h2>About You</h2>
                                                {!! Form::open(array('action' => 'Admin\UserController@updateUser','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('summary', 'Summary') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
														@if(count($tutor)>0)
														@foreach($tutor as $tutors)
                                                            {!! Form::textarea('summary', $tutors->bio, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '','readonly')) !!}
														@endforeach
														@else
															{!! Form::textarea('summary', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '','readonly')) !!}
														@endif	
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#address_state_id').change(function () {
            var state_id = $(this).val();
            $.ajax({
                url: '<?php echo URL::to("/admin/get-cities"); ?>',
                type: "get",
                data: {'state_id': state_id},
                success: function (data) {
                    var myDb = JSON.parse(data);
                    $('#city_id').html('');
                    $('#city_id').append(' <option value="">Select City</option>');
                    jQuery.each(myDb, function (key, value) {
                        $('#city_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#education_state_id').change(function () {
            var state_id = $(this).val();
            $.ajax({
                url: '<?php echo URL::to("/admin/get-schools"); ?>',
                type: "get",
                data: {'state_id': state_id},
                success: function (data) {
                    var myDb = JSON.parse(data);
                    $('#school_id').html('');
                    $('#school_id').append(' <option value="">Select School</option>');
                    jQuery.each(myDb, function (key, value) {
                        $('#school_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>
@stop