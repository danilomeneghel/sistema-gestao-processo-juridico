<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessoRequest extends FormRequest
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
            'nro_processo'=> ['required', 'max:15'],
            'data_distribuicao'=> ['required', 'max:10'],
            'valor_causa'=> ['required', 'max:15'],
            'vara'=> ['required', 'max:15'],
            'cidade'=> ['required', 'max:50'],
            'uf'=> ['required', 'max:2']
        ];
    }
}
