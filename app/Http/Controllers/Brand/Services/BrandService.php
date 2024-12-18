<?php

namespace App\Http\Controllers\Brand\Services;

use App\Models\Brand;

class BrandService
{
    protected $model;

    public function __construct( Brand $model )
    {
        $this->model = $model;
    }

    public function getBrands()
    {
        return $this->model
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function storeBrand( array $data )
    {
        return $this->model->create($data);
    }

    public function updateBrand( string $id, array $data )
    {
        $brand = $this->model->findOrFail($id);

        return $brand->update($data);
    }

    public function deleteBrand( string $id )
    {
        $brand = $this->model->findOrFail($id);
        return $brand->delete();
    }

    // getting brands wise products
    public function getBrandWiseProducts( $brandId )
    {
        return $this->model->where('id', $brandId)
            ->with('products')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }
}
