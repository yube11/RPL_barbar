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
    return view('home');
});
Route::get('/login','AuthController@login')->middleware('guest');
Route::post('/login','AuthController@checklogin')->middleware('guest')->name('login');
Route::get('/regist','AuthController@regis')->middleware('guest');
Route::post('/regist','AuthController@checkregis')->name('registrasi')->middleware('guest');
Route::get('/home', 'AuthController@home')->middleware('auth');
Route::get('/login/logout', 'AuthController@logout')->middleware('auth');
Route::get('/article', 'AuthController@artikel');