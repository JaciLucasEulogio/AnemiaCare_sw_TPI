<?php

namespace App\Http\Controllers;

use App\Models\Apoderado;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {
        return view('guest.home');
    }

    public function aboutUs() {
        return view('guest.aboutUs');
    }

    public function howToUse() {
        return view('guest.howToUse');
    }

    public function loginDoctor() {
        return view('guest.loginDoctor');
    }

    public function register() {
        $apoderados = Apoderado::all();
        // dd($apoderados);
        return view('guest.register', compact('apoderados'));
    }
}
