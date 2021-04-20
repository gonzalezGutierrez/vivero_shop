<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name'=>['required'],
            'slug'=>['required'],
            'price'=>['required'],
            'image_thumb_url'=>['required'],
            'category_id'=>['required'],
            'description'=>['required'],
            'recommendations'=>['required'],
            'stock'=>['required'],
            'min_purchases'=>['required'],
        ];
    }
}
