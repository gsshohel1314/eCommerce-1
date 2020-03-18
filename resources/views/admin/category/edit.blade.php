@extends('layouts.admin')
@section('title', $category->name)
@section('content')
<div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="{{url('admin/categories/'.$category->id)}}" method="post">
        @csrf
        @method('put')
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="panel-title"><i class="fa fa-cubes"></i>Edit Category</h3>
                    </div>
                    <div class="col-md-4 text-right">
                      <a href="{{url('admin/categories')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-plus"></i> All Category</a>
                    </div>
                    <div class="clearfix">
                  </div>
                  </div>
              </div>


              <div class="panel-body">

                    <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Category Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="name" value="{{$category->name}}">
                          @if ($errors->has('name'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('name') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('status')? 'has-error':''}}">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-7">
                          <input type="checkbox" name="status" {{$category->status == 1 ? 'checked' : ''}}>
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
