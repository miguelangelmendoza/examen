@extends('templates.administrador')


@section('content')

	<p>
		Nombre: <?=$mascotas['nombre']?>
		<br>
		Edad: <?=$mascotas['edad']?>
		<br>
		Tipo: <?=$mascotas['tipo']?>
		<br>
		Color: <?=$mascotas['color']?>
	</p>
<a href="/mascotas"><input type="button" value="Regresar"></input></a>
@stop