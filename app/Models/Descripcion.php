<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descripcion extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'direccion', 'telefono', 'fecha_nacimiento', 'nacionalidad', 'etnia', 'preferencia_productos', 'experiencia', 'nit', 'foto', 'descripcion', 'unico']; 
}
