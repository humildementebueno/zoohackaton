<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestEstudiante extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cod'=>'required | max:50',
            'fecha'=>'required | max:50',
            'ap_paterno'=>'required | max:50',
            'ap_materno'=>' max:50',
            'nombre'=>'required | max:50',
            'c_identidad'=>'max:50',
            'c_discapacidad'=>'max:50',
            'tipo_discapacidad'=>'required | max:50',
            'grado'=>' max:50',
            'rude_es'=>'required | max:50',
            'lugar_nac'=>'required | max:50',
            'fecha_nac'=>'required | max:50',
            'edad'=>'required | max:50',
            'sexo'=>'required | max:50',
            'nom_padre'=>'required | max:50',
            'ocup_padre'=>'required | max:50',
            'nom_madre'=>'required | max:50',
            'ocup_madre'=>'required | max:50',
            'unid_procedencia'=>' max:50',
            'grado_ant'=>'max:50',
            'domicilio'=>'max:50',
            'celular'=>'max:50',
            'obs'=>'max:50',


        ];
    }
}
