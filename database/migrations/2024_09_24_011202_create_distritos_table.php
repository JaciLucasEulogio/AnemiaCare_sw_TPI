<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Distritos', function (Blueprint $table) {
            $table->string('idDistrito', 13)->primary();
            $table->string('nombreDistrito');

            $table->string('idMicroRed');
            $table->foreign('idMicroRed')->references('idMicroRed')->on('MicroRedes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Distritos');
    }
};
