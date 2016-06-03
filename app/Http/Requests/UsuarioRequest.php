<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
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
        switch($this->method()){
            case 'POST':
            {
                return [
                        'nombre'    => 'required',
                        'apellido'  => 'required',
                        'rol_id'    => 'required|numeric',
                        'telefono'  => 'required|numeric',
                        'email'     => 'required|email|unique:users,email',
                        'direccion' => 'required',
                    ];
            }
            case 'PUT':{
                return [
                        'nombre'    => 'required',
                        'apellido'  => 'required',
                        'rol_id'    => 'required|numeric',
                        'telefono'  => 'required|numeric',
                        'email'     => 'required|email|unique:users,email,'.$this->usuarios,
                        'direccion' => 'required',
                    ];
            }
            case 'DELETE':{
                return [];
            }
            default: break;
        }
    }
}
