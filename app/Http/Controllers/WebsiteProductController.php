<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteProductController extends Controller
{
    public function __construct(){

    }

    public function index(){
      return view('website.product.index');
    }

    public function details(){
      return view('website.product.details');
    }
}
