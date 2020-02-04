<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyecto;

class HomeController extends Controller
{
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
        $proyectos = proyecto::where('user_id', '<>', auth()->id())->orderBy('created_at', 'DESC')->get();
        return view('home',['proyectos' => $proyectos]);
    }
}
