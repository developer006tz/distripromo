<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest
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
            'social_media_platform_id' => [
                'required',
                'exists:social_media_platforms,id',
            ],
            'name' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string'],
            'price' => ['required', 'numeric'],
            'image' => ['nullable', 'image', 'max:1024'],
        ];
    }
}
