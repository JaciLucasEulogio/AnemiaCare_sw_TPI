<?php

namespace Database\Seeders;

use App\Models\Establecimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstablecimientoSeeder extends Seeder
{
    public function run(): void
    {
        $establecimientos = [
            // Distr001 (Chilca)
            ['idEstablecimiento' => 'ESTAB001', 'nombreEstablecimiento' => 'Chilca', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB002', 'nombreEstablecimiento' => 'Azapampa', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB003', 'nombreEstablecimiento' => 'Enfermería del Batallón de Servicios N° 31', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB004', 'nombreEstablecimiento' => 'La Esperanza', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB005', 'nombreEstablecimiento' => 'Sapallanga', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB006', 'nombreEstablecimiento' => 'Auquimarca', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB007', 'nombreEstablecimiento' => 'Huayucachi', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB008', 'nombreEstablecimiento' => 'Pucara', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB009', 'nombreEstablecimiento' => 'Huancan', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB010', 'nombreEstablecimiento' => 'Huacrapuquio', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB011', 'nombreEstablecimiento' => 'Chuamba', 'idDistrito' => 'Distr001'],
            ['idEstablecimiento' => 'ESTAB012', 'nombreEstablecimiento' => 'Chupuro', 'idDistrito' => 'Distr001'],
            
            // Distr002 (Chupuro)
            ['idEstablecimiento' => 'ESTAB013', 'nombreEstablecimiento' => 'Socos', 'idDistrito' => 'Distr002'],
            ['idEstablecimiento' => 'ESTAB014', 'nombreEstablecimiento' => 'Chupuro', 'idDistrito' => 'Distr002'],
            ['idEstablecimiento' => 'ESTAB015', 'nombreEstablecimiento' => 'Carhuapaccha', 'idDistrito' => 'Distr002'],

            // Distr003 (Colca)
            ['idEstablecimiento' => 'ESTAB016', 'nombreEstablecimiento' => 'Sta. Cruz de Laria', 'idDistrito' => 'Distr003'],

            // Distr004 (Cullhuas)
            ['idEstablecimiento' => 'ESTAB017', 'nombreEstablecimiento' => 'Cullhuas', 'idDistrito' => 'Distr004'],
            ['idEstablecimiento' => 'ESTAB018', 'nombreEstablecimiento' => 'Pihuas', 'idDistrito' => 'Distr004'],
            ['idEstablecimiento' => 'ESTAB019', 'nombreEstablecimiento' => 'Chuamba', 'idDistrito' => 'Distr004'],

            // Distr005 (Huacrapuquio)
            ['idEstablecimiento' => 'ESTAB020', 'nombreEstablecimiento' => 'Huacrapuquio', 'idDistrito' => 'Distr005'],

            // Distr006 (Huancán)
            ['idEstablecimiento' => 'ESTAB021', 'nombreEstablecimiento' => 'Huancán', 'idDistrito' => 'Distr006'],
            ['idEstablecimiento' => 'ESTAB022', 'nombreEstablecimiento' => 'Huari', 'idDistrito' => 'Distr006'],


            // Distr007 (Huayucachi)
            ['idEstablecimiento' => 'ESTAB023', 'nombreEstablecimiento' => 'Huayucachi', 'idDistrito' => 'Distr007'],
            ['idEstablecimiento' => 'ESTAB024', 'nombreEstablecimiento' => 'Huamanmarca', 'idDistrito' => 'Distr007'],

            // Distr008 (Pucará)
            ['idEstablecimiento' => 'ESTAB025', 'nombreEstablecimiento' => 'Raquina', 'idDistrito' => 'Distr008'],
            ['idEstablecimiento' => 'ESTAB026', 'nombreEstablecimiento' => 'Marcavalle', 'idDistrito' => 'Distr008'],
            ['idEstablecimiento' => 'ESTAB027', 'nombreEstablecimiento' => 'Pucará', 'idDistrito' => 'Distr008'],
            ['idEstablecimiento' => 'ESTAB028', 'nombreEstablecimiento' => 'Dos de Mayo', 'idDistrito' => 'Distr008'],
            ['idEstablecimiento' => 'ESTAB029', 'nombreEstablecimiento' => 'Jatun Suclla', 'idDistrito' => 'Distr008'],

            // Distr009 (Sapallanga)
            ['idEstablecimiento' => 'ESTAB030', 'nombreEstablecimiento' => 'Sapallanga', 'idDistrito' => 'Distr009'],
            ['idEstablecimiento' => 'ESTAB031', 'nombreEstablecimiento' => 'Cocharcas', 'idDistrito' => 'Distr009'],
            ['idEstablecimiento' => 'ESTAB032', 'nombreEstablecimiento' => 'La Punta', 'idDistrito' => 'Distr009'],
            ['idEstablecimiento' => 'ESTAB033', 'nombreEstablecimiento' => 'Huayllaspanca', 'idDistrito' => 'Distr009'],
            ['idEstablecimiento' => 'ESTAB034', 'nombreEstablecimiento' => 'Miluchaca', 'idDistrito' => 'Distr009'],
            ['idEstablecimiento' => 'ESTAB035', 'nombreEstablecimiento' => 'Miraflores', 'idDistrito' => 'Distr009'],

            // Distr010 (Viques)
            ['idEstablecimiento' => 'ESTAB036', 'nombreEstablecimiento' => 'Viques', 'idDistrito' => 'Distr010'],

            // Distr011 (Santo Domingo de Acombamba)
            ['idEstablecimiento' => 'ESTAB037', 'nombreEstablecimiento' => 'Yuncachaquicocha', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB038', 'nombreEstablecimiento' => 'Santa Rosa de Astilleria', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB039', 'nombreEstablecimiento' => 'Sto Domingo de Acobamba', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB040', 'nombreEstablecimiento' => 'Potrero', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB041', 'nombreEstablecimiento' => 'Pumabamba', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB042', 'nombreEstablecimiento' => 'Durazno Pata', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB043', 'nombreEstablecimiento' => 'La Nueva Libertad de Punto', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB044', 'nombreEstablecimiento' => 'Rosaspampa', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB045', 'nombreEstablecimiento' => 'Huancamayo', 'idDistrito' => 'Distr011'],
            ['idEstablecimiento' => 'ESTAB046', 'nombreEstablecimiento' => 'Matichacra', 'idDistrito' => 'Distr011'],

            // Distr012 (Ingenio)
            ['idEstablecimiento' => 'ESTAB047', 'nombreEstablecimiento' => 'Ingenio', 'idDistrito' => 'Distr012'],

            // Distr013 (Quichuay)
            ['idEstablecimiento' => 'ESTAB048', 'nombreEstablecimiento' => 'Quichuay', 'idDistrito' => 'Distr013'],

            // Distr014 (El Tambo)
            ['idEstablecimiento' => 'ESTAB049', 'nombreEstablecimiento' => 'Justicia Paz y Vida', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB050', 'nombreEstablecimiento' => 'Juan Parra del Riego', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB051', 'nombreEstablecimiento' => 'Laboratorio Clínico Santa Rosa', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB052', 'nombreEstablecimiento' => 'Umuto', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB053', 'nombreEstablecimiento' => 'Saños Grande', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB054', 'nombreEstablecimiento' => 'Paccha', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB055', 'nombreEstablecimiento' => 'Batanyacu', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB056', 'nombreEstablecimiento' => 'Saños Chico', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB057', 'nombreEstablecimiento' => 'Incho', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB058', 'nombreEstablecimiento' => 'San Martín', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB059', 'nombreEstablecimiento' => 'Sicaya', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB060', 'nombreEstablecimiento' => 'San Pedro de Saño', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB061', 'nombreEstablecimiento' => 'Ramiro Priale', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB062', 'nombreEstablecimiento' => 'Cullpa', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB063', 'nombreEstablecimiento' => 'Posta Médica EESTP-PNP-Huancayo', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB064', 'nombreEstablecimiento' => 'Hualaoyo', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB065', 'nombreEstablecimiento' => 'Cochas Grande', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB066', 'nombreEstablecimiento' => 'La Victoria', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB067', 'nombreEstablecimiento' => '1ro de Mayo', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB068', 'nombreEstablecimiento' => 'San Agustín de Cajas', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB069', 'nombreEstablecimiento' => 'Aza', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB070', 'nombreEstablecimiento' => 'Quilcas', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB071', 'nombreEstablecimiento' => 'Hualhuas', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB072', 'nombreEstablecimiento' => 'Cochas Chico', 'idDistrito' => 'Distr014'],
            ['idEstablecimiento' => 'ESTAB073', 'nombreEstablecimiento' => 'San Jerónimo', 'idDistrito' => 'Distr014'],

            // Distr015 (Hualhuas)
            ['idEstablecimiento' => 'ESTAB074', 'nombreEstablecimiento' => 'Hualhuas', 'idDistrito' => 'Distr015'],

            // Distr016 (Pilcomayo)
            ['idEstablecimiento' => 'ESTAB075', 'nombreEstablecimiento' => 'Pilcomayo', 'idDistrito' => 'Distr016'],

            // Distr017 (Quilcas)
            ['idEstablecimiento' => 'ESTAB076', 'nombreEstablecimiento' => 'Quilcas', 'idDistrito' => 'Distr017'],
            ['idEstablecimiento' => 'ESTAB077', 'nombreEstablecimiento' => 'Colpar', 'idDistrito' => 'Distr017'],

            // Distr018 (San Agustín)
            ['idEstablecimiento' => 'ESTAB078', 'nombreEstablecimiento' => 'San Agustin de Cajas', 'idDistrito' => 'Distr018'],
            ['idEstablecimiento' => 'ESTAB079', 'nombreEstablecimiento' => 'Coillor', 'idDistrito' => 'Distr018'],

            // Distr019 (San Jerónimo de Tunán)
            ['idEstablecimiento' => 'ESTAB080', 'nombreEstablecimiento' => 'San Jerónimo', 'idDistrito' => 'Distr019'],

            // Distr020 (Saño)
            ['idEstablecimiento' => 'ESTAB081', 'nombreEstablecimiento' => 'San Pedro de Saño', 'idDistrito' => 'Distr020'],

            // Distr021 (Sicaya)
            ['idEstablecimiento' => 'ESTAB082', 'nombreEstablecimiento' => 'Sicaya', 'idDistrito' => 'Distr021'],

            // Distr022 (Huancayo)
            ['idEstablecimiento' => 'ESTAB083', 'nombreEstablecimiento' => 'La Libertad', 'idDistrito' => 'Distr022'],
            ['idEstablecimiento' => 'ESTAB084', 'nombreEstablecimiento' => 'Palián', 'idDistrito' => 'Distr022'],
            ['idEstablecimiento' => 'ESTAB085', 'nombreEstablecimiento' => 'Vilcacoto', 'idDistrito' => 'Distr022'],
            ['idEstablecimiento' => 'ESTAB086', 'nombreEstablecimiento' => 'Ocopilla', 'idDistrito' => 'Distr022'],
            ['idEstablecimiento' => 'ESTAB087', 'nombreEstablecimiento' => 'Acopalca', 'idDistrito' => 'Distr022'],
            ['idEstablecimiento' => 'ESTAB088', 'nombreEstablecimiento' => 'San Francisco', 'idDistrito' => 'Distr022'],
            ['idEstablecimiento' => 'ESTAB089', 'nombreEstablecimiento' => 'Uñas', 'idDistrito' => 'Distr022'],

            // Distr023 (Pariahuanca)
            ['idEstablecimiento' => 'ESTAB090', 'nombreEstablecimiento' => 'La Libertad', 'idDistrito' => 'Distr023'],
            ['idEstablecimiento' => 'ESTAB091', 'nombreEstablecimiento' => 'Nuevo Occoro', 'idDistrito' => 'Distr023'],
            ['idEstablecimiento' => 'ESTAB092', 'nombreEstablecimiento' => 'Rocchac', 'idDistrito' => 'Distr023'],
            ['idEstablecimiento' => 'ESTAB093', 'nombreEstablecimiento' => 'San Balvin', 'idDistrito' => 'Distr023'],
            ['idEstablecimiento' => 'ESTAB094', 'nombreEstablecimiento' => 'LLacsapirca', 'idDistrito' => 'Distr023'],
            ['idEstablecimiento' => 'ESTAB095', 'nombreEstablecimiento' => 'Pariahuanca', 'idDistrito' => 'Distr023'],
            ['idEstablecimiento' => 'ESTAB096', 'nombreEstablecimiento' => 'Lampa', 'idDistrito' => 'Distr023'],

            // Distr024 (Chacapampa)
            ['idEstablecimiento' => 'ESTAB097', 'nombreEstablecimiento' => 'Los Ángeles', 'idDistrito' => 'Distr024'],
            ['idEstablecimiento' => 'ESTAB098', 'nombreEstablecimiento' => 'Huacán', 'idDistrito' => 'Distr024'],

            // Distr025 (Chicche)
            ['idEstablecimiento' => 'ESTAB099', 'nombreEstablecimiento' => 'Vista Alegre', 'idDistrito' => 'Distr025'],
            ['idEstablecimiento' => 'ESTAB100', 'nombreEstablecimiento' => 'Chicche', 'idDistrito' => 'Distr025'],

            // Distr026 (Chongos Alto)
            ['idEstablecimiento' => 'ESTAB101', 'nombreEstablecimiento' => 'Chongos Alto', 'idDistrito' => 'Distr026'],
            ['idEstablecimiento' => 'ESTAB102', 'nombreEstablecimiento' => 'Chicche', 'idDistrito' => 'Distr026'],

            // Distr027 (Colca)
            ['idEstablecimiento' => 'ESTAB103', 'nombreEstablecimiento' => 'Colca', 'idDistrito' => 'Distr027'],

            // Distr028 (Huasicancha)
            ['idEstablecimiento' => 'ESTAB104', 'nombreEstablecimiento' => 'Chacapampa', 'idDistrito' => 'Distr028'],

            // Distr029 (Andamarca)
            ['idEstablecimiento' => 'ESTAB105', 'nombreEstablecimiento' => 'Andamarca', 'idDistrito' => 'Distr029'],
            ['idEstablecimiento' => 'ESTAB106', 'nombreEstablecimiento' => 'Pucacocha', 'idDistrito' => 'Distr029'],
            ['idEstablecimiento' => 'ESTAB107', 'nombreEstablecimiento' => 'Punco', 'idDistrito' => 'Distr029'],
            ['idEstablecimiento' => 'ESTAB108', 'nombreEstablecimiento' => 'Huánuco', 'idDistrito' => 'Distr029'],

            // Distr030 (Cochas)
            ['idEstablecimiento' => 'ESTAB109', 'nombreEstablecimiento' => 'San Francisco de Macon', 'idDistrito' => 'Distr030'],
            ['idEstablecimiento' => 'ESTAB110', 'nombreEstablecimiento' => 'Andas', 'idDistrito' => 'Distr030'],
            ['idEstablecimiento' => 'ESTAB111', 'nombreEstablecimiento' => 'Cochas', 'idDistrito' => 'Distr030'],
            ['idEstablecimiento' => 'ESTAB112', 'nombreEstablecimiento' => 'Pilcollama', 'idDistrito' => 'Distr030'],
            
            // Distr031 (Comas)
            ['idEstablecimiento' => 'ESTAB113', 'nombreEstablecimiento' => 'Comas', 'idDistrito' => 'Distr031'],
            ['idEstablecimiento' => 'ESTAB114', 'nombreEstablecimiento' => 'Runatullo', 'idDistrito' => 'Distr031'],
            ['idEstablecimiento' => 'ESTAB115', 'nombreEstablecimiento' => 'Chancapalca', 'idDistrito' => 'Distr031'],
            ['idEstablecimiento' => 'ESTAB116', 'nombreEstablecimiento' => 'Puquian', 'idDistrito' => 'Distr031'],
            ['idEstablecimiento' => 'ESTAB117', 'nombreEstablecimiento' => 'Pomamanta', 'idDistrito' => 'Distr031'],

            // Distr032 (Mariscal Castilla)
            ['idEstablecimiento' => 'ESTAB118', 'nombreEstablecimiento' => 'Mariscal Castilla', 'idDistrito' => 'Distr032'],

            // Distr033 (Santo Domingo de Acobamba)
            ['idEstablecimiento' => 'ESTAB119', 'nombreEstablecimiento' => 'Andamarca', 'idDistrito' => 'Distr033'],
            ['idEstablecimiento' => 'ESTAB120', 'nombreEstablecimiento' => 'P.S. Yanabamba', 'idDistrito' => 'Distr033'],
            ['idEstablecimiento' => 'ESTAB121', 'nombreEstablecimiento' => 'Comas', 'idDistrito' => 'Distr033'],

            // Distr034 (Aco)
            ['idEstablecimiento' => 'ESTAB122', 'nombreEstablecimiento' => 'Aco', 'idDistrito' => 'Distr034'],
            ['idEstablecimiento' => 'ESTAB123', 'nombreEstablecimiento' => 'Quicha Chico', 'idDistrito' => 'Distr034'],

            // Distr035 (Concepción)
            ['idEstablecimiento' => 'ESTAB124', 'nombreEstablecimiento' => 'David Guerrero Duarte', 'idDistrito' => 'Distr035'],

            // Distr036 (Heroínas Toledo)
            ['idEstablecimiento' => 'ESTAB125', 'nombreEstablecimiento' => 'Heroínas Toledo', 'idDistrito' => 'Distr036'],

            // Distr037 (Matahuasi)
            ['idEstablecimiento' => 'ESTAB126', 'nombreEstablecimiento' => 'Maravilca', 'idDistrito' => 'Distr037'],
            ['idEstablecimiento' => 'ESTAB127', 'nombreEstablecimiento' => 'Matahuasi', 'idDistrito' => 'Distr037'],
            ['idEstablecimiento' => 'ESTAB128', 'nombreEstablecimiento' => 'Yanamuclo', 'idDistrito' => 'Distr037'],

            // Distr038 (Mito)
            ['idEstablecimiento' => 'ESTAB129', 'nombreEstablecimiento' => 'Mito', 'idDistrito' => 'Distr038'],
            ['idEstablecimiento' => 'ESTAB130', 'nombreEstablecimiento' => 'San Luis Yaico', 'idDistrito' => 'Distr038'],
            ['idEstablecimiento' => 'ESTAB131', 'nombreEstablecimiento' => 'Matahulo', 'idDistrito' => 'Distr038'],

            // Distr039 (Nueve de Julio)
            ['idEstablecimiento' => 'ESTAB132', 'nombreEstablecimiento' => 'Nueve de Julio', 'idDistrito' => 'Distr039'],

            // Distr040 (Orcotuna)
            ['idEstablecimiento' => 'ESTAB133', 'nombreEstablecimiento' => 'Orcotuna', 'idDistrito' => 'Distr040'],
            ['idEstablecimiento' => 'ESTAB134', 'nombreEstablecimiento' => 'Vicso', 'idDistrito' => 'Distr040'],
            ['idEstablecimiento' => 'ESTAB135', 'nombreEstablecimiento' => 'Sta. Rosa de Ocopa', 'idDistrito' => 'Distr040'],
            ['idEstablecimiento' => 'ESTAB136', 'nombreEstablecimiento' => 'Centro médico Concepción', 'idDistrito' => 'Distr040'],
            ['idEstablecimiento' => 'ESTAB137', 'nombreEstablecimiento' => 'Ingenio', 'idDistrito' => 'Distr040'],

            // Distr041 (Santa Rosa de Ocopa)
            ['idEstablecimiento' => 'ESTAB138', 'nombreEstablecimiento' => 'Huanchar', 'idDistrito' => 'Distr041'],
            ['idEstablecimiento' => 'ESTAB139', 'nombreEstablecimiento' => 'Sta. Rosa de Ocopa', 'idDistrito' => 'Distr041'],

            // Distr042 (San José de Quero)
            ['idEstablecimiento' => 'ESTAB140', 'nombreEstablecimiento' => 'Sulcan', 'idDistrito' => 'Distr042'],
            ['idEstablecimiento' => 'ESTAB141', 'nombreEstablecimiento' => 'San José de Quero', 'idDistrito' => 'Distr042'],
            ['idEstablecimiento' => 'ESTAB142', 'nombreEstablecimiento' => 'Usibamba', 'idDistrito' => 'Distr042'],
            ['idEstablecimiento' => 'ESTAB143', 'nombreEstablecimiento' => 'San Roque de Huarmita', 'idDistrito' => 'Distr042'],
            ['idEstablecimiento' => 'ESTAB144', 'nombreEstablecimiento' => 'Chaquicocha', 'idDistrito' => 'Distr042'],
            ['idEstablecimiento' => 'ESTAB145', 'nombreEstablecimiento' => 'Sta. Rosa de Huarmita', 'idDistrito' => 'Distr042'],

            // Distr043 (Chambara)
            ['idEstablecimiento' => 'ESTAB146', 'nombreEstablecimiento' => 'San Blas', 'idDistrito' => 'Distr042'],
            ['idEstablecimiento' => 'ESTAB147', 'nombreEstablecimiento' => 'Chambara', 'idDistrito' => 'Distr042'],
            ['idEstablecimiento' => 'ESTAB148', 'nombreEstablecimiento' => 'Angasmayo', 'idDistrito' => 'Distr042'],

            // Distr044 (Manzanares)
            ['idEstablecimiento' => 'ESTAB149', 'nombreEstablecimiento' => 'Manzanares', 'idDistrito' => 'Distr044'],

            // Distr045 (Ahuac)
            ['idEstablecimiento' => 'ESTAB150', 'nombreEstablecimiento' => 'Ahuac', 'idDistrito' => 'Distr045'],
            ['idEstablecimiento' => 'ESTAB151', 'nombreEstablecimiento' => 'Consultorio médico Emanuel', 'idDistrito' => 'Distr045'],
            ['idEstablecimiento' => 'ESTAB152', 'nombreEstablecimiento' => 'Huarisca', 'idDistrito' => 'Distr045'],
            ['idEstablecimiento' => 'ESTAB153', 'nombreEstablecimiento' => 'Huamancaca Chico', 'idDistrito' => 'Distr045'],
            ['idEstablecimiento' => 'ESTAB154', 'nombreEstablecimiento' => 'San Juan de Iscos', 'idDistrito' => 'Distr045'],
            ['idEstablecimiento' => 'ESTAB155', 'nombreEstablecimiento' => 'Tres de Diciembre', 'idDistrito' => 'Distr045'],

            // Distr046 (Ahuac)
            ['idEstablecimiento' => 'ESTAB156', 'nombreEstablecimiento' => 'Pumpunya', 'idDistrito' => 'Distr046'],
            ['idEstablecimiento' => 'ESTAB157', 'nombreEstablecimiento' => 'Chongos Bajo', 'idDistrito' => 'Distr046'],

            // Distr047 (Chupaca)
            ['idEstablecimiento' => 'ESTAB158', 'nombreEstablecimiento' => 'Pedro Sanchez Meza - Chupaca', 'idDistrito' => 'Distr047'],

            // Distr048 (Huamancaca Chico)
            ['idEstablecimiento' => 'ESTAB159', 'nombreEstablecimiento' => 'Huamancaca Chico', 'idDistrito' => 'Distr048'],

            // Distr049 (San Juan de Iscos)
            ['idEstablecimiento' => 'ESTAB160', 'nombreEstablecimiento' => 'San Juan de Iscos', 'idDistrito' => 'Distr049'],
            ['idEstablecimiento' => 'ESTAB161', 'nombreEstablecimiento' => 'Tinyari Grande', 'idDistrito' => 'Distr049'],
            ['idEstablecimiento' => 'ESTAB162', 'nombreEstablecimiento' => 'Tinyari Chico', 'idDistrito' => 'Distr049'],

            // Distr050 (Tres de diciembre)
            ['idEstablecimiento' => 'ESTAB163', 'nombreEstablecimiento' => 'Tres de diciembre', 'idDistrito' => 'Distr050'],

            // Distr051 (Huachac)
            ['idEstablecimiento' => 'ESTAB164', 'nombreEstablecimiento' => 'Antapampa', 'idDistrito' => 'Distr051'],
            ['idEstablecimiento' => 'ESTAB165', 'nombreEstablecimiento' => 'Maracatuna', 'idDistrito' => 'Distr051'],
            ['idEstablecimiento' => 'ESTAB166', 'nombreEstablecimiento' => 'Huachac', 'idDistrito' => 'Distr051'],
            ['idEstablecimiento' => 'ESTAB167', 'nombreEstablecimiento' => 'Huayao', 'idDistrito' => 'Distr051'],
            ['idEstablecimiento' => 'ESTAB168', 'nombreEstablecimiento' => 'Manzanares', 'idDistrito' => 'Distr051'],

            // Distr052 (San Juan de Jarpa)
            ['idEstablecimiento' => 'ESTAB169', 'nombreEstablecimiento' => 'San Juan de Jarpa', 'idDistrito' => 'Distr052'],
            ['idEstablecimiento' => 'ESTAB170', 'nombreEstablecimiento' => 'Shicuy', 'idDistrito' => 'Distr052'],

            // Distr053 (Yanacancha)
            ['idEstablecimiento' => 'ESTAB171', 'nombreEstablecimiento' => 'Yanacancha', 'idDistrito' => 'Distr053'],

            // Distr054 (Perene)
            ['idEstablecimiento' => 'ESTAB172', 'nombreEstablecimiento' => 'Mirisharo', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB173', 'nombreEstablecimiento' => 'Ciudad Satelite', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB174', 'nombreEstablecimiento' => 'Churingaveni', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB175', 'nombreEstablecimiento' => 'Puerto Yurinaki', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB176', 'nombreEstablecimiento' => 'Sta Rosa de Camonashari', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB177', 'nombreEstablecimiento' => 'Hospital Selva Central y Enfermedades Tropicales La Merced', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB178', 'nombreEstablecimiento' => 'Alto San Juan', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB179', 'nombreEstablecimiento' => 'San Antonio Alto Pichanaki', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB180', 'nombreEstablecimiento' => 'Alto Yurinaki', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB181', 'nombreEstablecimiento' => 'Villa Perene', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB182', 'nombreEstablecimiento' => 'San Fernando de Kivinaki', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB183', 'nombreEstablecimiento' => 'Alto Pumpuriani', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB184', 'nombreEstablecimiento' => 'San Cristobal', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB185', 'nombreEstablecimiento' => 'Jose Galvez', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB186', 'nombreEstablecimiento' => 'Centro de Salud Mental Comunitario Pichanaky', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB187', 'nombreEstablecimiento' => 'Huacamayo', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB188', 'nombreEstablecimiento' => 'Bajo Marankiari', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB189', 'nombreEstablecimiento' => 'Los Angeles de Ubiriki', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB190', 'nombreEstablecimiento' => 'Santa Rosa Toterani', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB191', 'nombreEstablecimiento' => 'Inchatingari', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB192', 'nombreEstablecimiento' => 'Union Pucusani', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB193', 'nombreEstablecimiento' => 'Jose Olaya', 'idDistrito' => 'Distr054'],
            ['idEstablecimiento' => 'ESTAB194', 'nombreEstablecimiento' => 'Libertad Toterani', 'idDistrito' => 'Distr054'],

            // Distr055 (San Luis de Shuaro)
            ['idEstablecimiento' => 'ESTAB195', 'nombreEstablecimiento' => 'Alto Yapaz', 'idDistrito' => 'Distr055'],

            // Distr056 (Chanchamayo)
            ['idEstablecimiento' => 'ESTAB196', 'nombreEstablecimiento' => 'Pueblo Pardo', 'idDistrito' => 'Distr056'],
            ['idEstablecimiento' => 'ESTAB197', 'nombreEstablecimiento' => 'Villa Progreso', 'idDistrito' => 'Distr056'],

            // Distr057 (San Luis de Shuaro)
            ['idEstablecimiento' => 'ESTAB198', 'nombreEstablecimiento' => 'San Luis de Shuaro', 'idDistrito' => 'Distr057'],
            ['idEstablecimiento' => 'ESTAB199', 'nombreEstablecimiento' => 'Sanchirio Palomar', 'idDistrito' => 'Distr057'],

            // Distr058 (San ramón)
            ['idEstablecimiento' => 'ESTAB200', 'nombreEstablecimiento' => 'San ramón', 'idDistrito' => 'Distr058'],
            ['idEstablecimiento' => 'ESTAB201', 'nombreEstablecimiento' => 'Pedregal', 'idDistrito' => 'Distr058'],
            ['idEstablecimiento' => 'ESTAB202', 'nombreEstablecimiento' => 'La esperanza', 'idDistrito' => 'Distr058'],
            ['idEstablecimiento' => 'ESTAB203', 'nombreEstablecimiento' => 'Naranjal', 'idDistrito' => 'Distr058'],

            // Distr059 (Vitoc)
            ['idEstablecimiento' => 'ESTAB204', 'nombreEstablecimiento' => 'Vitoc', 'idDistrito' => 'Distr059'],

            // Distr060 (Chanchamayo)
            ['idEstablecimiento' => 'ESTAB205', 'nombreEstablecimiento' => 'La Merced', 'idDistrito' => 'Distr060'],

            // Distr061 (Pichanaki)
            ['idEstablecimiento' => 'ESTAB206', 'nombreEstablecimiento' => 'Andrés Avelino Cáceres', 'idDistrito' => 'Distr061'],
            ['idEstablecimiento' => 'ESTAB207', 'nombreEstablecimiento' => 'Barinetti Real', 'idDistrito' => 'Distr061'],
            ['idEstablecimiento' => 'ESTAB208', 'nombreEstablecimiento' => 'Centro Cuyani', 'idDistrito' => 'Distr061'],
            ['idEstablecimiento' => 'ESTAB209', 'nombreEstablecimiento' => 'Condado Pichikiari', 'idDistrito' => 'Distr061'],
            ['idEstablecimiento' => 'ESTAB210', 'nombreEstablecimiento' => 'Valle Hermoso', 'idDistrito' => 'Distr061'],

            // Distr062 (Pichanaki)
            ['idEstablecimiento' => 'ESTAB211', 'nombreEstablecimiento' => 'Anexo 28 de Julio', 'idDistrito' => 'Distr062'],
            ['idEstablecimiento' => 'ESTAB212', 'nombreEstablecimiento' => 'Belen Anapiari', 'idDistrito' => 'Distr062'],
            ['idEstablecimiento' => 'ESTAB213', 'nombreEstablecimiento' => 'Huachiriki', 'idDistrito' => 'Distr062'],
            ['idEstablecimiento' => 'ESTAB214', 'nombreEstablecimiento' => 'Huantinini', 'idDistrito' => 'Distr062'],
            ['idEstablecimiento' => 'ESTAB215', 'nombreEstablecimiento' => 'San Fco Centro Kuviriani', 'idDistrito' => 'Distr062'],
            ['idEstablecimiento' => 'ESTAB216', 'nombreEstablecimiento' => 'San José de Anapiari', 'idDistrito' => 'Distr062'],
            ['idEstablecimiento' => 'ESTAB217', 'nombreEstablecimiento' => 'San Juan Centro Autiki', 'idDistrito' => 'Distr062'],

            // Distr063 (Pichanaki)
            ['idEstablecimiento' => 'ESTAB218', 'nombreEstablecimiento' => 'Colonia Huanca', 'idDistrito' => 'Distr063'],
            ['idEstablecimiento' => 'ESTAB219', 'nombreEstablecimiento' => 'Impitato cascada', 'idDistrito' => 'Distr063'],
            ['idEstablecimiento' => 'ESTAB220', 'nombreEstablecimiento' => 'Las Palmas', 'idDistrito' => 'Distr063'],
            ['idEstablecimiento' => 'ESTAB221', 'nombreEstablecimiento' => 'Pampa Camona', 'idDistrito' => 'Distr063'],
            ['idEstablecimiento' => 'ESTAB222', 'nombreEstablecimiento' => 'Primavera', 'idDistrito' => 'Distr063'],
            ['idEstablecimiento' => 'ESTAB223', 'nombreEstablecimiento' => 'Unión Shimashiro', 'idDistrito' => 'Distr063'],

            // Distr064 (Pichanaki)
            ['idEstablecimiento' => 'ESTAB224', 'nombreEstablecimiento' => 'Hospital de apoyo Pichanaki', 'idDistrito' => 'Distr064'],

            // Distr065 (Masma)
            ['idEstablecimiento' => 'ESTAB225', 'nombreEstablecimiento' => 'Uchubamba', 'idDistrito' => 'Distr065'],

            // Distr066 (Monobamba)
            ['idEstablecimiento' => 'ESTAB226', 'nombreEstablecimiento' => 'Monobamba', 'idDistrito' => 'Distr066'],
            ['idEstablecimiento' => 'ESTAB227', 'nombreEstablecimiento' => 'San ramón', 'idDistrito' => 'Distr066'],
            ['idEstablecimiento' => 'ESTAB228', 'nombreEstablecimiento' => 'Uchubamba', 'idDistrito' => 'Distr066'],
            ['idEstablecimiento' => 'ESTAB229', 'nombreEstablecimiento' => 'San Vicente', 'idDistrito' => 'Distr066'],

            // Distr067 (Ataura)
            ['idEstablecimiento' => 'ESTAB230', 'nombreEstablecimiento' => 'Ataura', 'idDistrito' => 'Distr067'],

            // Distr068 (Huertas)
            ['idEstablecimiento' => 'ESTAB231', 'nombreEstablecimiento' => 'Huertas', 'idDistrito' => 'Distr068'],

            // Distr069 (Paca)
            ['idEstablecimiento' => 'ESTAB232', 'nombreEstablecimiento' => 'Paca', 'idDistrito' => 'Distr069'],

            // Distr070 (Paccha)
            ['idEstablecimiento' => 'ESTAB233', 'nombreEstablecimiento' => 'Paccha - La Oroya', 'idDistrito' => 'Distr070'],
            ['idEstablecimiento' => 'ESTAB234', 'nombreEstablecimiento' => 'Paccha Miraflores', 'idDistrito' => 'Distr070'],
            ['idEstablecimiento' => 'ESTAB235', 'nombreEstablecimiento' => 'Masajcancha', 'idDistrito' => 'Distr070'],
            ['idEstablecimiento' => 'ESTAB236', 'nombreEstablecimiento' => 'Canchapunco', 'idDistrito' => 'Distr070'],

            // Distr071 (Sausa)
            ['idEstablecimiento' => 'ESTAB237', 'nombreEstablecimiento' => 'Paccha - La Oroya', 'idDistrito' => 'Distr071'],

            // Distr072 (Yauyos)
            ['idEstablecimiento' => 'ESTAB238', 'nombreEstablecimiento' => 'Canchapunco', 'idDistrito' => 'Distr072'],
            ['idEstablecimiento' => 'ESTAB239', 'nombreEstablecimiento' => 'Huancas', 'idDistrito' => 'Distr072'],
            ['idEstablecimiento' => 'ESTAB240', 'nombreEstablecimiento' => 'Yauyos', 'idDistrito' => 'Distr072'],

            // Distr073 (Huaripampa)
            ['idEstablecimiento' => 'ESTAB241', 'nombreEstablecimiento' => 'Huaripampa', 'idDistrito' => 'Distr073'],

            // Distr074 (Leonor Ordoñez)
            ['idEstablecimiento' => 'ESTAB242', 'nombreEstablecimiento' => 'Huancani', 'idDistrito' => 'Distr074'],

            // Distr075 (Muqui)
            ['idEstablecimiento' => 'ESTAB243', 'nombreEstablecimiento' => 'Muqui', 'idDistrito' => 'Distr075'],

            // Distr076 (Muquiyauyo)
            ['idEstablecimiento' => 'ESTAB244', 'nombreEstablecimiento' => 'Muquiyauyo', 'idDistrito' => 'Distr076'],

            // Distr077 (Sincos)
            ['idEstablecimiento' => 'ESTAB245', 'nombreEstablecimiento' => 'Aramachay', 'idDistrito' => 'Distr077'],
            ['idEstablecimiento' => 'ESTAB246', 'nombreEstablecimiento' => 'Sallahuachac', 'idDistrito' => 'Distr077'],
            ['idEstablecimiento' => 'ESTAB247', 'nombreEstablecimiento' => 'Sincos', 'idDistrito' => 'Distr077'],
            ['idEstablecimiento' => 'ESTAB248', 'nombreEstablecimiento' => 'Muqui', 'idDistrito' => 'Distr077'],
            ['idEstablecimiento' => 'ESTAB249', 'nombreEstablecimiento' => 'Chalhuas', 'idDistrito' => 'Distr077'],
            ['idEstablecimiento' => 'ESTAB250', 'nombreEstablecimiento' => 'Llacuaripampa', 'idDistrito' => 'Distr077'],

            // Distr078 (Apata)
            ['idEstablecimiento' => 'ESTAB251', 'nombreEstablecimiento' => 'Apata', 'idDistrito' => 'Distr078'],

            // Distr079 (El Mantaro)
            ['idEstablecimiento' => 'ESTAB252', 'nombreEstablecimiento' => 'El Mantaro', 'idDistrito' => 'Distr079'],

            // Distr080 (Huamali)
            ['idEstablecimiento' => 'ESTAB253', 'nombreEstablecimiento' => 'Huamali', 'idDistrito' => 'Distr080'],

            // Distr081 (San Lorenzo)
            ['idEstablecimiento' => 'ESTAB254', 'nombreEstablecimiento' => 'San Lorenzo', 'idDistrito' => 'Distr081'],
            ['idEstablecimiento' => 'ESTAB255', 'nombreEstablecimiento' => 'Apata', 'idDistrito' => 'Distr081'],
            ['idEstablecimiento' => 'ESTAB256', 'nombreEstablecimiento' => 'El Mantaro', 'idDistrito' => 'Distr081'],

            // Distr082 (Canchayllo)
            ['idEstablecimiento' => 'ESTAB257', 'nombreEstablecimiento' => 'Canchayllo', 'idDistrito' => 'Distr082'],

            // Distr083 (Curicaca)
            ['idEstablecimiento' => 'ESTAB258', 'nombreEstablecimiento' => 'El Rosario', 'idDistrito' => 'Distr083'],

            // Distr084 (Janjaillo)
            ['idEstablecimiento' => 'ESTAB259', 'nombreEstablecimiento' => 'Janjaillo', 'idDistrito' => 'Distr084'],

            // Distr085 (Llocllapampa)
            ['idEstablecimiento' => 'ESTAB260', 'nombreEstablecimiento' => 'Llocllapampa', 'idDistrito' => 'Distr085'],
            ['idEstablecimiento' => 'ESTAB261', 'nombreEstablecimiento' => 'Canchayllo', 'idDistrito' => 'Distr085'],
            ['idEstablecimiento' => 'ESTAB262', 'nombreEstablecimiento' => 'Parco', 'idDistrito' => 'Distr085'],
            ['idEstablecimiento' => 'ESTAB263', 'nombreEstablecimiento' => 'Matachico', 'idDistrito' => 'Distr085'],

            // Distr086 (Parco)
            ['idEstablecimiento' => 'ESTAB264', 'nombreEstablecimiento' => 'Ullusca', 'idDistrito' => 'Distr086'],

            // Distr087 (Julcan)
            ['idEstablecimiento' => 'ESTAB265', 'nombreEstablecimiento' => 'Julcan', 'idDistrito' => 'Distr087'],

            // Distr088 (Masma)
            ['idEstablecimiento' => 'ESTAB266', 'nombreEstablecimiento' => 'Masma', 'idDistrito' => 'Distr088'],

            // Distr089 (Masma Chicche)
            ['idEstablecimiento' => 'ESTAB267', 'nombreEstablecimiento' => 'Masma Chicche', 'idDistrito' => 'Distr089'],

            // Distr090 (Molinos)
            ['idEstablecimiento' => 'ESTAB268', 'nombreEstablecimiento' => 'Quero', 'idDistrito' => 'Distr090'],
            ['idEstablecimiento' => 'ESTAB269', 'nombreEstablecimiento' => 'Molinos', 'idDistrito' => 'Distr090'],
            ['idEstablecimiento' => 'ESTAB270', 'nombreEstablecimiento' => 'Curimarca', 'idDistrito' => 'Distr090'],

            // Distr090 (Molinos)
            ['idEstablecimiento' => 'ESTAB271', 'nombreEstablecimiento' => 'Quero', 'idDistrito' => 'Distr090'],
            ['idEstablecimiento' => 'ESTAB272', 'nombreEstablecimiento' => 'Molinos', 'idDistrito' => 'Distr090'],
            ['idEstablecimiento' => 'ESTAB273', 'nombreEstablecimiento' => 'Curimarca', 'idDistrito' => 'Distr090'],

            // Distr091 (Pancan)
            ['idEstablecimiento' => 'ESTAB274', 'nombreEstablecimiento' => 'Huasquicha', 'idDistrito' => 'Distr091'],
            ['idEstablecimiento' => 'ESTAB275', 'nombreEstablecimiento' => 'Pancan', 'idDistrito' => 'Distr091'],

            // Distr092 (Ricran)
            ['idEstablecimiento' => 'ESTAB276', 'nombreEstablecimiento' => 'Apaycancha', 'idDistrito' => 'Distr092'],
            ['idEstablecimiento' => 'ESTAB277', 'nombreEstablecimiento' => 'Ricran', 'idDistrito' => 'Distr092'],

            // Distr093 (San Pedro de Chunan)
            ['idEstablecimiento' => 'ESTAB278', 'nombreEstablecimiento' => 'San Pedro de Chunan', 'idDistrito' => 'Distr093'],

            // Distr094 (Yauli)
            ['idEstablecimiento' => 'ESTAB279', 'nombreEstablecimiento' => 'Pancan', 'idDistrito' => 'Distr094'],
            ['idEstablecimiento' => 'ESTAB280', 'nombreEstablecimiento' => 'Ricran', 'idDistrito' => 'Distr094'],
            ['idEstablecimiento' => 'ESTAB281', 'nombreEstablecimiento' => 'San Pedro de Chunan', 'idDistrito' => 'Distr094'],
            ['idEstablecimiento' => 'ESTAB282', 'nombreEstablecimiento' => 'Yauli - Jauja', 'idDistrito' => 'Distr094'],

            // Distr095 (Acolla)
            ['idEstablecimiento' => 'ESTAB283', 'nombreEstablecimiento' => 'Acolla', 'idDistrito' => 'Distr095'],
            ['idEstablecimiento' => 'ESTAB284', 'nombreEstablecimiento' => 'El Tingo', 'idDistrito' => 'Distr095'],
            ['idEstablecimiento' => 'ESTAB285', 'nombreEstablecimiento' => 'Pachascucho', 'idDistrito' => 'Distr095'],
            ['idEstablecimiento' => 'ESTAB286', 'nombreEstablecimiento' => 'Sacas', 'idDistrito' => 'Distr095'],
            ['idEstablecimiento' => 'ESTAB287', 'nombreEstablecimiento' => 'Tingo Paccha', 'idDistrito' => 'Distr095'],
            ['idEstablecimiento' => 'ESTAB288', 'nombreEstablecimiento' => 'Yanamarca', 'idDistrito' => 'Distr095'],

            // Distr096 (Marco)
            ['idEstablecimiento' => 'ESTAB289', 'nombreEstablecimiento' => 'Marco', 'idDistrito' => 'Distr096'],

            // Distr097 (Pomacancha)
            ['idEstablecimiento' => 'ESTAB290', 'nombreEstablecimiento' => 'Armonia', 'idDistrito' => 'Distr097'],
            ['idEstablecimiento' => 'ESTAB291', 'nombreEstablecimiento' => 'Casablanca', 'idDistrito' => 'Distr097'],
            ['idEstablecimiento' => 'ESTAB292', 'nombreEstablecimiento' => 'Chuquishuari', 'idDistrito' => 'Distr097'],
            ['idEstablecimiento' => 'ESTAB293', 'nombreEstablecimiento' => 'Pomacancha', 'idDistrito' => 'Distr097'],

            // Distr098 (Tunan Marca)
            ['idEstablecimiento' => 'ESTAB294', 'nombreEstablecimiento' => 'Tunan Marca', 'idDistrito' => 'Distr098'],

            // Distr099 (Jauja)
            ['idEstablecimiento' => 'ESTAB295', 'nombreEstablecimiento' => 'Hospital Domingo Olavegoya', 'idDistrito' => 'Distr099'],

            // Distr100 (Yauyos)
            ['idEstablecimiento' => 'ESTAB296', 'nombreEstablecimiento' => 'Centro Penitenciario La Oroya', 'idDistrito' => 'Distr100'],
            ['idEstablecimiento' => 'ESTAB297', 'nombreEstablecimiento' => 'Hospital Domingo Olavegoya', 'idDistrito' => 'Distr100'],
            ['idEstablecimiento' => 'ESTAB298', 'nombreEstablecimiento' => 'Posta Médica Corpacancha', 'idDistrito' => 'Distr100'],

            // Distr101 (Ulcumayo)
            ['idEstablecimiento' => 'ESTAB299', 'nombreEstablecimiento' => 'Raymondi', 'idDistrito' => 'Distr101'],

            // Distr102 (Carhuamayo)
            ['idEstablecimiento' => 'ESTAB300', 'nombreEstablecimiento' => 'Carhuamayo', 'idDistrito' => 'Distr102'],

            // Distr103 (Junín)
            ['idEstablecimiento' => 'ESTAB301', 'nombreEstablecimiento' => 'Huayre', 'idDistrito' => 'Distr103'],

            // Distr104 (Ulcumayo)
            ['idEstablecimiento' => 'ESTAB302', 'nombreEstablecimiento' => 'Carapacho', 'idDistrito' => 'Distr104'],
            ['idEstablecimiento' => 'ESTAB303', 'nombreEstablecimiento' => 'Jachahuanca', 'idDistrito' => 'Distr104'],
            ['idEstablecimiento' => 'ESTAB304', 'nombreEstablecimiento' => 'LLaupi', 'idDistrito' => 'Distr104'],
            ['idEstablecimiento' => 'ESTAB305', 'nombreEstablecimiento' => 'Puyay', 'idDistrito' => 'Distr104'],

            // Distr105 (Junín)
            ['idEstablecimiento' => 'ESTAB306', 'nombreEstablecimiento' => 'Sasicucho', 'idDistrito' => 'Distr105'],

            // Distr106 (Ondores)
            ['idEstablecimiento' => 'ESTAB307', 'nombreEstablecimiento' => 'Ondores', 'idDistrito' => 'Distr106'],
            ['idEstablecimiento' => 'ESTAB308', 'nombreEstablecimiento' => 'Pari', 'idDistrito' => 'Distr106'],

            // Distr107 (Ulcumayo)
            ['idEstablecimiento' => 'ESTAB309', 'nombreEstablecimiento' => 'Shalacancha', 'idDistrito' => 'Distr107'],

            // Distr108 (Ulcumayo)
            ['idEstablecimiento' => 'ESTAB310', 'nombreEstablecimiento' => 'Piscurruray', 'idDistrito' => 'Distr108'],
            ['idEstablecimiento' => 'ESTAB311', 'nombreEstablecimiento' => 'Quilcatacta', 'idDistrito' => 'Distr108'],
            ['idEstablecimiento' => 'ESTAB312', 'nombreEstablecimiento' => 'Tambos', 'idDistrito' => 'Distr108'],
            ['idEstablecimiento' => 'ESTAB313', 'nombreEstablecimiento' => 'Ulcumayo', 'idDistrito' => 'Distr108'],

            // Distr109 (Junín)
            ['idEstablecimiento' => 'ESTAB314', 'nombreEstablecimiento' => 'De apoyo Junín', 'idDistrito' => 'Distr109'],

            // Distr110 (Chacapalpa)
            ['idEstablecimiento' => 'ESTAB315', 'nombreEstablecimiento' => 'Chacapalpa', 'idDistrito' => 'Distr110'],

            //Distr111 (Huay-Huay)
            ['idEstablecimiento' => 'ESTAB316', 'nombreEstablecimiento' => 'Huay-Huay', 'idDistrito' => 'Distr110'],

            //Distr112 (La Oroya)
            ['idEstablecimiento' => 'ESTAB317', 'nombreEstablecimiento' => 'Chacapalpa', 'idDistrito' => 'Distr112'],
            ['idEstablecimiento' => 'ESTAB318', 'nombreEstablecimiento' => 'Huari', 'idDistrito' => 'Distr112'],
            ['idEstablecimiento' => 'ESTAB319', 'nombreEstablecimiento' => 'Huaynacancha', 'idDistrito' => 'Distr112'],
            ['idEstablecimiento' => 'ESTAB320', 'nombreEstablecimiento' => 'La Oroya', 'idDistrito' => 'Distr112'],
            ['idEstablecimiento' => 'ESTAB321', 'nombreEstablecimiento' => 'Morococha', 'idDistrito' => 'Distr112'],
            ['idEstablecimiento' => 'ESTAB322', 'nombreEstablecimiento' => 'Yauli-La Oroya', 'idDistrito' => 'Distr112'],

            //Distr113 (Marcapomacocha)
            ['idEstablecimiento' => 'ESTAB323', 'nombreEstablecimiento' => 'Marcapomacocha', 'idDistrito' => 'Distr113'],

            //Distr114 (Morococha)
            ['idEstablecimiento' => 'ESTAB324', 'nombreEstablecimiento' => 'Morococha', 'idDistrito' => 'Distr110'],
            ['idEstablecimiento' => 'ESTAB325', 'nombreEstablecimiento' => 'San Francisco de Asis de Pucará', 'idDistrito' => 'Distr110'],

            //Distr115 (Paccha)
            ['idEstablecimiento' => 'ESTAB326', 'nombreEstablecimiento' => 'Paccha - La Oroya', 'idDistrito' => 'Distr115'],

            //Distr116 (Santa Rosa de Sacco)
            ['idEstablecimiento' => 'ESTAB327', 'nombreEstablecimiento' => 'Juan Pablo II', 'idDistrito' => 'Distr116'],
            ['idEstablecimiento' => 'ESTAB328', 'nombreEstablecimiento' => 'Santa Rosa de Saco', 'idDistrito' => 'Distr116'],

            //Distr117 (Suitucancha)
            ['idEstablecimiento' => 'ESTAB329', 'nombreEstablecimiento' => 'Suitucancha', 'idDistrito' => 'Distr117'],

            //Distr118 (Yauli)
            ['idEstablecimiento' => 'ESTAB330', 'nombreEstablecimiento' => 'Yauli - La Oroya', 'idDistrito' => 'Distr118'],

            //Distr119 (Santa Bárbara De Carhuacayan)
            ['idEstablecimiento' => 'ESTAB331', 'nombreEstablecimiento' => 'Santa Bárbara De Carhuacayan', 'idDistrito' => 'Distr119'],

            //Distr120 (Pangoa)
            ['idEstablecimiento' => 'ESTAB332', 'nombreEstablecimiento' => 'Matereni', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB333', 'nombreEstablecimiento' => 'Jerusalén de Miñaro de Nomestsiguenga', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB334', 'nombreEstablecimiento' => 'Santa Cruz de Anapati', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB335', 'nombreEstablecimiento' => 'Alto Chichireni', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB336', 'nombreEstablecimiento' => 'Cubantia', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB337', 'nombreEstablecimiento' => 'Libertad de Anapati', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB338', 'nombreEstablecimiento' => 'Campirushari', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB339', 'nombreEstablecimiento' => 'Mazaroniquiari', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB340', 'nombreEstablecimiento' => 'San Juan de Sangareni', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB341', 'nombreEstablecimiento' => 'Puerto Porvenir', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB342', 'nombreEstablecimiento' => 'Boca Kiatari', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB343', 'nombreEstablecimiento' => 'Puerto Anapati', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB344', 'nombreEstablecimiento' => 'Fortaleza', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB345', 'nombreEstablecimiento' => 'Maveni', 'idDistrito' => 'Distr120'],
            ['idEstablecimiento' => 'ESTAB346', 'nombreEstablecimiento' => 'San Juan de Pueblo Libre', 'idDistrito' => 'Distr120'],

            //Distr121 (Pangoa)
            ['idEstablecimiento' => 'ESTAB347', 'nombreEstablecimiento' => 'San Jerónimo', 'idDistrito' => 'Distr121'],
            ['idEstablecimiento' => 'ESTAB348', 'nombreEstablecimiento' => 'Santa Elena', 'idDistrito' => 'Distr121'],
            ['idEstablecimiento' => 'ESTAB349', 'nombreEstablecimiento' => 'Ciudad de Dios', 'idDistrito' => 'Distr121'],
            ['idEstablecimiento' => 'ESTAB350', 'nombreEstablecimiento' => 'San Antonio de Sonomoro', 'idDistrito' => 'Distr121'],
            ['idEstablecimiento' => 'ESTAB351', 'nombreEstablecimiento' => 'Centro Saureni', 'idDistrito' => 'Distr121'],
            ['idEstablecimiento' => 'ESTAB352', 'nombreEstablecimiento' => 'Los Manantiales', 'idDistrito' => 'Distr121'],
            ['idEstablecimiento' => 'ESTAB353', 'nombreEstablecimiento' => 'Naylam de Sonomoro', 'idDistrito' => 'Distr121'],
            ['idEstablecimiento' => 'ESTAB354', 'nombreEstablecimiento' => 'Los Ángeles de Edén', 'idDistrito' => 'Distr121'],

            //Distr122 (Pangoa)
            ['idEstablecimiento' => 'ESTAB355', 'nombreEstablecimiento' => 'San Ramón de Pangoa', 'idDistrito' => 'Distr122'],
            ['idEstablecimiento' => 'ESTAB356', 'nombreEstablecimiento' => 'Vilcabamba', 'idDistrito' => 'Distr122'],
            ['idEstablecimiento' => 'ESTAB357', 'nombreEstablecimiento' => 'San José de Miraflores', 'idDistrito' => 'Distr122'],
            ['idEstablecimiento' => 'ESTAB358', 'nombreEstablecimiento' => 'Villa María', 'idDistrito' => 'Distr122'],
            ['idEstablecimiento' => 'ESTAB359', 'nombreEstablecimiento' => 'Chavini', 'idDistrito' => 'Distr122'],
            ['idEstablecimiento' => 'ESTAB360', 'nombreEstablecimiento' => 'Alto Kiatari', 'idDistrito' => 'Distr122'],
            ['idEstablecimiento' => 'ESTAB361', 'nombreEstablecimiento' => 'Santa Rosa Alto Kiatari', 'idDistrito' => 'Distr122'],
            ['idEstablecimiento' => 'ESTAB362', 'nombreEstablecimiento' => 'Unión Chavini', 'idDistrito' => 'Distr122'],

            //Distr123 (Pangoa)
            ['idEstablecimiento' => 'ESTAB363', 'nombreEstablecimiento' => 'San Martin de Pangoa', 'idDistrito' => 'Distr123'],

            //Distr124 (LLaylla)
            ['idEstablecimiento' => 'ESTAB364', 'nombreEstablecimiento' => 'Belen', 'idDistrito' => 'Distr124'],
            ['idEstablecimiento' => 'ESTAB365', 'nombreEstablecimiento' => 'Llaylla', 'idDistrito' => 'Distr124'],
            ['idEstablecimiento' => 'ESTAB366', 'nombreEstablecimiento' => 'Hermosa Pampa', 'idDistrito' => 'Distr124'],

            //Distr125 (Mazamari)
            ['idEstablecimiento' => 'ESTAB367', 'nombreEstablecimiento' => 'Comunidad nativa de Panga', 'idDistrito' => 'Distr125'],
            ['idEstablecimiento' => 'ESTAB368', 'nombreEstablecimiento' => 'Mazamari', 'idDistrito' => 'Distr125'],
            ['idEstablecimiento' => 'ESTAB369', 'nombreEstablecimiento' => 'Villa Progeso de Eden', 'idDistrito' => 'Distr125'],
            ['idEstablecimiento' => 'ESTAB370', 'nombreEstablecimiento' => 'Teoria', 'idDistrito' => 'Distr125'],
            ['idEstablecimiento' => 'ESTAB371', 'nombreEstablecimiento' => 'Buenos Aires - Tziriari', 'idDistrito' => 'Distr125'],
            ['idEstablecimiento' => 'ESTAB372', 'nombreEstablecimiento' => 'Gloriabamba', 'idDistrito' => 'Distr125'],
            ['idEstablecimiento' => 'ESTAB373', 'nombreEstablecimiento' => 'Pueblo Libre de Pauriali', 'idDistrito' => 'Distr125'],

            //Distr126 (Pangoa)
            ['idEstablecimiento' => 'ESTAB374', 'nombreEstablecimiento' => 'Tziriari', 'idDistrito' => 'Distr126'],
            ['idEstablecimiento' => 'ESTAB375', 'nombreEstablecimiento' => 'San Cristobal', 'idDistrito' => 'Distr126'],

            //Distr127 (Río Tambo)
            ['idEstablecimiento' => 'ESTAB376', 'nombreEstablecimiento' => 'Santa Rosita de Shirintiari', 'idDistrito' => 'Distr127'],
            ['idEstablecimiento' => 'ESTAB377', 'nombreEstablecimiento' => 'Capitiri', 'idDistrito' => 'Distr127'],
            ['idEstablecimiento' => 'ESTAB378', 'nombreEstablecimiento' => 'Poyeni', 'idDistrito' => 'Distr127'],
            ['idEstablecimiento' => 'ESTAB379', 'nombreEstablecimiento' => 'Boca Chembo', 'idDistrito' => 'Distr127'],
            ['idEstablecimiento' => 'ESTAB380', 'nombreEstablecimiento' => 'Shima', 'idDistrito' => 'Distr127'],
            ['idEstablecimiento' => 'ESTAB381', 'nombreEstablecimiento' => 'Betania', 'idDistrito' => 'Distr127'],
            ['idEstablecimiento' => 'ESTAB382', 'nombreEstablecimiento' => 'Shevoja', 'idDistrito' => 'Distr127'],
            ['idEstablecimiento' => 'ESTAB383', 'nombreEstablecimiento' => 'Cushireni', 'idDistrito' => 'Distr127'],
            ['idEstablecimiento' => 'ESTAB384', 'nombreEstablecimiento' => 'Impanekiari', 'idDistrito' => 'Distr127'],

            //Distr128 (Pangoa)
            ['idEstablecimiento' => 'ESTAB385', 'nombreEstablecimiento' => 'Potsoteni', 'idDistrito' => 'Distr128'],
            ['idEstablecimiento' => 'ESTAB386', 'nombreEstablecimiento' => 'Unión Puerto Ashaninka', 'idDistrito' => 'Distr128'],

            //Distr129 (Río Tambo)
            ['idEstablecimiento' => 'ESTAB387', 'nombreEstablecimiento' => 'Comunidad Nativa Mazaroveni', 'idDistrito' => 'Distr129'],
            ['idEstablecimiento' => 'ESTAB388', 'nombreEstablecimiento' => 'Puerto Ocopa', 'idDistrito' => 'Distr129'],
            ['idEstablecimiento' => 'ESTAB389', 'nombreEstablecimiento' => 'San Miguel de Otica', 'idDistrito' => 'Distr129'],
            ['idEstablecimiento' => 'ESTAB390', 'nombreEstablecimiento' => 'Oviri', 'idDistrito' => 'Distr129'],
            ['idEstablecimiento' => 'ESTAB391', 'nombreEstablecimiento' => 'San Vicente de Canaan', 'idDistrito' => 'Distr129'],
            ['idEstablecimiento' => 'ESTAB392', 'nombreEstablecimiento' => 'Vista Alegre del Valle de Santa Cruz', 'idDistrito' => 'Distr129'],
            ['idEstablecimiento' => 'ESTAB393', 'nombreEstablecimiento' => 'Quiteni', 'idDistrito' => 'Distr129'],
            ['idEstablecimiento' => 'ESTAB394', 'nombreEstablecimiento' => 'Caperusia', 'idDistrito' => 'Distr129'],

            // Distr130 (Coviriali)
            ['idEstablecimiento' => 'ESTAB395', 'nombreEstablecimiento' => 'Buenos Aires', 'idDistrito' => 'Distr130'],
            ['idEstablecimiento' => 'ESTAB396', 'nombreEstablecimiento' => 'Coviriali', 'idDistrito' => 'Distr130'],
            ['idEstablecimiento' => 'ESTAB397', 'nombreEstablecimiento' => 'Santa Maria', 'idDistrito' => 'Distr130'],
            ['idEstablecimiento' => 'ESTAB398', 'nombreEstablecimiento' => 'Palmapampa', 'idDistrito' => 'Distr130'],
            ['idEstablecimiento' => 'ESTAB399', 'nombreEstablecimiento' => 'San Pedro', 'idDistrito' => 'Distr130'],

            // Distr131 (Pampa Hermosa)
            ['idEstablecimiento' => 'ESTAB400', 'nombreEstablecimiento' => 'Mariposa', 'idDistrito' => 'Distr131'],
            ['idEstablecimiento' => 'ESTAB401', 'nombreEstablecimiento' => 'Santa Rosita', 'idDistrito' => 'Distr131'],
            ['idEstablecimiento' => 'ESTAB402', 'nombreEstablecimiento' => 'Pampa Mandarina', 'idDistrito' => 'Distr131'],
            ['idEstablecimiento' => 'ESTAB403', 'nombreEstablecimiento' => 'Toldopampa', 'idDistrito' => 'Distr131'],
            ['idEstablecimiento' => 'ESTAB404', 'nombreEstablecimiento' => 'Huancamachay', 'idDistrito' => 'Distr131'],

            // Distr132 (Pampa Hermosa)
            ['idEstablecimiento' => 'ESTAB405', 'nombreEstablecimiento' => 'Rio Negro', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB406', 'nombreEstablecimiento' => 'Union Capiri', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB407', 'nombreEstablecimiento' => 'Rio Chari Alto', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB408', 'nombreEstablecimiento' => 'Union Cuviriaki', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB409', 'nombreEstablecimiento' => 'Puente Ipoki', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB410', 'nombreEstablecimiento' => 'San Juan de Cheni', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB411', 'nombreEstablecimiento' => 'Pitocuna', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB412', 'nombreEstablecimiento' => 'Miguel Grau', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB413', 'nombreEstablecimiento' => 'Alto Pitocuna', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB414', 'nombreEstablecimiento' => 'Villa Capiri', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB415', 'nombreEstablecimiento' => 'Alto Villa Victoria', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB416', 'nombreEstablecimiento' => 'Huahuari', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB417', 'nombreEstablecimiento' => 'Cushiviani', 'idDistrito' => 'Distr132'],
            ['idEstablecimiento' => 'ESTAB418', 'nombreEstablecimiento' => 'Shabashipango', 'idDistrito' => 'Distr132'],

            // Distr133 (Pampa Hermosa)
            ['idEstablecimiento' => 'ESTAB419', 'nombreEstablecimiento' => 'Aoti', 'idDistrito' => 'Distr133'],
            ['idEstablecimiento' => 'ESTAB420', 'nombreEstablecimiento' => 'Chontakiari', 'idDistrito' => 'Distr133'],

            // Distr134 (Satipo)
            ['idEstablecimiento' => 'ESTAB421', 'nombreEstablecimiento' => 'Palmapampa', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB422', 'nombreEstablecimiento' => 'Comunidad Nativa Shanqui', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB423', 'nombreEstablecimiento' => 'Rio Venado', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB424', 'nombreEstablecimiento' => 'Huantashiri', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB425', 'nombreEstablecimiento' => 'Paratushali', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB426', 'nombreEstablecimiento' => 'Santo Dgo de Marankiari', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB427', 'nombreEstablecimiento' => 'Sanibeni', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB428', 'nombreEstablecimiento' => 'Bajo Capiro', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB429', 'nombreEstablecimiento' => 'Bella Esperanza', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB430', 'nombreEstablecimiento' => 'Canaan del Norte', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB431', 'nombreEstablecimiento' => 'Aoti', 'idDistrito' => 'Distr134'],
            ['idEstablecimiento' => 'ESTAB432', 'nombreEstablecimiento' => 'Alto Paureli', 'idDistrito' => 'Distr134'],

            // Distr135 (Pangoa)
            ['idEstablecimiento' => 'ESTAB433', 'nombreEstablecimiento' => 'Micaela Bastidas Morales', 'idDistrito' => 'Distr135'],

            // Distr136 (Río Tambo)
            ['idEstablecimiento' => 'ESTAB434', 'nombreEstablecimiento' => 'Quempiri', 'idDistrito' => 'Distr136'],
            ['idEstablecimiento' => 'ESTAB435', 'nombreEstablecimiento' => 'Puerto Roca', 'idDistrito' => 'Distr136'],
            ['idEstablecimiento' => 'ESTAB436', 'nombreEstablecimiento' => 'San Carlos Alto Ene', 'idDistrito' => 'Distr136'],
            ['idEstablecimiento' => 'ESTAB437', 'nombreEstablecimiento' => 'Fe y Alegría La Primavera', 'idDistrito' => 'Distr136'],
            ['idEstablecimiento' => 'ESTAB438', 'nombreEstablecimiento' => 'Yaviro', 'idDistrito' => 'Distr136'],
            ['idEstablecimiento' => 'ESTAB439', 'nombreEstablecimiento' => 'Cutivireni', 'idDistrito' => 'Distr136'],
            ['idEstablecimiento' => 'ESTAB440', 'nombreEstablecimiento' => 'Selva de Oro', 'idDistrito' => 'Distr136'],
            ['idEstablecimiento' => 'ESTAB441', 'nombreEstablecimiento' => 'Valle Esmeralda', 'idDistrito' => 'Distr136'],
            ['idEstablecimiento' => 'ESTAB442', 'nombreEstablecimiento' => 'Boca Mantaro', 'idDistrito' => 'Distr136'],

            // Distr137 (Vizcatán del Ene)
            ['idEstablecimiento' => 'ESTAB443', 'nombreEstablecimiento' => 'Boca Mantaro', 'idDistrito' => 'Distr137'],
            ['idEstablecimiento' => 'ESTAB444', 'nombreEstablecimiento' => 'Tunontuari Rio Ene', 'idDistrito' => 'Distr137'],
            ['idEstablecimiento' => 'ESTAB445', 'nombreEstablecimiento' => 'San Juan de Mantaro', 'idDistrito' => 'Distr137'],
            ['idEstablecimiento' => 'ESTAB446', 'nombreEstablecimiento' => 'San Miguel de Ene Shinpinshariato', 'idDistrito' => 'Distr137'],
            ['idEstablecimiento' => 'ESTAB447', 'nombreEstablecimiento' => 'Florida', 'idDistrito' => 'Distr137'],

            // Distr138 (Satipo)
            ['idEstablecimiento' => 'ESTAB448', 'nombreEstablecimiento' => 'De Apoyo Manuel Higa Arakaki', 'idDistrito' => 'Distr138'],
            ['idEstablecimiento' => 'ESTAB449', 'nombreEstablecimiento' => 'Medicentro Arcángel - Satipo', 'idDistrito' => 'Distr138'],
            ['idEstablecimiento' => 'ESTAB450', 'nombreEstablecimiento' => 'Área de Salud del EP Río Negro', 'idDistrito' => 'Distr138'],

            // Distr139 (San Pedro de Cajas)
            ['idEstablecimiento' => 'ESTAB451', 'nombreEstablecimiento' => 'Acancocha', 'idDistrito' => 'Distr139'],
            ['idEstablecimiento' => 'ESTAB452', 'nombreEstablecimiento' => 'Yanec', 'idDistrito' => 'Distr139'],

            // Distr140 (Acobamba)
            ['idEstablecimiento' => 'ESTAB453', 'nombreEstablecimiento' => 'Collpa', 'idDistrito' => 'Distr140'],
            ['idEstablecimiento' => 'ESTAB454', 'nombreEstablecimiento' => 'Picoy', 'idDistrito' => 'Distr140'],
            ['idEstablecimiento' => 'ESTAB455', 'nombreEstablecimiento' => 'Acobamba', 'idDistrito' => 'Distr140'],
            ['idEstablecimiento' => 'ESTAB456', 'nombreEstablecimiento' => 'Huaylahuichan', 'idDistrito' => 'Distr140'],

            // Distr141 (Palcamayo)
            ['idEstablecimiento' => 'ESTAB457', 'nombreEstablecimiento' => 'Ricrican Cauquiran', 'idDistrito' => 'Distr141'],
            ['idEstablecimiento' => 'ESTAB458', 'nombreEstablecimiento' => 'Calca', 'idDistrito' => 'Distr141'],
            ['idEstablecimiento' => 'ESTAB459', 'nombreEstablecimiento' => 'Palcamayo', 'idDistrito' => 'Distr141'],
            ['idEstablecimiento' => 'ESTAB460', 'nombreEstablecimiento' => 'Yanapuquio', 'idDistrito' => 'Distr141'],

            // Distr142 (San Pedro de Cajas)
            ['idEstablecimiento' => 'ESTAB461', 'nombreEstablecimiento' => 'San Jose de Cayash', 'idDistrito' => 'Distr142'],
            ['idEstablecimiento' => 'ESTAB462', 'nombreEstablecimiento' => 'San Pedro de Cajas', 'idDistrito' => 'Distr142'],

            // Distr143 (Huasahuasi)
            ['idEstablecimiento' => 'ESTAB463', 'nombreEstablecimiento' => 'Chiras', 'idDistrito' => 'Distr143'],
            ['idEstablecimiento' => 'ESTAB464', 'nombreEstablecimiento' => 'Huasahuasi', 'idDistrito' => 'Distr143'],
            ['idEstablecimiento' => 'ESTAB465', 'nombreEstablecimiento' => 'Casca', 'idDistrito' => 'Distr143'],
            ['idEstablecimiento' => 'ESTAB466', 'nombreEstablecimiento' => 'Tiambra', 'idDistrito' => 'Distr143'],
            ['idEstablecimiento' => 'ESTAB467', 'nombreEstablecimiento' => 'San Juan de la Libertad', 'idDistrito' => 'Distr143'],
            ['idEstablecimiento' => 'ESTAB468', 'nombreEstablecimiento' => 'Punray', 'idDistrito' => 'Distr143'],
            ['idEstablecimiento' => 'ESTAB469', 'nombreEstablecimiento' => 'Huacuas', 'idDistrito' => 'Distr143'],

            // Distr144 (Palca)
            ['idEstablecimiento' => 'ESTAB470', 'nombreEstablecimiento' => 'Palca', 'idDistrito' => 'Distr144'],
            ['idEstablecimiento' => 'ESTAB471', 'nombreEstablecimiento' => 'Carpapata', 'idDistrito' => 'Distr144'],
            ['idEstablecimiento' => 'ESTAB472', 'nombreEstablecimiento' => 'Chipocayo', 'idDistrito' => 'Distr144'],
            ['idEstablecimiento' => 'ESTAB473', 'nombreEstablecimiento' => 'Yaroca', 'idDistrito' => 'Distr144'],
            ['idEstablecimiento' => 'ESTAB474', 'nombreEstablecimiento' => 'Huaripampa', 'idDistrito' => 'Distr144'],
            ['idEstablecimiento' => 'ESTAB475', 'nombreEstablecimiento' => 'Ñahuin', 'idDistrito' => 'Distr144'],

            // Distr145 (Tapo)
            ['idEstablecimiento' => 'ESTAB476', 'nombreEstablecimiento' => 'Casacoto - San Antonio', 'idDistrito' => 'Distr145'],
            ['idEstablecimiento' => 'ESTAB477', 'nombreEstablecimiento' => 'Pacchac', 'idDistrito' => 'Distr145'],
            ['idEstablecimiento' => 'ESTAB478', 'nombreEstablecimiento' => 'Yuracmayo', 'idDistrito' => 'Distr145'],
            ['idEstablecimiento' => 'ESTAB479', 'nombreEstablecimiento' => 'Maco', 'idDistrito' => 'Distr145'],
            ['idEstablecimiento' => 'ESTAB480', 'nombreEstablecimiento' => 'Tapo', 'idDistrito' => 'Distr145'],
            ['idEstablecimiento' => 'ESTAB481', 'nombreEstablecimiento' => 'Queta', 'idDistrito' => 'Distr145'],
            ['idEstablecimiento' => 'ESTAB482', 'nombreEstablecimiento' => 'Palca', 'idDistrito' => 'Distr145'],

            // Distr146 (Huaricolca)
            ['idEstablecimiento' => 'ESTAB483', 'nombreEstablecimiento' => 'Huaricolca', 'idDistrito' => 'Distr146'],

            // Distr147 (La Unión)
            ['idEstablecimiento' => 'ESTAB484', 'nombreEstablecimiento' => 'La Unión Leticia', 'idDistrito' => 'Distr147'],

            // Distr148 (Tarma)
            ['idEstablecimiento' => 'ESTAB485', 'nombreEstablecimiento' => 'Pomachaca', 'idDistrito' => 'Distr148'],
            ['idEstablecimiento' => 'ESTAB486', 'nombreEstablecimiento' => 'Misarurasha', 'idDistrito' => 'Distr148'],
            ['idEstablecimiento' => 'ESTAB487', 'nombreEstablecimiento' => 'Vicora Congas', 'idDistrito' => 'Distr148'],
            ['idEstablecimiento' => 'ESTAB488', 'nombreEstablecimiento' => 'Tarmatambo', 'idDistrito' => 'Distr148'],
            ['idEstablecimiento' => 'ESTAB489', 'nombreEstablecimiento' => 'Cochas', 'idDistrito' => 'Distr148'],
            ['idEstablecimiento' => 'ESTAB490', 'nombreEstablecimiento' => 'Carhuacatac', 'idDistrito' => 'Distr148'],
            ['idEstablecimiento' => 'ESTAB491', 'nombreEstablecimiento' => 'Muylo', 'idDistrito' => 'Distr148'],
            ['idEstablecimiento' => 'ESTAB492', 'nombreEstablecimiento' => 'Mullucro', 'idDistrito' => 'Distr148'],

            // Distr149 (Tarma)
            ['idEstablecimiento' => 'ESTAB493', 'nombreEstablecimiento' => 'De Apoyo Felix Mayorca Soto', 'idDistrito' => 'Distr149'],
        ];
        
        foreach ($establecimientos as $establecimiento) {
            Establecimiento::create($establecimiento);
        }
    }
}
