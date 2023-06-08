@extends('layouts.master')

@section('contenido-principal')
    <div class="row">
        <div class="col">
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estudiantes as $estudiante)
                        <tr>
                            <td class="align-middle">{{$estudiante->rut}}</td>
                            <td class="align-middle">{{$estudiante->nombre}}</td>
                            <td class="align-middle">{{$estudiante->apellido}}</td>
                            <td class="align-middle">{{$estudiante->email}}</td>
                            <td>
                                <a href="{{route('estudiante.edit',$estudiante->rut)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Editar {{$estudiante->nombre}}">editar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection