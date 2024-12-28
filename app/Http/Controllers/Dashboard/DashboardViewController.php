<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Category\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Slider\Services\SliderService;
use Illuminate\Http\Request;

class DashboardViewController extends Controller
{

    protected $categoryService;
    protected $sliderService;

    public function __construct(CategoryService $categoryService, SliderService $sliderService)
    {
        $this->categoryService = $categoryService;
        $this->sliderService = $sliderService;
    }

    public function index()
    {
        return view('dashboard.main.dashboard');
    }

    // User
    public function user()
    {
        return view('dashboard.user.index');
    }
    public function editUser()
    {
        return view('dashboard.user.update');
    }
    public function createUser()
    {
        return view('dashboard.user.create');
    }

    // Category
    public function category()
    {
        $breadcrumbs = generateBreadcrumbs();
        $categories = $this->categoryService->getCategories();
        return view('dashboard.category.index', compact('breadcrumbs', 'categories'));
    }
    public function createCategory()
    {
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
        return view('dashboard.brands.index');
    }
    public function createBrand(){
        return view('dashboard.brands.create');
    }
    public function editBrand(){
        return view('dashboard.brands.update');
    }

    // Product
    public function product()
    {
        return view('dashboard.product.index');
    }

    // slider
    public function slider()
    {
        $breadcrumbs = generateBreadcrumbs();
        $slider = $this->sliderService->getSlider();
        return view('dashboard.slider.index', compact('breadcrumbs', 'slider'));
    }

    public function createSlider()
    {
        $breadcrumbs = generateBreadcrumbs();
        return view('dashboard.slider.create', compact('breadcrumbs'));
    }

    public function editSlider($sliderId)
    {
        $breadcrumbs = generateBreadcrumbs();
        $slider = $this->sliderService->getSliderById($sliderId);
        return view('dashboard.slider.update', [
            'breadcrumbs' => $breadcrumbs,
            'slider' => $slider
        ]);
    }

}
