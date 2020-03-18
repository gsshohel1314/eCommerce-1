@extends('layouts.admin')
@section('title', 'View User')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                  <div class="col-md-8">
                    <h3 class="panel-title"><i class="fa fa-cubes"></i>View User Information</h3>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="{{url('admin/user/')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i>All Users</a>
                  </div>
                  <div class="clearfix">
                </div>
                </div>
            </div>

            <!--sweetalert start-->
               @if(Session::has('success'))
                  <script>
                      swal({ title: "Success!", text: "Update Success.", timer:5000, icon: "success",});
                  </script>
                @endif
            <!--sweetalert end-->

            <div class="panel-body">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <table class="table table-striped table-bordered view-table-custom">
                      <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{$viewData->name}}</td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$viewData->email}}</td>
                      </tr>

                      <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td>{{$viewData->phone}}</td>
                      </tr>

                      <tr>
                        <td>User Role</td>
                        <td>:</td>
                        <td>{{$viewData->roleName->name}}</td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-2"></div>
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
