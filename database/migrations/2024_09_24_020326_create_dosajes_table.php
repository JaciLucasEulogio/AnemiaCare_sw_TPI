<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Dosajes', function (Blueprint $table) {
            $table->string('idDosaje', 11)->primary(); // DOSAJ-0001

            $table->string('idHijo', 8);
            $table->foreign('idHijo')->references('idHijo')->on('Hijos')->onDelete('cascade'); 
            $table->string('idDoctor', 8);
            $table->foreign('idDoctor')->references('idDoctor')->on('Doctores')->onDelete('cascade'); 
            $table->string('idEstablecimiento', 8);
            $table->foreign('idEstablecimiento')->references('idEstablecimiento')->on('Establecimientos')->onDelete('cascade'); 

            $table->date('fecha_Dosaje');
            $table->decimal('valorHemoglobina_Dosaje', 5, 2);
            $table->string('nivelAnemia_Dosaje');
            $table->decimal('peso_Dosaje', 5, 2);
            $table->decimal('talla_Dosaje', 5, 2);
            $table->integer('edadMeses_Dosaje');
            $table->decimal('nivelHierro_Dosaje', 5, 2);
            $table->boolean('estadoRecuperacion_Dosaje', 1);
            $table->date('fechaRecuperacionReal')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Dosajes');
    }
};