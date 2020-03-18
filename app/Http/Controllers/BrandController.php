<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Storage;

class BrandController extends Controller
{

    public function index()
    {
        $brands=Brand::latest()->get();
        return view('admin.brand.index',compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        $request->validate([
          'name'=>'required|string|max:60|unique:brands',
          'description'=>'nullable|string',
          'image'=>'nullable|image|mimes:jpeg,jpg,png,bmp',
        ]);

        if($request->hasFile('image')){
          $slug=str_slug($request->name);
          $image=$request->file('image');
          $imageName=$slug .'-'. Carbon::today()->toDateString() .'.'. $image->getClientOriginalExtension();

          if(!Storage::disk('public')->exists('brand')){
            Storage::disk('public')->makeDirectory('brand');
          }

          Image::make($image)->resize(250 , 150)->save(public_path('storage/brand/' . $imageName));

        }

        $brand=new Brand();
        $brand->name=$request->name;
        $brand->description=$request->description;
        $brand->status=(boolean)$request->status;
        $brand->image=$imageName;
        $brand->slug=$slug;
        $create=$brand->save();

        if($create){
          Session::flash('success','Brand create success');
          return back();
        }else{
          Session::flash('error','Brand create failed');
          return back();
        }
    }

    public function show(Brand $brand)
    {
        return view('admin.brand.show',compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit',compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
      $request->validate([
        'name'=>'required|string|max:60|unique:brands,name,'.$brand->id,
        'description'=>'nullable|string',
        'image'=>'nullable|image|mimes:jpeg,jpg,png,bmp',
      ]);

        $slug=str_slug($request->name);
      if($request->hasFile('image')){
        $image=$request->file('image');
        $imageName=$slug .'-'. Carbon::today()->toDateString() .'.'. $image->getClientOriginalExtension();

        if(Storage::disk('public')->exists('brand/'.$brand->image)){
          Storage::disk('public')->delete('brand/'.$brand->image);
        }

        Image::make($image)->resize(250 , 150)->save(public_path('storage/brand/' . $imageName));
      }else {
        $imageName=$brand->image;
      }

      $brand->name=$request->name;
      $brand->description=$request->description;
      $brand->status=(boolean)$request->status;
      $brand->image=$imageName;
      $brand->slug=$slug;
      $create=$brand->save();

      if($create){
        Session::flash('success','Brand update success');
        return back();
      }else{
        Session::flash('error','Brand update failed');
        return back();
      }
    }

    public function destroy(Brand $brand)
    {
        $delete=$brand->delete();
        if($delete){
          Session::flash('success','Brand successfully deleted');
          return back();
        }else{
          Session::flash('error','Brand deleting failed');
          return back;
        }
    }
}
