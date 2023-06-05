@extends('layouts.master')

@section('contenido-principal')
    <div class="row">
        <div class="col text-center">
            <h3>Administradores</h3>
        </div>
    </div>
    <div class="row">
        <div class="flex-container">
            <div class="card-group align-middle">
                <div class="card text-bg-dark order-lg-first mt-2">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-center">Tabla de estudiantes</h5>
                    </div>
                </div>
                <div class="card text-bg-dark order-lg-last mt-2">
                    <img src="https://cdn.pixabay.com/photo/2016/11/04/21/34/beach-1799006_1280.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-center">Tabla de Profesores</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection