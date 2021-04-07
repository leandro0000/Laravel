<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nota;
use Illuminate\Support\Facades\App;
use Mockery\Mock;

class homecontroller extends Controller
{

  public function enviar(Request $request){


    $nota  = new Nota();

     $nota ->nombre =$request->nombre;
     $nota ->descripcion =$request->descripcion;



     $nota->save();

     return view('welcome');

     //asi se guarda un archivo en la base de datos




  }

  public function men(){

     return view('leandro');


  }


  public function mostrar(){


    $notas = Nota::all();

    return view('welcome',compact('notas'));



  }


  public function delete($id){

    $eliminar = Nota::find($id);

    $eliminar->delete();

    return view('welcome');

    //asi se elimina un registro de la base de datos



  }


   public function editar($id){

      $editar = Nota::find($id);

      return view('editar',compact('editar'));

      //mande por la ulr el id para modificar

   }


  public function update(Request $request ,$id){


     $editar = Nota::find($id);

     $editar ->nombre =$request->nombre;
     $editar ->descripcion =$request ->descripcion;


     $editar->save();

     //asi se manda la peticion para modificar
     //request es solicitud


    //creacion de login composer require laravel/breeze --dev
    //php artisan breeze:install
     //npm i 
     //npm install
     //npm rum dev





  }


}
