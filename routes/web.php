<?php

use App\Http\Controllers\DescripcionController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviciosadController;
use App\Http\Controllers\ServiciodarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('blog');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
route::view('/blog', 'Blog')->name('Blog');

Route::get('/perfil', [App\Http\Controllers\ProductoController::class, 'index'])->name('perfil');
Route::view('/perfil/crear', 'perfil.crear')->name('crear_producto');

route::post('/perfil/crear/producto', [App\Http\Controllers\ProductoController::class, 'store'])->name('registrar_producto');

Route::delete('/perfil{item}', [ProductoController::class, 'destroy'])->name('producto.delete');

Route::get('perfil/{item}/edit', [ProductoController::class, 'edit'])->name('editar_producto');

Route::patch('/perfil{item}', [ProductoController::class, 'update'])->name('producto_update');

Route::patch('/perfil/configure{var}', [DescripcionController::class, 'update'])->name('descripcion.update');

Route::get('/perfil/configure/{var}', [DescripcionController::class, 'ver'])->name('editar.perfil');



Route::get('/perfil/ver{item}', [ProductoController::class, 'show'])->name('ver');

Route::get('/Inicio', [ProductoController::class, 'index2'])->name('inicio');
Route::view('/informacion', 'informacion.informacion')->name('informacion');

Route::view('/Contactos', 'contactos.contactos')->name('contactos');

Route::view('/servicios', 'servicios.Presentacion')->name("servicios");

Route::view('/servicios/form', 'servicios.form')->name('servicios.recibir');

Route::post('/servicio/form/crear', [serviciosadController::class, 'store'])->name('registrar.servicio');
Route::view('/servicios/form/adquirir', 'servicios.formSer')->name('adquirir.servicio');

Route::post('/servicios/form/adquirir/servis', [ServiciodarController::class, 'store'])->name('dar.servicio');

Route::view('/perfil/Configure', 'perfil.descripcion')->name('descripcion');

Route::post('/perfil/configure/crear',[DescripcionController::class, 'store'])->name('editar.descripcion');

Route::post('/inicio/facturar/crear{rosa}', [FacturaController::class, 'store'])->name('crear.factura', );
Route::get('/inicio/facturar/{item}', [FacturaController::class, 'create'])->name('facturar');

Route::get('/origen', function () {
    return view('informacion.origen');
})->name('origen');

Route::get('/protocolo', function () {
    return view('informacion.Protocolo');
})->name('protocolo');

Route::get('/ingenieria', function () {
    return view('informacion.Ingenieria');
})->name('ingenieria');

Route::get('/valores', function () {
    return view('informacion.valores');
})->name('valores');

Route::get('/mision', function () {
    return view('informacion.misionVision');
})->name('mision');






