<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_ar' => 'string',
            'name_en' => 'requiered|string',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'price' => 'required|numeric|min:1',
            'quantity' => 'required|integer|max:10000000|min:1',
            'currency_id' => 'nullable|exists:currencies,id',
            'category_id' => 'nullable|exists:categories,id',
            'area_id' => 'nullable|exists:areas,id',
            'owner_id' => 'nullable|exists:users,id',
            'images' => 'required|array',
            'images.*' => 'required|file|image',
        ];
    }
}
