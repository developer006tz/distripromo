<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            // 'role' => ['nullable', 'in:client,wakala,admin,super_admin'],
            'name' => ['required', 'max:255', 'string'],
            'email' => [
                'required',
                Rule::unique('users', 'email')->ignore($this->user),
                'email',
            ],
            'image' => ['nullable', 'image', 'max:1024'],
            'password' => ['nullable'],
            'phone' => [
                'nullable',
                Rule::unique('users', 'phone')->ignore($this->user),
                'max:255',
                'string',
            ],
            'roles' => 'array',
        ];
    }
}
