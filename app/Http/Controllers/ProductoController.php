<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Descripcion;

class ProductoController extends Controller
{


    public function index(Request $request)
    {
        $productos = Producto::paginate(20);
        $descripcion = Descripcion::paginate(30);
        return view('perfil.index', compact('productos', 'descripcion'));

    }

    public function index2(Request $request){
        $productos = Producto::paginate(10);
        return view('blog', compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'nombre'=>"required",
        "tipo"=>"required",
        'estado'=>'required',
        'precio'=>'required',
        'users_id'=>'required',
        'unidades'=>'required',
        'img'=>'required|image|mimes:jpeg,png,svg',
        'venta_arquiler'=>'required'
       ]);
        $producto = $request->all();

        if($imagen = $request->file('img')){
            $rutaGuardarImg = 'img/';
            $imagenProducto = date('YmdHis'). ".". $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $producto['img']= "$imagenProducto";
        }
        Producto::create($producto);
        return redirect()->route('perfil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $item)
    {
        return view('perfil.vizualisar', compact('item'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $item)
    {
        return view('perfil.edit', ['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */



    public function update(Request $request, Producto $item)

    {
      if($imagen = $request->file('img')){
        $rutaGuardarImg = 'img/';
        $imagenProducto = date('YmdHis'). ".". $imagen->getClientOriginalExtension();
        $imagen->move($rutaGuardarImg, $imagenProducto);
        $productos= "$imagenProducto";
    }
    $profesor = Producto::findOrFail($item->id);
    $profesor->nombre = $request->nombre;
    $profesor->tipo = $request->tipo;
    $profesor->estado = $request->estado;
    $profesor->precio = $request->precio;
    $profesor->descripcion = $request->descripcion;
    $profesor->users_id = $request->users_id;
    $profesor->unidades = $request->unidades;
    $profesor->img = $productos;
    $profesor->venta_arquiler = $request->venta_arquiler;

    $profesor->save();
    return redirect()->route('perfil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $item)
    {
    $item->delete();
    return to_route('perfil')->with('status', 'post delete');
    }
}
