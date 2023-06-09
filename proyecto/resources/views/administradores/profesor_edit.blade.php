@extends('layouts.master')

@section('contenido-principal')

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Editar Profesor</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" value="{{$profesor->apellido}}">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{$profesor->nombre}}">
                        </div>
                        <div class="mb-3">
                            <label for="rut" class="form-label">Rut</label>
                            <input type="text" id="rut" name="rut" class="form-control" value="{{$profesor->rut}}">
                        </div>
                        <div class="mt-2">
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button type ="reset" class="btn btn-warning">Cancelar</button>
                                {{--  <button type ="submit" class="btn btn-success">Editar Equipo</button> --}}
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection