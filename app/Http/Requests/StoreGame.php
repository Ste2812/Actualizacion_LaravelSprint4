<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGame extends FormRequest
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
            'lugar'=> 'required|max:45',
            'fecha'=>'required',
            'id_equipo_A'=>'required',
            'id_equipo_B'=>'required',
        ];
    }
    public function attribute(){

        return[
            'id_equipo_A'=>'equipo local',
            'id_equipo_B'=>'equipo visitante'

        ];
    }
}
