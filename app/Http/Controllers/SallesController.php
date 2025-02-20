<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SallesController extends Controller
{
  public function salles(){
    return view('salles');
  }

  public function creeSalle(){
    return view('creeSalles');
  }

  public function modifierSalle(int $id){
    return view(('modifierSalles'), ['id' => $id]);
  }

  public function supprimerSalle(int $id){

  }
}
