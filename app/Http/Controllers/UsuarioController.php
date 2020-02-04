<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    //

    //

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	
        return view('completarperfil');
    }
    public function completarPerfil(Request $request)
    {
    	# code...

    	$usuario = new Usuario();
    	
    	$usuario->sti  = request("sti");
    	$usuario->experiencia  = request("experiencia");
    	$usuario->habilidades  = request("habilidades");
    	$usuario->foto  = $request->file('foto')->store('public');;
    	$usuario->user_id  = auth()->id();

    	$usuario->save();

    	return redirect('/home');
    }
}
