<?php

if (!function_exists('generateBreadcrumbs')) {
    /**
     * Generate breadcrumbs from the current URL.
     *
     * @param int|null $depth The number of segments to show. Null shows all.
     * @return array
     */
    function generateBreadcrumbs($depth = null)
    {
        $segments = request()->segments();

        if (!is_null($depth)) {
            $segments = array_slice($segments, 0, $depth);
        }

        $breadcrumbs = [];
        $path = '';

        foreach ($segments as $segment) {
            $path .= "/$segment";
            $breadcrumbs[] = [
                'name' => ucfirst(str_replace('-', ' ', $segment)),
                'url' => url($path),
            ];
        }

        return $breadcrumbs;
    }
}
