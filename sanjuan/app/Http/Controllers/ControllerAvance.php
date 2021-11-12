<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerAvance extends Controller
{
    public function index(Request $request){
          
        return view('modulos.avance.index');
    }
}
