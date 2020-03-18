<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Media;
use Carbon\Carbon;
use Session;

class MediaController extends Controller
{
    public function __construct (){
      $this->middleware('auth');
    }

    public function media(){
      $media=Media::where('status',1)->where('id',1)->firstOrFail();
      return view('admin.media.media',compact('media'));
    }

    public function mediaUpdate(Request $request){
      $update=Media::where('id',1)->update([
        'facebook'=>$request['facebook'],
        'twitter'=>$request['twitter'],
        'linkedin'=>$request['linkedin'],
        'youtube'=>$request['youtube'],
        'google'=>$request['google'],
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($update){
        Session::flash('success');
        return redirect('admin/media');
      }else {
        Session::flash('error');
        return redirect('admin/media');
      }
    }

    public function basicInfo(){

    }

    public function basicInfoUpdate(){

    }

    public function contactInfo(){

    }

    public function contactInfoUpdate(){

    }
}
