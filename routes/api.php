<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// category path
require_once base_path(
    'app/Http/Controllers/Category/Routes/routes.php'
);

// sub category path
require_once base_path(
    'app/Http/Controllers/SubCategory/Routes/routes.php'
);

require_once base_path(
    'app/Http/Controllers/Campaign/Routes/routes.php'
);

