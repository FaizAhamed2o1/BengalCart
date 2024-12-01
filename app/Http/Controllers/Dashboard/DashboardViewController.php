<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardViewController extends Controller
{
    public function index (){
        return view('dashboard.main.dashboard');
    }

    public function user(){
        return view('dashboard.user.index');
    }
    public function category(){
        return view('dashboard.category.index');
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
