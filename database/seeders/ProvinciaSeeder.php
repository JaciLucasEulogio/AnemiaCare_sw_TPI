<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    public function run(): void
    {
        $provincias = [
            ['idProvincia' => 'HUANC', 'nombreProvincia' => 'Huancayo', 'alturaProvincia' => 3245],
            ['idProvincia' => 'CONC', 'nombreProvincia' => 'Concepción', 'alturaProvincia' => 3286],
            ['idProvincia' => 'CHAN', 'nombreProvincia' => 'Chanchamayo', 'alturaProvincia' => 775],
            ['idProvincia' => 'JAU', 'nombreProvincia' => 'Jauja', 'alturaProvincia' => 3389],
            ['idProvincia' => 'JUN', 'nombreProvincia' => 'Junín', 'alturaProvincia' => 4113],
            ['idProvincia' => 'SAT', 'nombreProvincia' => 'Satipo', 'alturaProvincia' => 628],
            ['idProvincia' => 'TAR', 'nombreProvincia' => 'Tarma', 'alturaProvincia' => 3059],
            ['idProvincia' => 'YAU', 'nombreProvincia' => 'Yauli', 'alturaProvincia' => 3725],
            ['idProvincia' => 'CHU', 'nombreProvincia' => 'Chupaca', 'alturaProvincia' => 3281],
        ];

        foreach ($provincias as $provincia) {
            Provincia::create($provincia);
        }
    }
}
