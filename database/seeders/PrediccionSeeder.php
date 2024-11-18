<?php

namespace Database\Seeders;

use App\Models\Prediccion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DosajeController;

class PrediccionSeeder extends Seeder
{
    public function run(): void
    {
        // Asegúrate de que la API esté activa antes de ejecutar este seeder
        $dosajesCompletos = DB::table('vw_DosajesCompletos')
            ->orderBy('idDosaje')
            ->get();

        $dosajeController = new DosajeController();

        foreach ($dosajesCompletos as $dosaje) {
            if ($dosaje->estadoRecuperacion_Dosaje === 0) { // Solo procesar los casos no recuperados
                $this->crearPrediccion($dosaje, $dosajeController);
            }
        }
    }

    private function crearPrediccion($dosaje, DosajeController $dosajeController): void
    {
        $idPrediccion = $dosajeController->generarIdPrediccion();
        
        $apiResponse = $this->obtenerRespuestaApi($dosaje, $dosajeController);
        $diasRecuperacion = $this->calcularDiasRecuperacion($dosaje, $apiResponse, $dosajeController);
        $fechaRecuperacion = $dosajeController->returnFechaRecuperacionByDiasRecuperacionIdHijo($diasRecuperacion, $dosaje->idHijo);

        $prediccion = [
            'idPrediccion' => $idPrediccion,
            'idDosaje' => $dosaje->idDosaje,
            'valorHemoglobinaEstimado1_Prediccion' => $apiResponse['prediccion_1mes'],
            'valorHemoglobinaEstimado3_Prediccion' => $apiResponse['prediccion_3mes'],
            'valorHemoglobinaEstimado6_Prediccion' => $apiResponse['prediccion_6mes'],
            'precisionHemoglobina1' => $apiResponse['porcPrecision1'],
            'precisionHemoglobina3' => $apiResponse['porcPrecision3'],
            'precisionHemoglobina6' => $apiResponse['porcPrecision6'],
            'fechaRecuperacionEstimada_Prediccion' => $fechaRecuperacion,
            'diasRecuperacion_Prediccion' => $diasRecuperacion,
        ];

        Prediccion::create($prediccion);
    }

    private function obtenerRespuestaApi($dosaje, DosajeController $controller): array
    {
        return $controller->returnApiResponseHemoglobina(
            $dosaje->valorHemoglobina_Dosaje,
            $dosaje->nivelAnemia_Dosaje,
            $dosaje->peso_Dosaje,
            $dosaje->talla_Dosaje,
            $dosaje->sexo_Hijo,
            $dosaje->edadMeses_Dosaje,
            $dosaje->nivelHierro_Dosaje,
            $dosaje->nombreProvincia,
            $dosaje->alturaProvincia
        );
    }

    private function calcularDiasRecuperacion($dosaje, array $apiResponse, DosajeController $controller): int
    {
        $nombreDistrito = $controller->returnNombreDistritoByIdDosaje($dosaje->idDosaje);

        $apiResponseDiasRecuperacion = $controller->returnApiResponseDiasRecuperacion(
            $dosaje->valorHemoglobina_Dosaje,
            $apiResponse['prediccion_1mes'],
            $apiResponse['prediccion_3mes'],
            $apiResponse['prediccion_6mes'],
            $dosaje->nivelAnemia_Dosaje,
            $dosaje->peso_Dosaje,
            $dosaje->talla_Dosaje,
            $dosaje->sexo_Hijo,
            $dosaje->edadMeses_Dosaje,
            $dosaje->nivelHierro_Dosaje,
            $dosaje->estadoRecuperacion_Dosaje,
            $dosaje->nombreProvincia,
            $nombreDistrito,
            $dosaje->alturaProvincia
        );

        return (int) round($apiResponseDiasRecuperacion['diasRecuperacion']);
    }
}
