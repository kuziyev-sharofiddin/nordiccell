<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'parent_category_id' => 'int|required',
            'category_id' => 'int|required',
            'sub_category_id' => 'int|nullable',
            'sub_category_item_id' => 'int|nullable',
            'title' => 'string|required',
            'description' => 'string|nullable',
            'definition' => 'string|nullable',
            'ref_number' => 'string|nullable',
            'bulk' => 'string|nullable',
            'bulk_part' => 'string|nullable',
            'testing' => 'string|nullable',
            'latex_material' => 'string|nullable',
            'sterility' => 'string|nullable',
            'ce_marking' => 'string|nullable',
            'intended_use' => 'string|nullable',
            'available_in' => 'string|nullable',
            'quantity' => 'string|nullable',
            'price' => 'string|nullable',
            'discount_price' => 'string|nullable',
        ];
    }
}
