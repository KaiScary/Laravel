<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inicioController extends Controller
{
    public function index(){
    	$numero=2334;
    	return view('welcome',["numero"=>$numero]);
    }

    public function store(Request $request){
    	$correo=$request->get('correo');
    	$contraseña=$request->get('contraseña');

    	$numero=24213;
    	
    	return view('welcome',["correo"=>$correo,"contraseña"=>$contraseña,"numero"=>$numero]);	
    }

    public function
}
