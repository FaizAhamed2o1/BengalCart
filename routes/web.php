<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.home');
});

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
