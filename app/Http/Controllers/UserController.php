<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Datatables;
use App\UserModel;


class UserController extends Controller
{
    public function index(){
    return Datatables::of(UserModel::query())->make(true);

    }

    public function userlist(){
    return view('user');

    }
}
