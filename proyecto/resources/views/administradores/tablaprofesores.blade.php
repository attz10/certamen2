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
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profesores as $profesor)
                        <tr>
                            <td class="align-middle">{{$profesor->rut}}</td>
                            <td class="align-middle">{{$profesor->nombre}}</td>
                            <td class="align-middle">{{$profesor->apellido}}</td>     
                            <td>
                                <a href="{{route('profesor.edit',$profesor->rut)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Editar {{$profesor->nombre}}">editar
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