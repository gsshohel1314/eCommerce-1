<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $totalUser=User::count();
      return view('admin.dashboard.home',compact('totalUser'));
    }
}
