<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Doctores', function (Blueprint $table) {
            $table->string('idDoctor', 8)->primary(); // 12345678
            $table->string('nombre_Doctor', 100); 
            $table->string('apellido_Doctor', 100); 
            $table->string('celular_Doctor', 9);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Doctores');
    }
};
