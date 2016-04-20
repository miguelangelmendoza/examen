@extends('templates.administrador')

@section('titulo')
        <title>Panel {{session()->get('administrador')->nombre}}</title>
@stop

@section('content')

        <h1>Administrador</h1>
        <a href="/mascotas"><input type="button" value="Registrar mascota"></input></a>
        <a href="/logout"><input type="button" value="Salir"></input></a>
@stop