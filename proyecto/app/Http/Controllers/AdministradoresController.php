<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;

class AdministradoresController extends Controller
{
    public function index(){
        return view('administradores.index');
    }

    public function index_profesores(){
        $profesores = Profesor::all();
        return view('administradores.tablaprofesores', compact('profesores'));
    }

    public function index_estudiantes(){
        $estudiantes = Estudiante::all();
        return view('administradores.tablaestudiantes', compact('estudiantes'));
    }
    public function edit_estudiante(Estudiante $estudiante){
        return view('administradores.estudiante_edit',compact('estudiante'));
    }
    public function edit_profesor(Profesor $profesor){
        return view('administradores.profesor_edit',compact('profesor'));
    }
}
