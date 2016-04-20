<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/registrar-usuario', function () {
    return view('registrar-usuario');
});

Route::get('/ingresar', function () {
    return view('ingresar');
});

Route::post('/registro-usuario', 'UsuarioController@store');

Route::post('/login', 'LoginController@store');

Route::group(['middleware' => ['admin']], function(){
	Route::get('/administrador','AdministradorController@index');
	Route::get('/logout','AdministradorController@logout');
	Route::get('/mascotas','MascotasController@index');
	Route::post('/registro-mascota','MascotasController@store');
	Route::get('/informacion-mascota/{id}', 'MascotasController@show');
});
