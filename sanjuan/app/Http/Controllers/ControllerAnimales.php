<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Estudiante;
use App\Http\Requests\RequestEstudiante;
use DB;


class ControllerAnimales extends Controller
{
    public function index(Request $request){
        return view('modulos.animales.index');
}
}
