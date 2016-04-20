@extends('templates.website')

@section('titulo')
        <title>Veterinaria Blanca</title>
@stop

@section('content')
<h1>Veterinaria</h1>
<a href="/registrar-usuario">
<input type="button" value="Registrar usuario"></input>
</a>
<a href="/ingresar">
<input type="button" value="Iniciar sesion"></input>
</a>
@stop