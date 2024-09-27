<?php

namespace Database\Seeders;

use App\Models\Dosaje;
use App\Models\Hijo;
use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class DosajeSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener todos los hijos
        $hijos = Hijo::all();
        // Obtener doctores (aquí puedes modificar si necesitas especificar un conjunto de doctores)
        $doctores = Doctor::pluck('idDoctor')->toArray();
        // Obtener establecimientos (aquí puedes modificar si necesitas especificar un conjunto de establecimientos)
        $establecimientos = ['ESTAB049', 'ESTAB047', 'ESTAB027']; // Asegúrate de que estos IDs existan en tu base de datos

        $contadorDosajes = 1; // Contador para generar IDs únicos

        foreach ($hijos as $hijo) {
            for ($i = 0; $i < 3; $i++) {
                $dosaje = [
                    'idDosaje' => 'DOSAJ-' . str_pad($contadorDosajes++, 4, '0', STR_PAD_LEFT), // Generar ID en formato DOSAJ-0001
                    'idHijo' => $hijo->idHijo,
                    'idDoctor' => $doctores[array_rand($doctores)], // Seleccionar un doctor aleatorio
                    'idEstablecimiento' => $establecimientos[array_rand($establecimientos)], // Seleccionar un establecimiento aleatorio
                    'fecha_Dosaje' => Carbon::now()->subMonths(3 - $i), // Fechas en los últimos 3 meses
                    'valorHemoglobina_Dosaje' => rand(10, 18) + rand(0, 99) / 100, // Valores entre 10.00 y 18.99
                    'nivelAnemia_Dosaje' => ['Normal', 'Leve', 'Moderado', 'Severo'][array_rand(['Normal', 'Leve', 'Moderado', 'Severo'])],
                    'peso_Dosaje' => rand(5, 30) + rand(0, 99) / 100, // Peso entre 5.00 y 30.99
                    'talla_Dosaje' => rand(50, 150) + rand(0, 99) / 100, // Talla entre 50.00 y 150.99
                    'edadMeses_Dosaje' => rand(1, 60), // Edad entre 1 y 60 meses
                    'nivelHierro_Dosaje' => rand(10, 200) + rand(0, 99) / 100, // Nivel de hierro entre 10.00 y 200.99
                    'estadoRecuperacion_Dosaje' => (bool)rand(0, 1), // Estado de recuperación aleatorio
                    'fechaRecuperacionReal' => (rand(0, 1) ? Carbon::now()->subMonths(3 - $i) : null), // Fecha de recuperación, puede ser nula
                ];

                Dosaje::create($dosaje);
            }
        }

        // Crear los 2964 dosajes restantes para completar el total de 3000
    }
}
