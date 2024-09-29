<?php

namespace App\Http\Controllers;

use App\Models\Dosaje;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DosajeController extends Controller
{
    public function store(Request $request) 
    {   
        try {
            // Validar los datos de entrada
            //dd($request->all());

            $validatedData = $request->validate([
                'idDosaje' => 'required|unique:Dosajes,idDosaje',
                'idHijo' => 'required|exists:Hijos,idHijo',
                'idDoctor' => 'required|exists:Doctores,idDoctor',
                'idEstablecimiento' => 'required|exists:Establecimientos,idEstablecimiento',
                'fecha_Dosaje' => 'required|date',
                'valorHemoglobina_Dosaje' => 'required|numeric|min:0',
                'nivelAnemia_Dosaje' => 'required',
                'peso_Dosaje' => 'required|numeric|min:0',
                'talla_Dosaje' => 'required|numeric|min:0',
                'edadMeses_Dosaje' => 'required|integer|min:0',
                'nivelHierro_Dosaje' => 'required|numeric|min:0',
                'estadoRecuperacion_Dosaje' => 'required',
                'fechaRecuperacionReal' => 'nullable|date',
            ]);

            // Crear un nuevo dosaje en la base de datos
            Dosaje::create($validatedData);
            
            // Mensaje de éxito
            $messageStore = 'Dosaje guardado correctamente';
            return redirect()->route('apoderados.prediction')->with('successDosajeStore', $messageStore);

        } catch (ValidationException $e) {
            // Manejar errores de validación
            return back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            // Manejar otros errores (por ejemplo, errores de base de datos)
            return back()->withErrors(['error' => 'Error al guardar el dosaje: ' . $e->getMessage()])->withInput();
        }
    }
}