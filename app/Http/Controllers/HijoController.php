<?php

namespace App\Http\Controllers;

use App\Models\Hijo;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class HijoController extends Controller
{
    public function store(Request $request) 
    {   
        try {
            // Validar los datos de entrada sin los últimos tres campos
            $validatedData = $request->validate([
                'idHijo' => 'required|unique:Hijos,idHijo',
                'idApoderado' => 'required|exists:Apoderados,idApoderado',
                'nombre_Hijo' => 'required|string',
                'apellido_Hijo' => 'required',
                'fechaNacimiento_Hijo' => 'required',
                'sexo_Hijo' => 'required|string',
                'nombreSeguro_Hijo' => 'required|string',
                'fotoHijo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            
            dd($validatedData);

            // Guardar el fichero
            $fileName = time() .$validatedData->idHijo. $validatedData->fotoHijo->extension();
            $request->fotoHijo->move(public_path('childrenPhotos'), $fileName);

            $hijoCreado = Hijo::create([
                'idHijo' => $validatedData['idHijo'],
                'idApoderado' => $validatedData['idApoderado'],
                'nombre_Hijo' => $validatedData['nombre_Hijo'],
                'apellido_Hijo' => $validatedData['apellido_Hijo'],
                'fechaNacimiento_Hijo' => $validatedData['fechaNacimiento_Hijo'],
                'sexo_Hijo' => $validatedData['sexo_Hijo'],
                'nombreSeguro_Hijo' => $validatedData['nombreSeguro_Hijo'],
                'file_uri' => "childrenPhotos/" . $fileName,
            ]);

            dd($hijoCreado);

            return redirect()->route('apoderados.hijos');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Registro de errores
            return back()->withErrors(['error' => 'Error al guardar el hijo: ' . $e->getMessage()])->withInput();
        }
    }
}
