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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profesores as $profesor)
                        <tr>
                            <td class="align-middle">{{$profesor->rut}}</td>
                            <td class="align-middle">{{$profesor->nombre}}</td>
                            <td class="align-middle">{{$profesor->apellido}}</td>         
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection