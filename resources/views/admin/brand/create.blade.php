@extends('layouts.admin')
@section('title', 'Create Brand')
@section('content')

@component('admin.dashboard.bredcumb')
    @slot('title')
        Create Brand
    @endslot
    <li><a href="{{url('admin/brands/create')}}">Create</a></li>
@endcomponent

<div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="{{url('admin/brands')}}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="panel-title"><i class="fa fa-cubes"></i>Create Brand</h3>
                    </div>
                    <div class="col-md-4 text-right">
                      <a href="{{url('admin/brands')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-plus"></i> All Brand</a>
                    </div>
                    <div class="clearfix">
                  </div>
                  </div>
              </div>


              <div class="panel-body">

                    <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Brand Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="name" value="{{old('name')}}">
                          @if ($errors->has('name'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('name') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('description')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="description" value="{{old('description')}}">
                          @if ($errors->has('description'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('description') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-7">
                          <input type="file" name="image">
                          @if ($errors->has('image'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('image') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('status')? 'has-error':''}}">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-7">
                          <input type="checkbox" name="status">
                          <span>Published</span>
                          @if ($errors->has('status'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('status') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

              </div>

              <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
