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

                                            @if(isset($tab_type) && $tab_type=='practice-areas')
                                            <div class="panel-body">
                                                <h2>Edit Practice Area</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('category_name', 'Practice Area') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <strong>{{$practice_area->category_name}}</strong>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('free_consultation', 'Free Consultation') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="checkbox checkbox-primary">
                                                                {!! Form::checkbox('free_consultation', 1, ($lawyers_practice_area[0]->free_consultation == 1) ? true : false) !!}
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
                                                            {!! Form::textarea('free_consultation_policy', $lawyers_practice_area[0]->free_consultation_policy, array('class' => 'form-control', 'rows' => 3)) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::hidden('id', $id) !!}
                                                            {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='address')
                                            <div class="panel-body">
                                                <h2>Edit Office & Address</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('label', 'Address Label') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('label', $address->label, array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('address1', 'Address Line1') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('address1', $address->address1, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('address2', 'Address Line2') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('address2', $address->address2, array('class' => 'form-control')) !!}
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
                                                                <option value="{{$state->id}}"
                                                                        @if($state_id == $state->id)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$state->state_name}}</option>
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
                                                                @if(isset($state_cities) && $state_cities)
                                                                @foreach($state_cities as $state_city)
                                                                <option value="{{$state_city->id}}"
                                                                        @if($city_id == $state_city->id)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$state_city->city_name}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('region', 'Region') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('region', $address->region, array('class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('zip', 'Zip/Postal Code') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('zip', $address->zip, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('country', 'Country') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('country', $address->country, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::hidden('id', $address->id) !!}
                                                            {!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='websites')
                                            <div class="panel-body">
                                                <h2>Edit Website & Blog</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('website_type', 'Type') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="website_type" data-parsley-required-message="" name="website_type" required>
                                                                <option value="">Select Type</option>
                                                                <option value="Website"
                                                                        @if($lawyers_website->website_type == 'Website')
                                                                        selected="selected"
                                                                        @endif
                                                                        >Website</option>
                                                                <option value="Blog"
                                                                        @if($lawyers_website->website_type == 'Blog')
                                                                        selected="selected"
                                                                        @endif
                                                                        >Blog</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('link_title', 'Link Title') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('link_title', $lawyers_website->link_title, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('website_url', 'URL') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::text('website_url', $lawyers_website->website_url, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('website_detail', 'Detail') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('website_detail', $lawyers_website->website_detail, array('class' => 'form-control', 'rows' => 3)) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::hidden('id', $lawyers_website->id) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='languages')
                                            <div class="panel-body">
                                                <h2>Edit Language</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('language_id', 'Language') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <strong>{{$language->language_name}}</strong>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('language_fluency', 'Language Fluency') !!}
                                                            <span class="help-text">*</span>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="radio radio-primary">
                                                                {!! Form::radio('language_fluency', '1', ($lawyers_language[0]->language_fluency == 1) ? true : false, array('id' => 'language_fluency1', 'required' => 'required',
                                                                'data-parsley-required-message' => '')) !!}
                                                                <label for="language_fluency1">
                                                                    Spoken
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-primary">
                                                                {!! Form::radio('language_fluency', '2', ($lawyers_language[0]->language_fluency == 2) ? true : false, array('id' => 'language_fluency2')) !!}
                                                                <label for="language_fluency2">
                                                                    Written
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-primary">
                                                                {!! Form::radio('language_fluency', '3', ($lawyers_language[0]->language_fluency == 3) ? true : false, array('id' => 'language_fluency3')) !!}
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
                                                            {!! Form::hidden('id', $id) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='educations')
                                            <div class="panel-body">
                                                <h2>Edit Education</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
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
                                                                <option value="{{$state->id}}"
                                                                        @if($state_id == $state->id)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$state->state_name}}</option>
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
                                                                @if(isset($state_schools) && $state_schools)
                                                                @foreach($state_schools AS $state_school)
                                                                <option value="{{$state_school->id}}"
                                                                        @if($school_id == $state_school->id)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$state_school->school_name}}</option>
                                                                @endforeach
                                                                @endif
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
                                                                <option value="{{$i}}"
                                                                        @if($lawyers_education->start_year == $i)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$i}}</option>
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
                                                                <option value="{{$i}}"
                                                                        @if($lawyers_education->end_year == $i)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$i}}</option>
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
                                                                <option value="{{$degree->id}}"
                                                                        @if($lawyers_education->degree_id == $degree->id)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$degree->degree_code}}</option>
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
                                                                <option value="{{$i}}"
                                                                        @if($lawyers_education->degree_year == $i)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('field_of_study', 'Field(s) of Study') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('field_of_study', $lawyers_education->field_of_study, array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('honors', 'Honors') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('honors', $lawyers_education->honors, array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('activities', 'Activities') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('activities', $lawyers_education->activities, array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            {!! Form::label('details', 'Details') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('details', $lawyers_education->details, array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::hidden('id', $lawyers_education->id) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='experiences')
                                            <div class="panel-body">
                                                <h2>Edit Professional Experience</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
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
                                                                <option value="{{$organization->id}}"
                                                                        @if($organization->id == $lawyers_experience->organization_id)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$organization->organization_name}}</option>
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
                                                            {!! Form::text('position_name', $lawyers_experience->position_name, array('class' => 'form-control', 'required' => 'required', 'data-parsley-required-message' => '')) !!}
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
                                                                <option value="{{$key}}"
                                                                        @if($key == $lawyers_experience->start_month)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$month}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="start_year" data-parsley-required-message="" name="start_year" required>
                                                                <option value="">Year</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}"
                                                                        @if($i == $lawyers_experience->start_year)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$i}}</option>
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
                                                                <option value="0"
                                                                        @if($lawyers_experience->end_month == 0)
                                                                        selected="selected"
                                                                        @endif
                                                                        >Current</option>
                                                                @if(isset($months) && $months)
                                                                @foreach($months AS $key => $month)
                                                                <option value="{{$key}}"
                                                                        @if($key == $lawyers_experience->end_month)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$month}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="end_year" data-parsley-required-message="" name="end_year" required>
                                                                <option value="">Year</option>
                                                                <option value="0"
                                                                        @if($lawyers_experience->end_year == 0)
                                                                        selected="selected"
                                                                        @endif
                                                                        >Current</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}"
                                                                        @if($i == $lawyers_experience->end_year)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('details', 'Details') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('details', $lawyers_experience->details, array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::hidden('id', $lawyers_experience->id) !!}
                                                            {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                            @endif

                                            @if(isset($tab_type) && $tab_type=='jurisdictions')
                                            <div class="panel-body">
                                                <h2>Edit Jurisdiction Admitted To Practice</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0 padding-top">
                                                    {!! Form::open(array('action' => 'Admin\LawyerController@updateLawyerInformation','files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}
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
                                                                <option value="{{$jurisdiction->id}}"
                                                                        @if($lawyers_jurisdiction->id == $jurisdiction->id)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$jurisdiction->jurisdiction_name}}</option>
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
                                                                <option value="{{$key}}"
                                                                        @if($lawyers_jurisdiction->start_month == $key)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$month}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="start_year" data-parsley-required-message="" name="start_year" required>
                                                                <option value="">Year</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}"
                                                                        @if($lawyers_jurisdiction->start_year == $i)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$i}}</option>
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
                                                                <option value="0"
                                                                        @if($lawyers_jurisdiction->end_month == 0)
                                                                        selected="selected"
                                                                        @endif
                                                                        >Current</option>
                                                                @if(isset($months) && $months)
                                                                @foreach($months AS $key => $month)
                                                                <option value="{{$key}}"
                                                                        @if($lawyers_jurisdiction->end_month == $key)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$month}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                            <select class="form-control select2_dd" id="end_year" data-parsley-required-message="" name="end_year" required>
                                                                <option value="">Year</option>
                                                                <option value="0"
                                                                        @if($lawyers_jurisdiction->end_year == 0)
                                                                        selected="selected"
                                                                        @endif
                                                                        >Current</option>
                                                                @for($i=2050;$i>=1900;$i--)
                                                                <option value="{{$i}}"
                                                                        @if($lawyers_jurisdiction->end_year == $i)
                                                                        selected="selected"
                                                                        @endif
                                                                        >{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                            {!! Form::label('details', 'Details') !!}
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::textarea('details', $lawyers_jurisdiction->details, array('rows' => 3, 'class' => 'form-control')) !!}
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            {!! Form::hidden('lawyer_id', $lawyer->id) !!}
                                                            {!! Form::hidden('tab_type', $tab_type) !!}
                                                            {!! Form::hidden('id', $lawyers_jurisdiction->id) !!}
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