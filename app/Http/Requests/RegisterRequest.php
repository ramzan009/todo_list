<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
              'required',
              'string',
            ],
            'email' => [
                'required',
                'email',
                'unique:' . User::class . ',email',
            ],
            'password' => [
                'required',
                'integer',
                'confirmed'
            ]
        ];
    }
}
