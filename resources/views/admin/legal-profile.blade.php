@extends('admin.layout.default')
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Legal Profiles</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped stock_table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Label</th>
                                    <th>Sample Value</th>
                                    <th>Profile Icon</th>
                                    <th>Status</th>
                                    <th>Change Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @if(isset($legal_profiles) && $legal_profiles)
                                    @foreach ($legal_profiles as $legal_profile)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $legal_profile->field_label }}</td>
                                            <td>{{ $legal_profile->field_sample_value }}</td>
                                            <td>
                                                @if(isset($legal_profile->field_icon) && $legal_profile->field_icon)
                                                    <img src="{{ URL::asset('public/profiles/') }}/{{$legal_profile->field_icon}}" height="24" width="24" />
                                                @else
                                                    "-";
                                                @endif
                                            </td>
                                            <td>
                                                @if($legal_profile->status==1)
                                                    <label class="label label-success">Activated</label>
                                                @elseif($legal_profile->status==0)
                                                    <label class="label label-danger">Deactivated</label>
                                                @endif
                                            </td>
                                            <td>
                                                @if($legal_profile->status==1)
                                                    {{ Html::link('admin/change-profile-status/'.$legal_profile->id.'/0'.'/'.$legal_profile->field_type, 'Deactivate')}}
                                                @elseif($legal_profile->status==0)
                                                    {{ Html::link('admin/change-profile-status/'.$legal_profile->id.'/1'.'/'.$legal_profile->field_type, 'Activate')}}
                                                @endif
                                            </td>
                                            <td>
                                                {{ Html::link('admin/edit-profile/'.$legal_profile->id, '', array('class' => 'btn btn-primary btn-xs fa fa-pencil'))}}
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                {{ Html::link('admin/delete-profile/'.$legal_profile->id, '',
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
                                <tr>
                                    <td colspan="7">Total Records: <?php echo $i; ?></td>
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