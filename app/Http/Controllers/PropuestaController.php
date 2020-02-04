<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Propuesta;
use App\proyecto;

class PropuestaController extends Controller
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
    public function index($id)
    {

    	$proyecto = proyecto::where('id','=',$id)->first();
        return view('nuevapropuesta',['id'=>$id,'titulo'=>$proyecto->titulo]);
    }


    public function store(Request $request,$id)
    {
    	$propuesta = new Propuesta();

    	//dd($request);
    	$propuesta->titulo  = request("titulo");
    	$propuesta->descripcion  = request("descripcion");
    	$propuesta->presupuesto  = request("presupuesto");
        $propuesta->user_id = auth()->id();
        $propuesta->proyecto_id = $id;

    	$propuesta->save();

    	return redirect("/home");
    }

    public function misPropuestas()
    {
        $propuesta = Propuesta::where('user_id','=',auth()->id())->get();
        return view('mispropuestas',['propuestas' => $propuesta]);
    }


    function propuestasMisProyectos($id)
    {
        # code...
         $numpro = DB::table('proyectos')
        ->join('propuestas', function ($join) use ($id) {
            $join->on('proyectos.id', '=', 'propuestas.proyecto_id')
                 ->where('proyectos.id', '=', $id);
        })->get();

      return view('propuestasmisproyectos', ['propuestas' => $numpro]);  
    }
}
