<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
          'name'=>'required|string|max:255|unique:categories',
        ]);

        $category=new Category();
        $category->name=$request->name;
        $category->slug=str_slug($request->name);
        $category->status=(boolean)$request->status;

        $create=$category->save();

        if($create){
          Session::flash('success','Category successfully created');
          return back();
        }else {
          Session::flash('error','Category created failed');
          return back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $category=Category::findOrFail($id);
       return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
      $category=Category::findOrFail($id);
      // $request->validate([
      //   'name'=>'required|string|max:255|unique:categories,name'.$category->$id
      // ]);

      //$category=new Category();
      $category->name=$request->name;
      $category->slug=str_slug($request->name);
      $category->status=(boolean)$request->status;

      $update=$category->save();

      if($update){
        Session::flash('success','Category successfully updated');
        return back();
      }else {
        Session::flash('error','Category updated failed');
        return back();
      }
    }

    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $delete=$category->delete();

        if($delete){
          Session::flash('success','Category delete successfull');
          return back();
        }else {
          Session::flash('error','Category delete failed');
          return back();
        }
    }
}
