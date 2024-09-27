<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PeriodoTratamiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeriodoTratamientoSeeder extends Seeder
{
    public function run(): void
    {
        $periodos_tratamientos = [
            // Hijos de Josué
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0001',
                'idHijo' => '11111111', // Hijo1_Josue
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2021-02-07',
                'fechaFin_PeriodoTratamiento' => '2022-08-07',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0002',
                'idHijo' => '11111112', // Hijo2_Josue
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2021-06-15',
                'fechaFin_PeriodoTratamiento' => '2022-12-15',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0003',
                'idHijo' => '11111113', // Hijo3_Josue
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2023-10-10',
                'fechaFin_PeriodoTratamiento' => '2023-04-10',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0004',
                'idHijo' => '11111114', // Hijo4_Josue
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2024-01-08',
                'fechaFin_PeriodoTratamiento' => '2024-07-08',
            ],

            // Hijos de Milagros
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0005',
                'idHijo' => '22222221', // Hijo1_Milagros
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2021-10-01',
                'fechaFin_PeriodoTratamiento' => '2021-04-30',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0006',
                'idHijo' => '22222222', // Hijo2_Milagros
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2022-12-01',
                'fechaFin_PeriodoTratamiento' => '2022-06-30',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0007',
                'idHijo' => '22222223', // Hijo3_Milagros
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2023-01-01',
                'fechaFin_PeriodoTratamiento' => '2023-07-01',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0008',
                'idHijo' => '22222224', // Hijo4_Milagros
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2024-01-15',
                'fechaFin_PeriodoTratamiento' => '2024-07-15',
            ],

            // Hijos de Jaci
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0009',
                'idHijo' => '33333331', // Hijo1_Jaci
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2025-08-07',
                'fechaFin_PeriodoTratamiento' => '2020-02-06',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0010',
                'idHijo' => '33333332', // Hijo2_Jaci
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2026-05-13',
                'fechaFin_PeriodoTratamiento' => '2021-11-12',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0011',
                'idHijo' => '33333333', // Hijo3_Jaci
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2027-11-24',
                'fechaFin_PeriodoTratamiento' => '2022-05-23',
            ],
            [
                'idPeriodoTratamiento' => 'PERIODTRAT-0012',
                'idHijo' => '33333334', // Hijo4_Jaci
                'fechaDiagnosticoAnemia_PeriodoTratamiento' => '2028-07-20',
                'fechaFin_PeriodoTratamiento' => '2023-01-19',
            ],
        ];

        foreach ($periodos_tratamientos as $periodo_tratamiento) {
            PeriodoTratamiento::create($periodo_tratamiento);
        }

        // Genera 988 periodos usando el factory para llegar al total de 1000
        PeriodoTratamiento::factory(988)->create();
    }
}
