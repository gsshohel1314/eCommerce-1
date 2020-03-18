<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Session;
use Storage;

class ProductRecycleController extends Controller
{
    public function index(){
      $products=Product::onlyTrashed()->latest()->get();
      return view('admin.productRecycle.index',compact('products'));
    }
}
