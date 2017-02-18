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
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Subjects Category</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/subcat', 'Add New', array('class' => 'btn btn-primary btn-xs'))}}
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped stock_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Subject Name</th>
									<th>Subject Category</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>      
                                @if(isset($subjects) && $subjects)
                                @foreach ($subjects as $subject)                             
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td>{{ $subject->subject_name}}</td>
									 <td>{{ $subject->category_name}}</td>
                                    
                                    <td>
                                        {{ HTML::link('admin/edit-subjectscat/'.$subject->id, '', 
										array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ HTML::link('admin/subjectscat/'.$subject->id, '',
                                        array('class' => 'btn btn-danger btn-xs fa fa-trash', 'onClick' => 'javascript: return confirm("Are you sure want to delete this!");'))}}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="7">No Record Exists</td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                @if($subjects && $subjects->links())
                                    <tr>
                                        <td colspan="7" align="center">
                                            <nav class="pagination"> {{ $subjects->links() }} </nav>
                                        </td>
                                    </tr>
                                @endif
                                <tr class="records">
                                    <td colspan="7" align="center">Total Records: {{ $subjects->total() }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop