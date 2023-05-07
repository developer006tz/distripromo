<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionUpdateRequest extends FormRequest
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
            'user_id' => ['required', 'exists:users,id'],
            'order_id' => ['required', 'exists:orders,id'],
            'vendor_id' => ['required', 'exists:vendors,id'],
            'amount' => ['required', 'numeric'],
            'date' => ['required', 'date'],
            'status' => ['required', 'in:pending,complete,failed'],
        ];
    }
}
