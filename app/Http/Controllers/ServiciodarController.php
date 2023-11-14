<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serviciodar; 

class ServiciodarController extends Controller
{
    public function  store(Request $request)
    {
        $request->validate([
            'users_id'=> 'required',
            'nit'=>'required',
            'direccion' => 'required',
            'telefono'=>'required',
            'correo'=>'required',
            'tipo_servicio'=>'required',
            'curriculum'=>'required|image|mimes:jpeg,png,svg,pdf',
            'comentario'=>'required'
        ]); 
        $servicio = $request->all(); 

        if($curriculum = $request->file('curriculum')){
            $rutaGuardarImg = 'img/'; 
            $imagenProducto = date('YmdHis'). ".". $curriculum->getClientOriginalExtension(); 
            $curriculum->move($rutaGuardarImg, $imagenProducto); 
            $servicio['img']= "$imagenProducto"; 
        }

        Serviciodar::create($servicio); 
        return redirect()->route('servicios'); 

    }
}
