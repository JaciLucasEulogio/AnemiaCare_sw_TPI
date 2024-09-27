<?php

namespace Database\Seeders;

use App\Models\Provincia_Red;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinciaRedSeeder extends Seeder
{
    public function run(): void
    {
        $provincias_redes = [
            // Red01
            ['idProvinciaRed' => 'HUANC-Red01', 'idProvincia' => 'HUANC', 'idRed' => 'Red01'],
            ['idProvinciaRed' => 'CONC-Red01', 'idProvincia' => 'CONC', 'idRed' => 'Red01'],

            // Red02
            ['idProvinciaRed' => 'HUANC-Red02', 'idProvincia' => 'HUANC', 'idRed' => 'Red02'],
            ['idProvinciaRed' => 'CHU-Red02', 'idProvincia' => 'CHU', 'idRed' => 'Red02'],
            ['idProvinciaRed' => 'CONC-Red02', 'idProvincia' => 'CONC', 'idRed' => 'Red02'],

            // Red03
            ['idProvinciaRed' => 'CHAN-Red03', 'idProvincia' => 'CHAN', 'idRed' => 'Red03'],
            ['idProvinciaRed' => 'JAU-Red03', 'idProvincia' => 'JAU', 'idRed' => 'Red03'],
            ['idProvinciaRed' => 'JUN-Red03', 'idProvincia' => 'JUN', 'idRed' => 'Red03'],

            // Red04
            ['idProvinciaRed' => 'CHAN-Red04', 'idProvincia' => 'CHAN', 'idRed' => 'Red04'],

            // Red05
            ['idProvinciaRed' => 'JAU-Red05', 'idProvincia' => 'JAU', 'idRed' => 'Red05'],
            ['idProvinciaRed' => 'YAU-Red05', 'idProvincia' => 'YAU', 'idRed' => 'Red05'],

            // Red06
            ['idProvinciaRed' => 'JUN-Red06', 'idProvincia' => 'JUN', 'idRed' => 'Red06'],
            ['idProvinciaRed' => 'TAR-Red06', 'idProvincia' => 'TAR', 'idRed' => 'Red06'],
            ['idProvinciaRed' => 'YAU-Red06', 'idProvincia' => 'YAU', 'idRed' => 'Red06'],

            // Red07
            ['idProvinciaRed' => 'SAT-Red07', 'idProvincia' => 'SAT', 'idRed' => 'Red07'],

            // Red08
            ['idProvinciaRed' => 'SAT-Red08', 'idProvincia' => 'SAT', 'idRed' => 'Red08'],

            // Red09
            ['idProvinciaRed' => 'TAR-Red09', 'idProvincia' => 'TAR', 'idRed' => 'Red09'],
        ];

        foreach ($provincias_redes as $provinRed) {
            Provincia_Red::create($provinRed);
        }
    }
}
