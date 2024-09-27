<?php

namespace Database\Factories;

use App\Models\Hijo;
use App\Models\PeriodoTratamiento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PeriodoTratamientoFactory extends Factory
{
    protected $model = PeriodoTratamiento::class;

    public function definition(): array
    {
        // Obtener todos los IDs de los hijos de la BD y seleccionar uno al azar
        $hijoId = Hijo::pluck('idHijo')->random(); 

        // Generar una fecha de diagnóstico aleatoria entre 1 y 5 años antes de la fecha actual
        $fechaDiagnostico = Carbon::now()->subYears(rand(1, 5))->toDateString();

        // Generar fecha de fin aleatoria o dejarla como NULL
        $fechaFin = rand(0, 1) ? Carbon::now()->subMonths(rand(1, 12))->toDateString() : null;

        return [
            // Generar ID de tratamiento único con 15 caracteres: PERIODTRAT-XXXX (XXXX en 4 dígitos)
            'idPeriodoTratamiento' => 'PERIODTRAT-' . Str::padLeft($this->faker->unique()->numberBetween(13, 1000), 4, '0'),
            'idHijo' => $hijoId,
            'fechaDiagnosticoAnemia_PeriodoTratamiento' => $fechaDiagnostico,
            'fechaFin_PeriodoTratamiento' => $fechaFin,
        ];
    }
}
