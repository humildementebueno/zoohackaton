<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idiomas extends Model
{
    protected $table='idiomas';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'español', 
        'ingles',
        'aymara',
        'guarani',
        'quechua'
    ];

    protected $guarded =[

    ];   //
}
