<?php

namespace App\Http\Controllers\Category\Services;

use App\Models\Category;

class CategoryService
{
    protected $model;

    public function __construct( Category $model )
    {
        $this->model = $model;
    }

    public function getCategories()
    {
        return $this->model
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function getCategoryWithSubCategories($categoryId)
    {
        return $this->model->where('id', $categoryId)
            ->with('subcategories')
            ->paginate();
    }

    public function getCategoryById($categoryId)
    {
        return $this->model->findOrFail($categoryId);
    }

    public function createCategory( array $data )
    {
        return $this->model
            ->create($data);
    }

    public function updateCategory( string $id, array $data )
    {
        $category = $this->model->findOrFail($id);

        return $category->update($data);
    }

    public function deleteCategory(string $id)
    {
        $category = $this->model->findOrFail($id);
        return $category->delete();
    }
}
