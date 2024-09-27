<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApoderadoController extends Controller
{
    public function home() {
        return view('apoderados.apoderadosHome');
    }

    public function prediction() {
        return view('apoderados.apoderadosPrediction');
    }
}
