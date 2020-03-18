<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use Carbon\Carbon;
use Session;
use Mail;
use App\Mail\ContactMail;

class WebsiteProcessController extends Controller
{
    public function __construct(){

    }

    public function contact(Request $request){
      $this->validate($request,[

      ],[

      ]);
      $slug=uniqid('CON');
      $insert=ContactUs::insert([
        'name'=>$request['name'],
        'email'=>$request['email'],
        'phone'=>$request['phone'],
        'subject'=>$request['subject'],
        'message'=>$request['message'],
        'slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString(),
      ]);

      $email=$request['email'];
      $subject=$request['subject'];
      $message=$request['message'];
      Mail::to($email)->send(new ContactMail($subject,$message));

      if($insert){
        Session::flash('success','value');
        return redirect('contact');
      }else{
        Session::flash('error','value');
        return redirect('contact');
      }
    }
}
