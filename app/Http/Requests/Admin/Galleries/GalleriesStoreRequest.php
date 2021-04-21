<?php

namespace App\Http\Requests\Admin\Galleries;

use Illuminate\Foundation\Http\FormRequest;

class GalleriesStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'title'=> ['required'],
            'image_url'=>['required']
        ];
    }
}
