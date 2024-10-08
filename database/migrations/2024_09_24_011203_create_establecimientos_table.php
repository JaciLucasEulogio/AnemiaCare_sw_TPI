<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Establecimientos', function (Blueprint $table) {
            $table->string('idEstablecimiento')->primary();
            $table->string('nombreEstablecimiento');

            $table->string('idDistrito');
            $table->foreign('idDistrito')->references('idDistrito')->on('Distritos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Establecimientos');
    }
};
