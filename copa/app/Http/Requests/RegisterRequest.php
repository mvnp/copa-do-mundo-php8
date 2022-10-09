<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name'=> 'required|alpha',
            'last_name' => 'required|alpha',
            'email'     => 'required|max:100|email|unique:users',
            'status'    => 'required',
            'password'  => 'required'
        ];
    }

    public function messages()
    {
    	return [
    		'required' => 'Este campo é obrigatório',
            'email.unique' => 'Existe um cadastro com esse email',
			'min' => 'Campo deve ter no mínimo :min caracteres',
            'alpha' => 'Preencher esse campo somente com letras.'
	    ];
    }
}