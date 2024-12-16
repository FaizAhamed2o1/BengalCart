<?php

namespace App\Http\Controllers\SubCategory\Services;

use App\Models\SubCategory;

class SubCategoryService
{
    protected $model;

    public function __construct( SubCategory $model )
    {
        $this->model = $model;
    }

    public function getCategoryWiseSubCategory( $categoryId )
    {
        return $this->model
            ->where('category_id', $categoryId)
            ->with('category')
            ->paginate(15);
    }

    public function getSubCategories()
    {
        return $this->model
            ->orderBy('created_at', 'desc')
            ->with(['category:id,name'])
            ->paginate(15);
    }

    public function findSubCategoryById( $id )
    {
        return $this->model->findOrFail($id);
    }

    public function storeSubCategory( array $data )
    {
        return $this->model
            ->create($data);
    }

    public function updateCategory( string $id, array $data )
    {
        $sub = $this->model->findOrFail( $id );

        return $sub->update($data);
    }

    public function deleteCategory( string $id )
    {
        return $this->model
            ->findOrFail($id)
            ->delete();
    }


}
