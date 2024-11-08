<?php

namespace App\Http\Controllers\Brand\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'brand_name' => 'required',
            'brand_logo' => 'required|image|mimes:png,jpg.svg'
        ];
    }
}