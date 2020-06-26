<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
  protected  $table= 'user';
  protected $fillable = ['id','name',	'email',	'password',	'birthday'];
  public $timestamps = false;

  public function useradd($name, $email, $password, $birthday){

    return RegisterModel::create([
      'name'=>$name,
      'email'=>$email,
      'password'=>$password,
      'birthday'=>$birthday
    ]);

  }

}
