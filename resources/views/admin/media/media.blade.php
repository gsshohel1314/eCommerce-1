@extends('layouts.admin')
@section('title', 'Media Information')
@section('content')
<div class="row">
    <div class="col-md-12">
      <form class="" action="{{url('admin/media/submit')}}" method="post">
        @csrf
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">
                      <h3 class="panel-title"><i class="fa fa-cubes"></i>Social mddia information</h3>
                    </div>
                    <div class="col-md-4 text-right">
                      <a href="#" class="btn btn-sm btn-primary btn-panel-head"><i class="fa fa-th"></i>link</a>
                    </div>
                    <div class="clearfix">
                  </div>
                  </div>
              </div>

              <!--sweetalert start-->
              @if(Session::has('success'))
                  <script>
                      swal({ title: "Success!", text: "Media information updated successfull", timer:1500, icon: "success",});
                  </script>
                  @endif

                  @if(Session::has('error'))
                  <script>
                      swal({ title: "Opps!", text: "Information update failed.", timer:1500, icon: "warning",});
                  </script>
                  @endif
              <!--sweetalert end-->
              <div class="panel-body">
                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-facebook"></i> </div>
                        <input type="text" class="form-control" name="facebook" value="{{$media->facebook}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-twitter"></i> </div>
                        <input type="text" class="form-control" name="twitter" value="{{$media->twitter}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-linkedin"></i> </div>
                        <input type="text" class="form-control" name="linkedin" value="{{$media->linkedin}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-youtube"></i> </div>
                        <input type="text" class="form-control" name="youtube" value="{{$media->youtube}}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-google"></i> </div>
                        <input type="text" class="form-control" name="google" value="{{$media->google}}">
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">UPDATE</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
