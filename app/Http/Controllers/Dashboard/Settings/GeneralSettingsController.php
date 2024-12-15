<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    public function index()
    {
        $breadcrumbs = generateBreadcrumbs();
        return view('dashboard.settings.general-settings', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
