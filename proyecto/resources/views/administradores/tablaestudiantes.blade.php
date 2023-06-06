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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estudiantes as $estudiante)
                        <tr>
                            <td class="align-middle">{{$estudiante->rut}}</td>
                            <td class="align-middle">{{$estudiante->nombre}}</td>
                            <td class="align-middle">{{$estudiante->apellido}}</td>
                            <td class="align-middle">{{$estudiante->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection