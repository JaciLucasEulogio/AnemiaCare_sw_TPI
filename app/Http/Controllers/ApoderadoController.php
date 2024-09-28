<?php

namespace App\Http\Controllers;

use App\Models\Hijo;
use App\Models\Doctor;
use App\Models\Dosaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth; 

class ApoderadoController extends Controller
{
    public function home() {
        return view('apoderados.apoderadosHome');
    }
    /*
    //FORMA 1
    public function prediction()
    {
        $apoderadoId = Auth::id();

        // Iniciar el temporizador
        $startTime = microtime(true);

        $resultados = DB::table('Dosajes')
            ->join('Hijos', 'Dosajes.idHijo', '=', 'Hijos.idHijo')
            ->join('Doctores', 'Dosajes.idDoctor', '=', 'Doctores.idDoctor')
            ->join('Establecimientos', 'Dosajes.idEstablecimiento', '=', 'Establecimientos.idEstablecimiento')
            ->join('Distritos', 'Establecimientos.idDistrito', '=', 'Distritos.idDistrito')
            ->join('MicroRedes', 'Distritos.idMicroRed', '=', 'MicroRedes.idMicroRed')
            ->where('Hijos.idApoderado', $apoderadoId)
            ->select(
                // Dosajes
                'Dosajes.idDosaje',
                'Dosajes.fecha_Dosaje',
                'Dosajes.valorHemoglobina_Dosaje',
                'Dosajes.nivelAnemia_Dosaje',
                'Dosajes.peso_Dosaje',
                'Dosajes.talla_Dosaje',
                'Dosajes.edadMeses_Dosaje',
                'Dosajes.nivelHierro_Dosaje',
                'Dosajes.estadoRecuperacion_Dosaje',
                'Dosajes.fechaRecuperacionReal',
                // Hijos
                'Hijos.idHijo',
                'Hijos.nombre_Hijo',
                'Hijos.apellido_Hijo',
                'Hijos.fechaNacimiento_Hijo',
                'Hijos.sexo_Hijo',
                // Doctores
                'Doctores.idDoctor',
                'Doctores.nombre_Doctor',
                'Doctores.apellido_Doctor',
                'Doctores.celular_Doctor',
                //Establecimientos
                'Establecimientos.idEstablecimiento',
                'Establecimientos.nombreEstablecimiento',
                // Distritos
                'Distritos.idDistrito',
                'Distritos.nombreDistrito',
                // MicroRed
                'MicroRedes.idMicroRed',
                'MicroRedes.nombreMicroRed',
            )
            ->get();
        
        // Calcular el tiempo de ejecución
        $executionTime = microtime(true) - $startTime;

        Log::info("Tiempo de ejecución de la consulta usando Query Builder: {$executionTime} segundos");

        dd($resultados);

        return view('apoderados.apoderadosPrediction', compact('resultados'));
    }
    */

    /*
    //FORMA 2
    public function prediction()
    {
        $apoderadoId = Auth::id();

        // Iniciar el temporizador
        $startTime = microtime(true);
        
        $resultados = Dosaje::query()
            ->join('Hijos', 'Dosajes.idHijo', '=', 'Hijos.idHijo')
            ->join('Doctores', 'Dosajes.idDoctor', '=', 'Doctores.idDoctor')
            ->join('Establecimientos', 'Dosajes.idEstablecimiento', '=', 'Establecimientos.idEstablecimiento')
            ->join('Distritos', 'Establecimientos.idDistrito', '=', 'Distritos.idDistrito')
            ->join('MicroRedes', 'Distritos.idMicroRed', '=', 'MicroRedes.idMicroRed')
            ->where('Hijos.idApoderado', $apoderadoId)
            ->select([
                'Dosajes.*',
                 //'Dosajes.created_at as dosajeCreatedAt',
                'Hijos.*',
                'Doctores.*',
                'Establecimientos.*',
                'Distritos.*',
                'MicroRedes.*'
            ])
            ->get();

        // Transformar los resultados en un array simple
        $datosSimplificados = $resultados->map(function ($resultado) {
            return [
                // Dosajes
                'idDosaje' => $resultado->idDosaje,
                //'created_at' => $resultado->dosajeCreatedAt,
                'fecha_Dosaje' => $resultado->fecha_Dosaje,
                'valorHemoglobina_Dosaje' => $resultado->valorHemoglobina_Dosaje,
                'nivelAnemia_Dosaje' => $resultado->nivelAnemia_Dosaje,
                'peso_Dosaje' => $resultado->peso_Dosaje,
                'talla_Dosaje' => $resultado->talla_Dosaje,
                'edadMeses_Dosaje' => $resultado->edadMeses_Dosaje,
                'nivelHierro_Dosaje' => $resultado->nivelHierro_Dosaje,
                'estadoRecuperacion_Dosaje' => $resultado->estadoRecuperacion_Dosaje,
                'fechaRecuperacionReal' => $resultado->fechaRecuperacionReal,
                // Hijos
                'idHijo' => $resultado->idHijo,
                'nombre_Hijo' => $resultado->nombre_Hijo,
                'apellido_Hijo' => $resultado->apellido_Hijo,
                'fechaNacimiento_Hijo' => $resultado->fechaNacimiento_Hijo,
                'sexo_Hijo' => $resultado->sexo_Hijo,
                'nombreSeguro_Hijo' => $resultado->nombreSeguro_Hijo,
                // Doctores
                'idDoctor' => $resultado->idDoctor,
                'nombre_Doctor' => $resultado->nombre_Doctor,
                'apellido_Doctor' => $resultado->apellido_Doctor,
                'celular_Doctor' => $resultado->celular_Doctor,
                // Establecimientos
                'idEstablecimiento' => $resultado->idEstablecimiento,
                'nombreEstablecimiento' => $resultado->nombreEstablecimiento,
                'nombreDistrito' => $resultado->nombreDistrito,
                // Distritos
                'idDistrito' => $resultado->idDistrito,
                'nombreDistrito' => $resultado->nombreDistrito,
                // MicroRedes
                'idMicroRed' => $resultado->idMicroRed,
                'nombreMicroRed' => $resultado->nombreMicroRed,
            ];
        })->toArray();

        // Calcular el tiempo de ejecución
        $executionTime = microtime(true) - $startTime;
        
        Log::info("Tiempo de ejecución de la consulta usando ELOCUENT ORM: {$executionTime} segundos");
        
        dd($datosSimplificados);

        return view('apoderados.apoderadosPrediction', ['resultados' => $datosSimplificados]);
    }
    */

    //*
    // Usando una vista de la BD
    public function prediction()
    {
        // Obtener el ID del apoderado autenticado
        $apoderadoId = Auth::id();
        
        // Iniciar el temporizador
        $startTime = microtime(true);
        
        // Consultar la vista 'vw_DosajesCompletos' filtrando por el ID del apoderado
        $resultados = DB::table('vw_DosajesCompletos')
            ->where('idApoderado', $apoderadoId)
            ->get();
        
        // Calcular el tiempo de ejecución
        $executionTime = microtime(true) - $startTime;
        
        // Registrar el tiempo de ejecución
        Log::info("Tiempo de ejecución de la consulta usando la vista de la BD: {$executionTime} segundos");

        $doctores = Doctor::all();

        // Retornar la vista con los resultados obtenidos
        return view('apoderados.apoderadosPrediction', compact('resultados', 'doctores'));
    }
    //*/
}
