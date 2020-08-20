<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/users','userController@index');// user list

Route::get('/users/reg', function () {// register form
    return view('userRegister');
});
Route::post('/users/reg','userController@store'); //insert

Route::get('/users/{id}','userController@show'); //edit

Route::put('/users/{id}','userController@update'); //update

Route::delete('/users/{id}','userController@delete'); //delete