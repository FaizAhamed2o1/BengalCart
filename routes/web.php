<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require_once base_path(
  'app/Http/Controllers/Dashboard/Routes/routes.php'
);


// categories path
require_once base_path(
    'app/Http/Controllers/Category/Routes/routes.php'
);
