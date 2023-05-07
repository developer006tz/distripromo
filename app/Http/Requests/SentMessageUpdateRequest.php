<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SentMessageUpdateRequest extends FormRequest
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
            'message_id' => ['required', 'exists:messages,id'],
            'user_id' => ['required', 'exists:users,id'],
            'phone' => ['required', 'max:255', 'string'],
            'status' => ['required', 'in:0,1,2,3,4'],
            'date' => ['nullable', 'date'],
        ];
    }
}
