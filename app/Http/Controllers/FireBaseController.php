<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
class FireBaseController extends Controller
{
    public function index(Request $request){

        $id=$request->get("id");
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

    	$database = $firebase->getDatabase();

    	$ref=$database->getReference('Usuario');
    	$subjects = $ref->getValue();

    	foreach($subjects as $s){
    	    $all_subjects[] = $s;
    	}
       //return json_encode($all_subjects);
        //    return view('tablaFirebase',compact('all_subjects'));
        if($id!=""){
            
         $all_subjects = $ref->OrderByChild('correo')->equalTo($id)->getValue();
        }

         return view('tablaFirebase',compact('all_subjects'));

    }

    public function store(Request $request){
        $correo=$request->get('correo');
        $contraseña=$request->get('contraseña');
        
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

    	$database = $firebase->getDatabase();

    	$ref=$database->getReference('Usuario');
        $subjects = $ref->getValue();

        $key = $ref->push()->getKey();

    	$ref->getChild($key)->set([
    	    'correo'=>$correo,
    	    'contraseña'=>$contraseña
        ]);

    	foreach($subjects as $s){
    	    $all_subjects[] = $s;
    	}
        return view('tablaFirebase',compact('all_subjects'));
    }

    public function destroy($id){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

    	$database = $firebase->getDatabase();

    
    return "231213";
    }

    public function show(){

    }
}
