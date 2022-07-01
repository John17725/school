@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-4">
        <button type="button" style="text-decoration: none; " class="btn btn-primary"><a style="text-decoration: none; color: #fff;" href="{{route('home')}}"> Volver</a></button>
    </div>
    <div class="alert alert-dark" role="alert">
        Observaciones/Reportes de "{{$alumno->Nombre}} {{$alumno->Apellidos}} del Grupo {{$alumno->Grupo}}, Grado {{$alumno->Grado}}"
      </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Profesor que realizo reporte</th>
                <th scope="col">Materia</th>
                <th scope="col">Observaciones o reporte</th>
            </tr>
        </thead>
        <tbody>
            @if ($reportes->isNotEmpty())
                @foreach ($reportes as $key=>$report )
                    <tr>
                        <th scope="row">{{$report->id}}</th>
                        <th>{{$report->nombre_profesor}}</th>
                        @if ($report->materia == null)
                            <th>Sin valor</th>
                        @else
                            <th>{{$report->materia}}</th>
                        @endif
                        <th>{{$report->observaciones}}</th>
                    </tr>
                @endforeach
            @else
                <td colspan="6" class="text-center">S I N  -  R E G I S T R O S</td>
            @endif
        </tbody>
    </table>
</div>
@endsection