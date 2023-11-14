<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'direccion', 'telefono', 'nit', 'correo', 'nombre_producto', 'tipo', 'precio', 'descripcion', 'venta_alquiler', 'tipo_pago'];
}
