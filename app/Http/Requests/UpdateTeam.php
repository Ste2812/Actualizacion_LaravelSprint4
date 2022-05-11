<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeam extends FormRequest
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
            'nombre'=> 'required|max:25',
            'tipo'=>'required',
            'num_jugadores'=>'required|integer|min:8|max:12',
        ];
    }

    public function attribute(){

        return[
            'tipo'=>'tipo de equipo'


        ];
    }
}
