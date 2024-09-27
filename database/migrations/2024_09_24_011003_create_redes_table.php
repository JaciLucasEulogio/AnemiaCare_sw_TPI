<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Redes', function (Blueprint $table) {
            $table->string('idRed')->primary();
            $table->string('nombreRed');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Redes');
    }
};
