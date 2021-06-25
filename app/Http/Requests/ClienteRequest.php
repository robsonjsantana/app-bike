<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            //
            'name'              => 'required|max:100',
            'email'             => 'required|email:rfc,dns|max:100',
            'endereco'          => 'required|max:200',
            'cpf'               => 'required|unique:clientes|max:14',
            'celular'           => 'required|max:13',
        ];
    }
}
