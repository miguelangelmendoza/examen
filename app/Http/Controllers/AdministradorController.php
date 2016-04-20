<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdministradorController extends Controller
{

	public function __construct()
	{
        
	}

    public function index()
    {
    	return view('panel-administrador');
    }

    public function logout(){
    	session()->flush();
    	return redirect('/');
    }
}
