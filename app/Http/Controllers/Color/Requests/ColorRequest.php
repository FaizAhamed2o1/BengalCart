<?php

namespace App\Http\Controllers\Color\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'color_name' => 'required',
            'color_code' => 'required'
        ];
    }
}