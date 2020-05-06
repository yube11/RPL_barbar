<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;


class AuthController extends Controller
{
    function login()
    {
    	return view('auth.login');
    }
    
    function checklogin(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|alphaNum|min:6',
    	]);
    	$user_data = array(
    		'email' => $request->get('email'),
    		'password' => $request->get('password'),
    	);
    	if(Auth::attempt($user_data)){
    		return redirect('/home');
    	}
    	else{
    		return back()->with('error', 'Wrong Login Details');
    	}
    }

    function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

    function regis(){
    	return view('regis');
    }

    function checkregis(Request $request){
    	$this->validate($request, [
    		'first_name'=>'required|min:4',
    		'last_name'=>'required|min:4',
    		'username'=>'required|min:4',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:6|confirmed',
    	]);

    	User::create([
    		'first_name'=>$request->first_name,
    		'last_name'=>$request->last_name,
    		'username'=>$request->username,
    		'email'=>$request->email,
    		'password'=>bcrypt($request->password),
    	]);

    	return redirect()->route('login');
    }

    function home(){
    	return view('home-dahlogin');
    }

    function artikel(){
    	return view('artikel');
    }
}
