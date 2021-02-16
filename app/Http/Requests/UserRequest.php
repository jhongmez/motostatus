<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            // Edit Form
            return [
                'name'      => 'required',
                'surname'   => 'required',
                'email'     => 'required|email|unique:users,email,'.$this->id,
            ];
        } else {
            // Create Form
            return [
                'name'      => 'required',
                'surname'   => 'required',
                'email'     => 'required|email|unique:users',
                'password'  => 'required|min:6|confirmed',
            ];
        }
    }

    public function messages() {
        return [
            'name.required'     => 'El campo ":attribute" es obligatorio.',
            'name.required'     => 'El campo ":attribute" es obligatorio.',
            'email.required'    => 'El campo ":attribute" es obligatorio.',
            'password.required' => 'El campo ":attribute" es obligatorio.'
        ];
    }

    public function attributes() {
        return [
            'name'      => 'Nombre',
            'surname'   => 'Apellido',
            'email'     => 'Correo electrónico',
            'password'  => 'Contraseña',
        ];
    }
}
