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
        Schema::create('descripcions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id'); 
            $table->string('direccion'); 
            $table->string('telefono'); 
            $table->string('fecha_nacimiento'); 
            $table->string('nacionalidad'); 
            $table->string('etnia'); 
            $table->string('preferencia_productos'); 
            $table->string('experiencia'); 
            $table->string('nit'); 
            $table->string('foto'); 
            $table->string('descripcion'); 
            $table->string('unico'); 
            $table->foreign('users_id')->references('id')->on('users'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('descripcions');
    }
};
