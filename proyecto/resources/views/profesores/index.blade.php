@extends('layouts.master')

@section('contenido-principal')
    <div class="row">
        <div class="container-fluid">
            <div class="col bg-light">
                <h1>Profesores</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-9">

        </div>
        <div class="col-3">
            <div class="card" style="width: 20rem">
                <div class="card-header bg-info">
                    <h3>Ingreso de profesor</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('profesores.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="rut" class="form-label"><b>Rut</b></label>
                            <input type="text" class="form-control" id="rut" name="rut" maxlength="10" aria-describedby="rutlHelp">
                            <div id="rutlHelp" class="form-text">Ingrese rut sin puntos y con guion.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label"><b>Nombre</b></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" maxlength="20">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label"><b>Apellido</b></label>
                            <input type="text" class="form-control" id="apellido" name="apellido" maxlength="20">
                        </div>
                        <button type ="reset" class="btn btn-warning btn-outline">Cancelar</button>
                        <button type="submit" class="btn btn-success btn-outline">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection