<?php

namespace App\Http\Controllers;

use App\Models\Dosaje;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Client;

class DosajeController extends Controller
{
    public function store(Request $request) 
    {   
        try {
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
                // Los siguientes campos se mantienen en la validación, pero no se usan para crear el modelo
                'sexo_Hijo' => 'required', 
                'nombreProvincia' => 'required', 
                'alturaProvincia' => 'required', 
            ]);

            //dd($validatedData);
            
            // Crear un nuevo dosaje en la base de datos, sin los últimos tres campos
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
                'fechaRecuperacionReal' => $validatedData['fechaRecuperacionReal'], // Si es necesario
            ]);

            // Enviar datos a la API
            $client = new Client(['base_uri' => env('API_URL') . '/']);

            // Preparar los datos para enviar a la API
            $dataToSend = [
                'hemoglobina' => $validatedData['valorHemoglobina_Dosaje'],
                'nivel_anemia' => $validatedData['nivelAnemia_Dosaje'],
                'peso' => $validatedData['peso_Dosaje'],
                'talla' => $validatedData['talla_Dosaje'],
                'sexo' => $validatedData['sexo_Hijo'], // Mantener el uso de 'sexo'
                'edad' => $validatedData['edadMeses_Dosaje'],
                'nivel_hierro' => $validatedData['nivelHierro_Dosaje'],
                'provincia' => $validatedData['nombreProvincia'], // Mantener el uso de 'provincia'
                'altura' => $validatedData['alturaProvincia'], // Mantener el uso de 'altura'
            ];

            // Realiza la petición POST a la API
            $response = $client->request('POST', 'predict', [
                'json' => $dataToSend,
                'headers' => [
                    'Authorization' => env('API_AUTH_TOKEN'), // Tu token de autenticación
                    'ngrok-skip-browser-warning' => 'true',
                ],
            ]);

            if ($response->getStatusCode() !== 200) {
                throw new \Exception('Error al enviar datos a la API');
            }

            $apiResponse = json_decode($response->getBody(), true);
            // Aquí puedes procesar la respuesta si es necesario

            // Mensaje de éxito
            return redirect()->route('apoderados.prediction')
                                ->with('apiResponse', $apiResponse)
                                ->with('successDosajeStore', 'Dosaje guardado correctamente y datos enviados a la API');

        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Registro de errores
            return back()->withErrors(['error' => 'Error al guardar el dosaje: ' . $e->getMessage()])->withInput();
        }
    }
}
