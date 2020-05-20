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

/*INTRO*/
Route::get('/login','AuthController@login')->middleware('guest');
Route::post('/login','AuthController@checklogin')->name('login')->middleware('guest');
Route::get('/register','AuthController@register')->middleware('guest');
Route::post('/register','AuthController@checkregis')->name('register')->middleware('guest');
Route::get('/home', 'AuthController@home')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->middleware('auth');
Route::get('/dashboard','DashboardController@dashboard')->name('dashboard')->middleware('auth');

/*PROFILE*/
Route::get('/profile','ProfileController@index')->middleware('auth');
Route::get('/profile/{id}/edit','AuthController@edit')->middleware('auth');
Route::post('/profile/{id}/edit','AuthController@Updated')->middleware('auth');

/*ASK ROOM*/
Route::get('/askroom','AskController@index')->middleware('auth');
Route::post('/askroom/create','AskController@create')->middleware('auth')->name('create.forum');
Route::get('/askroom/create','AskController@create')->middleware('auth');
Route::get('/askroom/{forum}/view','AskController@view')->middleware('auth');
Route::post('/jawab','AskController@jawab')->middleware('auth');
Route::get('/jawab','AskController@jawab')->middleware('auth');
//Route::get('/askroom/{forum}/view/answer','AskController@jawab')->middleware('auth');


/*ARTIKEL*/
Route::prefix('article')->group(function(){
	Route::get('/', 'ArtikelController@home');
	Route::get('/sulawesi','ArtikelController@home_sul');
	Route::get('/sumatera','ArtikelController@home_sum');
	Route::get('/jawa','ArtikelController@home_jaw');
	Route::get('/kalimantan','ArtikelController@home_kal');
	Route::get('/nusatenggara','ArtikelController@home_nst');
	Route::get('/papua','ArtikelController@home_pap');
});

/*FOR ADMIN*/
Route::prefix('master')->group(function(){
	Route::get('/login',function(){
		return view('admin.loginadmin');
	})->middleware('guest:admin','guest');
	Route::post('/login','AdminController@checkadmin')->name('admin.login.submit');
	Route::get('/','ArtikelController@index')->name('admin.dashboard');
	Route::get('/logout','AdminController@logout');
	Route::get('/add', [
		'uses' => 'ArtikelController@add',
		'as' => 'posts.add',
	]);
	Route::post('/create',[
		'uses' => 'ArtikelController@create_article',
		'as' => 'post.article',
	]);
});


Route::get('/article/sulawesi/{slug}',[
	'uses' => 'ArtikelController@sulawesi',
]);

Route::get('/article/sumatera/{slug}',[
	'uses' => 'ArtikelController@sumatera',
	'as' => 'site.single.post1',
]);

Route::get('/article/kalimantan/{slug}',[
	'uses' => 'ArtikelController@kalimantan',
	'as' => 'site.single.post2',
]);