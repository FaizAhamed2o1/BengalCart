<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\BaseController;
use Illuminate\Http\Request;

class ProductViewController extends BaseController
{
    protected $table = 'products';
    protected $columns = [
        'id', 
        'name', 
        'description', 
        'features', 
        'specification', 
        'buying_price', 
        'selling_price', 
        'discount', 
        'main_image', 
        'multi_images', 
        'video_url', 
        'stock_amount', 
        'is_out_of_stock', 
        'brand_id', 
        'category_id', 
        'sub_category_id', 
        'created_at', 
        'updated_at'
    ];

    protected $validationRules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'features' => 'nullable|string',
        'specification' => 'nullable|string',
        'buying_price' => 'required|numeric|min:0',
        'selling_price' => 'required|numeric|min:0',
        'discount' => 'nullable|numeric|min:0|max:100',
        'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'multi_images' => 'nullable|array',
        'multi_images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        'video_url' => 'nullable|url',
        'stock_amount' => 'required|integer|min:0',
        'is_out_of_stock' => 'required|boolean',
        'brand_id' => 'nullable|exists:brands,id',
        'category_id' => 'nullable|exists:categories,id',
        'sub_category_id' => 'nullable|exists:sub_categories,id',
    ];

    protected $viewPath = 'dashboard.product';

    protected $paginationLimit = 20;
    protected $sortBy = 'desc';
    protected $imageFieldName = 'main_image';

}
