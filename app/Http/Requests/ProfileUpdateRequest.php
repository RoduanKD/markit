<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'firstname'             => 'required|min:3|max:255|string',
            'lastname'              => 'required|min:3|max:255|string',
            'email'                 => ['required', 'email', 'string', 'max:255', Rule::unique('users')->ignore(Auth::user())],
            'phone'                 => 'required|digits_between:10,10',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ];
    }

    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        if ($this->password == null) {
            $this->request->remove('password');
        }
    }
}
