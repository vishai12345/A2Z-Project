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
<div class ="col-md-offset-0 col-md-12">
<div class="ibox-title">
                    <h5>Subjects Category</h5>
                   <div class="ibox-tools pull-right">
                        <a href="{{URL('/admin/SubjectSubCategory')}}" class="btn btn-primary btn-xs">Back</a>
                    </div>
                </div>
				</div>
				<div class="col-md-offset-1 col-md-8">
<div class="col-md-6">

 {!! Form::open(array('action' => 'Admin\SubjectSubCatController@SubjectSubCatEntry', 'files'=>true, 'method'=>'post', 'class'=>'lawisterForm')) !!}

<div class="form-group">
  <select  name="subject_cat_id" id="subject_cat_id" class="form-control" required="required"
           data-parsley-required-message="Please Select sub category">
           <option value="" >Select Subject</option>
           @if($sub)
           @foreach($sub as $state)
         <option value="{{$state->id}}" >{{$state->category_name}}</option>
          @endforeach
           @endif
      </select>

</div>

<div class="form-group">
  {{ Form::label('categoryname', 'Category Name')}} 

{{ Form::text('category_name', '', array('class' => 'form-control')) }}

</div>

<div class="col-md-4">

      {{ Form::submit('Submit!',['class' => 'btn btn-primary '] ) }}
</div>

</div>
</div>

@endsection('content')