<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingsRequest extends FormRequest
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
            'color' => 'starts_with:#',
            'email' => 'email',
            'link' => 'url',
            'contact_info' => 'required|min:20',
            'condition' => 'required|min:20',
            'delivery_policy' => 'required|min:20',
        ];
    }
}
