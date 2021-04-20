<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
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
            'name'=> ['requiered'],
            'last_name'=> ['requiered'],
            'email'=> ['requiered','unique:users,email'],
            'password'=> ['requiered','min:8'],
            'phone'=> ['requiered'],
            'role_id'=> ['requiered']
        ];
    }
}
