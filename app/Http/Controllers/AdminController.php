<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use App\Models\Contact;

use App\Http\Requests\AdminCreateRequest;

session_start();

class AdminController extends Controller
{
      public function index(){
      return view('front.Admin.loginAdmin');
   }

     public function show_dashboard(){
        return view('front.Admin.dashboard');
     }
     public function dashboard(Request $request){
      $admin_email = $request->admin_email;
      $admin_password = $request->admin_password;

      $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
      if($result){
         Session::put('admin_name',$result->admin_name);
         Session::put('id',$result->id);
         return Redirect::to('dashboard');
      }else{
         Session::put('message',"Tài khoản hoặc mật khẩu đăng nhập không chính xác!");
         return Redirect::to('loginAdmin');
      }
   
   }
   public function logout(){
      Session::put('admin_name',null);
      Session::put('id',null);
      return Redirect::to('admin');
   }


   public function allaccount(){
      $admins = Admin::all();
      return view('front.Admin.allAcount',compact('admins'));
   }

   public function create(){
      return view('front.Admin.registerAdmin');
   }
   public function store(AdminCreateRequest $adminCreateRequest){
      try{
        Admin::create([
          "admin_name"=>$adminCreateRequest->admin_name, 
          "admin_phone"=>$adminCreateRequest->admin_phone, 
          "admin_email"=>$adminCreateRequest->admin_email, 
          "admin_password"=>$adminCreateRequest->admin_password, 

        ]);
        return redirect()->route('');
      }catch(\Exception $ex){
         return back();
      }
   }
   public function delete($id){
      Admin::find($id)->delete();
      return redirect()->route('post.admin');
  }
}