@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Edit Profile: {{ $lawyer->first_name }} {{ $lawyer->middle_name }} {{ $lawyer->last_name }}</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/lawyers', 'Back', array('class' => 'btn btn-primary btn-xs')) }}
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-r">
                            <div class="tabs-container">
                                <div class="tabs-left">

                                    <ul class="nav nav-tabs" id="edit-lawyer-tabs">
                                        <li class="{{ (isset($tab_type) && $tab_type=='personal') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/personal' , 'Personal Detail')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='profile-photo') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/profile-photo' , 'Profile Photo')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='practice-areas') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/practice-areas' , 'Practice Areas')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='address') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/address' , 'Offices & Addresses')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='contacts') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/contacts' , 'Contact Details')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='about-you') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/about-you' , 'About You')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='fees') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/fees' , 'Fees')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='websites') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/websites' , 'Websites & Blogs')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='social-media') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/social-media' , 'Social Media & Other Legal Profiles')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='languages') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/languages' , 'Languages')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='educations') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/educations' , 'Educations')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='experiences') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/experiences' , 'Professional Experience')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='vcard') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/vcard' , 'Upload V-Card')}}
                                        </li>
                                        <li class="{{ (isset($tab_type) && $tab_type=='jurisdictions') ? 'active' : '' }}">
                                            {{ Html::link('admin/edit-lawyer-profile/'.$lawyer->id.'/jurisdictions' , 'Jurisdictions Admitted To Practice')}}
                                        </li>
                                    </ul>

                                    <div class="tab-content ">
                                        <div class="tab-pane active">

                                            @if(isset($tab_type) && $tab_type=='personal')
                                            <div class="panel-body">
                                                <h2>Personal Details</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyer','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('prefix', 'Prefix') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('prefix', $lawyer->prefix, array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('first_name', 'First Name') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('first_name', $lawyer->first_name, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('middle_name', 'Middle Name') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('middle_name', $lawyer->middle_name, array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('last_name', 'Last Name') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('last_name', $lawyer->last_name, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('suffix', 'Suffix') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('suffix', $lawyer->suffix, array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
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
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyer','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
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
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <img src="{{ URL::asset('public/uploads/') }}/{{ isset($lawyer->profile_photo) ? $lawyer->profile_photo : 'profile.png' }}"
                                                         width="200" height="200" class="img-responsive" />
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='practice-areas')
                                            <div class="panel-body">
                                                <h2>Practice Areas</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Practice Area</th>
                                                                <th>Free Consultation</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($lawyers_practice_areas) && $lawyers_practice_areas)
                                                            @foreach($lawyers_practice_areas AS $practice_area)
                                                            <tr>
                                                                <td>{{ $practice_area->category_name }}</td>
                                                                <td>
                                                                    @if($practice_area->pivot->free_consultation==1)
                                                                    Yes
                                                                    @elseif($practice_area->pivot->free_consultation==0)
                                                                    No
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ Html::link('admin/edit-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$practice_area->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                                    &nbsp;&nbsp;
                                                                    {{ Html::link('admin/delete-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$practice_area->id, '', array('class' => 'btn btn-danger btn-xs fa fa-trash'))}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">Add New Practice Area</h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@addLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('categories', 'Select Practice Area') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="category_id" data-parsley-required-message="" name="category_id" required>
                                                                <option value="">Select Practice Area</option>
                                                                @if(isset($categories) && $categories)
                                                                @foreach($categories AS $category)
                                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('free_consultation', 'Free Consultation') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="checkbox checkbox-primary">
                                                                {!! Form::checkbox('free_consultation', '1', false) !!}
                                                                <label for="free_consultation">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('free_consultation_policy', 'Free Consultation Policy') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('free_consultation_policy', '', array('class' => 'form-control', 'rows' => 3)) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
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
                                                                <th>Label</th>
                                                                <th>Address</th>
                                                                <th>Default</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($addresses) && $addresses)
                                                            @foreach($addresses AS $address)
                                                            <tr>
                                                                <td>{{$address->label}}</td>
                                                                <td>
                                                                    @if($address->address1)
                                                                    {{$address->address1.', '}}
                                                                    @endif
                                                                    @if($address->address2)
                                                                    {{$address->address2.', '}}<br/>
                                                                    @endif
                                                                    @if($address->city->city_name)
                                                                    {{$address->city->city_name.', '}}
                                                                    @endif
                                                                    @if($address->city->state->state_name)
                                                                    {{$address->city->state->state_name.', '}}<br/>
                                                                    @endif
                                                                    @if($address->region)
                                                                    {{$address->region.', '}}<br/>
                                                                    @endif
                                                                    @if($address->zip)
                                                                    {{$address->zip.', '}}<br/>
                                                                    @endif
                                                                    @if($address->country)
                                                                    {{$address->country}}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($address->status == 1)
                                                                    <label class="label label-success">Default</label>
                                                                    @else
                                                                    {{ Html::link('admin/set-default/' .$tab_type. '/' .$lawyer->id. '/' .$address->id, 'Set Default', '')}}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ Html::link('admin/edit-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$address->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                                    &nbsp;&nbsp;
                                                                    {{ Html::link('admin/delete-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$address->id, '', array('class' => 'btn btn-danger btn-xs fa fa-trash'))}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">Add New Office & Address</h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@addLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('label', 'Address Label') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('label', '', array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('address1', 'Address Line1') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('address1', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('address2', 'Address Line2') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('address2', '', array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('state_id', 'Select State') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select  name="state_id" id="address_state_id" class="form-control" required data-parsley-required-message="">
                                                                <option value="">Select State</option>
                                                                @if(isset($states) && $states)
                                                                @foreach($states as $state)
                                                                <option value="{{$state->id}}" >{{$state->state_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('city_id', 'Select City') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select name="city_id" id="city_id" class="form-control" required data-parsley-required-message="">
                                                                <option value="">Select City</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('region', 'Region') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('region', '', array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('zip', 'Zip/Postal Code') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('zip', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('country', 'Country') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('country', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='contacts')
                                            <div class="panel-body">
                                                <h2>Contact Details</h2>
                                                {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyer','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('phone', 'Phone Number') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('phone', $lawyer->phone, array('class' => 'form-control', 'data-mask' => '(999) 999-9999', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('email', 'email') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('email', $lawyer->email, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
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
                                                {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyer','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('summary', 'Summary') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('summary', $lawyer->summary, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='fees')
                                            <div class="panel-body">
                                                <h2>Fees</h2>
                                                {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyer','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('credit_card_accepted', 'Credit Card Accepted') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="checkbox checkbox-primary">
                                                                {!! Form::checkbox('credit_card_accepted', '1', ($lawyer->credit_card_accepted==1) ? true : false) !!}
                                                                <label for="credit_card_accepted">
                                                                    I accept Credit Cards
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('credit_card_desc', 'Credit Card Description') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('credit_card_desc', $lawyer->credit_card_desc, array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='websites')
                                            <div class="panel-body">
                                                <h2>Websites & Blogs</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Link Title</th>
                                                                <th>Type</th>
                                                                <th>Default</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($lawyers_websites) && $lawyers_websites)
                                                            @foreach($lawyers_websites AS $lawyers_website)
                                                            <tr>
                                                                <td>{{ $lawyers_website->link_title }}<br/>{{ $lawyers_website->website_url }}</td>
                                                                <td>{{ $lawyers_website->website_type }}</td>
                                                                <td>
                                                                    @if($lawyers_website->status == 1)
                                                                    <label class="label label-success">Default</label>
                                                                    @else
                                                                    {{ Html::link('admin/set-default/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_website->id, 'Set Default', '')}}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ Html::link('admin/edit-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_website->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                                    &nbsp;&nbsp;
                                                                    {{ Html::link('admin/delete-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_website->id, '', array('class' => 'btn btn-danger btn-xs fa fa-trash'))}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">Add A New Website or Blog</h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@addLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('website_type', 'Type') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="website_type" data-parsley-required-message="" name="website_type" required>
                                                                <option value="">Select Type</option>
                                                                <option value="Website">Website</option>
                                                                <option value="Blog">Blog</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('link_title', 'Link Title') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('link_title', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('website_url', 'URL') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('website_url', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('website_detail', 'Detail') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('website_detail', '', array('class' => 'form-control', 'rows' => 3)) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='social-media')
                                            <div class="panel-body">
                                                <h2>Social Media & Other Legal Profiles</h2>
                                                {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyer','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">
                                                        Enter the URLs for any profiles you have on the following social networking sites.
                                                    </h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    @if($social_profiles)
                                                        @foreach($social_profiles AS $social_profile)
                                                            <?php $value = ""; ?>
                                                            @if (array_key_exists($social_profile->field_value, $profiles))
                                                                <?php $value = $profiles[$social_profile->field_value]; ?>
                                                            @endif
                                                            <div class="row form-group">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                    {!! Form::label('profile['.$social_profile->field_value.']', $social_profile->field_label) !!}
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon" id="basic-addon">
                                                                            <img src="{{ URL::asset('public/profiles/') }}/{{ isset($social_profile->field_icon) ? $social_profile->field_icon : '' }}" />
                                                                        </span>
                                                                        {!! Form::text('profile['.$social_profile->field_value.']', $value,
                                                                        array('class' => 'form-control', 'placeHolder' => $social_profile->field_sample_value)) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">
                                                        Enter the URLs for any profiles you have on the following legal networking sites.
                                                    </h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    @if($legal_profiles)
                                                        @foreach($legal_profiles AS $legal_profile)
                                                            <?php $value = ""; ?>
                                                            @if (array_key_exists($legal_profile->field_value, $profiles))
                                                                <?php $value = $profiles[$legal_profile->field_value]; ?>
                                                            @endif
                                                            <div class="row form-group">
                                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                                    {!! Form::label('profile['.$legal_profile->field_value.']', $legal_profile->field_label) !!}
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon" id="basic-addon">
                                                                            <img src="{{ URL::asset('public/profiles/') }}/{{ isset($legal_profile->field_icon) ? $legal_profile->field_icon : '' }}" />
                                                                        </span>
                                                                        {!! Form::text('profile['.$legal_profile->field_value.']', $value, array('class' => 'form-control', 'placeHolder' => $legal_profile->field_sample_value)) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='languages')
                                            <div class="panel-body">
                                                <h2>Languages</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Language</th>
                                                                <th>Fluency</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($lawyers_languages) && $lawyers_languages)
                                                            @foreach($lawyers_languages AS $lawyers_language)
                                                            <tr>
                                                                <td>{{ $lawyers_language->language_name }}</td>
                                                                <td>
                                                                    @if($lawyers_language->pivot->language_fluency==1)
                                                                    Spoken
                                                                    @elseif($lawyers_language->pivot->language_fluency==2)
                                                                    Written
                                                                    @elseif($lawyers_language->pivot->language_fluency==3)
                                                                    Spoken & Written
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ Html::link('admin/edit-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_language->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                                    &nbsp;&nbsp;
                                                                    {{ Html::link('admin/delete-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_language->id, '', array('class' => 'btn btn-danger btn-xs fa fa-trash'))}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">Add New Language</h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@addLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('language_id', 'Select Language') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="language_id" data-parsley-required-message="" name="language_id" required>
                                                                <option value="">Select Language</option>
                                                                @if(isset($languages) && $languages)
                                                                @foreach($languages AS $language)
                                                                <option value="{{$language->id}}">{{$language->language_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('language_fluency', 'Language Fluency') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="radio radio-primary">
                                                                {!! Form::radio('language_fluency', '1', false, array('id' => 'language_fluency1', 'required' => 'required',
                                                                'data-parsley-required-message' => '')) !!}
                                                                <label for="language_fluency1">
                                                                    Spoken
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-primary">
                                                                {!! Form::radio('language_fluency', '2', false, array('id' => 'language_fluency2')) !!}
                                                                <label for="language_fluency2">
                                                                    Written
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-primary">
                                                                {!! Form::radio('language_fluency', '3', false, array('id' => 'language_fluency3')) !!}
                                                                <label for="language_fluency3">
                                                                    Spoken & Written
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='educations')
                                            <div class="panel-body">
                                                <h2>Educations</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>School</th>
                                                                <th>Degree</th>
                                                                <th>Field of Study</th>
                                                                <th>Class</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($lawyers_educations) && $lawyers_educations)
                                                            @foreach($lawyers_educations AS $lawyers_education)                                                            
                                                            <tr>
                                                                <td>{{ $lawyers_education->school->school_name }}</td>
                                                                <td>{{ $lawyers_education->degree->degree_name }}</td>
                                                                <td>{{ $lawyers_education->field_of_study }}</td>
                                                                <td>{{ $lawyers_education->end_year }}</td>
                                                                <td>
                                                                    {{ Html::link('admin/edit-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_education->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                                    &nbsp;&nbsp;
                                                                    {{ Html::link('admin/delete-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_education->id, '', array('class' => 'btn btn-danger btn-xs fa fa-trash'))}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">Add New Education Information</h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@addLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('state_id', 'Select State') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="education_state_id" data-parsley-required-message="" name="state_id" required>
                                                                <option value="">Select State</option>
                                                                @if(isset($states) && $states)
                                                                @foreach($states AS $state)
                                                                <option value="{{$state->id}}">{{$state->state_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('school_id', 'Select School') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="school_id" data-parsley-required-message="" name="school_id" required>
                                                                <option value="">Select School</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('start_year', 'Start Year') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="start_year" data-parsley-required-message="" name="start_year" required>
                                                                <option value="">Select Year</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('end_year', 'End Year') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="end_year" data-parsley-required-message="" name="end_year" required>
                                                                <option value="">Select Year</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('degree_id', 'Select Degree') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="degree_id" data-parsley-required-message="" name="degree_id" required>
                                                                <option value="">Select Degree</option>
                                                                @if(isset($degrees) && $degrees)
                                                                @foreach($degrees AS $degree)
                                                                <option value="{{$degree->id}}">{{$degree->degree_code}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('degree_year', 'Degree Year') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="degree_year" data-parsley-required-message="" name="degree_year" required>
                                                                <option value="">Select Year</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('field_of_study', 'Field(s) of Study') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('field_of_study', '', array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('honors', 'Honors') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('honors', '', array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('activities', 'Activities') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('activities', '', array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('details', 'Details') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('details', '', array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='experiences')
                                            <div class="panel-body">
                                                <h2>Professional Experiences</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Position</th>
                                                                <th>Organization</th>
                                                                <th>Start Year</th>
                                                                <th>End Year</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($lawyers_experiences) && $lawyers_experiences)
                                                            @foreach($lawyers_experiences AS $lawyers_experience)
                                                            <tr>
                                                                <td>{{ $lawyers_experience->position_name }}</td>
                                                                <td>{{ $lawyers_experience->organization->organization_name }}</td>
                                                                <td>
                                                                    {{ $months[$lawyers_experience->start_month] }} -
                                                                    {{ $lawyers_experience->start_year }}
                                                                </td>
                                                                <td>
                                                                    @if($lawyers_experience->end_month == 0 && $lawyers_experience->end_year == 0)
                                                                    Current
                                                                    @elseif($lawyers_experience->end_month == 0 && $lawyers_experience->end_year)
                                                                    Current - {{ $lawyers_experience->end_year }}
                                                                    @elseif($lawyers_experience->end_month && $lawyers_experience->end_year == 0)
                                                                    {{ $months[$lawyers_experience->end_month] }} - Current
                                                                    @elseif($lawyers_experience->end_month && $lawyers_experience->end_year)
                                                                    {{ $months[$lawyers_experience->end_month] }} - {{$lawyers_experience->end_year}}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ Html::link('admin/edit-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_experience->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                                    &nbsp;&nbsp;
                                                                    {{ Html::link('admin/delete-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_experience->id, '', array('class' => 'btn btn-danger btn-xs fa fa-trash'))}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">Add New Professional Experience</h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@addLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('exp_organization_id', 'Select Organization') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="exp_organization_id" data-parsley-required-message="" name="organization_id" required>
                                                                <option value="">Select Organization</option>
                                                                @if(isset($organizations) && $organizations)
                                                                @foreach($organizations AS $organization)
                                                                <option value="{{$organization->id}}">{{$organization->organization_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('position_name', 'Position') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('position_name', '', array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('start_year', 'Start Year') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="start_month" data-parsley-required-message="" name="start_month" required>
                                                                <option value="">Month</option>
                                                                @if(isset($months) && $months)
                                                                @foreach($months AS $key => $month)
                                                                <option value="{{$key}}">{{$month}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="start_year" data-parsley-required-message="" name="start_year" required>
                                                                <option value="">Year</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('end_year', 'End Year') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="end_month" data-parsley-required-message="" name="end_month" required>
                                                                <option value="">Month</option>
                                                                <option value="0">Current</option>
                                                                @if(isset($months) && $months)
                                                                @foreach($months AS $key => $month)
                                                                <option value="{{$key}}">{{$month}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="end_year" data-parsley-required-message="" name="end_year" required>
                                                                <option value="">Year</option>
                                                                <option value="0">Current</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('details', 'Details') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('details', '', array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='vcard')
                                            <div class="panel-body">
                                                <h2>Upload V-Card</h2>
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyer','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::label('v_card', 'Upload vCard') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                            {!! Form::file('v_card', array('required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding0 padding-top">
                                                    @if(isset($lawyer->v_card) && $lawyer->v_card)
                                                    {{ Html::link('public/vcards/'.$lawyer->v_card, 'Download vCard')}}
                                                    @endif
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='jurisdictions')
                                            <div class="panel-body">
                                                <h2>Jurisdictions Admitted To Practice</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Jurisdiction</th>
                                                                <th>Admitted</th>
                                                                <th>End</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(isset($lawyers_jurisdictions) && $lawyers_jurisdictions)
                                                            @foreach($lawyers_jurisdictions AS $lawyers_jurisdiction)
                                                            <tr>
                                                                <td>{{ $lawyers_jurisdiction->jurisdiction->jurisdiction_name }}</td>
                                                                <td>{{ $months[$lawyers_jurisdiction->start_month] }} - {{ $lawyers_jurisdiction->start_year }}</td>
                                                                <td>
                                                                    @if($lawyers_jurisdiction->end_month == 0 && $lawyers_jurisdiction->end_year == 0)
                                                                    Current
                                                                    @elseif($lawyers_jurisdiction->end_month == 0 && $lawyers_jurisdiction->end_year)
                                                                    Current - {{ $lawyers_jurisdiction->end_year }}
                                                                    @elseif($lawyers_jurisdiction->end_month && $lawyers_jurisdiction->end_year == 0)
                                                                    {{ $months[$lawyers_jurisdiction->end_month] }} - Current
                                                                    @elseif($lawyers_jurisdiction->end_month && $lawyers_jurisdiction->end_year)
                                                                    {{ $months[$lawyers_jurisdiction->end_month] }} - {{$lawyers_jurisdiction->end_year}}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    {{ Html::link('admin/edit-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_jurisdiction->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                                    &nbsp;&nbsp;
                                                                    {{ Html::link('admin/delete-lawyer-info/' .$tab_type. '/' .$lawyer->id. '/' .$lawyers_jurisdiction->id, '', array('class' => 'btn btn-danger btn-xs fa fa-trash'))}}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    <h3 id="heading-padding-top">Add New Jurisdiction Information</h3>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@addLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('jurisdiction_id', 'Select Jurisdiction') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="jurisdiction_id" data-parsley-required-message="" name="jurisdiction_id" required>
                                                                <option value="">Select Jurisdiction</option>
                                                                @if(isset($jurisdictions) && $jurisdictions)
                                                                @foreach($jurisdictions AS $jurisdiction)
                                                                <option value="{{$jurisdiction->id}}">{{$jurisdiction->jurisdiction_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('start_year', 'Admitted') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="start_month" data-parsley-required-message="" name="start_month" required>
                                                                <option value="">Month</option>
                                                                @if(isset($months) && $months)
                                                                @foreach($months AS $key => $month)
                                                                <option value="{{$key}}">{{$month}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="start_year" data-parsley-required-message="" name="start_year" required>
                                                                <option value="">Year</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('end_year', 'End') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="end_month" data-parsley-required-message="" name="end_month" required>
                                                                <option value="">Month</option>
                                                                <option value="0">Current</option>
                                                                @if(isset($months) && $months)
                                                                <?php $i = 1; ?>
                                                                @foreach($months AS $month)
                                                                <option value="{{$i}}">{{$month}}</option>
                                                                <?php $i++; ?>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="end_year" data-parsley-required-message="" name="end_year" required>
                                                                <option value="">Year</option>
                                                                <option value="0">Current</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('details', 'Details') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('details', '', array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
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