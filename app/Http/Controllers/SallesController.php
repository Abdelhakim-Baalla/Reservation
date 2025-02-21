<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SallesController extends Controller
{
  public function salles(){
    $salles = DB::table('salles')->get();
    return view('salles', compact('salles'));
  }

  public function creesalle(){
    return view('creeSalles');
  }

  public function insertsalle(Request $request){
    DB::table('salles')->insert([
      'nom'=>$request->nom,
      'description'=>$request->description,
      'localisation'=>$request->localisation,
      'image'=>$request->image,
      'date'=>$request->date,
      'time'=>$request->time,
      'prix'=>$request->prix,
    ]);

    return redirect('/salles');
    
  }

  public function modifiersalle(int $id){
    return view(('modifierSalles'), ['id' => $id]);
  }

  public function supprimersalle(int $id){

  }
}
