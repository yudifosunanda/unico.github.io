<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\UserModel;

class LoginController extends Controller
{


  public function login(){
    return view('login');
  }

  public function login_processing(Request $request){

    $email = $request->email;
    $password = $request->password;


    $data = UserModel::where('email',$email)->first();
       if($data){
           if(Hash::check($password,$data->password)){
               Session::put('id',$data->id);
               Session::put('login',TRUE);
               return redirect('/');
           }else{
             return redirect('/login')->with('alertfaileddata','Either your email/password is incorrect
             Please try again');
           }
         }else{
             return redirect('/login')->with('alertfaileddata','Either your email/password is incorrect
             Please try again');
       }

   }
}
