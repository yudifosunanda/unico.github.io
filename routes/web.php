<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return  redirect('/home');
})->middleware('clogin');

Route::get('/home', 'HomeController@index')->name('homepage')->middleware('csesion');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login_processing', 'LoginController@login_processing');

Route::get('/register', 'RegisterController@register');
Route::post('/registering', 'RegisterController@registering');

Route::get('/userlist','UserController@userlist')->name('user')->middleware('csesion');
Route::get('index','UserController@index')->middleware('csesion');
Route::get('/logout','HomeController@logout');
