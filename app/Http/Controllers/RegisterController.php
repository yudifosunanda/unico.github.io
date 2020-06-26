<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\UserModel;

class RegisterController extends Controller
{
  public function register(){
    return view('register');
  }

  public function registering(Request $request){

    $this->validate($request,[
      'name'=>'required',
      'email'=>'required|email',
      'password'=>'required|confirmed',
      'birthday'=>'required|date'
    ]);

    $hashpass = Hash::make($request->password);
    $adduser = new UserModel();
    $adding = $adduser->useradd($request->name,$request->email,$hashpass,$request->birthday);

    if($adding) {
       return redirect('/register')->with('alertsucces','Register Success');
     }else{
       return redirect('/register')->with('alertfailed','');
     }

  }
}
