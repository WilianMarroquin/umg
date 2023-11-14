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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->string('tipo'); 
            $table->string('estado'); 
            $table->double('precio',8,3); 
            $table->string('descripcion'); 
            $table->unsignedBigInteger('users_id');
            $table->integer('unidades'); 
            $table->string('img'); 
            $table->string('venta_arquiler'); 
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users'); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
