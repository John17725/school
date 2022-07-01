@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mt-4">
        <button type="button" style="text-decoration: none; " class="btn btn-primary"><a style="text-decoration: none; color: #fff;" href="{{route('home')}}"> Volver</a></button>
    </div>
    <div class="mt-4">
        <label for="name">Alumno</label>
        <input class="form-control col-lg-2" type="text" value="{{$alumno->Nombre}} {{$alumno->Apellidos}} {{$alumno->Grado}} {{$alumno->Grupo}}" aria-label="Disabled input example" disabled readonly>

    </div>
    <form action="{{route('saveReport')}}" method="POST">
        @csrf
        <div class="form-group" style="display: none;">
            <label for="name">Profesor que realiza reporte</label>
            <input type="text" class="form-control" name="id_alumno" value="{{$alumno->id}}" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="name">Profesor que realiza reporte</label>
            <input type="text" class="form-control" name="nombre_profesor" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="name">Nombre de la materia (Opcional)</label>
            <input type="text" class="form-control" name="materia" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones o reporte</label>
            <textarea class="form-control" name="observaciones" id="observaciones" rows="3"></textarea>
          </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Generar reporte</button>
        </div>
    </form>
</div>
@endsection