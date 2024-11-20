<?php

namespace App\Http\Controllers\Product\Services;

use App\Models\Product;

class ProductService
{
    protected $model;


    public function __construct( Product $model )
    {
        $this->model = $model;
    }

    public function getAllProducts()
    {
        return $this->model
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function getProductsByCategory( $categoryId )
    {
        return $this->model->where('category_id', $categoryId)
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function getProductsBySubCategory( $subcategoryId )
    {
        return $this->model->where('sub_category_id', $subcategoryId)
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function getProductsByBrand( $brandId )
    {
        return $this->model->where('brand_id', $brandId)
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function postProduct( $data )
    {
        return $this->model->create($data);
    }

    public function updateProduct( $productId, $data )
    {
        $product = $this->model->findOrFail($productId);
        return $product->update($data);
    }

    public function deleteProduct( $productId )
    {
        $product = $this->model->findOrFail($productId);
        return $product->delete();
    }
}

