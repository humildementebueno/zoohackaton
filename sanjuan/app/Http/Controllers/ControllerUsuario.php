<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RequestUsuario;
use DB;

class ControllerUsuario extends Controller
{
    public function __construct(){
        $this->middleware('auth'); // Restrictor de session 
    }

    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
         
           $usuarios=DB::table('users')->where('name','LIKE','%'.$query.'%')
           ->orderBy('id','desc')
           ->paginate(6);

           return view('modulos.users.index',["usuarios"=>$usuarios,"searchText"=>$query]);
        } 
    } 
    public function create(){
        return view("modulos.users.create");
    }
    public function store(RequestUsuario $request){
       
        $usuario = new User;
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->ci=$request->get('ci');
        $usuario->sexo=$request->get('sexo');
        $usuario->fecha_nac=$request->get('fecha_nac');
        $usuario->direccion=$request->get('direccion');
        $usuario->cel=$request->get('cel');
        $usuario->foto=$request->get('foto');
        $usuario->tipo=$request->get('tipo');
        $usuario->activo=$request->get('activo');
        $usuario->save();
        
        return Redirect::to('modulos/users');
    }

    public function show($id){
        return view("modulos/users.show",["usuario"=>User::findOrFail($id)]);

    }
    public function edit($id){
        return view("modulos/users.edit",["usuario"=>User::findOrFail($id)]);
    }
    public function update(RequestUsuario $request,$id){
        $usuario = User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');

        if(!empty($request->get('password'))){
            $usuario->password=bcrypt($request->get('password'));
        }

        $usuario->ci=$request->get('ci');
        $usuario->sexo=$request->get('sexo');
        $usuario->fecha_nac=$request->get('fecha_nac');
        $usuario->direccion=$request->get('direccion');
        $usuario->cel=$request->get('cel');
        $usuario->foto=$request->get('foto');
        $usuario->tipo=$request->get('tipo');
        $usuario->activo=$request->get('activo');
        $usuario->update();
        return Redirect::to("modulos/users");
    }
    public function destroy($id){
        $usuario= user::findOrFail($id);
        $usuario->activo="0";
        $usuario->update();
        return Redirect::to('modulos/users');
    } 
}
