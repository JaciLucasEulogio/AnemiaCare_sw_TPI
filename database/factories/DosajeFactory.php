<?php

namespace Database\Factories;

use App\Models\Dosaje;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class DosajeFactory extends Factory
{
    protected $model = Dosaje::class;

    public function definition()
    {
        static $contador = 1; // Contador estático para generar ID único

        return [
            'idDosaje' => 'DOSAJ-' . str_pad($contador++, 4, '0', STR_PAD_LEFT), // Generar ID en formato DOSAJ-0001
            'idHijo' => \App\Models\Hijo::factory(),
            'idDoctor' => \App\Models\Doctor::factory(),
            'idEstablecimiento' => $this->faker->randomElement(['ESTAB049', 'ESTAB047', 'ESTAB027']),
            'fecha_Dosaje' => Carbon::now()->subMonths(rand(0, 2)), // Fecha en los últimos 3 meses
            'valorHemoglobina_Dosaje' => rand(10, 18) + rand(0, 99) / 100, // Valores entre 10.00 y 18.99
            'nivelAnemia_Dosaje' => $this->faker->randomElement(['Normal', 'Leve', 'Moderado', 'Severo']),
            'peso_Dosaje' => rand(5, 30) + rand(0, 99) / 100, // Peso entre 5.00 y 30.99
            'talla_Dosaje' => rand(50, 150) + rand(0, 99) / 100, // Talla entre 50.00 y 150.99
            'edadMeses_Dosaje' => rand(1, 60), // Edad entre 1 y 60 meses
            'nivelHierro_Dosaje' => rand(10, 200) + rand(0, 99) / 100, // Nivel de hierro entre 10.00 y 200.99
            'estadoRecuperacion_Dosaje' => (bool)rand(0, 1), // Estado de recuperación aleatorio
            'fechaRecuperacionReal' => (rand(0, 1) ? Carbon::now()->subMonths(rand(0, 3)) : null), // Fecha de recuperación, puede ser nula
        ];
    }
}
