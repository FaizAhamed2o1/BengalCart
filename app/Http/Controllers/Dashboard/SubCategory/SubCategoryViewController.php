<?php

namespace App\Http\Controllers\Dashboard\SubCategory;

use App\Http\Controllers\Category\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SubCategory\Services\SubCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class SubCategoryViewController extends Controller
{

    protected $subCategoryService;
    protected $breadcrumbs;
    protected $categoryService;

    public function __construct( SubCategoryService $subCategoryService, CategoryService $categoryService )
    {
        $this->subCategoryService = $subCategoryService;
        $this->breadcrumbs = generateBreadcrumbs();
        $this->categoryService = $categoryService;

        View::share('breadcrumbs', $this->breadcrumbs);
    }

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $subCategories = $this->subCategoryService->getSubCategories();

        return view('dashboard.sub-category.index', [
            'subCategories' => $subCategories,
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $categories = $this->categoryService->getCategories();
        return view('dashboard.sub-category.create', [
            'categories' => $categories
        ]);
    }

    public function edit( $subId ): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $subCategory = $this->subCategoryService->findSubCategoryById( $subId );
        return view('dashboard.sub-category.edit', [
            'subCategory' => $subCategory
        ]);
    }
}
