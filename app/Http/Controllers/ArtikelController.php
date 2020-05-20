<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Admin;
use App\sumatera;
use App\kalimantan;
use Auth;

class ArtikelController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function home()
    {
    	return view('artikel');
    }

    
    /*SULAWESI*/
    public function sulawesi($slug)
    {   
    	$post = Post::where('slug', '=', $slug)->first();
    	return view('artikel-1',compact(['post']));
    }

    public function home_sul()
    {
    	$posts = Post::all();
    	return view('sulawesi',compact(['posts']));
    }

    /*SUMATERA*/
    public function sumatera($slug)
    {   
        $sumatera = sumatera::where('slug', '=', $slug)->first();
        return view('artikel.artikel-isi1',compact(['sumatera']));
    }
    public function home_sum()
    {
        $sumateras = sumatera::all();
        return view('Sumatera',compact(['sumateras']));
    }

    public function home_jaw()
    {
        //$posts = Post::all();
        return view('jawa');
    }

    /*KALIMANTAN*/
    public function kalimantan($slug)
    {   
        $kalimantan = kalimantan::where('slug', '=', $slug)->first();
        return view('artikel.artikel-isi2',compact(['kalimantan']));
    }
    public function home_kal()
    {
        $kalimantans = kalimantan::all();
        return view('kalimantan',compact(['kalimantans']));
    }

    public function home_nst()
    {
       // $posts = Post::all();
        return view('nusatenggara');
    }

    public function home_pap()
    {
       // $posts = Post::all();
        return view('papua');
    }

    public function add()
    {
        return view('admin.add');
    }

     public function create_article(Request $request)
    {
        //dd($request->all());
        $post = Post::create([
            'tittle' => $request->tittle,
            'role' => $request->role,
            'Ingredients' => $request->Ingredients,
            'Instruction' => $request->Instruction,
            'admin_id' => auth()->admin()->id,
            'thumbnail' => $request->thumbnail,
        ]);
        $request->file('thumbnail')->move('img/',$request->file('thumbnail')->getClientOriginalName());
        $post->thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $post->save();
        return redirect()->route('admin.dashboard');
    }
}
