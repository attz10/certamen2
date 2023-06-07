<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PropuestasController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::all();
        $propuestas = Propuesta::all();
        return view('propuestas.index', compact('estudiantes', 'propuestas'));
    }

    public function store(Request $request){

        $pdf = $request->documento;
        $pdf_name = $request->documento;
        $propuesta = new Propuesta();
        $propuesta->fecha = $request->fecha;
        $propuesta->estudiante_rut = $request->estudiante;
        /* $contents = Storage::get($request->documento); */
        /* $path = Storage::path($request->documento); */
        /* $url = Storage::url($request->documento); */
        Storage::disk('local')->put('pdfs/'.$pdf_name, file_get_contents($pdf));
        /* $file = $request->documento('documento'); */
        /* Storage::disk('local')->put($request->documento, File::get($file)); */
        $propuesta->documento = $pdf_name;
        $propuesta->save();
        return redirect()->route('propuestas.index');

    }
    public function descargar($propuesta){
        return Storage::download($propuesta);
    }
}
