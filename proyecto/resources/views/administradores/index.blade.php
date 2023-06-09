@extends('layouts.master')

@section('contenido-principal')
    <div class="row">
        <div class="col text-center">
            <h3>Administradores</h3>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <div class="card text-bg-white mt-2 mb-3" style="height: 28.5rem">
                        <img src="{{asset('images/estudiantes.jpg')}}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a href="{{route('administradores.tablaestudiantes')}}" class="btn btn-info position-absolute top-100 start-50 translate-middle">Ver tabla de Estudiantes</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-white mt-2" style="height: 28.5rem">
                        <img src="{{asset('images/profesor.jpg')}}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a href="{{route('administradores.tablaprofesores')}}" class="btn btn-info position-absolute top-100 start-50 translate-middle">Ver tabla de Profesores</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-dark mt-2 mb-3" style="height: 28.5rem">
                        <img src="{{asset('images/propuestas.jpg')}}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <a href="{{route('propuestas.index')}}" class="btn btn-info position-absolute top-100 start-50 translate-middle">Ver tabla de Propuestas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection