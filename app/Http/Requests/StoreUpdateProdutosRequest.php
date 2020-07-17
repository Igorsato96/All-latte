<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProdutosRequest extends FormRequest
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
            'prices' => 'required',
            'qty' => 'required',
            'description' => 'required',
            'id_category' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório', 
            'prices.required' => 'Preço é obrigatório', 
            'qty.required' => 'Quantidade é obrigatório', 
            'description.required' => 'Descrição é obrigatório', 
            'id_category.required' => 'Categoria é obrigatório', 
           
        ];
    }
}
