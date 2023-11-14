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
        Schema::create('servicioads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id'); 
            $table->string('nit'); 
            $table->string('direccion'); 
            $table->string('telefono'); 
            $table->string('correo');
            $table->string('tipo_servicio'); 
            $table->string('fecha_adquirir'); 
            $table->string('presupuesto'); 
            $table->string('comentario'); 
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicioads');
    }
};
