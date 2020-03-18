<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteBlogController extends Controller
{
    public function __construct(){

    }

    public function index(){
      return view ('website.blog.index');
    }

    public function details(){
      return view ('website.blog.details');
    }
}
