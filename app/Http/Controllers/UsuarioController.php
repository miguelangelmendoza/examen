<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;

class UsuarioController extends Controller
{


    public function index()
    {
        
    }

    public function store(Request $request){
        $usuario= \DB::table('usuarios')->insert([
        'nombre' => $request->nombre,
        'email' =>  $request->email,
        'password' => \Hash::make($request->password)
        ]);

        return redirect('/');
    }

}
