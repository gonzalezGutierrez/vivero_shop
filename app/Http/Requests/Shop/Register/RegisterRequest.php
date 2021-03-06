<?php

namespace App\Http\Requests\Shop\Register;

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
            'name'=> ['required'],
            'last_name'=> ['required'],
            'email'=> ['required','unique:users,email'],
            'password'=> ['required','min:8','confirmed'],
            'password_confirmation'=>['required'],
            'phone'=> ['required']
        ];
    }
}
