<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('frontend.home');
// });


// Frontend views Routes
Route::get('/', [FrontendController::class, 'Home'])->name('home');
Route::get('/product', [FrontendController::class, 'Product'])->name('product');
Route::get('/shopping', [FrontendController::class, 'Shopping'])->name('shopping');
Route::get('/blog', [FrontendController::class, 'Blog'])->name('blog');
Route::get('/blogDetail', [FrontendController::class, 'BlogDetail'])->name('blogdetail');
Route::get('/about', [FrontendController::class, 'About'])->name('about');
Route::get('/contact', [FrontendController::class, 'Contact'])->name('contact');



require_once base_path(
  'app/Http/Controllers/Dashboard/Routes/routes.php'
);

// sliders routes
require_once base_path(
    'app/Http/Controllers/Slider/Routes/routes.php');

// categories path
require_once base_path(
    'app/Http/Controllers/Category/Routes/routes.php'
);

// campaigns path
require_once base_path(
    'app/Http/Controllers/campaigns/Routes/routes.php'
);
