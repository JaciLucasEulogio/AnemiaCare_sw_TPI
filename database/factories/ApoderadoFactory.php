<?php

namespace Database\Factories;

use App\Models\Apoderado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ApoderadoFactory extends Factory
{
    protected $model = Apoderado::class;

    public function definition(): array
    {
        return [
            'idApoderado' => $this->faker->unique()->numerify('8#######'), // DNI de 8 dígitos
            'password' => Hash::make('12345678'), // Contraseña genérica para todos
            'nombre_Apoderado' => $this->faker->firstName(),
            'apellido_Apoderado' => $this->faker->lastName(),
            'sexo_Apoderado' => $this->faker->randomElement(['M', 'F']),
            'nombreSeguro_Apoderado' => $this->faker->randomElement([
                'Seguro Integral de Salud', 
                'SaludPE', 
                'Particular', 
                NULL
            ]),
            'celular_Apoderado' => $this->faker->unique()->numerify('9########'), // Celular de 9 dígitos
        ];
    }
}
