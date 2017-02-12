@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Users</h5>
                    <div class="ibox-tools pull-right">
                        {{ Html::link('admin/add-lawyer', '', array('class' => 'btn btn-primary btn-xs'))}}
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped stock_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                    <th>Change Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>      
                                @if(isset($users) && $users)
                                @foreach ($users as $user)                             
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                    <td>{{ $user->email or "-" }}</td>
                                    <td>
                                        {{ $user->mobile or "-" }}
                                    </td>
                                    <td>
                                        @if($user->status==1)
                                            <label class="label label-success">Activated</label>
                                        @elseif($user->status==0)
                                            <label class="label label-danger">Deactivated</label>
                                        @elseif($user->status==2)
                                            <label class="label label-warning">Unverified</label>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->status==1)
                                            {{ HTML::link('admin/user-status-deactivate/'.$user->id, 'Deactivate')}}
                                        @elseif($user->status==0)
                                            {{ HTML::link('admin/user-status-activate/'.$user->id, 'Activate')}}
                                        @elseif($user->status==2)
                                            {{ HTML::link('admin/user-status-verify/'.$user->id, 'Verify')}}
                                        @endif
                                    </td>
                                    <td>
                                        {{ HTML::link('admin/edit-user-profile/'.$user->id.'/personal', '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ HTML::link('admin/delete-user/'.$user->id, '',
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
                                @if($users && $users->links())
                                    <tr>
                                        <td colspan="7" align="center">
                                            <nav class="pagination"> {{ $users->links() }} </nav>
                                        </td>
                                    </tr>
                                @endif
                                <tr class="records">
                                    <td colspan="7" align="center">Total Records: {{ $users->total() }}</td>
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