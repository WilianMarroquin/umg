<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('ident');
            $table->string('users_id'); 
            $table->string('direccion'); 
            $table->string('telefono'); 
            $table->string('nit'); 
            $table->string('correo'); 
            $table->string('nombre_producto'); 
            $table->string('tipo');
            $table->string('precio'); 
            $table->string('descripcion'); 
            $table->string('venta_alquiler'); 
            $table->string('tipo_pago'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
