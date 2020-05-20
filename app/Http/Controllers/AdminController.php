<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Admin;

class AdminController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard()
    {
    	return view('admin.dashboardadmin');
    }

    public function checkadmin(Request $request)
    {
    	$this->validate($request,[
    		'email'=>'required|email',
    		'password'=>'required|min:6',
    	]);
    	$admin_data = array(
    		'email' => $request->get('email'),
    		'password' => $request->get('password'),
    	);
    	if (Auth::guard('admin')->attempt($admin_data)){
    		return redirect('/master');
    	}
    	else{
    		return back()->with('error', 'Wrong Login Details');
    	}
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/master/login');
    }
}
