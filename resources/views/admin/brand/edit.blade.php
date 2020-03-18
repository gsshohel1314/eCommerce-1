@extends('layouts.admin')
@section('title', $brand->name)
@section('content')

@component('admin.dashboard.bredcumb')
    @slot('title')
        Edit
    @endslot
    <li><a href="{{url('admin/brands/'.$brand->id.'/edit')}}">{{$brand->name}}</a></li>
@endcomponent

<div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="{{url('admin/brands/'.$brand->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
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
                          <input type="text" class="form-control" name="name" value="{{$brand->name}}">
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
                          <input type="text" class="form-control" name="description" value="{{$brand->description}}">
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
                          <br>
                          <label>
                            <img width="50" src="{{asset('storage/brand')}}/{{$brand->image}}" alt="">
                          </label>
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
                          <input type="checkbox" name="status" {{$brand->status == 1 ? 'checked' : ''}}>
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
                <button type="submit" class="btn btn-sm btn-primary">Update</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
