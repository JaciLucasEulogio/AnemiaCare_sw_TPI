<?php

namespace Database\Seeders;

use App\Models\Apoderado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ApoderadoSeeder extends Seeder
{
    public function run(): void
    {
        $apoderados = [
            [
                'idApoderado' => '77043114', //77043114
                'password' => Hash::make('12345678'),
                'nombre_Apoderado' => 'Josué',
                'apellido_Apoderado' => 'García Betancourt',
                'sexo_Apoderado' => 'M',
                'nombreSeguro_Apoderado' => 'Seguro Integral de Salud',
                'celular_Apoderado' => '964866527',
            ],
            [
                'idApoderado' => '77428439', //77428439
                'password' => Hash::make('12345678'),
                'nombre_Apoderado' => 'Milagros',
                'apellido_Apoderado' => 'Llantoy Balbin',
                'sexo_Apoderado' => 'F',
                'nombreSeguro_Apoderado' => 'Seguro Integral de Salud',
                'celular_Apoderado' => '918845782',
            ],
            [
                'idApoderado' => '72617519', //72617519
                'password' => Hash::make('12345678'),
                'nombre_Apoderado' => 'Jaci',
                'apellido_Apoderado' => 'Lucas Eulogio',
                'sexo_Apoderado' => 'F',
                'nombreSeguro_Apoderado' => NULL, // No tiene seguro de salud
                'celular_Apoderado' => '957460025',
            ]
        ];

        foreach ($apoderados as $apoderado) {
            Apoderado::create($apoderado);
        }

        // Genera 247 apoderados usando el factory
        Apoderado::factory(47)->create();
    }
}
