<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    public function store(Request $request){
        $profesor = new Profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido= $request->apellido;
        $profesor->save();
        return redirect()->route('profesores.index');

    }
}
