<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Provincias_Redes', function (Blueprint $table) {
            $table->string('idProvinciaRed')->primary(); // HUANC-RED01, HUANC-RED02

            $table->string('idProvincia');  //HUANC
            $table->string('idRed'); //RED01, RED02
            $table->foreign('idProvincia')->references('idProvincia')->on('Provincias')->onDelete('cascade');
            $table->foreign('idRed')->references('idRed')->on('Redes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Provincias_Redes');
    }
};
