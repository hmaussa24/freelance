<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\proyecto;

class ProyectoController extends Controller
{
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
    	
        return view('nuevoproyecto');
    }


    public function store(Request $request)
    {
    	$proyecto = new proyecto();

    	//dd($request);
    	$proyecto->titulo  = request("titulo");
    	$proyecto->descripcion  = request("descripcion");
    	$proyecto->contexto  = request("contexto");
    	$proyecto->requisitos  = request("requisitos");
    	$proyecto->presupuesto  = request("presupuesto");
    	$proyecto->fecha_entrega  = request("fecha_entrega");
        $proyecto->user_id = auth()->id();

    	$proyecto->save();

    	return redirect("/home");
    }

    public function misProyectos()
    {
        
        $proyecto = proyecto::where('user_id','=',auth()->id())->get();
        //dd($proyecto);
       // $numpro = DB::table('proyectos')
        //->join('propuestas', function ($join) {
          //  $join->on('proyectos.id', '=', 'propuestas.proyecto_id')
           //      ->where('proyectos.user_id', '=', auth()->id());
        //})->count();
        return view('misproyectos',['proyectos' => $proyecto,]);
    }
}
