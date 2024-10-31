<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $client;

    public function __construct()
    {
        // Inicializar el cliente Guzzle
        $this->client = new Client([
            'base_uri' => env('API_URL'), // URL de la API
        ]);
    }
    
    public function obtenerDatos()
    {
        try {
            // Realizar la petición GET
            $response = $this->client->request('GET', 'endpoint'); // Cambia 'endpoint' al endpoint real

            // Obtener el cuerpo de la respuesta
            $datos = json_decode($response->getBody(), true);

            // Retornar los datos a la vista o hacer lo que necesites con ellos
            return view('tu-vista', compact('datos'));
        } catch (RequestException $e) {
            // Manejar errores con más información
            return response()->json([
                'error' => 'Error al consumir la API',
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ], 500);
        }
    }

    public function enviarDatos(Request $request)
    {
        // Validar los datos aquí si es necesario
        try {
            $response = $this->client->request('POST', 'predictHemoglobina', [ // Cambia 'endpoint' al endpoint correcto
                'json' => $request->all(),
                'headers' => [
                    'Authorization' => 'Bearer 2mlVWYPNGiyeDa5uTWpjsdHhCkf_hCLP7tNbTrsLBsi7cpWZ', // Tu token de autenticación
                    'ngrok-skip-browser-warning' => 'true',
                ],
            ]);
            $datos = json_decode($response->getBody(), true);
            return response()->json($datos);
        } catch (RequestException $e) {
            return response()->json([
                'error' => 'Error al consumir la API',
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ], 500);
        }
    }
}
