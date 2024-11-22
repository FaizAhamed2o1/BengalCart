<?php

namespace App\Http\Controllers\Campaign\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampaignRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'campaign_name' => 'required',
            'product_ids' => 'nullable|array'
        ];
    }
}
