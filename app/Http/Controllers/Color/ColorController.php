<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Color\Services\ColorService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Color\Requests\ColorRequest;


class ColorController extends Controller
{
    protected $colorService;

    /**
     * ColorController constructor.
     *
     * @param ColorService $colorService
     */
    public function __construct(ColorService $colorService)
    {
        $this->colorService = $colorService;
    }

    /**
     * Display a paginated list of colors.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $colors = $this->colorService->getColors();
        return response()->json([
            'success' => true,
            'data' => $colors,
        ]);
    }

    /**
     * Display products associated with a specific color.
     *
     * @param string $colorId
     * @return JsonResponse
     */
    public function showColorProducts(string $colorId): JsonResponse
    {
        $products = $this->colorService->getColorWiseProducts($colorId);
        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }

    /**
     * Store a new color.
     *
     * @param ColorRequest $request
     * @return JsonResponse
     */
    public function store(ColorRequest $request): JsonResponse
    {
        $data = $request->validated();
        $color = $this->colorService->storeColor($data);

        return response()->json([
            'success' => true,
            'data' => $color,
            'message' => 'Color created successfully',
        ], 201);
    }

    /**
     * Update an existing color.
     *
     * @param ColorRequest $request
     * @param string $id
     * @return JsonResponse
     */
    public function update(ColorRequest $request, string $id): JsonResponse
    {
        $data = $request->validated();
        $updated = $this->colorService->updateColor($id, $data);

        return response()->json([
            'success' => $updated,
            'message' => $updated ? 'Color updated successfully' : 'Color update failed',
        ]);
    }

    /**
     * Delete a specific color.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $deleted = $this->colorService->deleteColor($id);

        return response()->json([
            'success' => $deleted,
            'message' => $deleted ? 'Color deleted successfully' : 'Color deletion failed',
        ]);
    }
}
