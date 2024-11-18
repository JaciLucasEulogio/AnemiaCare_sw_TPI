<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {   
        $startTime = microtime(true); // Marca el inicio del tiempo
        $this->call(DoctorSeeder::class); 
        $this->call(UserSeeder::class); //Representa a la cuenta de los doctores
        $this->call(ProvinciaSeeder::class);
        $this->call(RedSeeder::class);
        $this->call(ProvinciaRedSeeder::class);
        $this->call(MicroRedSeeder::class);
        $this->call(DistritoSeeder::class);
        $this->call(EstablecimientoSeeder::class);
        $this->call(ApoderadoSeeder::class);
        $this->call(HijoSeeder::class);
        $this->call(PeriodoTratamientoSeeder::class);
        //$this->call(DosajeSeeder::class);
        //$this->call(PrediccionSeeder::class);
        $endTime = microtime(true); // Marca el fin del tiempo
        $totalTime = $endTime - $startTime; // Calcula el tiempo total
        echo "Tiempo total seeders: " . round($totalTime, 2) . " seg\n"; // Muestra el tiempo total en ms
    }
}
