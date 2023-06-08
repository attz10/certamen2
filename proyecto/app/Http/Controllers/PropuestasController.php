<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Illuminate\Support\Facades\Storage;

class PropuestasController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::all();
        $propuestas = Propuesta::all();
        return view('propuestas.index', compact('estudiantes', 'propuestas'));
    }

    public function store(Request $request){

        $propuesta = new Propuesta();
        $propuesta->fecha = $request->fecha;
        Storage::disk('local')->put($request->documento, 'content');
        $propuesta->documento = $request->documento;
        $propuesta->estudiante_rut = $request->estudiante;
        $propuesta->save();
        return redirect()->route('propuestas.index');

    }
    public function descargar($propuesta){
        return Storage::download($propuesta);
    }
}
