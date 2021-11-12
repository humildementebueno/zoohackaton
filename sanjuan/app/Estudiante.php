<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table='estudiante';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'cod',
        'fecha', 
        'ap_paterno', 
        'ap_materno', 
        'nombre', 
        'c_identidad', 
        'c_discapacidad', 
        'tipo_discapacidad', 
        'grado', 
        'rude_es', 
        'lugar_nac', 
        'fecha_nac', 
        'edad', 
        'sexo', 
        'nom_padre', 
        'ocup_padre',
        'nom_madre', 
        'ocup_madre', 
        'unid_procedencia',
        'grado_ant', 
        'domicilio', 
        'celular', 
        'obs'
    ];

    protected $guarded =[

    ];


}
