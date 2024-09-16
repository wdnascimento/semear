<?php

namespace App\Http\Requests\Admin\Reciept;

use Illuminate\Foundation\Http\FormRequest;

class RecieptCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'payer' =>'required',
            'value' =>'required|regex:/^([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/',
            'reference' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'payer.required' =>'Este campo :attribute é de preenchimento obrigatório.',
            'value.required' =>'Este campo :attribute é de preenchimento obrigatório.',
            'value.regex' => 'Este campo :attribute dever ser um Valor no formato 00,00',
            'reference.required' => 'Este campo :attribute é de preenchimento obrigatório.',

        ];
    }

    public function attributes()
    {
        return [
            'payer' =>'Pagador (Sacado)',
            'value' =>'Valor',
            'reference' =>'Referência',

        ];
    }
}
