<?php
namespace App\Http\Controllers\Slider\Services;

use App\Models\MainSlider;

class SliderService{

    protected $model;
    public function __construct( MainSlider $model ){
        $this->model = $model;
    }

    public function getSlider(){
        return $this->model->all()
        ->paginate(15);
    }

    public function createSlider(array $data){
        return $this->model
        ->create($data);
    }

    public function updateSlider(string $id, array $data){
        $slider = $this->model->findOrFail($id);
        return $slider->update($data);
    }

    public function deleteSlider(string $id){
        $slider = $this->model->findOrFail($id);
        return $slider->delete();
    }

    public function getSliderById($sliderId){
        return $this->model->findOrFail($sliderId);
    }
}

