<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view('profil');
    }

    public function update(Request $request)
	{
		DB::table('user')->where('id',$request->id)->update([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'username' => $request->username,
			'email' => $request->email,
			'password' => bcrypt($request->password), 
		]);
		return redirect('/profile');
	}
}
