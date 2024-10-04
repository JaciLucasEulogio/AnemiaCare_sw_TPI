<?php

namespace App\Http\Controllers;

use App\Models\Hijo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class HijoController extends Controller
{
    public function store(Request $request) 
    {   
        try {
            // Validar los datos de entrada
            $validatedData = $request->validate([
                'idHijo' => 'required|unique:Hijos,idHijo',
                'idApoderado' => 'required|exists:Apoderados,idApoderado',
                'nombre_Hijo' => 'required|string',
                'apellido_Hijo' => 'required',
                'fechaNacimiento_Hijo' => 'required',
                'sexo_Hijo' => 'required|string',
                'nombreSeguro_Hijo' => 'required|string',
                'fotoHijo' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            ]);

            // Crear el registro del hijo primero
            $hijoCreado = Hijo::create([
                'idHijo' => $validatedData['idHijo'],
                'idApoderado' => $validatedData['idApoderado'],
                'nombre_Hijo' => $validatedData['nombre_Hijo'],
                'apellido_Hijo' => $validatedData['apellido_Hijo'],
                'fechaNacimiento_Hijo' => $validatedData['fechaNacimiento_Hijo'],
                'sexo_Hijo' => $validatedData['sexo_Hijo'],
                'nombreSeguro_Hijo' => $validatedData['nombreSeguro_Hijo'],
                'file_uri' => null,  // Se actualiza después de mover la imagen
            ]);

            // Solo si se sube la foto
            if ($request->hasFile('fotoHijo')) {
                // Crear un nombre de archivo único con el tiempo exacto
                $fileName = now()->format('Y-m-d_H-i-s') . "_" . $hijoCreado->idHijo . "." . $validatedData['fotoHijo']->extension();
                
                //$request->fotoHijo->move(public_path('childrenPhotos'), $fileName);
                $request->fotoHijo->storeAs('public/images/childrenPhotos',  $fileName);
                // Actualizar el registro con la ruta del archivo
                $hijoCreado->update([
                    'file_uri' => "childrenPhotos/" . $fileName,
                ]);
            }

            return redirect()->route('apoderados.hijos')->with('success', 'Hijo creado exitosamente.');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error al guardar el hijo: ' . $e->getMessage()])->withInput();
        }
    }

    public function update(Request $request) {
        try {
            // Validar los datos de entrada
            $validatedData = $request->validate([
                'idHijo' => 'required|exists:Hijos,idHijo',
                'idApoderado' => 'required|exists:Apoderados,idApoderado',
                'nombre_Hijo' => 'required|string',
                'apellido_Hijo' => 'required',
                'fechaNacimiento_Hijo' => 'required',
                'sexo_Hijo' => 'required|string',
                'nombreSeguro_Hijo' => 'required|string',
                'fotoHijo' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            ]);
    
            // Obtener el hijo a actualizar
            $hijoToUpdate = Hijo::where("idHijo", $validatedData['idHijo'])->firstOrFail();
    
            // Actualizar los datos del hijo (sin incluir la foto)
            $hijoToUpdate->update([
                'nombre_Hijo' => $validatedData['nombre_Hijo'],
                'apellido_Hijo' => $validatedData['apellido_Hijo'],
                'fechaNacimiento_Hijo' => $validatedData['fechaNacimiento_Hijo'],
                'sexo_Hijo' => $validatedData['sexo_Hijo'],
                'nombreSeguro_Hijo' => $validatedData['nombreSeguro_Hijo'],
            ]);
    
            // Verificar si se subió una nueva foto
            if ($request->hasFile('fotoHijo')) {
                // Borrar la foto antigua si existe
                if ($hijoToUpdate->file_uri) {
                    $rutaFotoAntigua = 'public/images/childrenPhotos/' . $hijoToUpdate->file_uri;
                    Storage::delete($rutaFotoAntigua);
                }
    
                // Crear un nombre de archivo único con el tiempo exacto
                $fileName = now()->format('Y-m-d_H-i-s') . "_" . $hijoToUpdate->idHijo . "." . $validatedData['fotoHijo']->extension();
    
                // Guardar la nueva foto
                $request->fotoHijo->storeAs('public/images/childrenPhotos', $fileName);
    
                // Actualizar la URI del archivo en la base de datos
                $hijoToUpdate->update([
                    'file_uri' => "childrenPhotos/" . $fileName,
                ]);
            }

            return redirect()->route('apoderados.hijos')->with('success', 'Hijo actualizado exitosamente.');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error al actualizar el hijo: ' . $e->getMessage()])->withInput();
        }
    }

    public function delete(Request $request)  {
       // Encuentra el registro por su id y si no lo encuentra lanza una excepción 404
        $hijo = Hijo::where('idHijo', $request->idHijo)->firstOrFail();
        
        // Elimina el registro
        $hijo->delete();

        // Redirigir o responder según sea necesario
        return redirect()->back()->with('successHijoEliminado', 'Hijo eliminado exitosamente.');
        
    }
}
