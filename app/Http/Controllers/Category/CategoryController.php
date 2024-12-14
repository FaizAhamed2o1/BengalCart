<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\Services\CategoryService;
use App\Http\Controllers\Category\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    protected $categoryService;

    /**
     * CategoryController constructor.
     * @param \App\Http\Controllers\Category\Services\CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of categories.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $categories = $this->categoryService->getCategories();

        return response()->json([
            'success' => true,
            'data' => $categories
        ], 200);
    }

    /**
     * Store a newly created category in storage.
     *
     * @param \App\Http\Controllers\Category\Requests\CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('thumbnail')) {
//            dd("Hii");
            $path = $request->file('thumbnail')->store('categories', 'public');

            $data['thumbnail'] = $path;
        }
//        dd($data);
        $category = $this->categoryService->createCategory($data);

        return response()->json([
            'success' => true,
            'data' => $category
        ], 201);
    }

    /**
     * Update the specified category in storage.
     *
     * @param \App\Http\Controllers\Category\Requests\CategoryRequest $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoryRequest $request, string $id): JsonResponse
    {
        // dd($request->all());
        $data = $request->validated();
        $this->categoryService
            ->updateCategory($id, $data);

        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully'
        ], 200);
    }

    /**
     * Remove the specified category from storage.
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $this->categoryService->deleteCategory($id);

        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully'
        ], 200);
    }

    /**
     * getting cateogory wise sub categories
     * @param string categoryId
     *  @return \Illuminate\Http\JsonResponse
     */

     public function getCategoryWiseSub( $categoryId )
     {
        $catWiseSub = $this->categoryService
            ->getCategoryWithSubCategories($categoryId);

        return response()->json([
            'success' => true,
            'data' => $catWiseSub
        ], 200);
     }
}
