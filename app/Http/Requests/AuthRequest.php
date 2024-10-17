<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'customer_name' => 'string|nullable',
            'street_address' => 'string|nullable',
            'postal_code' => 'string|nullable',
            'country' => 'string|nullable',
            'vat_number' => 'string|nullable',
            'company_number' => 'string|nullable',
            'phone' => 'string|nullable',
            'fax' => 'string|nullable',
            'contact_person' => 'string|nullable',
            'director_name' => 'string|nullable',
            'contact_person_at_account' => 'string|nullable',
            'email_to_account' => 'email|nullable',
            'phone_to_account' => 'string|nullable',
            'email_for_voice' => 'email|nullable',
            'email' => 'email|nullable',
            'password' => 'string|nullable',
        ];
    }
}
