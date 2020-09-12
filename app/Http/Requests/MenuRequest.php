<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'category_id' => 'required|numeric|',
            'food_type_id' => 'required|numeric|digits:1',
            'description' => 'nullable|string|max:255',
            'ingredients' => 'nullable|string|max:255',
            'recipe' => 'nullable|string|max:255',
            'price' => 'required|numeric'
        ];
    }
}
