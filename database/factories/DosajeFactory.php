<?php

namespace Database\Factories;

use App\Models\Dosaje;
use App\Models\Hijo;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class DosajeFactory extends Factory
{
    protected $model = Dosaje::class;

    protected static $contador = 13; // Iniciar el contador en 13 para comenzar desde DOSAJ-0013

    public function definition()
    {
        return [
            'idDosaje' => 'DOSAJ-' . str_pad(static::$contador++, 4, '0', STR_PAD_LEFT), // Incrementar contador
            'idHijo' => Hijo::inRandomOrder()->value('idHijo'), // Seleccionar un ID de hijo aleatoriamente
            'idDoctor' => Doctor::inRandomOrder()->value('idDoctor'), // Seleccionar un ID de doctor aleatoriamente
            'idEstablecimiento' => $this->faker->randomElement(['ESTAB049', 'ESTAB047', 'ESTAB027']),
            'fecha_Dosaje' => Carbon::now()->subMonths(rand(0, 2)),
            'valorHemoglobina_Dosaje' => $this->faker->randomFloat(2, 10, 18.99),
            'nivelAnemia_Dosaje' => $this->faker->randomElement(['Normal', 'Leve', 'Moderado', 'Severo']),
            'peso_Dosaje' => $this->faker->randomFloat(2, 5, 30.99),
            'talla_Dosaje' => $this->faker->randomFloat(2, 50, 150.99),
            'edadMeses_Dosaje' => $this->faker->numberBetween(1, 60),
            'nivelHierro_Dosaje' => $this->faker->randomFloat(2, 10, 200.99),
            'estadoRecuperacion_Dosaje' => $this->faker->boolean,
            'fechaRecuperacionReal' => $this->faker->optional(0.5)->dateTimeBetween('-3 months', 'now'),
        ];
    }
}
