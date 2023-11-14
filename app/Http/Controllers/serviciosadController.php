<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicioad; 

class serviciosadController extends Controller
{

    public function store(Request $request)
{
    $request->validate([
        'users_id'=> 'required',
        'nit'=> 'required',
        'direccion'=>'required',
        'telefono' => 'required',
        'correo'=> 'required',
        'tipo_servicio' => 'required',
        'fecha_adquirir' => 'required',
        'presupuesto' => 'required',
        'comentario'=>'required'
    ]
    );  
     
    $servicio = $request->all(); 
        Servicioad::create($servicio); 
    return redirect()->route('servicios'); 
}






    
}
