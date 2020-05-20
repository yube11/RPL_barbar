<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use App\komentar;
use Auth;

class AskController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$forum = forum::orderBy('created_at','asc')->paginate(10);
    	return view('askroom', compact(['forum']));
    }

    public function create(Request $request)
    {
    	$request->request->add(['user_id' => auth()->user()->id]);
    	//dd($request->all());
    	$forum = forum::create($request->all());
    	return redirect()->back();
    }

    public function view(forum $forum)
    {
    	return view('jawab', compact(['forum']));
    }

    public function jawab(Request $request)
    {
    	$request->request->add(['user_id' => auth()->user()->id, 'forum_id' => Auth::guard('forum')->forum()->id]);
    	dd($request->all());
    	$komen = komentar::create($request->all());
    	//return redirect()->back();
    }
}
