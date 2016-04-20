@extends('templates.website')

@section('content')

<section id="section-ingresar" class="container">

  <div class="row">

    <form class="col s12" method="post" action="/login">
    {{ csrf_field() }}
      <div class="card-panel">  
        @if(Session::has('error'))
        @endif
            <h1>Iniciar sesion</h1>
            <label class="active" for="email">Email:</label>
            <input name="email" id="email" type="email" class="validate"><br>
            <label class="active" for="password">Password:</label>
            <input name="password" id="password" type="password" class="validate"><br><br>
            <a href="/"><input type="button" value="Regresar"></input></a>
            <input type="submit" value="Iniciar sesion"></input>

      </div>

    </form>

  </div>

</section>

@stop