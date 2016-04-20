@extends('templates.website')

@section('content')

<section id="section-ingresar" class="container">

  <div class="row">

    <form class="col s12" method="post" action="/registro-usuario">
    {{ csrf_field() }}
            <h1>Registrar usuario</h1>
            <label class="active" for="nombre">Nombre Usuario</label>
            <input name="nombre" id="nombre" type="text" class="validate"><br>
            <label class="active" for="email">Email</label>
            <input name="email" id="email" type="email" class="validate"><br>
            <label class="active" for="password">Password</label>
            <input name="password" id="password" type="password" class="validate"><br><br>
            <a href="/"><input type="button" value="Regresar"></input></a>
            <input type="submit" value="Registrar"></input>


    </form>

  </div>

</section>

@stop