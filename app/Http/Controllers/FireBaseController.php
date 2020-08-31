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
        $correoId=$id;
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

    	$database = $firebase->getDatabase();
        $ref=$database->getReference('Usuario');

        $llaves=$database->getReference('Usuario')->getChildKeys();

        foreach ($llaves as $ll) {
            $datos = $ref->getChild($ll)->getValue();
            foreach ($datos as $d => $value) {
                 if($datos['correo']==$correoId){
                        $ref->getChild($ll)->remove();
                    }
            }
           
        }
        $subjects = $ref->getValue();
        foreach($subjects as $s){
            $all_subjects[] = $s;
        }
    
    return view('tablaFirebase',compact('all_subjects'));
    }

    public function show(){

    }
    public function update(Request $request,$id){
             $correoN=$request->get('correo');
        $contraseñaN=$request->get('contraseña');
        $correoId=$id;
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        $database = $firebase->getDatabase();
        $ref=$database->getReference('Usuario');

        $llaves=$database->getReference('Usuario')->getChildKeys();

        foreach ($llaves as $ll) {
            $datosN = $ref->getChild($ll)->getValue();
            foreach ($datosN as $d) {
                if($datosN['correo']==$correoId){
                     $ref->getChild($ll)->set([
                      'correo'=>$correoN,
                        'contraseña'=>$contraseñaN
                            ]);

                }
            }
                       
        }
        $subjects = $ref->getValue();
        foreach($subjects as $s){
            $all_subjects[] = $s;
        }
    
            return view('tablaFirebase',compact('all_subjects'));
    }

     public function edit($id){
       

        $correoId=$id;
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        $database = $firebase->getDatabase();
        $ref=$database->getReference('Usuario');

        $llaves=$database->getReference('Usuario')->getChildKeys();

        foreach ($llaves as $ll) {
            $datosN = $ref->getChild($ll)->getValue();
            foreach ($datosN as $d) {
                if($datosN['correo']==$correoId){
                        $datos=$datosN;
                }
            }
            
        }
        return view('edit',compact('datos'));
    }
}
