<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Exception;

class RegistroProductowebcontroller extends Controller
{
    public function registroProducto(){
          
        $mensaje = session('mensaje');
        if($mensaje){
            alert()->success('operacion exitosa!!!', $mensaje)->toToast();
        }
        return view('web.registro-producto-web');

    }
    public function guardarProducto(Request $request){
        

        //dd($request);
        try{
            $data = [
                'nombre' => $request->get('nombre'),
                'descripcion' => $request->get('descripcion'),
                'precio' => $request->get('precio'),
                'categoria' => $request->get('categoria'),
                'stock' => $request->get('stock'),
                'foto' => $request->get('foto'),
                'fechaRegistro' => $request->get('fechaRegistro'),
                'marca' => $request->get('marca'),
            ];
            //dd($data);
            Productos::create($data);
            return redirect()
            ->route('lista-productos')
            ->with('mensaje','Persona registrada correctamente !!!');
        }catch(Exception $ex){
            //dd($ex);
            return redirect()
            ->route('registro.producto')
            ->with('mensaje',$ex->getMessage());
        }
    }

    }
    

