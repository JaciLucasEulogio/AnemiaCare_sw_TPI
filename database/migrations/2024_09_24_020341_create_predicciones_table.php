<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Predicciones', function (Blueprint $table) {
            $table->string('idPrediccion', 11)->primary(); // PREDIC-0001
           
            $table->string('idDosaje')->unique(); // Añadir unique para garantizar la relación uno a uno
            $table->foreign('idDosaje')->references('idDosaje')->on('Dosajes')->onDelete('cascade'); 
            
            $table->date('fechaHora_Prediccion')->default(now());
            $table->decimal('valorHemoglobinaEstimado1_Prediccion', 5, 2); // Número con 3 enteros y 2 decimales como máximo
            $table->decimal('valorHemoglobinaEstimado3_Prediccion', 5, 2); 
            $table->decimal('valorHemoglobinaEstimado6_Prediccion', 5, 2); 
            $table->decimal('precisionHemoglobina1', 5, 2); 
            $table->decimal('precisionHemoglobina3', 5, 2); 
            $table->decimal('precisionHemoglobina6', 5, 2); 
            $table->date('fechaRecuperacionEstimada_Prediccion')->nullable();
            $table->integer('diasRecuperacion_Prediccion')->nullable();
            $table->double('intervencionAdicionalPorcentaje_Prediccion')->nullable();
            $table->text('intervencionAdicionalMensaje_Prediccion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Predicciones');
    }
};