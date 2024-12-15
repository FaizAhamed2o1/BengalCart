<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Category\Services\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardViewController extends Controller
{

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index (){
        return view('dashboard.main.dashboard');
    }

    // User
    public function user(){
        return view('dashboard.user.index');
    }
    public function editUser(){
        return view('dashboard.user.update');
    }
    public function createUser(){
        return view('dashboard.user.create');
    }

    // Category
    public function category(){
        $breadcrumbs = generateBreadcrumbs();
        $categories = $this->categoryService->getCategories();
        return view('dashboard.category.index', compact('breadcrumbs', 'categories'));
    }
    public function createCategory(){
        $breadcrumbs = generateBreadcrumbs();
        return view('dashboard.category.create', compact('breadcrumbs'));
    }
    public function editCategory($categoryId)
    {
        $breadcrumbs = generateBreadcrumbs();
        $category = $this->categoryService->getCategoryById($categoryId);
        return view('dashboard.category.update', [
            'breadcrumbs' => $breadcrumbs,
            'category' => $category
        ]);
    }

    // Brand
    public function brand(){
        return view('dashboard.brand.index');
    }
    public function createBrand(){
        return view('dashboard.brand.create');
    }
    public function editBrand(){
        return view('dashboard.brand.update');
    }

    // Product
    public function product(){
        return view('dashboard.product.index');
    }

    // slider
    public function slider(){
        return view('dashboard.slider.index');
    }

    public function addSlider(){
        return view('dashboard.slider.create');
    }

    public function editSlider(){
        return view('dashboard.slider.update');
    }



}
