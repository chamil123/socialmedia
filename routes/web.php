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
    return view('welcome');
});
Route::get('/home', 'UserController@index');
Route::get('/viewmembers', 'MemberController@index');
Route::get('/getmembers', 'MemberController@test');
Route::post('/add_members', 'MemberController@store');
Route::get('/member', 'MemberController@test2');
