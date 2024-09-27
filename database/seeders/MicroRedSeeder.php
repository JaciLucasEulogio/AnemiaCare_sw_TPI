<?php

namespace Database\Seeders;

use App\Models\MicroRed;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MicroRedSeeder extends Seeder
{
    public function run(): void
    {   
        $microRedes =[
            // HUANC-Red01 (Huancayo-Valle del Mantaro)
            ['idMicroRed' => 'Micro01', 'nombreMicroRed' => 'Chilca', 'idProvinciaRed' => 'HUANC-Red01'],
            ['idMicroRed' => 'Micro02', 'nombreMicroRed' => 'Comas', 'idProvinciaRed' => 'HUANC-Red01'],
            ['idMicroRed' => 'Micro03', 'nombreMicroRed' => 'Concepción', 'idProvinciaRed' => 'HUANC-Red01'],
            ['idMicroRed' => 'Micro04', 'nombreMicroRed' => 'El Tambo', 'idProvinciaRed' => 'HUANC-Red01'],
            ['idMicroRed' => 'Micro05', 'nombreMicroRed' => 'La Libertad', 'idProvinciaRed' => 'HUANC-Red01'],

            // HUANC-Red02 (Huancayo-Red de salud de Chupaca)
            ['idMicroRed' => 'Micro06', 'nombreMicroRed' => 'Valle del Canipaco', 'idProvinciaRed' => 'HUANC-Red01'],

            // CONC-Red01 (Concepción-Valle del Mantaro)
            ['idMicroRed' => 'Micro07', 'nombreMicroRed' => 'Comas', 'idProvinciaRed' => 'CONC-Red01'],
            ['idMicroRed' => 'Micro08', 'nombreMicroRed' => 'Concepción', 'idProvinciaRed' => 'CONC-Red01'],

            // CONC-Red02 (Concepción-Red de salud de Chupaca)
            ['idMicroRed' => 'Micro09', 'nombreMicroRed' => 'Chaquicocha', 'idProvinciaRed' => 'CONC-Red02'],
            ['idMicroRed' => 'Micro10', 'nombreMicroRed' => 'Huachac', 'idProvinciaRed' => 'CONC-Red02'],

            // CHU-Red02 (Chupaca-Red de salud de Chupaca)
            ['idMicroRed' => 'Micro11', 'nombreMicroRed' => 'Chupaca', 'idProvinciaRed' => 'CHU-Red02'],
            ['idMicroRed' => 'Micro12', 'nombreMicroRed' => 'Huachac', 'idProvinciaRed' => 'CHU-Red02'],
            ['idMicroRed' => 'Micro13', 'nombreMicroRed' => 'Jarpa', 'idProvinciaRed' => 'CHU-Red02'],

            // CHAN-Red03 (Chanchamayo-Chanchamayo)
            ['idMicroRed' => 'Micro14', 'nombreMicroRed' => 'Perene', 'idProvinciaRed' => 'CHAN-Red03'],
            ['idMicroRed' => 'Micro15', 'nombreMicroRed' => 'San Luis de Shuaro ', 'idProvinciaRed' => 'CHAN-Red03'],
            ['idMicroRed' => 'Micro16', 'nombreMicroRed' => 'San Ramón', 'idProvinciaRed' => 'CHAN-Red03'],
            ['idMicroRed' => 'Micro17', 'nombreMicroRed' => 'No pertenece a ninguna microred', 'idProvinciaRed' => 'CHAN-Red03'],

            // CHAN-Red04 (Chanchamayo-Pichanaki)
            ['idMicroRed' => 'Micro18', 'nombreMicroRed' => 'Ciudad Satelite', 'idProvinciaRed' => 'CHAN-Red04'],
            ['idMicroRed' => 'Micro19', 'nombreMicroRed' => 'Cuyani', 'idProvinciaRed' => 'CHAN-Red04'],
            ['idMicroRed' => 'Micro20', 'nombreMicroRed' => 'Huachiriki', 'idProvinciaRed' => 'CHAN-Red04'],
            ['idMicroRed' => 'Micro21', 'nombreMicroRed' => 'Las palmas', 'idProvinciaRed' => 'CHAN-Red04'],
            ['idMicroRed' => 'Micro22', 'nombreMicroRed' => 'No pertenece a ninguna microred', 'idProvinciaRed' => 'CHAN-Red04'],

            // JAU-Red03 (Jauja-Chanchamayo)
            ['idMicroRed' => 'Micro23', 'nombreMicroRed' => 'San Ramón', 'idProvinciaRed' => 'JAU-Red03'],

            // JAU-Red05 (Jauja-Jauja)
            ['idMicroRed' => 'Micro24', 'nombreMicroRed' => 'Hatun Xauxa', 'idProvinciaRed' => 'JAU-Red05'],
            ['idMicroRed' => 'Micro25', 'nombreMicroRed' => 'Margen Derecha', 'idProvinciaRed' => 'JAU-Red05'],
            ['idMicroRed' => 'Micro26', 'nombreMicroRed' => 'Margen Izquierda', 'idProvinciaRed' => 'JAU-Red05'],
            ['idMicroRed' => 'Micro27', 'nombreMicroRed' => 'Quebrada del Mantaro', 'idProvinciaRed' => 'JAU-Red05'],
            ['idMicroRed' => 'Micro28', 'nombreMicroRed' => 'Valle Azul', 'idProvinciaRed' => 'JAU-Red05'],
            ['idMicroRed' => 'Micro29', 'nombreMicroRed' => 'Valle de Yacus', 'idProvinciaRed' => 'JAU-Red05'],
            ['idMicroRed' => 'Micro30', 'nombreMicroRed' => 'Valle de Yanamarca', 'idProvinciaRed' => 'JAU-Red05'],
            ['idMicroRed' => 'Micro31', 'nombreMicroRed' => 'No pertenece a ninguna microred', 'idProvinciaRed' => 'JAU-Red05'],
            
            // JUN-Red03 (Junín-Chanchamayo)
            ['idMicroRed' => 'Micro32', 'nombreMicroRed' => 'San Luis de Shuaro', 'idProvinciaRed' => 'JUN-Red03'],

            // JUN-Red06 (Junín-Junín)
            ['idMicroRed' => 'Micro33', 'nombreMicroRed' => 'Carhuamayo', 'idProvinciaRed' => 'JUN-Red06'],
            ['idMicroRed' => 'Micro34', 'nombreMicroRed' => 'Junín', 'idProvinciaRed' => 'JUN-Red06'],
            ['idMicroRed' => 'Micro35', 'nombreMicroRed' => 'Ulcumayo', 'idProvinciaRed' => 'JUN-Red06'],
            ['idMicroRed' => 'Micro36', 'nombreMicroRed' => 'No pertenece a ninguna microred', 'idProvinciaRed' => 'JUN-Red06'],

            // YAU-Red05 (Yauli-Jauja)
            ['idMicroRed' => 'Micro37', 'nombreMicroRed' => 'Yauli-Oroya', 'idProvinciaRed' => 'YAU-Red05'],

            // YAU-Red06 (Yauli-Junín)
            ['idMicroRed' => 'Micro38', 'nombreMicroRed' => 'Junín', 'idProvinciaRed' => 'YAU-Red06'],

            // SAT-Red07 (Satipo-San Martín de Pangoa)
            ['idMicroRed' => 'Micro39', 'nombreMicroRed' => 'Cubantia', 'idProvinciaRed' => 'SAT-Red07'],
            ['idMicroRed' => 'Micro40', 'nombreMicroRed' => 'San Antonio de Sonomoro', 'idProvinciaRed' => 'SAT-Red07'],
            ['idMicroRed' => 'Micro41', 'nombreMicroRed' => 'San Ramón de Pangoa', 'idProvinciaRed' => 'SAT-Red07'],
            ['idMicroRed' => 'Micro42', 'nombreMicroRed' => 'No pertenece a ninguna microred', 'idProvinciaRed' => 'SAT-Red07'],

            // SAT-Red08 (Satipo-Satipo)
            ['idMicroRed' => 'Micro43', 'nombreMicroRed' => 'Mazamari', 'idProvinciaRed' => 'SAT-Red08'],
            ['idMicroRed' => 'Micro44', 'nombreMicroRed' => 'Poyeni', 'idProvinciaRed' => 'SAT-Red08'],
            ['idMicroRed' => 'Micro45', 'nombreMicroRed' => 'Puerto Ocopa', 'idProvinciaRed' => 'SAT-Red08'],
            ['idMicroRed' => 'Micro46', 'nombreMicroRed' => 'Río Negro-Satipo', 'idProvinciaRed' => 'SAT-Red08'],
            ['idMicroRed' => 'Micro47', 'nombreMicroRed' => 'Valle Esmeralda', 'idProvinciaRed' => 'SAT-Red08'],
            ['idMicroRed' => 'Micro48', 'nombreMicroRed' => 'No pertenece a ninguna microred', 'idProvinciaRed' => 'SAT-Red08'],

            // TAR-Red06 (Tarma-Junín)
            ['idMicroRed' => 'Micro49', 'nombreMicroRed' => 'Junín', 'idProvinciaRed' => 'TAR-Red06'],

            // TAR-Red09 (Tarma-Tarma)
            ['idMicroRed' => 'Micro50', 'nombreMicroRed' => 'Acobamba', 'idProvinciaRed' => 'TAR-Red09'],
            ['idMicroRed' => 'Micro51', 'nombreMicroRed' => 'Huasahuasi', 'idProvinciaRed' => 'TAR-Red09'],
            ['idMicroRed' => 'Micro52', 'nombreMicroRed' => 'Palca', 'idProvinciaRed' => 'TAR-Red09'],
            ['idMicroRed' => 'Micro53', 'nombreMicroRed' => 'Tarma', 'idProvinciaRed' => 'TAR-Red09'],
            ['idMicroRed' => 'Micro54', 'nombreMicroRed' => 'No pertenece a ninguna microred', 'idProvinciaRed' => 'TAR-Red09'],
        ];

        foreach ($microRedes as $microred) {
            MicroRed::create($microred);
        }
    }
}
