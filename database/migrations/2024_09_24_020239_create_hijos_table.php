<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Hijos', function (Blueprint $table) {
            $table->string('idHijo', 8)->primary(); // 12345678

            $table->string('idApoderado', 8);
            $table->foreign('idApoderado')->references('idApoderado')->on('Apoderados')->onDelete('cascade');

            $table->string('nombre_Hijo', 100); 
            $table->string('apellido_Hijo', 100); 
            $table->date('fechaNacimiento_Hijo'); 
            $table->string('sexo_Hijo', 1); // M ó F
            $table->string('nombreSeguro_Hijo', 30)->nullable(); // Rimac, Seguro Integral de Salud, 
                                                                // Seguro Social del Perú, NULL
            $table->string('file_uri')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Hijos');
    }
};
