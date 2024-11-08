<?php

namespace App\Http\Controllers\SubCategory;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SubCategory\Services\SubCategoryService;
use App\Http\Controllers\SubCategory\Requests\SubCategoryRequest;
use Illuminate\Http\JsonResponse;

class SubCategoryController extends Controller
{
    protected $subCategoryService;

    /**
     * SubCategoryController constructor.
     * @param \App\Http\Controllers\SubCategory\Services\SubCategoryService $subCategoryService
     */
    public function __construct(SubCategoryService $subCategoryService)
    {
        $this->subCategoryService = $subCategoryService;
    }

    /**
     * Display a listing of all subcategories.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $subCategories = $this->subCategoryService->getSubCategories();

        return response()->json([
            'success' => true,
            'data' => $subCategories
        ], 200);
    }

    /**
     * Display subcategories for a specific category.
     *
     * @param string $categoryId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategoryWiseSubCategories(string $categoryId): JsonResponse
    {
        $subCategories = $this->subCategoryService
            ->getCategoryWiseSubCategory($categoryId);

        return response()->json([
            'success' => true,
            'data' => $subCategories
        ], 200);
    }

    /**
     * Store a newly created subcategory in storage.
     *
     * @param \App\Http\Controllers\Category\Requests\CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SubCategoryRequest $request): JsonResponse
    {
        $data = $request->validated();
        $subCategory = $this->subCategoryService
            ->storeSubCategory($data);

        return response()->json([
            'success' => true,
            'data' => $subCategory
        ], 201);
    }

    /**
     * Update the specified subcategory in storage.
     *
     * @param \App\Http\Controllers\Category\Requests\CategoryRequest $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(SubCategoryRequest $request, string $id): JsonResponse
    {
        $data = $request->validated();
        $this->subCategoryService->updateCategory($id, $data);

        return response()->json([
            'success' => true,
            'message' => 'Subcategory updated successfully'
        ], 200);
    }

    /**
     * Remove the specified subcategory from storage.
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $this->subCategoryService->deleteCategory($id);

        return response()->json([
            'success' => true,
            'message' => 'Subcategory deleted successfully'
        ], 200);
    }
}
