<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class TaskCreateRequest extends FormRequest
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
            'title'       => [
                'required',
                'string',
                'min:5'
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'file_path'   => [
                'nullable',
                'array'
            ],
            'file_path.*'   => [
                'file',
            ],
            'date'        => [
                'required',
                'date'
            ]
        ];
    }
}
