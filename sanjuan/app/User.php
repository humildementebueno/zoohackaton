<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table='users';

    protected $primaryKey='id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'ci', 
        'sexo', 
        'fecha_nac', 
        'direccion', 
        'cel', 
        'foto', 
        'tipo', 
        'activo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin(){
        // $user = json_decode($response->getBody()->getContents())[0];
        // if(Auth::check() && Auth){
            // echo "asdasd";
        if($this->tipo=="0"){
            // return true;
            return true;
            // echo($this->User->tipo);
        }
        return false;
    }
}
