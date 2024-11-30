<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Product\Requests\ProductRequest;
use App\Http\Controllers\Product\Services\ProductService;
use App\Http\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ResponseTrait;

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        try {
            $products = $this->productService->getAllProducts();
            return $this->successResponse($products, 'Products retrieved successfully');
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    // Get products by category
    public function getByCategory($categoryId)
    {
        try {
            $products = $this->productService->getProductsByCategory($categoryId);
            return $this->successResponse($products, 'Products by category retrieved successfully');
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    // Get products by subcategory
    public function getBySubCategory($subcategoryId)
    {
        try {
            $products = $this->productService->getProductsBySubCategory($subcategoryId);
            return $this->successResponse($products, 'Products by subcategory retrieved successfully');
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    // Get products by brand
    public function getByBrand($brandId)
    {
        try {
            $products = $this->productService->getProductsByBrand($brandId);
            return $this->successResponse($products, 'Products by brand retrieved successfully');
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    // Create a new product
    public function store(ProductRequest $request) 
    {
        try {
            $validatedData = $request->validated();

            $product = $this->productService->postProduct($validatedData);
            return $this->successResponse($product, 'Product created successfully');
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    // Update a product
    public function update(ProductRequest $request, $productId)
    {
        try {
            $validatedData = $request->validated();

            $product = $this->productService->updateProduct($productId, $validatedData);
            return $this->successResponse($product, 'Product updated successfully');
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    // Delete a product
    public function destroy($productId)
    {
        try {
            $this->productService->deleteProduct($productId);
            return $this->successResponse(null, 'Product deleted successfully');
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }


}
