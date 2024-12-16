<?php

namespace App\Http\Controllers\Dashboard\SubCategory;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SubCategory\Services\SubCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class SubCategoryViewController extends Controller
{

    protected $subCategoryService;
    protected $breadcrumbs;

    public function __construct( SubCategoryService $subCategoryService )
    {
        $this->subCategoryService = $subCategoryService;
        $this->breadcrumbs = generateBreadcrumbs();

        View::share('breadcrumbs', $this->breadcrumbs);
    }

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $subCategories = $this->subCategoryService->getSubCategories();
        return view('dashboard.sub-category.index', [
            'subCategories' => $subCategories
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('dashboard.sub-category.create');
    }

    public function edit( $subId ): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $subCategory = $this->subCategoryService->findSubCategoryById( $subId );
        return view('dashboard.sub-category.edit', [
            'subCategory' => $subCategory
        ]);
    }
}
