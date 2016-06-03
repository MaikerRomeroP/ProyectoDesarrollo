<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ActasRequest extends Request
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
                return ['titulo' => 'required',
                        'motivo' => 'required',
                        'puntos' => 'required',
                        'conclusiones' => 'required',
                        'reunion' => 'required',
                        'fecha' => 'required'
                        ];
            }
            case 'PUT':
            {
                return [];
            }
            case 'DELETE':
            {
                return [];
            }
            default: break;
        }
    }
}
