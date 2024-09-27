<?php

namespace Database\Seeders;

use App\Models\Distrito;
use Illuminate\Database\Seeder;

class DistritoSeeder extends Seeder
{
    public function run(): void
    {
        $distritos = [
            // Micro01 (Chilca Huancayo-Valle del Mantaro)
            ['idDistrito' => 'Distr001', 'nombreDistrito' => 'Chilca', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr002', 'nombreDistrito' => 'Chupuro', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr003', 'nombreDistrito' => 'Colca', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr004', 'nombreDistrito' => 'Cullhuas', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr005', 'nombreDistrito' => 'Huacrapuquio', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr006', 'nombreDistrito' => 'Huancán', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr007', 'nombreDistrito' => 'Huayucachi', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr008', 'nombreDistrito' => 'Pucará', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr009', 'nombreDistrito' => 'Sapallanga', 'idMicroRed' => 'Micro01'],
            ['idDistrito' => 'Distr010', 'nombreDistrito' => 'Viques', 'idMicroRed' => 'Micro01'],
            
            // Micro02 (Comas Huancayo-Valle del Mantaro)
            ['idDistrito' => 'Distr011', 'nombreDistrito' => 'Santo Domingo de Acobamba', 'idMicroRed' => 'Micro02'],

            // Micro03 (Concepción Huancayo-Valle del Mantaro)
            ['idDistrito' => 'Distr012', 'nombreDistrito' => 'Ingenio', 'idMicroRed' => 'Micro03'],
            ['idDistrito' => 'Distr013', 'nombreDistrito' => 'Quichuay', 'idMicroRed' => 'Micro03'],

            // Micro04 (El Tambo Huancayo-Valle del Mantaro)
            ['idDistrito' => 'Distr014', 'nombreDistrito' => 'El Tambo', 'idMicroRed' => 'Micro04'],
            ['idDistrito' => 'Distr015', 'nombreDistrito' => 'Hualhuas', 'idMicroRed' => 'Micro04'],
            ['idDistrito' => 'Distr016', 'nombreDistrito' => 'Pilcomayo', 'idMicroRed' => 'Micro04'],
            ['idDistrito' => 'Distr017', 'nombreDistrito' => 'Quilcas', 'idMicroRed' => 'Micro04'],
            ['idDistrito' => 'Distr018', 'nombreDistrito' => 'San Agustín', 'idMicroRed' => 'Micro04'],
            ['idDistrito' => 'Distr019', 'nombreDistrito' => 'San Jerónimo de Tunán', 'idMicroRed' => 'Micro04'],
            ['idDistrito' => 'Distr020', 'nombreDistrito' => 'Saño', 'idMicroRed' => 'Micro04'],
            ['idDistrito' => 'Distr021', 'nombreDistrito' => 'Sicaya', 'idMicroRed' => 'Micro04'],

            // Micro05 (La Libertad Huancayo-Valle del Mantaro)
            ['idDistrito' => 'Distr022', 'nombreDistrito' => 'Huancayo', 'idMicroRed' => 'Micro05'],
            ['idDistrito' => 'Distr023', 'nombreDistrito' => 'Pariahuanca', 'idMicroRed' => 'Micro05'],

            // Micro06 (Valle del Canipaco Huancayo-Red de salud de Chupaca)
            ['idDistrito' => 'Distr024', 'nombreDistrito' => 'Chacapampa', 'idMicroRed' => 'Micro06'],
            ['idDistrito' => 'Distr025', 'nombreDistrito' => 'Chicche', 'idMicroRed' => 'Micro06'],
            ['idDistrito' => 'Distr026', 'nombreDistrito' => 'Chongos Alto', 'idMicroRed' => 'Micro06'],
            ['idDistrito' => 'Distr027', 'nombreDistrito' => 'Colca', 'idMicroRed' => 'Micro06'],
            ['idDistrito' => 'Distr028', 'nombreDistrito' => 'Huasicancha', 'idMicroRed' => 'Micro06'],

            // Micro07 (Comas Concepción-Valle del Mantaro)
            ['idDistrito' => 'Distr029', 'nombreDistrito' => 'Andamarca', 'idMicroRed' => 'Micro07'],
            ['idDistrito' => 'Distr030', 'nombreDistrito' => 'Cochas', 'idMicroRed' => 'Micro07'],
            ['idDistrito' => 'Distr031', 'nombreDistrito' => 'Comas', 'idMicroRed' => 'Micro07'],
            ['idDistrito' => 'Distr032', 'nombreDistrito' => 'Mariscal Castilla', 'idMicroRed' => 'Micro07'],
            ['idDistrito' => 'Distr033', 'nombreDistrito' => 'Santo Domingo de Acobamba', 'idMicroRed' => 'Micro07'],

            // Micro08 (Concepción Concepción-Valle del Mantaro)
            ['idDistrito' => 'Distr034', 'nombreDistrito' => 'Aco', 'idMicroRed' => 'Micro08'],
            ['idDistrito' => 'Distr035', 'nombreDistrito' => 'Concepción', 'idMicroRed' => 'Micro08'],
            ['idDistrito' => 'Distr036', 'nombreDistrito' => 'Heroínas Toledo', 'idMicroRed' => 'Micro08'],
            ['idDistrito' => 'Distr037', 'nombreDistrito' => 'Matahuasi', 'idMicroRed' => 'Micro08'],
            ['idDistrito' => 'Distr038', 'nombreDistrito' => 'Mito', 'idMicroRed' => 'Micro08'],
            ['idDistrito' => 'Distr039', 'nombreDistrito' => 'Nueve de Julio', 'idMicroRed' => 'Micro08'],
            ['idDistrito' => 'Distr040', 'nombreDistrito' => 'Orcotuna', 'idMicroRed' => 'Micro08'],
            ['idDistrito' => 'Distr041', 'nombreDistrito' => 'Santa Rosa de Ocopa', 'idMicroRed' => 'Micro08'],

            // Micro09 (Chaquicocha Concepción-Red de salud de Chupaca)
            ['idDistrito' => 'Distr042', 'nombreDistrito' => 'San José de Quero', 'idMicroRed' => 'Micro09'],

            // Micro10 (Huachac Concepción-Red de salud de Chupaca)
            ['idDistrito' => 'Distr043', 'nombreDistrito' => 'Chambara', 'idMicroRed' => 'Micro10'],
            ['idDistrito' => 'Distr044', 'nombreDistrito' => 'Manzanares', 'idMicroRed' => 'Micro10'],

            // Micro11 (Chupaca Chupaca-Red de salud de Chupaca)
            ['idDistrito' => 'Distr045', 'nombreDistrito' => 'Ahuac', 'idMicroRed' => 'Micro11'],
            ['idDistrito' => 'Distr046', 'nombreDistrito' => 'Chongos Bajo', 'idMicroRed' => 'Micro11'],
            ['idDistrito' => 'Distr047', 'nombreDistrito' => 'Chupaca', 'idMicroRed' => 'Micro11'],
            ['idDistrito' => 'Distr048', 'nombreDistrito' => 'Huamancaca Chico', 'idMicroRed' => 'Micro11'],
            ['idDistrito' => 'Distr049', 'nombreDistrito' => 'San Juan de Iscos', 'idMicroRed' => 'Micro11'],
            ['idDistrito' => 'Distr050', 'nombreDistrito' => 'Tres de diciembre', 'idMicroRed' => 'Micro11'],

            // Micro12 (Huachac Chupaca-Red de salud de Chupaca)
            ['idDistrito' => 'Distr051', 'nombreDistrito' => 'Huachac', 'idMicroRed' => 'Micro12'],

            // Micro13 (Jarpa Chupaca-Red de salud de Chupaca)
            ['idDistrito' => 'Distr052', 'nombreDistrito' => 'San Juan de Jarpa', 'idMicroRed' => 'Micro13'],
            ['idDistrito' => 'Distr053', 'nombreDistrito' => 'Yanacancha', 'idMicroRed' => 'Micro13'],

            // Micro14 (Perene Chanchamayo-Chanchamayo)
            ['idDistrito' => 'Distr054', 'nombreDistrito' => 'Perene', 'idMicroRed' => 'Micro14'],
            ['idDistrito' => 'Distr055', 'nombreDistrito' => 'San Luis de Shuaro', 'idMicroRed' => 'Micro14'],

            // Micro15 (San Luis de Shuaro Chanchamayo-Chanchamayo)
            ['idDistrito' => 'Distr056', 'nombreDistrito' => 'Chanchamayo', 'idMicroRed' => 'Micro15'],
            ['idDistrito' => 'Distr057', 'nombreDistrito' => 'San Luis de Shuaro', 'idMicroRed' => 'Micro15'],

            // Micro16 (San Ramón Chanchamayo-Chanchamayo)
            ['idDistrito' => 'Distr058', 'nombreDistrito' => 'San ramón', 'idMicroRed' => 'Micro16'],
            ['idDistrito' => 'Distr059', 'nombreDistrito' => 'Vitoc', 'idMicroRed' => 'Micro16'],

            // Micro17 (No pertenece a ninguna microred Chanchamayo-Chanchamayo)
            ['idDistrito' => 'Distr060', 'nombreDistrito' => 'Chanchamayo', 'idMicroRed' => 'Micro17'],

            // Micro19 (Cuyani Chanchamayo-Pichanaki)
            ['idDistrito' => 'Distr061', 'nombreDistrito' => 'Pichanaki', 'idMicroRed' => 'Micro19'],

            // Micro20 (Huachiriki Chanchamayo-Pichanaki)
            ['idDistrito' => 'Distr062', 'nombreDistrito' => 'Pichanaki', 'idMicroRed' => 'Micro20'],

            // Micro21 (Las palmas Chanchamayo-Pichanaki)
            ['idDistrito' => 'Distr063', 'nombreDistrito' => 'Pichanaki', 'idMicroRed' => 'Micro21'],

            // Micro22 (No pertenece a ninguna microred Chanchamayo-Pichanaki)
            ['idDistrito' => 'Distr064', 'nombreDistrito' => 'Pichanaki', 'idMicroRed' => 'Micro22'],

            // Micro23 (San Ramón Jauja-Chanchamayo)
            ['idDistrito' => 'Distr065', 'nombreDistrito' => 'Masma', 'idMicroRed' => 'Micro23'],
            ['idDistrito' => 'Distr066', 'nombreDistrito' => 'Monobamba', 'idMicroRed' => 'Micro23'],

            // Micro24 (Hatun Xauxa Jauja-Jauja)
            ['idDistrito' => 'Distr067', 'nombreDistrito' => 'Ataura', 'idMicroRed' => 'Micro24'],
            ['idDistrito' => 'Distr068', 'nombreDistrito' => 'Huertas', 'idMicroRed' => 'Micro24'],
            ['idDistrito' => 'Distr069', 'nombreDistrito' => 'Paca', 'idMicroRed' => 'Micro24'],
            ['idDistrito' => 'Distr070', 'nombreDistrito' => 'Paccha', 'idMicroRed' => 'Micro24'],
            ['idDistrito' => 'Distr071', 'nombreDistrito' => 'Sausa', 'idMicroRed' => 'Micro24'],
            ['idDistrito' => 'Distr072', 'nombreDistrito' => 'Yauyos', 'idMicroRed' => 'Micro24'],

            // Micro25 (Margen Derecha Jauja-Jauja)
            ['idDistrito' => 'Distr073', 'nombreDistrito' => 'Huaripampa', 'idMicroRed' => 'Micro25'],
            ['idDistrito' => 'Distr074', 'nombreDistrito' => 'Leonor Ordoñez', 'idMicroRed' => 'Micro25'],
            ['idDistrito' => 'Distr075', 'nombreDistrito' => 'Muqui', 'idMicroRed' => 'Micro25'],
            ['idDistrito' => 'Distr076', 'nombreDistrito' => 'Muquiyauyo', 'idMicroRed' => 'Micro25'],
            ['idDistrito' => 'Distr077', 'nombreDistrito' => 'Sincos', 'idMicroRed' => 'Micro25'],

            // Micro26 (Margen Izquierda Jauja-Jauja)
            ['idDistrito' => 'Distr078', 'nombreDistrito' => 'Apata', 'idMicroRed' => 'Micro26'],
            ['idDistrito' => 'Distr079', 'nombreDistrito' => 'El Mantaro', 'idMicroRed' => 'Micro26'],
            ['idDistrito' => 'Distr080', 'nombreDistrito' => 'Huamali', 'idMicroRed' => 'Micro26'],
            ['idDistrito' => 'Distr081', 'nombreDistrito' => 'San Lorenzo', 'idMicroRed' => 'Micro26'],

            // Micro27 (Quebrada del Mantaro Jauja-Jauja)
            ['idDistrito' => 'Distr082', 'nombreDistrito' => 'Canchayllo', 'idMicroRed' => 'Micro27'],
            ['idDistrito' => 'Distr083', 'nombreDistrito' => 'Curicaca', 'idMicroRed' => 'Micro27'],
            ['idDistrito' => 'Distr084', 'nombreDistrito' => 'Janjaillo', 'idMicroRed' => 'Micro27'],
            ['idDistrito' => 'Distr085', 'nombreDistrito' => 'Llocllapampa', 'idMicroRed' => 'Micro27'],
            ['idDistrito' => 'Distr086', 'nombreDistrito' => 'Parco', 'idMicroRed' => 'Micro27'],

            // Micro28 (Valle Azul Jauja-Jauja)
            ['idDistrito' => 'Distr087', 'nombreDistrito' => 'Julcan', 'idMicroRed' => 'Micro28'],
            ['idDistrito' => 'Distr088', 'nombreDistrito' => 'Masma', 'idMicroRed' => 'Micro28'],
            ['idDistrito' => 'Distr089', 'nombreDistrito' => 'Masma Chicche', 'idMicroRed' => 'Micro28'],
            ['idDistrito' => 'Distr090', 'nombreDistrito' => 'Molinos', 'idMicroRed' => 'Micro28'],

            // Micro29 (Valle de Yacus Jauja-Jauja)
            ['idDistrito' => 'Distr091', 'nombreDistrito' => 'Pancan', 'idMicroRed' => 'Micro29'],
            ['idDistrito' => 'Distr092', 'nombreDistrito' => 'Ricran', 'idMicroRed' => 'Micro29'],
            ['idDistrito' => 'Distr093', 'nombreDistrito' => 'San Pedro de Chunan', 'idMicroRed' => 'Micro29'],
            ['idDistrito' => 'Distr094', 'nombreDistrito' => 'Yauli', 'idMicroRed' => 'Micro29'],

            // Micro30 (Valle de Yanamarca Jauja-Jauja)
            ['idDistrito' => 'Distr095', 'nombreDistrito' => 'Acolla', 'idMicroRed' => 'Micro30'],
            ['idDistrito' => 'Distr096', 'nombreDistrito' => 'Marco', 'idMicroRed' => 'Micro30'],
            ['idDistrito' => 'Distr097', 'nombreDistrito' => 'Pomacancha', 'idMicroRed' => 'Micro30'],
            ['idDistrito' => 'Distr098', 'nombreDistrito' => 'Tunan Marca', 'idMicroRed' => 'Micro30'],

            // Micro31 (No pertenece a ninguna microred Jauja-Jauja)
            ['idDistrito' => 'Distr099', 'nombreDistrito' => 'Jauja', 'idMicroRed' => 'Micro31'],
            ['idDistrito' => 'Distr100', 'nombreDistrito' => 'Yauyos', 'idMicroRed' => 'Micro31'],

            // Micro32 (San Luis de Shuaro Junín-Chanchamayo)
            ['idDistrito' => 'Distr101', 'nombreDistrito' => 'Ulcumayo', 'idMicroRed' => 'Micro32'],

            // Micro33 (Carhuamayo Junín-Junín)
            ['idDistrito' => 'Distr102', 'nombreDistrito' => 'Carhuamayo', 'idMicroRed' => 'Micro33'],
            ['idDistrito' => 'Distr103', 'nombreDistrito' => 'Junín', 'idMicroRed' => 'Micro33'],
            ['idDistrito' => 'Distr104', 'nombreDistrito' => 'Ulcumayo', 'idMicroRed' => 'Micro33'],

            // Micro34 (Junín Junín-Junín)
            ['idDistrito' => 'Distr105', 'nombreDistrito' => 'Junín', 'idMicroRed' => 'Micro34'],
            ['idDistrito' => 'Distr106', 'nombreDistrito' => 'Ondores', 'idMicroRed' => 'Micro34'],
            ['idDistrito' => 'Distr107', 'nombreDistrito' => 'Ulcumayo', 'idMicroRed' => 'Micro34'],

            // Micro35 (Ulcumayo Junín-Junín)
            ['idDistrito' => 'Distr108', 'nombreDistrito' => 'Ulcumayo', 'idMicroRed' => 'Micro35'],

            // Micro36 (No pertenece a ninguna microred Junín-Junín)
            ['idDistrito' => 'Distr109', 'nombreDistrito' => 'Junín', 'idMicroRed' => 'Micro36'],

            // Micro37 (Yauli-Oroya Yauli-Jauja)
            ['idDistrito' => 'Distr110', 'nombreDistrito' => 'Chacapalpa', 'idMicroRed' => 'Micro37'],
            ['idDistrito' => 'Distr111', 'nombreDistrito' => 'Huay-Huay', 'idMicroRed' => 'Micro37'],
            ['idDistrito' => 'Distr112', 'nombreDistrito' => 'La Oroya', 'idMicroRed' => 'Micro37'],
            ['idDistrito' => 'Distr113', 'nombreDistrito' => 'Marcapomacocha', 'idMicroRed' => 'Micro37'],
            ['idDistrito' => 'Distr114', 'nombreDistrito' => 'Morococha', 'idMicroRed' => 'Micro37'],
            ['idDistrito' => 'Distr115', 'nombreDistrito' => 'Paccha', 'idMicroRed' => 'Micro37'],
            ['idDistrito' => 'Distr116', 'nombreDistrito' => 'Santa Rosa de Sacco', 'idMicroRed' => 'Micro37'],
            ['idDistrito' => 'Distr117', 'nombreDistrito' => 'Suitucancha', 'idMicroRed' => 'Micro37'],
            ['idDistrito' => 'Distr118', 'nombreDistrito' => 'Yauli', 'idMicroRed' => 'Micro37'],

            // Micro38 (Junín Yauli-Junín)
            ['idDistrito' => 'Distr119', 'nombreDistrito' => 'Santa Bárbara De Carhuacayan', 'idMicroRed' => 'Micro38'],

            // Micro39 (Cubantia Satipo-San Martín de Pangoa)
            ['idDistrito' => 'Distr120', 'nombreDistrito' => 'Pangoa', 'idMicroRed' => 'Micro39'],

            // Micro40 (San Antonio de Sonomoro Satipo-San Martín de Pangoa)
            ['idDistrito' => 'Distr121', 'nombreDistrito' => 'Pangoa', 'idMicroRed' => 'Micro40'],

            // Micro41 (San Ramón de Pangoa Satipo-San Martín de Pangoa)
            ['idDistrito' => 'Distr122', 'nombreDistrito' => 'Pangoa', 'idMicroRed' => 'Micro41'],

            // Micro42 (No pertenece a ninguna microred Satipo-San Martín de Pangoa)
            ['idDistrito' => 'Distr123', 'nombreDistrito' => 'Pangoa', 'idMicroRed' => 'Micro42'],

            // Micro43 (Mazamari Satipo-Satipo)
            ['idDistrito' => 'Distr124', 'nombreDistrito' => 'LLaylla', 'idMicroRed' => 'Micro43'],
            ['idDistrito' => 'Distr125', 'nombreDistrito' => 'Mazamari', 'idMicroRed' => 'Micro43'],
            ['idDistrito' => 'Distr126', 'nombreDistrito' => 'Pangoa', 'idMicroRed' => 'Micro43'],

            // Micro44 (Poyeni Satipo-Satipo)
            ['idDistrito' => 'Distr127', 'nombreDistrito' => 'Río Tambo', 'idMicroRed' => 'Micro44'],

            // Micro45 (Puerto Ocopa Satipo-Satipo)
            ['idDistrito' => 'Distr128', 'nombreDistrito' => 'Pangoa', 'idMicroRed' => 'Micro45'],
            ['idDistrito' => 'Distr129', 'nombreDistrito' => 'Río Tambo', 'idMicroRed' => 'Micro45'],

            // Micro46 (Río Negro-Satipo Satipo-Satipo)
            ['idDistrito' => 'Distr130', 'nombreDistrito' => 'Coviriali', 'idMicroRed' => 'Micro46'],
            ['idDistrito' => 'Distr131', 'nombreDistrito' => 'Pampa Hermosa', 'idMicroRed' => 'Micro46'],
            ['idDistrito' => 'Distr132', 'nombreDistrito' => 'Río Negro', 'idMicroRed' => 'Micro46'],
            ['idDistrito' => 'Distr133', 'nombreDistrito' => 'Río Tambo', 'idMicroRed' => 'Micro46'],
            ['idDistrito' => 'Distr134', 'nombreDistrito' => 'Satipo', 'idMicroRed' => 'Micro46'],

            // Micro47 (Valle Esmeralda Satipo-Satipo)
            ['idDistrito' => 'Distr135', 'nombreDistrito' => 'Pangoa', 'idMicroRed' => 'Micro47'],
            ['idDistrito' => 'Distr136', 'nombreDistrito' => 'Río Tambo', 'idMicroRed' => 'Micro47'],
            ['idDistrito' => 'Distr137', 'nombreDistrito' => 'Vizcatan del Ene', 'idMicroRed' => 'Micro47'],

            // Micro48 (No pertenece a ninguna microred Satipo-Satipo)
            ['idDistrito' => 'Distr138', 'nombreDistrito' => 'Satipo', 'idMicroRed' => 'Micro48'],

            // Micro49 (Junín Tarma-Junín)
            ['idDistrito' => 'Distr139', 'nombreDistrito' => 'San Pedro de Cajas', 'idMicroRed' => 'Micro49'],

            // Micro50 (Acobamba Tarma-Tarma)
            ['idDistrito' => 'Distr140', 'nombreDistrito' => 'Acobamba', 'idMicroRed' => 'Micro50'],
            ['idDistrito' => 'Distr141', 'nombreDistrito' => 'Palcamayo', 'idMicroRed' => 'Micro50'],
            ['idDistrito' => 'Distr142', 'nombreDistrito' => 'San Pedro de Cajas', 'idMicroRed' => 'Micro50'],

            // Micro51 (Huasahuasi Tarma-Tarma)
            ['idDistrito' => 'Distr143', 'nombreDistrito' => 'Huasahuasi', 'idMicroRed' => 'Micro51'],

            // Micro52 (Palca Tarma-Tarma)
            ['idDistrito' => 'Distr144', 'nombreDistrito' => 'Palca', 'idMicroRed' => 'Micro52'],
            ['idDistrito' => 'Distr145', 'nombreDistrito' => 'Tapo', 'idMicroRed' => 'Micro52'],

            // Micro53 (Tarma Tarma-Tarma)
            ['idDistrito' => 'Distr146', 'nombreDistrito' => 'Huaricolca', 'idMicroRed' => 'Micro53'],
            ['idDistrito' => 'Distr147', 'nombreDistrito' => 'La Unión', 'idMicroRed' => 'Micro53'],
            ['idDistrito' => 'Distr148', 'nombreDistrito' => 'Tarma', 'idMicroRed' => 'Micro53'],

            // Micro54 (No pertenece a ninguna microred Tarma-Tarma)
            ['idDistrito' => 'Distr149', 'nombreDistrito' => 'Tarma', 'idMicroRed' => 'Micro54'],
        ];

        foreach ($distritos as $distrito) {
            Distrito::create($distrito);
        }
    }
}
