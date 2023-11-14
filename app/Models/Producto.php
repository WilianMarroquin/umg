<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

use HasFactory; 
protected $fillable = ['nombre', 'tipo', 'estado', 'precio', 'descripcion', 'users_id', 'unidades', 'img', 'venta_arquiler']; 


}
