<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Apoderados', function (Blueprint $table) {
            $table->string('idApoderado', 8)->primary(); // 12345678
            $table->string('password'); 
            $table->string('nombre_Apoderado', 100);
            $table->string('apellido_Apoderado', 100); 
            $table->char('sexo_Apoderado', 1); // M ó F
            $table->string('nombreSeguro_Apoderado', 30)->nullable(); // Rimac, Seguro Integral de Salud, 
                                                   // Seguro Social del Perú
            $table->string('celular_Apoderado', 9); // 999888777
            
            $table->timestamps(); //created_at updated_at
            //$table->softDeletes(); //deleted_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Apoderados');
    }
};