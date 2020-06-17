<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationFormRequest extends FormRequest
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
            'tel' =>'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:15'
        ];
    }

    /*public function messages()
    {
        return [
            'tel.unique' =>'le numero de telephone est deja existe',
            'email.unique' => 'email deja existe',
            'email.required' => 'email est requie',
           
        ];
    }*/
}
