<?php

namespace App\Http\Controllers;

use App\Models\Dosaje;
use Illuminate\Http\Request;

class DosajeController extends Controller
{
    public function store(Request $request) 
    {
        Dosaje::create($request->all());
        $messageStore = 'Dosaje guardado correctamente';
        return redirect()->route('apoderados.prediction')->with('successDosajeStore', $messageStore);
    }
}
