<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{


  public function index(){

    return view('home');

  }

  public function logout(){
    Session::flush();
    return redirect('/login');
  }



}
