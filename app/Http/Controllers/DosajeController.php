<?php

namespace App\Http\Controllers;

use App\Models\Dosaje;
use App\Models\Prediccion;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class DosajeController extends Controller
{
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

            // Enviar datos a la API
            $client = new Client(['base_uri' => env('API_URL') . '/']);
            $dataToSend = [
                'hemoglobina' => $validatedData['valorHemoglobina_Dosaje'],
                'nivel_anemia' => $validatedData['nivelAnemia_Dosaje'],
                'peso' => $validatedData['peso_Dosaje'],
                'talla' => $validatedData['talla_Dosaje'],
                'sexo' => $validatedData['sexo_Hijo'],
                'edad' => $validatedData['edadMeses_Dosaje'],
                'nivel_hierro' => $validatedData['nivelHierro_Dosaje'],
                'provincia' => $validatedData['nombreProvincia'],
                'altura' => $validatedData['alturaProvincia'],
            ];

            // Realizar la petición POST a la API
            $response = $client->request('POST', 'predict', [
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
            ]);
            
            // dd($prediccion);

            $predicciones = Prediccion::all();

            // dd($predicciones);

            // Si todo sale bien, confirmar la transacción
            DB::commit();

            // Redirigir con éxito
            return redirect()->route('apoderados.prediction')
                             ->with('apiResponse', $apiResponse)
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
