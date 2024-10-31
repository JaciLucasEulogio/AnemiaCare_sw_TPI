<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Hijo;
use App\Models\Doctor;
use App\Models\Dosaje;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosajeSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener todos los hijos
        $hijos = Hijo::all();
        // Obtener doctores
        $doctores = Doctor::pluck('idDoctor')->toArray();
        // Obtener establecimientos
        $establecimientos = ['ESTAB049', 'ESTAB047', 'ESTAB027'];
        $nivelesAnemia = ['Leve', 'Moderado', 'Severo']; // Niveles de anemia excepto 'Sin Anemia'

        $contadorDosajes = 1; // Contador para generar IDs únicos

        foreach ($hijos as $hijo) {
            for ($i = 0; $i < 3; $i++) {
                // Generar estado de recuperación aleatorio
                $estadoRecuperacion = (bool)rand(0, 1);

                $dosaje = [
                    'idDosaje' => 'DOSAJ-' . str_pad($contadorDosajes++, 4, '0', STR_PAD_LEFT),
                    'idHijo' => $hijo->idHijo,
                    'idDoctor' => $doctores[array_rand($doctores)],
                    'idEstablecimiento' => $establecimientos[array_rand($establecimientos)],
                    'fecha_Dosaje' => Carbon::now()->subMonths(3 - $i),
                    'valorHemoglobina_Dosaje' => rand(10, 18) + rand(0, 99) / 100,
                    'nivelAnemia_Dosaje' => $estadoRecuperacion ? 'Sin Anemia' : $nivelesAnemia[array_rand($nivelesAnemia)],
                    'peso_Dosaje' => rand(5, 30) + rand(0, 99) / 100,
                    'talla_Dosaje' => rand(50, 150) + rand(0, 99) / 100,
                    'edadMeses_Dosaje' => rand(1, 60),
                    'nivelHierro_Dosaje' => rand(10, 200) + rand(0, 99) / 100,
                    'estadoRecuperacion_Dosaje' => $estadoRecuperacion,
                    'fechaRecuperacionReal' => $estadoRecuperacion ? Carbon::now()->subMonths(3 - $i) : null,
                ];

                Dosaje::create($dosaje);

                // Ajuste del log para registrar los detalles del dosaje
                /*Log::info("Dosaje creado con éxito", [
                    'ID Dosaje' => $dosaje['idDosaje'],
                    'Nivel de Anemia' => $dosaje['nivelAnemia_Dosaje'],
                    'Estado de Recuperación' => $dosaje['estadoRecuperacion_Dosaje']
                ]);*/
            }
        }

        // Crear los 2964 dosajes restantes para completar el total de 3000
        // Dosaje::factory(2964)->create();
    }
}
