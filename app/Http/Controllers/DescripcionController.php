<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Descripcion;
use Illuminate\Support\Facades\Storage; 

class DescripcionController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'users_id'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'fecha_nacimiento'=>'required',
            'nacionalidad'=>'required',
            'etnia'=>'required',
            'preferencia_productos'=>'required',
            'experiencia'=>'required',
            'nit'=>'required', 
            'foto'=>'required|image|mimes:jpeg,png,svg',
            'descripcion'=>'required',
            'unico'=>'required'

        ]); 

        $descripcion = $request->all(); 

        if($foto = $request->file('foto')){
            $rutaGuardarImg = 'img/'; 
            $imagenProducto = date('YmdHis'). ".". $foto->getClientOriginalExtension(); 
            $foto->move($rutaGuardarImg, $imagenProducto); 
            $descripcion['foto']= "$imagenProducto"; 
        }

        Descripcion::create($descripcion); 
        return redirect()->route('perfil'); 
    }

    public function update(Request $request, Descripcion $var){

        if($imagen = $request->file('foto')){
            $rutaGuardarImg = 'img/'; 
            $imagenProducto = date('YmdHis'). ".". $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto); 
            $img= "$imagenProducto"; 
        }   

        $registro = Descripcion::findOrFail($var->id); 
        $registro->users_id = $request->users_id;
        $registro->direccion = $request->direccion; 
        $registro->telefono = $request->telefono; 
        $registro->fecha_nacimiento = $request->fecha_nacimiento; 
        $registro->nacionalidad = $request->nacionalidad; 
        $registro->etnia=$request->etnia; 
        $registro->preferencia_productos = $request->preferencia_productos; 
        $registro->experiencia = $request->experiencia; 
        $registro->nit = $request->nit;
        $registro->foto =$img; 
        $registro->descripcion = $request->descripcion; 

        $registro->save(); 
        return redirect()->route('perfil'); 
    }

    public function ver(Descripcion $var){

        return view('perfil.editarperfil', ['var'=>$var]); 
    }




}
