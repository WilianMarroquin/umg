<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura; 
use App\Models\Producto; 
use App\Models\Descripcion; 
class FacturaController extends Controller
{

public function create($item){
    $productos = Producto::paginate('50'); 
    $descripcion = Descripcion::paginate('50'); 

    return view('facturacion.fac', compact('item', 'productos', 'descripcion')); 
}




    public function store(Request $request,Producto $rosa){
        $request->validate([
            'users_id'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'nit'=>'required',
            'correo'=>'required',
            'nombre_producto'=>'required',
            'tipo'=>'required',
            'precio'=>'required',
            'descripcion'=>'required',
            'venta_alquiler'=>'required', 
            'tipo_pago'=>'required'
        ]); 

        $verde = $rosa->unidades-1; 

        $factura = $request->all(); 

        $profesor = Producto::findOrFail($rosa->id);
        $profesor->nombre = $rosa->nombre;
        $profesor->tipo = $rosa->tipo;
        $profesor->estado = $rosa->estado;
        $profesor->precio = $rosa->precio;
        $profesor->descripcion = $rosa->descripcion;
        $profesor->users_id = $rosa->users_id;
        $profesor->unidades = $verde;
        $profesor->img = $rosa->img;
        $profesor->venta_arquiler = $rosa->venta_arquiler;
    
        $profesor->save();

        $rosa->id;

        Factura::create($factura); 
        return view('/facturacion.facturar', compact('factura')); 
    }
    
}
