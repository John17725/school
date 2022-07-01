@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <button type="button" style="text-decoration: none; " class="btn btn-primary"><a style="text-decoration: none; color: #fff;" href="{{route('home')}}"> Volver</a></button>
    </div>
    <form action="{{route('saveAlumno')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="text" class="form-control" name="edad" id="edad" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="grado">Grado</label>
            <input type="text" class="form-control" name="grado" id="grado" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="grupo">Grupo</label>
            <input type="text" class="form-control" name="grupo" id="grupo" aria-describedby="emailHelp">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Registrar Alumno</button>
        </div>
    </form>
</div>
@endsection