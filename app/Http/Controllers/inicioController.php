<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//inicializacion del array
$items=array();
class inicioController extends Controller
{
        
    public function index(){
    	$numero=2334;
    	return view('welcome',["numero"=>$numero, "items"=>$items]);
    }

    public function store(Request $request){
        //contraseña y correo que vienen de la vista welcome
    	$correo=$request->get('correo');
    	$contraseña=$request->get('contraseña');

    	$numero=24213;

        //arrays para gusrdar contraseña y correo
         $items=array("correo"=>$correo,"contraseña"=>$contraseña);
         //array de objetos
          $versiones = array("productos" => array($items));
          //cambia array a json
          json_encode($items);   
    	
        //envío de parametros a la vista welcome
    	return view('welcome',["correo"=>$correo,"contraseña"=>$contraseña,"numero"=>$numero,"items"=>$items,"versiones"=>$versiones]);	
    }

    
}
