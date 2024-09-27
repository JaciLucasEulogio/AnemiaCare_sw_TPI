<?php

namespace App\Http\Controllers;

use App\Models\Dosaje;
use App\Models\Hijo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Asegúrate de importar Auth

class ApoderadoController extends Controller
{
    public function home() {
        return view('apoderados.apoderadosHome');
    }

    public function prediction() {
        // Obtener el ID del apoderado autenticado
        $apoderadoId = Auth::id(); 

        // Obtener todos los hijos que coinciden con el apoderado actual
        $hijos = Hijo::where('idApoderado', $apoderadoId)->get();

        // Extraer los IDs de los hijos
        $hijosIds = $hijos->pluck('idHijo');
        
        // Obtener todos los dosajes que coinciden con los hijos del apoderado
        $dosajes = Dosaje::whereIn('idHijo', $hijosIds)->get();

        //dd($dosajes->idDosaje);

        return view('apoderados.apoderadosPrediction', compact('dosajes'));
    }
}
