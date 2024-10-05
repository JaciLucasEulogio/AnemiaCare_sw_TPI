<?php

namespace Database\Factories;

use App\Models\Hijo;
use App\Models\Apoderado;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class HijoFactory extends Factory
{
    protected $model = Hijo::class;

    public function definition(): array
    {
        // Excluir los apoderados con los IDs específicos
        $excludedApoderados = ['77043114', '77428439', '72617519'];

        // Obtener un idApoderado aleatorio que no esté en la lista excluida
        $idApoderado = Apoderado::whereNotIn('idApoderado', $excludedApoderados)
                        ->inRandomOrder()
                        ->first()
                        ->idApoderado;

        return [
            'idHijo' => $this->faker->unique()->numerify('8#######'), // DNI de 8 dígitos
            'idApoderado' => $idApoderado, // Apoderado excluyendo los tres específicos
            'nombre_Hijo' => $this->faker->firstName(),
            'apellido_Hijo' => $this->faker->lastName(),
            // Fecha de nacimiento entre 0 y 36 meses atrás desde hoy
            'fechaNacimiento_Hijo' => Carbon::now()->subMonths(rand(6, 36))->format('Y-m-d'),
            'sexo_Hijo' => $this->faker->randomElement(['M', 'F']),
            'nombreSeguro_Hijo' => $this->faker->randomElement(['Seguro Integral de Salud', 'Seguro Social del Perú', NULL]),
        ];
    }
}

