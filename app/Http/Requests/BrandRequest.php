<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
                'name'        => 'required|unique:brands,name,'.$this->id,
                'description' => 'required',
                'image'       => 'max:1000',
            ];
        } else {
            // Create Form
            return [
                'name'        => 'required|unique:brands',
                'description' => 'required',
                'image'       => 'required|image|max:1000',
            ];
        }
        
    }

    public function messages() {
        return [
            'name.required'         => 'El campo "Nombre" es obligatorio.',
            'description.required'  => 'El campo "Descripción" es obligatorio.',
            'image.required'        => 'El campo "imagen" es obligatorio.'
        ];
    }
}
