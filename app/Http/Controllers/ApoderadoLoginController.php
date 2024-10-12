<?php

namespace App\Http\Controllers;

use App\Models\Apoderado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ApoderadoLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('guest.home'); 
    }

    public function store(Request $request) {
        // Validar los campos
        $validatedData = $request->validate([
            'idApoderado' => 'required|unique:Apoderados,idApoderado',
            'password' => 'required|string|min:1',
            'nombre_Apoderado' => 'required|string|max:255',
            'apellido_Apoderado' => 'required|string|max:255',
            'sexo_Apoderado' => 'required|string|max:1', // Asegurarse de que la contraseña se confirme
            'nombreSeguro_Apoderado' => 'required|string', // Asegurarse de que la contraseña se confirme
            'celular_Apoderado' => 'required|string|min:9', // Asegurarse de que la contraseña se confirme
        ]);
    
        // Crear el nuevo apoderado
        Apoderado::create([
            'idApoderado' => $validatedData['idApoderado'],
            'password' => bcrypt($validatedData['password']), // ENCRIPTAR LA CONTRASEÑA RECIBIDA DEL FORMULARIO
            'nombre_Apoderado' => $validatedData['nombre_Apoderado'],
            'apellido_Apoderado' => $validatedData['apellido_Apoderado'],
            'sexo_Apoderado' => $validatedData['sexo_Apoderado'],
            'nombreSeguro_Apoderado' => $validatedData['nombreSeguro_Apoderado'],
            'celular_Apoderado' => $validatedData['celular_Apoderado'],
        ]);
    
        // Intentar autenticar al usuario
        if (Auth::guard('apoderados')->attempt(['idApoderado' => $validatedData['idApoderado'],
                                                'password' => $request['password']])) 
        {
            // Autenticación exitosa, redirigir a la página principal de apoderados
            return redirect()->route('apoderados.home');
        }

        // Si falla la autenticación, redirigir con un mensaje de error
        return redirect()->back()->withErrors(['auth' => 'Error al autenticar el apoderado.']);
    }

    public function loginApoderado(Request $request)
    {
        // Validar los campos del formulario
        $credentials = $request->only('idApoderado', 'password');

        // Intentar autenticar al usuario
        if (Auth::guard('apoderados')->attempt([
            'idApoderado' => $credentials['idApoderado'],
            'password' => $credentials['password']
        ])) {
            // Autenticación exitosa
            return redirect()->route('apoderados.home'); 
        }

        // Autenticación fallida
        return redirect()->back()->withErrors([
            'idApoderado' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    public function logoutApoderado(Request $request): RedirectResponse
    {   
        Auth::guard('apoderados')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect('/home');
    }
}
