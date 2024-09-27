<?php

namespace Database\Seeders;

use App\Models\Red;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RedSeeder extends Seeder
{
    public function run(): void
    {
        $redes = [
            // Huancayo y Concepción
            ['idRed' => 'Red01', 'nombreRed' => 'Valle del Mantaro'],
            
            // Huancayo, Chupaca y Concepción
            ['idRed' => 'Red02', 'nombreRed' => 'Red de Salud de Chupaca'],

            // Chanchamayo, Jauja, y Junín
            ['idRed' => 'Red03', 'nombreRed' => 'Chanchamayo'],

            // Chanchamayo
            ['idRed' => 'Red04', 'nombreRed' => 'Pichanaki'],

            // Jauja y Yauli
            ['idRed' => 'Red05', 'nombreRed' => 'Jauja'],

            // Junín, Tarma y Yauli
            ['idRed' => 'Red06', 'nombreRed' => 'Junín'],
            
            // Satipo
            ['idRed' => 'Red07', 'nombreRed' => 'San Martín de Pangoa'],
            ['idRed' => 'Red08', 'nombreRed' => 'Satipo'],

            // Tarma
            ['idRed' => 'Red09', 'nombreRed' => 'Tarma'],
        ];

        foreach ($redes as $red) {
            Red::create($red);
        }
    }
}
