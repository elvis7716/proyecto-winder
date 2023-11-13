<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;
class PersonaController extends Controller
{
    public function listarPersona(){
        
        $mensaje = session('mensaje');
        if($mensaje){
            alert()->success('operacion exitosa!!!', $mensaje)->toToast();
        }
        $personas = Persona::all();
        //dd($personas);
        //$personas = [];
        
        //dd($personas);
        return view('lista-personas',compact('personas'));
    }

    public function mostrarPersona(Request $request, $id_persona){
        //dd($request);
        return view('mostrar-persona', compact('id_persona'));
    }
    public function eliminarPersona(Request $request, $id_persona){
        //dd($id_persona);
        $persona= Persona:: find($id_persona);
        $persona->delete();
        return redirect()
        ->route('lista-personas')
        ->with('mensaje','Persona eliminada correctamente!!!');

        //dd($persona);

    }
}
