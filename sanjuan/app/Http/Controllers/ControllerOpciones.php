<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Estudiante;
use App\Http\Requests\RequestEstudiante;
use DB;


class ControllerOpciones extends Controller
{
    public function index(Request $request){
          
            return view('modulos.opciones.index');
    }

    public function create(){
        $data=DB::table('estudiante')->select('Id')
        ->orderBy('id','desc')
        ->take(1)
        ->get();
            
        return view("modulos.estudiantes.create",["cod"=>$data]);
    }
    
    public function store(RequestEstudiante $request){
        $estudiante = new Estudiante;
        $estudiante->cod=$request->get('cod');
        $estudiante->fecha=$request->get('fecha');
        $estudiante->ap_paterno=$request->get('ap_paterno');
        $estudiante->ap_materno=$request->get('ap_materno');
        $estudiante->nombre=$request->get('nombre');
        $estudiante->c_identidad=$request->get('c_identidad');
        $estudiante->c_discapacidad=$request->get('c_discapacidad');
        $estudiante->tipo_discapacidad=$request->get('tipo_discapacidad');
        $estudiante->grado=$request->get('grado');
        $estudiante->rude_es=$request->get('rude_es');
        $estudiante->lugar_nac=$request->get('lugar_nac');
        $estudiante->fecha_nac=$request->get('fecha_nac');
        $estudiante->edad=$request->get('edad');
        $estudiante->sexo=$request->get('sexo');
        $estudiante->nom_padre=$request->get('nom_padre');
        $estudiante->ocup_padre=$request->get('ocup_padre');
        $estudiante->nom_madre=$request->get('nom_madre');
        $estudiante->ocup_madre=$request->get('ocup_madre');
        $estudiante->unid_procedencia=$request->get('unid_procedencia');
        $estudiante->grado_ant=$request->get('grado_ant');
        $estudiante->domicilio=$request->get('domicilio');
        $estudiante->celular=$request->get('celular');
        $estudiante->obs=$request->get('obs');
        $estudiante->save();
        
        return Redirect::to('modulos/estudiantes');
    }

    public function edit($id){
        return view("modulos/estudiantes.edit",["estudiante"=>Estudiante::findOrFail($id)]);
    }

    public function update(RequestEstudiante $request,$id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->cod=$request->get('cod');
        $estudiante->fecha=$request->get('fecha');
        $estudiante->ap_paterno=$request->get('ap_paterno');
        $estudiante->ap_materno=$request->get('ap_materno');
        $estudiante->nombre=$request->get('nombre');
        $estudiante->c_identidad=$request->get('c_identidad');
        $estudiante->c_discapacidad=$request->get('c_discapacidad');
        $estudiante->tipo_discapacidad=$request->get('tipo_discapacidad');
        $estudiante->grado=$request->get('grado');
        $estudiante->rude_es=$request->get('rude_es');
        $estudiante->lugar_nac=$request->get('lugar_nac');
        $estudiante->fecha_nac=$request->get('fecha_nac');
        $estudiante->edad=$request->get('edad');
        $estudiante->sexo=$request->get('sexo');
        $estudiante->nom_padre=$request->get('nom_padre');
        $estudiante->ocup_padre=$request->get('ocup_padre');
        $estudiante->nom_madre=$request->get('nom_madre');
        $estudiante->ocup_madre=$request->get('ocup_madre');
        $estudiante->unid_procedencia=$request->get('unid_procedencia');
        $estudiante->grado_ant=$request->get('grado_ant');
        $estudiante->domicilio=$request->get('domicilio');
        $estudiante->celular=$request->get('celular');
        $estudiante->obs=$request->get('obs');
        $estudiante->update();
        return Redirect::to('modulos/estudiantes');
    }

    public function destroy($id){
        $estudiante= Estudiante::findOrFail($id);
            $estudiante->delete();
            return Redirect::to('modulos/estudiantes');
    }

}
