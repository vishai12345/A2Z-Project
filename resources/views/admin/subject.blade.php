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
                    <h5>Subjects</h5>
                   <div class="ibox-tools pull-right">
                        <a href="{{URL('/admin/subjects')}}" class="btn btn-primary btn-xs">Back</a>
                    </div>
                </div>
				</div>
				<div class="col-md-offset-1 col-md-4">
<div class="form-group">
{{ Form::open(array('method' => 'post','action'=>'Admin\SubjectController@subjectEntry')) }}

<div class="form-group">
  {{ Form::label('subject', 'Subject')}} 

{{ Form::text('subject_name', '', array('class' => 'form-control')) }}

</div>

<div class="form-group">

      {{ Form::submit('Submit!',['class' => 'btn btn-primary '] ) }}
</div>

</div>
</div>

@endsection('content')