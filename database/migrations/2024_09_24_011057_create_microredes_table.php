    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up(): void
        {
            Schema::create('MicroRedes', function (Blueprint $table) {
                $table->string('idMicroRed')->primary();
                $table->string('nombreMicroRed');

                $table->string('idProvinciaRed');
                $table->foreign('idProvinciaRed')->references('idProvinciaRed')
                    ->on('Provincias_Redes')->onDelete('cascade');

                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('MicroRedes');
        }
    };
