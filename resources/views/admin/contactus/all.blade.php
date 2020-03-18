@extends('layouts.admin')
@section('title', 'All Contact Message')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <div class="row">
                  <div class="col-md-8">
                    <h3 class="panel-title"><i class="fa fa-cubes"></i>All Contact Message</h3>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="#" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> Link </a>
                  </div>
                  <div class="clearfix">
                </div>
                </div>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Time</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>

                            <tbody>
                              @foreach ($allMes as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>{{str_limit($data->subject,30)}}</td>
                                    <td>{{str_limit($data->message,30)}}</td>
                                    <td>{{$data->created_at->format('d M, Y | h:i:s a')}}</td>
                                    <td>
                                      <a href="{{url('admin/contactus/view/'.$data->slug)}}"><i class="fa fa-plus-square fa-lg"></i></a>
                                      <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

            <div class="panel-footer">
              <a href="#" class="btn btn-sm btn-primary">PRINT</a>
              <a href="#" class="btn btn-sm btn-warning">PDF</a>
              <a href="#" class="btn btn-sm btn-info">CSV</a>
            </div>

        </div>
    </div>
</div>
@endsection
