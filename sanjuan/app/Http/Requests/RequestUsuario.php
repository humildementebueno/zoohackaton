<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestUsuario extends Request
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
            'name' =>'required | max:255',
            'email' => 'required | email | max:255', 
            'password' => 'min:6 | confirmed', 
            'ci' => 'required | max:255',
            'sexo' => 'required | max:255',
            'fecha_nac' => 'required | max:255',
            'direccion' => 'required | max:255',
            'cel' => 'required | max:255',
            // 'foto' => 'required | max:255',
            'tipo' => 'required | max:255',
            'activo' => 'required | max:255' 
        ];
    }
}
