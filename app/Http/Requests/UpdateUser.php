<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'El nombre es un campo requerido',
            'email' => 'El email es un campo requerido',
            'password' => 'El password es un campo requerido',
            'roles' => 'El rol es un campo requerido'
        ];
    }
}
