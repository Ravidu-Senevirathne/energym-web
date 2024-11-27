<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Allow all users to attempt login
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:255', // Validate username as required, string, with max length of 255
            'password' => 'required|string|min:8', // Validate password as required, string, with minimum length of 8
        ];
    }


public function messages()
{
    return [
        'required' => 'The :attribute field is required.',
        'string' => 'The :attribute must be a string.',
        'max.string' => 'The :attribute must not be more than :max characters.',
        'min.string' => 'The :attribute must be at least :min characters.',
    ];
}

}
