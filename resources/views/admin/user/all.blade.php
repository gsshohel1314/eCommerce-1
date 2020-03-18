@extends('layouts.admin')
@section('title', 'All Users')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <div class="row">
                  <div class="col-md-8">
                    <h3 class="panel-title"><i class="fa fa-cubes"></i>All User Information</h3>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="{{url('admin/user/add')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> User Registration</a>
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
                                    <th>User Role</th>
                                    <th>Time</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>

                            <tbody>
                              @foreach ($allUser as $value)
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->phone}}</td>
                                    <td>{{$value->roleName->name}}</td>
                                    <td>...</td>
                                    <td>
                                      <a href="{{url('admin/user/view/'.$value->id)}}"><i class="fa fa-plus-square fa-lg"></i></a>
                                      <a href="{{url('admin/user/edit/'.$value->id)}}"><i class="fa fa-pencil-square fa-lg"></i></a>
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
