<?php

namespace App\Http\Controllers\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Authorize all users; customize if needed
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'features' => 'nullable|string',
            'specification' => 'nullable|string',
            'buying_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0|gte:buying_price',
            'discount' => 'nullable|numeric|min:0|max:100',
            'main_image' => 'required|string|max:255',
            'multi_images' => 'nullable|json',
            'video_url' => 'nullable|url',
            'stock_amount' => 'nullable|integer|min:0',
            'is_out_of_stock' => 'nullable|boolean',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'nullable|exists:sub_categories,id',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The product name is required.',
            'description.required' => 'The product description is required.',
            'buying_price.required' => 'The buying price is required.',
            'selling_price.required' => 'The selling price is required.',
            'selling_price.gte' => 'The selling price must be greater than or equal to the buying price.',
            'brand_id.required' => 'A valid brand is required.',
            'category_id.required' => 'A valid category is required.',
            'main_image.required' => 'The main image URL is required.',
        ];
    }
}

