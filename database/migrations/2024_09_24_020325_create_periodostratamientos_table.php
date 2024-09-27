<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('PeriodosTratamientos', function (Blueprint $table) {
            $table->string('idPeriodoTratamiento', 15)->primary(); // PERIODTRAT-0001
            $table->string('idHijo', 8);
            $table->foreign('idHijo')->references('idHijo')->on('Hijos')->onDelete('cascade'); 

            $table->date('fechaDiagnosticoAnemia_PeriodoTratamiento'); 
            $table->date('fechaFin_PeriodoTratamiento')->nullable(); 

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('PeriodosTratamientos');
    }
};
