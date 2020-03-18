@extends('layouts.admin')
@section('title', $brand->name)
@section('content')

@component('admin.dashboard.bredcumb')
    @slot('title')
        Show
    @endslot
    <li><a href="{{url('admin/brands/'.$brand->id)}}">{{$brand->name}}</a></li>
@endcomponent

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                  <div class="col-md-8">
                    <h3 class="panel-title"><i class="fa fa-cubes"></i>{{$brand->name}}</h3>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="{{url('admin/brands/')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i> All Brands</a>
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
                  <div class="col-md-6">


                    <div class="mini-stat clearfix bx-shadow">
                        <span ><img src="{{asset('storage/brand/'.$brand->image)}}" alt="" class="img-circle img-responsive"></span>
                        <div class="mini-stat-info text-left text-muted">
                            <span class="name">{{$brand->name}}</span>
                        </div>
                        <br>
                        <hr class="m-t-10">
                        <ul class="text-left social-links list-inline m-0">
                          {{$brand->description}}
                        </ul>
                    </div>


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
