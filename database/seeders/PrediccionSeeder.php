<?php

namespace Database\Seeders;

use App\Models\Dosaje;
use App\Models\Prediccion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\DosajeController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrediccionSeeder extends Seeder
{
    public function run(): void
    {
        // Se necesita encender la API antes de correr este seeder
        $dosajesCompletos = DB::table('vw_DosajesCompletos')
                                ->orderBy('idDosaje', 'asc') // Ordenar de manera ascendente por el campo 'id'
                                ->get();
        $dosajeController = new DosajeController();

        foreach ($dosajesCompletos as $dosaje) {
            if ($dosaje->estadoRecuperacion_Dosaje == 0) { // No recuperado
                $idPrediccion = $dosajeController->generarIdPrediccion();
                $apiResponse = $dosajeController->returnApiResponse($dosaje->valorHemoglobina_Dosaje,
                                                                    $dosaje->nivelAnemia_Dosaje,
                                                                    $dosaje->peso_Dosaje,
                                                                    $dosaje->talla_Dosaje,
                                                                    $dosaje->sexo_Hijo, 
                                                                    $dosaje->edadMeses_Dosaje,
                                                                    $dosaje->nivelHierro_Dosaje,
                                                                    $dosaje->nombreProvincia,
                                                                    $dosaje->alturaProvincia);
    
                $prediccion =  ['idPrediccion' => $idPrediccion, 
                                'idDosaje'=> $dosaje->idDosaje, 
                                'valorHemoglobinaEstimado1_Prediccion' => $apiResponse['prediccion_1mes'], 
                                'valorHemoglobinaEstimado3_Prediccion' => $apiResponse['prediccion_3mes'], 
                                'valorHemoglobinaEstimado6_Prediccion' => $apiResponse['prediccion_6mes'],
                                'precisionHemoglobina1' => $apiResponse['porcPrecision1'],
                                'precisionHemoglobina3' => $apiResponse['porcPrecision3'], 
                                'precisionHemoglobina6' => $apiResponse['porcPrecision6']
                               ];
    
                Prediccion::create($prediccion);
            }
        }
    }
}
