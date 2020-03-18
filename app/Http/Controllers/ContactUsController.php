<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;

class ContactUsController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $allMes=ContactUs::where('status',1)->orderBy('id','DESC')->get();
      return view('admin.contactus.all',compact('allMes'));
    }

    public function view($slug){
      $viewData=ContactUs::where('status',1)->where('slug',$slug)->firstOrFail();
      return view('admin.contactus.view',compact('viewData'));
    }

    public function softDelete(){

    }

    public function delete(){

    }


}
