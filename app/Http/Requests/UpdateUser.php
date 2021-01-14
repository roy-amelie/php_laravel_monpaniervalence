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
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'birthdate' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|numeric|max:99999',
            'address' => 'required|string|max:255',
            'gender' => 'required'
        ];
    }
}
