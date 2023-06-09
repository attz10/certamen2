@extends('layouts.master')

@section('contenido-principal')
<div class="row">
    <div class="container-fluid">
        <div class="col bg-light">
            <h1>Propuestas</h1>
        </div>
    </div>
</div>

<div class="row">
    {{-- listarlas --}}
    <div class="col-9">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Estudiante</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Descargar documento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($propuestas as $num=>$propuesta)
                <tr>
                    <td class="align-middle">{{$num+1}}</td>
                    <td class="align-middle">{{$propuesta->estudiante_rut}}</td>
                    <td class="align-middle">{{$propuesta->fecha}}</td>
                    <td class="align-middle">{{$propuesta->estado}}</td>
                    <td><a class="btn btn-warning" href="{{route('propuestas.download',$propuesta->documento)}}">Descargar archivo</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- ingresar propuesta --}}
    <div class="col-3">
        <div class="card" style="width: 20rem">
            <div class="card-header bg-info">
                <h3>Ingreso de Propuestas</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('propuestas.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="estudiante" class="form-label"><b>Datos del Estudiante</b></label>
                        <select name="estudiante" id="estudiante">
                            @foreach ($estudiantes as $estudiante)
                                <option value="{{$estudiante->rut}}">{{$estudiante->nombre}} {{$estudiante->rut}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" id="estudiante" name="estudiante"> --}}
                        {{-- <div id="rutlHelp" class="form-text">Ingrese rut sin puntos y con guion.</div> --}}
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label"><b>Fecha de Subida</b></label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="mb-3">
                        <label for="documento" class="form-label"><b>Documento PDF</b></label>
                        <input type="file" class="form-control" id="documento" name="documento">
                    </div>
                    <button type ="reset" class="btn btn-warning btn-outline">Cancelar</button>
                    <button type="submit" class="btn btn-success btn-outline">Subir</button>
                </form>
            </div>
        </div>
    </div>
@endsection