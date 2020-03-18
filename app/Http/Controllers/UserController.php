<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use App\User;
use App\UserRole;
use Carbon\Carbon;
use Session;

class UserController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
      $this->middleware('superadmin');
    }

    public function index(){
      $allUser=User::orderBy('id','DESC')->get();
      return view('admin.user.all',compact('allUser'));
    }

    public function add()
    {
      $allRole=UserRole::where('status',1)->get();
      return view('admin.user.add',compact('allRole'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'name'     => 'required|string|max:255',
        'email'    => 'required|string|email|max:255|unique:users',
        'role'     => 'required',
        'password' => 'required|string|min:6|confirmed',
      ],
      [
        'name.required' =>'Please enter your name',
        'email.required'=>'Please enter your email',
        'role.required' =>'Please select user role',
      ]);

      $insert=User::insert([
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'phone'=>$_POST['phone'],
        'role_id'=>$_POST['role'],
        'password'=>Hash::make($_POST['password']),
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($insert){
        Session::flash('success','User registration successfull');
        return redirect('admin/user/add');
      }else{
        Session::flash('error','User registration failed');
        return redirect('admin/user/add');
      }
    }

    public function view($id){
      $viewData=User::where('id',$id)->firstOrFail();
      return view('admin.user.view',compact('viewData'));
    }

    public function edit($id){
      $allRole=UserRole::where('status',1)->get();
      $viewData=User::where('id',$id)->firstOrFail();
      return view('admin.user.edit',compact('viewData','allRole'));
    }


    public function update(Request $request)
    {
      $this->validate($request,[
        'name' => 'required|string|max:255',
        'role' => 'required',
      ],[
        'name.required' =>'Please enter your name',
        'role.required' =>'Please select user role',
      ]);

      $id=$request['id'];
      $update=User::where('id',$id)->update([
        'name'=>$request['name'],
        'phone'=>$request['phone'],
        'role_id'=>$request['role'],
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($update){
        Session::flash('success');
        return redirect('admin/user/view/'.$id);
      }else {
        Session::flash('error');
        return redirect('admin/user/edit/'.$id);
      }

    }

    public function delete()
    {

    }

}
