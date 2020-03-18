@extends('layouts.admin')
@section('title', 'Create Product')
@section('content')

@component('admin.dashboard.bredcumb')
    @slot('title')
        Create Product
    @endslot
    <li><a href="{{url('admin/products/create')}}">Create</a></li>
@endcomponent

<div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" action="{{url('admin/products')}}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="panel-title"><i class="fa fa-cubes"></i>Create Product</h3>
                    </div>
                    <div class="col-md-4 text-right">
                      <a href="{{url('admin/products')}}" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-plus"></i> All Products</a>
                    </div>
                    <div class="clearfix">
                  </div>
                  </div>
              </div>


              <div class="panel-body">

                    <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Product Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="name" value="{{old('name')}}">
                          @if ($errors->has('name'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('name') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Categories</label>
                        <div class="col-sm-7">
                            <select multiple="" class="form-control" name="category[]">
                                <option>Select Categories</option>
                                @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Brand</label>
                        <div class="col-sm-7">
                            <select class="form-control" name="brand_id" value="{{old('brand_id')}}">
                                <option>Select Brand</option>
                                @foreach($brands as $brand)
                                  <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Colors</label>
                        <div class="col-sm-7">
                            <select multiple="" class="form-control" name="color[]">
                                <option>Select Colors</option>
                                @foreach($colors as $color)
                                  <option value="{{$color->id}}">{{$color->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group {{$errors->has('price')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Product Price</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="price" value="{{old('price')}}">
                          @if ($errors->has('price'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('price') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('discount')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Discount</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="discount" value="{{old('discount')}}">
                          @if ($errors->has('discount'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('discount') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('stock')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Stock</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="stock" value="{{old('stock')}}">
                          @if ($errors->has('stock'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('stock') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('short_description')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Short Description</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="short_description" value="{{old('short_description')}}">
                          @if ($errors->has('short_description'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('short_description') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('long_description')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Long Description</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="long_description" value="{{old('long_description')}}">
                          @if ($errors->has('long_description'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('long_description') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('image1')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-7">
                          <input type="file" name="image1">
                          @if ($errors->has('image1'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('image1') }}</strong>
      											</span>
    									    @endif
                        </div>
                    </div>

                    <div class="form-group {{$errors->has('image2')? 'has-error':''}}">
                        <label class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-7">
                          <input type="file" name="image2">
                          @if ($errors->has('image2'))
      											<span class="invalid-feedback mb-0" role="alert">
      													<strong>{{ $errors->first('image2') }}</strong>
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
