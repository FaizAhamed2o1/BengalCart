<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends BaseController
{
    protected $table = 'brands';
    protected $columns = ['id', 'brand_name', 'brand_logo', 'created_at', 'updated_at'];
    protected $validationRules = [
        'brand_name' => 'required|string|max:255',
        'brand_logo' => 'required',
    ];
    protected $viewPath = 'dashboard.brands';

    protected $paginationLimit = 15;
    protected $sortBy = 'desc';
    protected $imageFieldName = 'brand_logo';

}
