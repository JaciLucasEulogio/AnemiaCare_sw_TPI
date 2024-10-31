<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Hijo;
use App\Models\Doctor;
use App\Models\Dosaje;
use Illuminate\Http\Request;
use App\Models\Establecimiento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth; 

class ApoderadoController extends Controller
{
    public function home() {
        return view('apoderados.apoderadosHome');
    }

    public function hijos() {
        $apoderadoId = Auth::id();
        $hijos = Hijo::where('idApoderado', $apoderadoId)
                    ->orderBy('created_at', 'asc') 
                    ->get();
        
        // Recorrer cada hijo para modificar su sexo
        foreach ($hijos as $hijo) {
            if ($hijo->sexo_Hijo == "M") {
                $hijo->sexo_Hijo = "Masculino";
            } else {
                $hijo->sexo_Hijo = "Femenino";
            }
        }

        return view('apoderados.apoderadosHijos', compact('hijos'));
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
        
        // Consultar la vista 'vw_DosajesCompletos' filtrando por el ID del apoderado
        $dosajesCompletos = DB::table('vw_DosajesCompletos')
                                ->where('idApoderado', $apoderadoId)
                                ->orderBy('idDosaje', 'asc') // Ordenar de manera ascendente por el campo 'id'
                                ->get();

        $dosajesCompletosOrderNumber = $dosajesCompletos->map(function($dosaje, $index) {
            // Añadir un nuevo campo llamado 'order_number' con el valor del índice + 1
            $dosaje->order_number = $index + 1;
            // Formatear la fecha del dosaje usando Carbon
            $dosaje->fecha_Dosaje = Carbon::parse($dosaje->fecha_Dosaje)->format('d/m/Y');
            if($dosaje->fechaRecuperacionEstimada_Prediccion) {
                $dosaje->fechaRecuperacionEstimada_Prediccion = Carbon::parse($dosaje->fechaRecuperacionEstimada_Prediccion)->format('d/m/Y');
            }
            return $dosaje;
        });

        $doctores = Doctor::all();
        $establecimientos = $this->getEstablecimientos();
        $hijos = $this->getHijos($apoderadoId);
        $idNuevoDosaje = $this->generarIdDosaje();
        $nuevoNumeroOrden =  $dosajesCompletosOrderNumber->max('order_number') + 1;

        // dd($nuevoNumeroOrden);

        // Convertir caracteres  de sexo M ó F a "Masculino" ó "Femenino"
        foreach ($hijos as $hijo) {
            $hijo->sexo_Hijo = ($hijo->sexo_Hijo == "M") ? "Masculino":"Femenino";
        }

        // Agregar un nuevo campo de edad (meses) a partir de la fecha de nacimiento
        foreach ($hijos as $hijo) {
            $fechaNacimiento = new DateTime($hijo->fechaNacimiento_Hijo);
            $fechaActual = new DateTime(); // Fecha actual
            $interval = $fechaNacimiento->diff($fechaActual);
            $hijo->edadMeses = ($interval->y * 12) + $interval->m; // Calcular la edad en meses
        }

        //dd($dosajesCompletosOrderNumber);

        return view('apoderados.apoderadosPrediction',
                 compact('dosajesCompletosOrderNumber', 'doctores', 'establecimientos', 'hijos', 'idNuevoDosaje', 'nuevoNumeroOrden'));
    }

    public function getEstablecimientos() {
        // Obtener todos los establecimentos con su ubicación detallada
        $establecimientos = Establecimiento::query()
            ->join('Distritos', 'Establecimientos.idDistrito', '=', 'Distritos.idDistrito')
            ->join('MicroRedes', 'Distritos.idMicroRed', '=', 'MicroRedes.idMicroRed')
            ->join('Provincias_Redes', 'MicroRedes.idProvinciaRed', '=', 'Provincias_Redes.idProvinciaRed')
            ->join('Redes', 'Provincias_Redes.idRed', '=', 'Redes.idRed')
            ->join('Provincias', 'Provincias_Redes.idProvincia', '=', 'Provincias.idProvincia')
            ->select(['Establecimientos.*', 'Distritos.*', 'MicroRedes.*', 'Redes.*',  'Provincias.*'])
            ->get();

        // Transformar los resultados en un array simple
        /*$establecimientosDetallado = $establecimientos->map(function ($establecimiento) {
            return [
                // Establecimientos
                'idEstablecimiento' => $establecimiento->idEstablecimiento,
                'nombreEstablecimiento' => $establecimiento->nombreEstablecimiento,
                // Distritos
                'idDistrito' => $establecimiento->idDistrito,
                'nombreDistrito' => $establecimiento->nombreDistrito,
                // MicroRedes
                'idMicroRed' => $establecimiento->idMicroRed,
                'nombreMicroRed' => $establecimiento->nombreMicroRed,
                // Redes
                'idRed' => $establecimiento->idRed,
                'nombreRed' => $establecimiento->nombreRed,
                // Provincias
                'idProvincia' => $establecimiento->idProvincia,
                'nombreProvincia' => $establecimiento->nombreProvincia,
            ];
        })->toArray();*/

        return $establecimientos;
    }

    public function getHijos($apoderadoId) {
        // Obtener todos los establecimentos con su ubicación detallada
        $hijos = Hijo::query()->where('Hijos.idApoderado', $apoderadoId)->select(['Hijos.*'])->get();

        // Transformar los resultados en un array simple
        /*$hijosApoderado = $hijos->map(function ($hijo) {
            return [
                // Establecimientos
                'idHijo' => $hijo->idHijo,
                'nombre_Hijo' => $hijo->nombre_Hijo,
                'apellido_Hijo' => $hijo->apellido_Hijo,
            ];
        })->toArray();*/

        return $hijos;
    }

    public function generarIdDosaje()
    {
        // Obtener el último ID de recompensa ordenado de forma descendente
        //$ultimaRecompensa = DB::table('recompensas')->orderBy('idRecompensa', 'desc')->first();
        $ultimoDosajeID = Dosaje::max('idDosaje');

        // Si la tabla está vacía, comenzar desde "RECOM-001"
        if (!$ultimoDosajeID) {
            return 'DOSAJ-0001';
        }

        // Extraer el número de la cadena del último ID de recompensa
        $strNumDosaje = substr($ultimoDosajeID, -4); // Obtiene los últimos 4 caracteres

        // Convertir la parte numérica a entero
        $intNumeroDosaje = intval($strNumDosaje);

        // Incrementar el número para generar el siguiente idRecompensa
        $nuevoNumero = $intNumeroDosaje + 1;

        // Formatear el nuevo número con ceros a la izquierda
        $nuevoIdDosaje = 'DOSAJ-'. str_pad($nuevoNumero, 4, '0', STR_PAD_LEFT);
        
        return $nuevoIdDosaje;
    }
    //*/
}
