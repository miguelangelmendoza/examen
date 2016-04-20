@extends('templates.administrador')

@section('content')

<section id="section-ingresar" class="container">

  <div class="row">

    <form class="col s12" method="POST" action="/registro-mascota">
    {{ csrf_field() }}
            <h1>Registro mascota</h1>
            <label class="active" for="nombre">Nombre</label>
            <input name="nombre" id="nombre" type="text" class="validate"><br>
            <label class="active" for="edad">Edad</label>
            <input name="edad" id="edad" type="text" class="validate"><br>
            <label class="active" for="tipo">Tipo</label>
            <input name="tipo" id="tipo" type="text" class="validate"><br>
            <label class="active" for="color">Color</label>
            <input name="color" id="color" type="text" class="validate"><br>
            <a href="/administrador"><input type="button" value="Regresar"></input></a>
            <input type="submit" value="Registrar"></input>

    </form>

  </div>
 <?php foreach ($mascotas as $mascota): ?>
    <a href="/informacion-mascota/<?=$mascota['id']?>"><?=$mascota['nombre']?></a>
      <br>
  <?php endforeach ?>

</section>

@stop