<?php

namespace Database\Seeders;

use App\Models\Hijo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HijoSeeder extends Seeder
{
    public function run(): void
    {
        $hijos = [
            // Hijos Josué
            [
                'idHijo' => '11111111',
                'idApoderado' => '77043114',
                'nombre_Hijo' => 'Hijo1_Josue',
                'apellido_Hijo' => 'García Betancourt',
                'fechaNacimiento_Hijo' => '2023-04-01', // Corregida
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => 'Seguro Social del Perú',
                'file_uri' => 'childrenPhotos/hijo1Josue.jpeg',
            ],
            [
                'idHijo' => '11111112',
                'idApoderado' => '77043114',
                'nombre_Hijo' => 'Hijo2_Josue',
                'apellido_Hijo' => 'García Betancourt',
                'fechaNacimiento_Hijo' => '2023-03-01', // Corregida
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => 'Seguro Social del Perú',
                'file_uri' => 'childrenPhotos/hijo2Josue.jpg',
            ],
            [
                'idHijo' => '11111113',
                'idApoderado' => '77043114',
                'nombre_Hijo' => 'Hijo3_Josue',
                'apellido_Hijo' => 'García Betancourt',
                'fechaNacimiento_Hijo' => '2024-03-05', // Corregida
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => 'Seguro Social del Perú',
                'file_uri' => 'childrenPhotos/hijo3Josue.jpg',
            ],
            [
                'idHijo' => '11111114',
                'idApoderado' => '77043114',
                'nombre_Hijo' => 'Hijo4_Josue',
                'apellido_Hijo' => 'García Betancourt',
                'fechaNacimiento_Hijo' => '2024-01-06', // Corregida
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => 'Seguro Social del Perú',
            ],

            // Hijos Milagros
            [
                'idHijo' => '22222221',
                'idApoderado' => '77428439',
                'nombre_Hijo' => 'Hijo1_Milagros',
                'apellido_Hijo' => 'LLantoy Balbin',
                'fechaNacimiento_Hijo' => '2023-11-06', // Corregida
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => 'Seguro Integral de Salud',
            ],
            [
                'idHijo' => '22222222',
                'idApoderado' => '77428439',
                'nombre_Hijo' => 'Hijo2_Milagros',
                'apellido_Hijo' => 'LLantoy Balbin',
                'fechaNacimiento_Hijo' => '2023-10-07', // Corregida
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => 'Seguro Integral de Salud',
            ],
            [
                'idHijo' => '22222223',
                'idApoderado' => '77428439',
                'nombre_Hijo' => 'Hijo3_Milagros',
                'apellido_Hijo' => 'LLantoy Balbin',
                'fechaNacimiento_Hijo' => '2023-09-07', // Corregida
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => 'Seguro Integral de Salud',
            ],
            [
                'idHijo' => '22222224',
                'idApoderado' => '77428439',
                'nombre_Hijo' => 'Hijo4_Milagros',
                'apellido_Hijo' => 'LLantoy Balbin',
                'fechaNacimiento_Hijo' => '2023-08-08', // Corregida
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => 'Seguro Integral de Salud',
            ],

            // Hijos Jaci
            [
                'idHijo' => '33333331',
                'idApoderado' => '72617519',
                'nombre_Hijo' => 'Hijo1_Jaci',
                'apellido_Hijo' => 'Lucas Eulogio',
                'fechaNacimiento_Hijo' => '2024-02-07', // Sin cambio
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => NULL,
            ],
            [
                'idHijo' => '33333332',
                'idApoderado' => '72617519',
                'nombre_Hijo' => 'Hijo2_Jaci',
                'apellido_Hijo' => 'Lucas Eulogio',
                'fechaNacimiento_Hijo' => '2023-12-08', // Corregida
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => NULL,
            ],
            [
                'idHijo' => '33333333',
                'idApoderado' => '72617519',
                'nombre_Hijo' => 'Hijo3_Jaci',
                'apellido_Hijo' => 'Lucas Eulogio',
                'fechaNacimiento_Hijo' => '2023-11-09', // Corregida
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => NULL,
            ],
            [
                'idHijo' => '33333334',
                'idApoderado' => '72617519',
                'nombre_Hijo' => 'Hijo4_Jaci',
                'apellido_Hijo' => 'Lucas Eulogio',
                'fechaNacimiento_Hijo' => '2023-10-09', // Corregida
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => NULL,
            ],
        ];

        foreach ($hijos as $hijo) {
            Hijo::create($hijo);
        }

        // Genera 988 hijos usando el factory para llegar al total de 1000
        Hijo::factory(98)->create();
    }
}
