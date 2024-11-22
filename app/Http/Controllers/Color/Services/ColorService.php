<?php

namespace App\Http\Controllers\Color\Services;

use App\Models\Color;

class ColorService 
{
    protected $model;

    public function __construct( Color $model )
    {
        $this->model = $model;
    }

    public function getColors()
    {
        return $this->model
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function getColorWiseProducts( $colorId )
    {
        return $this->model
            ->where('id', $colorId)
            ->with('products')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function storeColor( array $data )
    {
        return $this->model->create($data);
    }

    public function updateColor( string $id, array $data )
    {
        return $this->model->findOrFail($id)
            ->update($data);
    }

    public function deleteColor( string $id )
    {
        return $this->model->findOrFail($id)
            ->delete();
    }
}
