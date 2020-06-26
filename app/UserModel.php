<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
  protected  $table= 'user';
  protected $fillable = ['id','name',	'email',	'password',	'birthday'];
  public $timestamps = false;

  public function useradd($name, $email, $password, $birthday){

    return UserModel::create([
      'name'=>$name,
      'email'=>$email,
      'password'=>$password,
      'birthday'=>$birthday
    ]);

  }
}
