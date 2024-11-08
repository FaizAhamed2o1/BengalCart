<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// category path
require_once base_path(
    'app/Http/Controllers/Category/Routes/routes.php'
);

// sub category path
require_once base_path(
    'app/Http/Controllers/SubCategory/Routes/routes.php'
);

