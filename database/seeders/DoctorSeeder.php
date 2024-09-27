<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        $doctores = [
            [
                'idDoctor' => '12345678', 
                'nombre_Doctor' => 'Manuel',
                'apellido_Doctor' => 'Carrasco Gonzáles',
                'celular_Doctor' => '999999999',
            ],
            [
                'idDoctor' => '12121212', 
                'nombre_Doctor' => 'Javier',
                'apellido_Doctor' => 'Asto Rivera',
                'celular_Doctor' => '988888888',
            ],
            [
                'idDoctor' => '12312312', 
                'nombre_Doctor' => 'Edmundo',
                'apellido_Doctor' => 'Manrique Huamán',
                'celular_Doctor' => '977777777',
            ],
        ];

        foreach ($doctores as $doctor) {
            Doctor::create($doctor);
        }
    }
}
