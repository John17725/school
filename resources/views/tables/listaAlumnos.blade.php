@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Edad</th>
                <th scope="col">Grado</th>
                <th scope="col">Grupo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if ($alumnos->isNotEmpty())
                @foreach ($alumnos as $key=>$alumno )
                    <tr>
                        <th scope="row">{{$alumno->id}}</th>
                        <td>{{$alumno->Nombre}}</td>
                        <td>{{$alumno->Apellidos}}</td>
                        <td>{{$alumno->Edad}}</td>
                        <td>{{$alumno->Grado}}</td>
                        <td>{{$alumno->Grupo}}</td>
                        <td>
                            <a href="{{route('viewReports', $alumno->id)}}" class="btn btn-outline-info btn-sm">Ver Reportes</a>
                            <a href="{{route('makeReport', $alumno->id)}}" class="btn btn-outline-warning btn-sm">Nuevo reporte</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <td colspan="6" class="text-center">S I N  -  R E G I S T R O S</td>
            @endif
        </tbody>
    </table>
</div>
@endsection