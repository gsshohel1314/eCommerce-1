<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Color;
use Carbon\Carbon;
use Storage;
use Image;
use App\Picture;

class ProductController extends Controller
{

    public function index()
    {
      $products=Product::latest()->get();
      return view('admin.product.index',compact('products'));
    }

    public function create()
    {
      $brands=Brand::published()->get();
      $categories=Category::published()->get();
      $colors=Color::published()->get();
      return view('admin.product.create',compact('brands','categories','colors'));
    }

    public function store(Request $request)
    {
      $request->validate([
        'name'=>'required|string|max:255',
        //'category'=>'required|integer',
        'brand_id'=>'required|integer',
        //'color'=>'required|integer',
        'price'=>'required',
        'discount'=>'required',
        'stock'=>'required|integer',
        'short_description'=>'required|string',
        'long_description'=>'required|string',
        'image1'=>'nullable|image|mimes:png,jpg,jpeg,bmp,',
        'image2'=>'nullable|image|mimes:png,jpg,jpeg,bmp,',
      ]);

      if($request->hasFile('image1')){
        $image1=$request->file('image1');
        $slug=str_slug($request->name);
        $imageName1=$slug .'_'. Carbon::now()->toDateString() .'_'.  uniqid() .'.' .  $image1->getClientOriginalExtension();

        if(!Storage::disk('public')->exists('product')){
          Storage::disk('public')->makeDirectory('product');
        }

        Image::make($image1)->save(base_path('public/storage/product/'.$imageName1));
      }

      if($request->hasFile('image2')){
        $image2=$request->file('image2');
        $slug=str_slug($request->name);
        $imageName2=$slug .'_'. Carbon::now()->toDateString() .'_'. uniqid() .'.' .  $image2->getClientOriginalExtension();

        if(!Storage::disk('public')->exists('product')){
          Storage::disk('public')->makeDirectory('product');
        }

        Image::make($image2)->save(base_path('public/storage/product/'.$imageName2));
      }

      $product=new Product();
      $product->name=$request->name;
      $product->brand_id=$request->brand_id;
      $product->price=$request->price;
      $product->discount=$request->discount;
      $product->stock=$request->stock;
      $product->short_description=$request->short_description;
      $product->long_description=$request->long_description;

      $insert=$product->save();

      $datas=[];
      $datas[1]=$imageName1;
      $datas[2]=$imageName2;

      foreach ($datas as $data) {
        $photo=new Picture();
        $photo->name=$data;
        $photo->product_id=$product->id;
        $photo->save();
      }

      $product->categories()->attach($request->category);
      $product->colors()->attach($request->color);

      if($insert){
        return back()->with('success','Product create success');
      }else{
        return back()->with('error','Product create failed');
      }
    }

    public function show(Product $product)
    {

    }

    public function edit(Product $product)
    {
      $brands=Brand::published()->get();
      $categories=Category::published()->get();
      $colors=Color::published()->get();
      return view('admin.product.edit',compact('brands','categories','colors','product'));
    }

    public function update(Request $request, Product $product)
    {
      $request->validate([
        'name'=>'required|string|max:255',
        //'category'=>'required|integer',
        'brand_id'=>'required|integer',
        //'color'=>'required|integer',
        'price'=>'required',
        'discount'=>'required',
        'stock'=>'required|integer',
        'short_description'=>'required|string',
        'long_description'=>'required|string',
        'image1'=>'nullable|image|mimes:png,jpg,jpeg,bmp,',
        'image2'=>'nullable|image|mimes:png,jpg,jpeg,bmp,',
      ]);

      $slug=str_slug($request->name);
      if($request->hasFile('image1')){
        $image1=$request->file('image1');
        $imageName1=$slug .'_'. Carbon::now()->toDateString() .'_'. uniqid() .'.' .  $image1->getClientOriginalExtension();

        $image1Id=Picture::where('product_id',$product->id)->first();
        $image1Id->delete();

        if(Storage::disk('public')->exists('product/'.$image1Id->name)){
          Storage::disk('public')->delete('product/'.$image1Id->name);
        }

        Image::make($image1)->save(base_path('public/storage/product/'.$imageName1));
      }
      // else{
      //   $image1Id=Picture::where('product_id',$product->id)->first();
      //   $imageName1=$image1Id->name;
      // }

      if($request->hasFile('image2')){
        $image2=$request->file('image2');
        //$slug=str_slug($request->name);
        $imageName2=$slug .'_'. Carbon::now()->toDateString() .'_' . uniqid() .'.' .  $image2->getClientOriginalExtension();

        $image2Id=Picture::where('product_id',$product->id)->orderBy('id','DESC')->first();
        $image2Id->delete();

        if(Storage::disk('public')->exists('product/'.$image2Id->name)){
          Storage::disk('public')->delete('product/'.$image2Id->name);
        }

        Image::make($image2)->save(base_path('public/storage/product/'.$imageName2));
      }
      // else{
      //   $image2Id=Picture::where('product_id',$product->id)->orderBy('id','DESC')->first();
      //   $imageName2=$image2Id->name;
      // }

      $product->name=$request->name;
      $product->brand_id=$request->brand_id;
      $product->price=$request->price;
      $product->discount=$request->discount;
      $product->stock=$request->stock;
      $product->short_description=$request->short_description;
      $product->long_description=$request->long_description;

      $insert=$product->save();

      $datas=[];
      if($request->hasFile('image1')){
        $datas[1]=$imageName1;
      }

      if($request->hasFile('image2')){
        $datas[2]=$imageName2;
      }

      foreach ($datas as $data) {
        $photo=new Picture();
        $photo->name=$data;
        $photo->product_id=$product->id;
        $photo->save();
      }

      $product->categories()->sync($request->category);
      $product->colors()->sync($request->color);

      if($insert){
        return back()->with('success','Product update success');
      }else{
        return back()->with('error','Product update failed');
      }
    }

    public function destroy(Product $product)
    {
      $delete=$product->delete();
      if($delete){
        return back()->with('success','Product deleting successfull');
      }else{
        return back()->with('error','Product deleting failed');
      }
    }
}
