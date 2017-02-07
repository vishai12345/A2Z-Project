@extends('admin.layout.default')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>User Management</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped stock_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @if(isset($users) && $users)
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->role == 'admin')
                                            Administrator
                                        @elseif($user->role == 'user')
                                            User
                                        @elseif($user->role == 'subadmin')
                                            Sub-Administrator
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->status==1)
                                        <label class="label label-success">Activated</label>
                                        @elseif($user->status==0)
                                        <label class="label label-danger">Deactivated</label>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->id != $current_user->id)
                                            {{ Html::link('admin/delete-profile/'.$user->id, '',
                                            array('class' => 'btn btn-danger btn-xs fa fa-trash', 'onClick' => 'javascript: return confirm("Are you sure want to delete this!");'))}}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">No Record Exists</td>
                                </tr>
                                @endif
                            </tbody>
                            <tfoot>
                                @if($users && $users->links())
                                    <tr>
                                        <td colspan="6" align="center">
                                            <nav class="pagination"> {{ $users->links() }} </nav>
                                        </td>
                                    </tr>
                                @endif
                                <tr class="records">
                                    <td colspan="6" align="center">Total Records: {{ $users->total() }}</td>
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