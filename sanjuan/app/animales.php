<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class animales extends Model
{
    protected $table='animales';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'nombre', 
        'especie', 
        'estado', 
        'resumen', 
        'ubicacion'
    ];

    protected $guarded =[

    ];

}
