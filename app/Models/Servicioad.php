<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicioad extends Model
{
    use HasFactory;
    protected $fillable =['users_id', 'nit', 'direccion', 'telefono', 'correo', 'tipo_servicio', 'fecha_adquirir', 'presupuesto', 'comentario' ]; 
    
}
