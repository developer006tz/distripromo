<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'role' => ['nullable', 'in:client,wakala,admin,super_admin'],
            'name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'unique:users,email', 'email'],
            'image' => ['nullable', 'image', 'max:1024'],
            'password' => ['required'],
            'phone' => ['nullable', 'unique:users,phone', 'max:255', 'string'],
            'roles' => 'array',
        ];
    }
}
