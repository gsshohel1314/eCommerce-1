<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use Session;
use Storage;

class BrandRecycleController extends Controller
{
    public function index(){
      $brands=Brand::onlyTrashed()->latest()->get();
      return view('admin.brandRecycle.index',compact('brands'));
    }

    public function restore($id){
      $brand=Brand::onlyTrashed()->findOrFail($id);
      $restore=$brand->restore();

      if($restore){
        Session::flash('success','Brand successfully restored');
        return back();
      }else{
        Session::flash('error','Brand restoring failed');
        return back();
      }
    }

    public function show($id){
      $brand=Brand::onlyTrashed()->findOrFail($id);
      return view('admin.brandRecycle.show',compact('brand'));
    }

    public function destroy($id){
      $brand=Brand::onlyTrashed()->findOrFail($id);
      $destroy=$brand->forceDelete();
      if(Storage::disk('public')->exists('brand/'.$brand->image)){
        Storage::disk('public')->delete('brand/'.$brand->image);
      }

      if($destroy){
        Session::flash('success','Brand Parmanently deleting failed');
        return back();
      }else{
        Session::flash('error','Brand Parmanently deleting failed');
        return back();
      }
    }
}
