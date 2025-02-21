<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function salles(){
        return view('salles');
    }

    public function reservation(){
        return view('reservation');
    }
}
