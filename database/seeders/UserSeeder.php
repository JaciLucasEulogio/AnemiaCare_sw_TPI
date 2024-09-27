<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'idDoctor' => '12345678',
                'email' => 'doctormanuel@anemia.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'idDoctor' => '12121212', 
                'email' => 'doctorjavier@anemia.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'idDoctor' => '12312312', 
                'email' => 'doctoredmundo@anemia.com',
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach ($users as $users) {
            User::create($users);
        }
    }
}
