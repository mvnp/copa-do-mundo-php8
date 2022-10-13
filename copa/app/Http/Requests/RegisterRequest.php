<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function store()
    {
        return [
            'first_name'=> 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email'     => 'required|max:100|email|unique:users',
            'password'  => 'required|min:5',
            'status'    => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the put/patch request.
     *
     * @return array
     */
    public function update()
    {
        $data = $this->request->all();
        $user = User::where("email", $data['email'])->first();
        
        return [
            'first_name'=> 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            //'email' => 'unique:users,email_address,$user->id,id,account_id,1'
            //'email' => 'required|max:100|email|unique:users,email,'.$user->id,
            'email' => 'required|max:100|email|exists:users,email'
        ];
    }

    /**
     * Get the validation rules that apply to the delete request.
     *
     * @return array
     */
    public function destroy()
    {
        return [
            'id' => 'required|integer|exists:users,id'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
    		'required' => 'Este campo é obrigatório',
            'first_name.required' => 'O campo Nome é obrigatório!',
            'last_name.required' => 'O campo Sobrenome é obrigatório!',
            'email.unique' => 'Existe um cadastro com esse email',
            'email.exists' => 'Existe um cadastro com esse email',
			'min' => 'Campo deve ter no mínimo :min caracteres',
            'password.required' => 'O campo senha é obrigatório!',
            'alpha' => 'Preencher esse campo somente com letras.',
	    ];
    }
}