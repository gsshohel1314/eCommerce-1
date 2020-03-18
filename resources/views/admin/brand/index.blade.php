@extends('layouts.admin')
@section('title', 'Brands')
@section('content')

@component('admin.dashboard.bredcumb')
    @slot('title')
        All Brands
    @endslot
    <li><a href="{{url('admin/brands')}}">All</a></li>
@endcomponent

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <div class="row">
                  <div class="col-md-8">
                    <h3 class="panel-title"><i class="fa fa-cubes"></i>Brands</h3>
                  </div>
                  <div class="col-md-4 text-right">
                    <a href="{{url('admin/brands/create')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-plus"></i> Create Brand </a>
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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                              @foreach ($brands as $key => $brand)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                      <img width="50" src="{{asset('storage/brand')}}/{{$brand->image}}" alt="">
                                    </td>
                                    <td>{{str_limit($brand->description,20)}}</td>
                                    <td>
                                      @if($brand->status==1)
                                        <span class="badge badge-success">Published</span>
                                      @else
                                        <span class="badge badge-warning">Unpublished</span>
                                      @endif
                                    </td>

                                    <td>
                                      <a class="btn btn-primary" href="{{url('admin/brands/'.$brand->id)}}"><i class="fa fa-plus-square fa-lg"></i></a>
                                      <a class="btn btn-success" href="{{url('admin/brands/'.$brand->id.'/edit')}}"><i class="fa fa-pencil-square fa-lg"></i></a>
                                      <a class="delete" data-url="{{url('admin/brands/'.$brand->id)}}" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash fa-lg"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form action="" method="post" id='delete-form'>
     @csrf
     @method('delete')
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cancle">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger">Yes</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- Modal  end-->

</div>
@endsection
