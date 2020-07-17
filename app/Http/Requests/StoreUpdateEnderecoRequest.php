<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEnderecoRequest extends FormRequest
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
            'name' => 'required',
            'cep' => 'required',
            'number' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório', 
            'cep.required' => 'cep é obrigatório', 
            'number.required' => 'Numero é obrigatório', 
            'state.required' => 'Estado é obrigatório', 
            'city.required' => 'Cidade é obrigatório', 
            'address.required' => 'Rua é obrigatório', 
        ];
    }
}
