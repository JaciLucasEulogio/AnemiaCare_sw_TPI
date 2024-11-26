<?php

namespace App\Http\Controllers;

use App\Models\Dosaje;
use GuzzleHttp\Client;
use App\Models\Distrito;
use App\Models\Prediccion;
use Illuminate\Http\Request;
use App\Models\Establecimiento;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class DosajeController extends Controller
{
    public function returnNombreDistritoByIdDosaje($idDosaje) {
        // Obtener el establecimiento donde se realizó el dosaje
        $idEstablecimiento = Dosaje::where('idDosaje', $idDosaje)->pluck('idEstablecimiento');
        // Obtener a qué distrito pertenece el establecimiento
        $idDistrito = Establecimiento::where('idEstablecimiento', $idEstablecimiento)->pluck('idDistrito');
        // Obtener el nombre del distrito
        $nombreDistrito = Distrito::where('idDistrito', $idDistrito)->pluck('nombreDistrito')->first();

        return $nombreDistrito;
    }

    public function returnFechaRecuperacionByDiasRecuperacionIdHijo($diasRecuperacion, $idHijo) {
        // Obtener la fecha del dosaje más antiguo usando el idHijo
        $fechaDosaje = Dosaje::where('idHijo', $idHijo)->min('fecha_Dosaje'); // Esto obtiene la fecha más antigua directamente
    
        // Manejo de error: si no se encuentra el dosaje
        if (!$fechaDosaje) {
            throw new \Exception('No se encontró el dosaje para el ID hijo proporcionado.');
        }
    
        // Convertir la fecha obtenida a un objeto DateTime
        $fechaDosaje = new \DateTime($fechaDosaje);
        
        // Modificar la fecha para sumar los días de recuperación
        $fechaRecuperacion = $fechaDosaje->modify("+$diasRecuperacion days");
    
        // Devolver la fecha de recuperación formateada
        return $fechaRecuperacion->format('Y-m-d'); // Puedes cambiar el formato si es necesario
    }

    public function returnApiResponseHemoglobina($hemoglobina, $nivelAnemia, $peso, $talla, $sexo, $edadMeses,
                                      $nivelHierro, $nombreProvincia, $alturaProvincia) {
        // Enviar datos a la API
        $client = new Client(['base_uri' => env('API_URL') . '/']);
        $dataToSend = [
            'hemoglobina' => $hemoglobina,
            'nivelAnemia_Dosaje' => $nivelAnemia,
            'peso_Dosaje' => $peso,
            'talla_Dosaje' => $talla,
            'sexo_Hijo' => $sexo,
            'edadMeses_Dosaje' => $edadMeses,
            'nivelHierro_Dosaje' => $nivelHierro,
            'nombreProvincia' => $nombreProvincia,
            'alturaProvincia' => $alturaProvincia,
        ];

        // Realizar la petición POST a la API
        $response = $client->request('POST', 'predictHemoglobina', [
            'json' => $dataToSend,
            'headers' => [
                'Authorization' => env('API_AUTH_TOKEN'),
                'ngrok-skip-browser-warning' => 'true',
            ],
        ]);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Error al enviar datos a la API');
        }

        // Procesar la respuesta de la API
        $apiResponse = json_decode($response->getBody(), true);

        return $apiResponse;
    }

    public function returnApiResponseDiasRecuperacion($hemoglobina, $prediccion_1mes, $prediccion_3mes, $prediccion_6mes, $nivelAnemia_Dosaje, 
                                                      $peso_Dosaje, $talla_Dosaje, $sexo_Hijo, $edadMeses_Dosaje, $nivelHierro_Dosaje, 
                                                      $estadoRecuperacion_Dosaje, $nombreProvincia, $nombreDistrito, $alturaProvincia) {
        // Enviar datos a la API
        $client = new Client(['base_uri' => env('API_URL') . '/']);
        $dataToSend = [
            'hemoglobina' => $hemoglobina,
            'prediccion_1mes' => $prediccion_1mes,
            'prediccion_3mes' => $prediccion_3mes,
            'prediccion_6mes' => $prediccion_6mes,
            'nivelAnemia_Dosaje' => $nivelAnemia_Dosaje,
            'peso_Dosaje' => $peso_Dosaje,
            'talla_Dosaje' => $talla_Dosaje,
            'sexo_Hijo' => $sexo_Hijo,
            'edadMeses_Dosaje' => $edadMeses_Dosaje,
            'nivelHierro_Dosaje' => $nivelHierro_Dosaje,
            'estadoRecuperacion_Dosaje' => $estadoRecuperacion_Dosaje,
            'nombreProvincia' => $nombreProvincia,
            'nombreDistrito' => $nombreDistrito,
            'alturaProvincia' => $alturaProvincia,
        ];
        
        // Realizar la petición POST a la API
        $response = $client->request('POST', 'predictFechaRecuperacion', [
            'json' => $dataToSend,
            'headers' => [
                'Authorization' => env('API_AUTH_TOKEN'),
                'ngrok-skip-browser-warning' => 'true',
            ],
        ]);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Error al enviar datos a la API');
        }

        // Procesar la respuesta de la API
        $diasRecuperacion = json_decode($response->getBody(), true);

        return $diasRecuperacion;
    }

    public function returnApiResponseIntervencionAdicional($hemoglobina, $prediccion_1mes, $prediccion_3mes, $prediccion_6mes, $nivelAnemia_Dosaje, 
                                                      $peso_Dosaje, $talla_Dosaje, $sexo_Hijo, $edadMeses_Dosaje, $nivelHierro_Dosaje, 
                                                      $estadoRecuperacion_Dosaje, $nombreProvincia, $nombreDistrito, $alturaProvincia) {
        // Enviar datos a la API
        $client = new Client(['base_uri' => env('API_URL') . '/']);
        $dataToSend = [
            'hemoglobina' => $hemoglobina,
            'prediccion_1mes' => $prediccion_1mes,
            'prediccion_3mes' => $prediccion_3mes,
            'prediccion_6mes' => $prediccion_6mes,
            'nivelAnemia_Dosaje' => $nivelAnemia_Dosaje,
            'peso_Dosaje' => $peso_Dosaje,
            'talla_Dosaje' => $talla_Dosaje,
            'sexo_Hijo' => $sexo_Hijo,
            'edadMeses_Dosaje' => $edadMeses_Dosaje,
            'nivelHierro_Dosaje' => $nivelHierro_Dosaje,
            'estadoRecuperacion_Dosaje' => $estadoRecuperacion_Dosaje,
            'nombreProvincia' => $nombreProvincia,
            'nombreDistrito' => $nombreDistrito,
            'alturaProvincia' => $alturaProvincia,
        ];
        
        // Realizar la petición POST a la API
        $response = $client->request('POST', 'predictIntervencionAdicional', [
            'json' => $dataToSend,
            'headers' => [
                'Authorization' => env('API_AUTH_TOKEN'),
                'ngrok-skip-browser-warning' => 'true',
            ],
        ]);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Error al enviar datos a la API');
        }

        // Procesar la respuesta de la API
        $intervencionAdicionalApiResponse = json_decode($response->getBody(), true);

        return $intervencionAdicionalApiResponse;
    }

    public function store(Request $request) 
    {   
        try {
            // Comenzar una transacción
            DB::beginTransaction();

            // Validar los datos de entrada sin los últimos tres campos
            $validatedData = $request->validate([
                'idDosaje' => 'required|unique:Dosajes,idDosaje',
                'idHijo' => 'required|exists:Hijos,idHijo',
                'idDoctor' => 'required|exists:Doctores,idDoctor',
                'idEstablecimiento' => 'required|exists:Establecimientos,idEstablecimiento',
                'fecha_Dosaje' => 'required',
                'valorHemoglobina_Dosaje' => 'required|numeric|min:0',
                'nivelAnemia_Dosaje' => 'required',
                'peso_Dosaje' => 'required|numeric|min:0',
                'talla_Dosaje' => 'required|numeric|min:0',
                'edadMeses_Dosaje' => 'required|integer|min:0',
                'nivelHierro_Dosaje' => 'required|numeric|min:0',
                'estadoRecuperacion_Dosaje' => 'required',
                'fechaRecuperacionReal' => 'nullable',
                'sexo_Hijo' => 'required', 
                'nombreProvincia' => 'required', 
                'alturaProvincia' => 'required', 
            ]);

            // Crear el nuevo dosaje
            $dosaje = Dosaje::create([
                'idDosaje' => $validatedData['idDosaje'],
                'idHijo' => $validatedData['idHijo'],
                'idDoctor' => $validatedData['idDoctor'],
                'idEstablecimiento' => $validatedData['idEstablecimiento'],
                'fecha_Dosaje' => $validatedData['fecha_Dosaje'],
                'valorHemoglobina_Dosaje' => $validatedData['valorHemoglobina_Dosaje'],
                'nivelAnemia_Dosaje' => $validatedData['nivelAnemia_Dosaje'],
                'peso_Dosaje' => $validatedData['peso_Dosaje'],
                'talla_Dosaje' => $validatedData['talla_Dosaje'],
                'edadMeses_Dosaje' => $validatedData['edadMeses_Dosaje'],
                'nivelHierro_Dosaje' => $validatedData['nivelHierro_Dosaje'],
                'estadoRecuperacion_Dosaje' => $validatedData['estadoRecuperacion_Dosaje'],
                'fechaRecuperacionReal' => $validatedData['fechaRecuperacionReal'],
            ]);

            // dd($dosaje);

            // Solo si es NO RECUPERADO entonces realizar la predicción
            if ($validatedData['estadoRecuperacion_Dosaje'] == 0) {
                // Hemoglobina
                $apiResponse = $this->returnApiResponseHemoglobina($validatedData['valorHemoglobina_Dosaje'],
                                                       $validatedData['nivelAnemia_Dosaje'],
                                                       $validatedData['peso_Dosaje'],
                                                       $validatedData['talla_Dosaje'],
                                                       $validatedData['sexo_Hijo'],
                                                       $validatedData['edadMeses_Dosaje'],
                                                       $validatedData['nivelHierro_Dosaje'],
                                                       $validatedData['nombreProvincia'],
                                                       $validatedData['alturaProvincia']);
                $nombreDistrito = $this->returnNombreDistritoByIdDosaje($validatedData['idDosaje']);
                $apiResponseDiasRecuperacion = $this->returnApiResponseDiasRecuperacion($validatedData['valorHemoglobina_Dosaje'],
                                                                                        $apiResponse['prediccion_1mes'],
                                                                                        $apiResponse['prediccion_3mes'],
                                                                                        $apiResponse['prediccion_6mes'],
                                                                                        $validatedData['nivelAnemia_Dosaje'],
                                                                                        $validatedData['peso_Dosaje'],
                                                                                        $validatedData['talla_Dosaje'],
                                                                                        $validatedData['sexo_Hijo'],
                                                                                        $validatedData['edadMeses_Dosaje'],
                                                                                        $validatedData['nivelHierro_Dosaje'],
                                                                                        $validatedData['estadoRecuperacion_Dosaje'],
                                                                                        $validatedData['nombreProvincia'],
                                                                                        $nombreDistrito,
                                                                                        $validatedData['alturaProvincia']);

                $diasRecuperacion = intval(round($apiResponseDiasRecuperacion['diasRecuperacion']));
                $fechaRecuperacion = $this->returnFechaRecuperacionByDiasRecuperacionIdHijo($diasRecuperacion, $validatedData['idHijo']);
                
                $apiResponseIntervencionAdicional = $this->returnApiResponseIntervencionAdicional($validatedData['valorHemoglobina_Dosaje'],
                                                                                            $apiResponse['prediccion_1mes'],
                                                                                            $apiResponse['prediccion_3mes'],
                                                                                            $apiResponse['prediccion_6mes'],
                                                                                            $validatedData['nivelAnemia_Dosaje'],
                                                                                            $validatedData['peso_Dosaje'],
                                                                                            $validatedData['talla_Dosaje'],
                                                                                            $validatedData['sexo_Hijo'],
                                                                                            $validatedData['edadMeses_Dosaje'],
                                                                                            $validatedData['nivelHierro_Dosaje'],
                                                                                            $validatedData['estadoRecuperacion_Dosaje'],
                                                                                            $validatedData['nombreProvincia'],
                                                                                            $nombreDistrito,
                                                                                            $validatedData['alturaProvincia']);
            
                $porcIntervencionAdicional = round($apiResponseIntervencionAdicional['intervencionAdicional'], 2);
                $mensajeIntervencionAdicional = $apiResponseIntervencionAdicional['mensaje'];
                
                // Crear predicción
                $idNuevaPrediccion = $this->generarIdPrediccion();

                $prediccion = Prediccion::create([
                    'idPrediccion' => $idNuevaPrediccion,
                    'idDosaje' => $validatedData['idDosaje'],
                    'valorHemoglobinaEstimado1_Prediccion' => $apiResponse['prediccion_1mes'],
                    'valorHemoglobinaEstimado3_Prediccion' => $apiResponse['prediccion_3mes'],
                    'valorHemoglobinaEstimado6_Prediccion' => $apiResponse['prediccion_6mes'],
                    'precisionHemoglobina1' => $apiResponse['porcPrecision1'],
                    'precisionHemoglobina3' => $apiResponse['porcPrecision3'],
                    'precisionHemoglobina6' => $apiResponse['porcPrecision6'],
                    'fechaRecuperacionEstimada_Prediccion' => $fechaRecuperacion,
                    'diasRecuperacion_Prediccion' => $diasRecuperacion,
                    'intervencionAdicionalPorcentaje_Prediccion' => $porcIntervencionAdicional,
                    'intervencionAdicionalMensaje_Prediccion' => $mensajeIntervencionAdicional,
                ]);
            } 

            // Si todo sale bien, confirmar la transacción
            DB::commit();

            // Redirigir con éxito
            return redirect()->route('apoderados.prediction')
                             ->with('successDosajeStore', 'Dosaje guardado correctamente y predicción creada.');

        } catch (ValidationException $e) {
            // Revertir la transacción si ocurre un error de validación
            DB::rollBack();
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Revertir la transacción si ocurre cualquier otra excepción
            DB::rollBack();
            return back()->withErrors(['error' => 'Error al procesar el dosaje o la predicción: ' . $e->getMessage()])->withInput();
        }
    }

    public function generarIdPrediccion()
    {
        $ultimaPrediccion = Prediccion::max('idPrediccion');

        if (!$ultimaPrediccion) {
            return 'PREDIC-0001';
        }

        $strNumPrediccion = substr($ultimaPrediccion, -4); 

        $intNumeroPrediccion = intval($strNumPrediccion);

        $nuevoNumero = $intNumeroPrediccion + 1;

        $nuevoIdPrediccion = 'PREDIC-'. str_pad($nuevoNumero, 4, '0', STR_PAD_LEFT);
        
        return $nuevoIdPrediccion;
    }
}
