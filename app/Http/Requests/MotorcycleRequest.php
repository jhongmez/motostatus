<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorcycleRequest extends FormRequest
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
           
            return [
                'user_id'           => 'required',
                'brand_id'          => 'required',
                'nameMotorcycle'    => 'required|nameMotorcycle,'.$this->id,
                'cc'                => 'required',
                'model'             => 'required',
                'soat_id'           => 'required',
                'soatDate'          => 'required',
                'taxes'             => 'required',
                'taxesDate'         => 'required',
                'mechanic_id'       => 'required',
                'mechanicsDate'      => 'required',
                'tire_id'           => 'required',
                'tiresDate'         => 'required',
                'brake_id'          => 'required',
                'brakesDate'        => 'required',
                'oil_id'            => 'required',
                'oilDate'           => 'required',
            ];

        } else {
            return [
                'user_id'           => 'required',
                'brand_id'          => 'required',
                'nameMotorcycle'    => 'required',
                'cc'                => 'required',
                'model'             => 'required',
                'soat_id'           => 'required',
                'soatDate'          => 'required',
                'taxes'             => 'required',
                'taxesDate'         => 'required',
                'mechanic_id'       => 'required',
                'mechanicsDate'      => 'required',
                'tire_id'           => 'required',
                'tiresDate'         => 'required',
                'brake_id'          => 'required',
                'brakesDate'        => 'required',
                'oil_id'            => 'required',
                'oilsDate'          => 'required',
            ];
        }
    }
}
