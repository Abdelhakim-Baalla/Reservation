<?php
use App\Http\Controllers\SallesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('reservation', function(){
  return view('reservation');
});

Route::controller(SallesController::class)->group(function(){
  Route::get('salles', 'salles');
  Route::get('salles/creeSalle', 'creeSalle');
  Route::get('salles/modifierSalle/{id}', 'modifierSalle');
  Route::get('salles/supprimerSalle/{id}', 'supprimerSalle');
});
