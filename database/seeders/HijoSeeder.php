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
                'fechaNacimiento_Hijo' => '2020-02-07', 
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => 'Seguro Social del Perú',
                'idEstablecimiento' => 'ESTAB049',
            ],
            [
                'idHijo' => '11111112',
                'idApoderado' => '77043114',
                'nombre_Hijo' => 'Hijo2_Josue',
                'apellido_Hijo' => 'García Betancourt',
                'fechaNacimiento_Hijo' => '2021-05-12', 
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => 'Seguro Social del Perú',
                'idEstablecimiento' => 'ESTAB049',
            ],
            [
                'idHijo' => '11111113',
                'idApoderado' => '77043114',
                'nombre_Hijo' => 'Hijo3_Josue',
                'apellido_Hijo' => 'García Betancourt',
                'fechaNacimiento_Hijo' => '2022-09-23', 
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => 'Seguro Social del Perú',
                'idEstablecimiento' => 'ESTAB049',
            ],
            [
                'idHijo' => '11111114',
                'idApoderado' => '77043114',
                'nombre_Hijo' => 'Hijo4_Josue',
                'apellido_Hijo' => 'García Betancourt',
                'fechaNacimiento_Hijo' => '2023-01-07', 
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => 'Seguro Social del Perú',
                'idEstablecimiento' => 'ESTAB049',
            ],

            // Hijos Milagros
            [
                'idHijo' => '22222221',
                'idApoderado' => '77428439',
                'nombre_Hijo' => 'Hijo1_Milagros',
                'apellido_Hijo' => 'LLantoy Balbin',
                'fechaNacimiento_Hijo' => '2019-09-29', 
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => 'Seguro Integral de Salud',
                'idEstablecimiento' => 'ESTAB047',
            ],
            [
                'idHijo' => '22222222',
                'idApoderado' => '77428439',
                'nombre_Hijo' => 'Hijo2_Milagros',
                'apellido_Hijo' => 'LLantoy Balbin',
                'fechaNacimiento_Hijo' => '2020-11-15', 
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => 'Seguro Integral de Salud',
                'idEstablecimiento' => 'ESTAB047',
            ],
            [
                'idHijo' => '22222223',
                'idApoderado' => '77428439',
                'nombre_Hijo' => 'Hijo3_Milagros',
                'apellido_Hijo' => 'LLantoy Balbin',
                'fechaNacimiento_Hijo' => '2021-09-29', 
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => 'Seguro Integral de Salud',
                'idEstablecimiento' => 'ESTAB047',
            ],
            [
                'idHijo' => '22222224',
                'idApoderado' => '77428439',
                'nombre_Hijo' => 'Hijo4_Milagros',
                'apellido_Hijo' => 'LLantoy Balbin',
                'fechaNacimiento_Hijo' => '2022-12-05', 
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => 'Seguro Integral de Salud',
                'idEstablecimiento' => 'ESTAB047',
            ],

            // Hijos Jaci
            [
                'idHijo' => '33333331',
                'idApoderado' => '72617519',
                'nombre_Hijo' => 'Hijo1_Jaci',
                'apellido_Hijo' => 'Lucas Eulogio',
                'fechaNacimiento_Hijo' => '2018-08-06', 
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => NULL,
                'idEstablecimiento' => 'ESTAB027',
            ],
            [
                'idHijo' => '33333332',
                'idApoderado' => '72617519',
                'nombre_Hijo' => 'Hijo2_Jaci',
                'apellido_Hijo' => 'Lucas Eulogio',
                'fechaNacimiento_Hijo' => '2019-05-12', 
                'sexo_Hijo' => 'M',
                'nombreSeguro_Hijo' => NULL,
                'idEstablecimiento' => 'ESTAB027',
            ],
            [
                'idHijo' => '33333333',
                'idApoderado' => '72617519',
                'nombre_Hijo' => 'Hijo3_Jaci',
                'apellido_Hijo' => 'Lucas Eulogio',
                'fechaNacimiento_Hijo' => '2020-11-23', 
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => NULL,
                'idEstablecimiento' => 'ESTAB027',
            ],
            [
                'idHijo' => '33333334',
                'idApoderado' => '72617519',
                'nombre_Hijo' => 'Hijo4_Jaci',
                'apellido_Hijo' => 'Lucas Eulogio',
                'fechaNacimiento_Hijo' => '2021-07-19', 
                'sexo_Hijo' => 'F',
                'nombreSeguro_Hijo' => NULL,
                'idEstablecimiento' => 'ESTAB027',
            ],
        ];

        foreach ($hijos as $hijo) {
            Hijo::create($hijo);
        }

        // Genera 988 hijos usando el factory para llegar al total de 1000
        Hijo::factory(988)->create();
    }
}
