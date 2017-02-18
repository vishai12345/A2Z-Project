@extends('admin.layout.default')

@section('content')
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if(Session::has('success_msg'))
                                <div class="alert alert-success">
                                    <h2>{{ Session::get('success_msg') }}</h2>
                                </div>
                            @endif
                            @if(Session::has('error_msg'))
                                <div class="alert alert-danger">
                                    <h2>{{ Session::get('error_msg') }}</h2>
                                </div>
                            @endif
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
						
		@foreach ($subject as $subjects)				
<div class ="col-md-offset-0 col-md-12">
<div class="ibox-title">
                    <h5>Edit Category:{{$subjects['category_name']}}</h5>
                   <div class="ibox-tools pull-right">
                        <a href="{{URL('/admin/subjectCats')}}" class="btn btn-primary btn-xs">Back</a>
                    </div>
                </div>
				</div>
<div class="col-md-offset-1 col-md-4">
{{ Form::open(array('method' => 'post','action'=>'Admin\SubjectCategoryController@subjectCatEdit')) }}
<div class="form-group">
  {{ Form::label('id', 'ID')}} 

{{ Form::text('id', $subjects['id'], array('class' => 'form-control','readonly')) }}

</div>

<div class="form-group">
  {{ Form::label('subjectid', 'Subject ID')}} 
  <select  name="subject_id" id="subject_id" class="form-control" required="required"
                                         data-parsley-required-message="Please Select subject">
                                    <option value="" >Select Subject</option>
                                    @if($sub)
                                    @foreach($sub as $state)
                                    <option value="{{$state->id}}" >{{$state->subject_name}}</option>
                                    @endforeach
                                    @endif
                                </select>

</div>
<div class="form-group">
  {{ Form::label('category', 'Category')}} 

{{ Form::text('category_name', $subjects['category_name'], array('class' => 'form-control')) }}

</div>

<div class="form-group">

      {{ Form::submit('Submit!',['class' => 'btn btn-primary '] ) }}
</div>

</div>
@endforeach


@endsection('content')