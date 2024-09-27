<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Predicciones', function (Blueprint $table) {
            $table->string('idPrediccion', 10)->primary(); // PREDIC-001
           
            $table->string('idDosaje')->unique(); // Añadir unique para garantizar la relación uno a uno
            $table->foreign('idDosaje')->references('idDosaje')->on('Dosajes')->onDelete('cascade'); 
            
            $table->date('fecha_Prediccion');
            $table->decimal('valorHemoglobinaEstimado_Prediccion', 5, 2); // Cambiado a decimal ya que es un valor numérico
            $table->date('fechaRecuperacionEstimada_Prediccion');
            $table->boolean('intervencionAdicional_Prediccion');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Predicciones');
    }
};