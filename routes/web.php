<?php
use App\Http\Controllers\SallesController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('reservation', function(){
  return view('reservation');
});

Route::controller(SallesController::class)->group(function(){
  Route::get('/salles', 'salles');
  Route::get('salles/creesalle', 'creesalle');
  Route::post('salles/insert', 'insertsalle');
  Route::get('salles/modifiersalle/{id}', 'modifiersalle');
  Route::get('salles/supprimersalle/{id}', 'supprimersalle');
});

Route::controller(ReservationController::class)->group(function(){
  Route::get('/client', 'salles');
  Route::get('/client/reservation', 'reservation');
});
