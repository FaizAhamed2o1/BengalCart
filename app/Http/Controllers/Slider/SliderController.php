<?php

// namespace App\Http\Controllers\Slider;

// use App\Http\Controllers\Controller;
// use App\Models\MainSlider;
// use Illuminate\Http\Request;

// class SliderController extends Controller
// {
//     public function index()
//     {
//         $sliders = MainSlider::all();
//         return view('dashboard.slider.index', compact('sliders'));
//     }

//     public function create()
//     {
//         return view('dashboard.slider.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'image' => 'required|string|max:255',
//             'index' => 'required|string|max:255',
//         ]);

//         MainSlider::create($request->all());

//         return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
//     }

//     public function edit(string $id)
//     {
//         $mainSlider = MainSlider::findOrFail($id);
//         return view('dashboard.slider.update', compact('mainSlider'));
//     }

//     public function update(Request $request, string $id)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'image' => 'required|string|max:255',
//             'index' => 'required|string|max:255',
//         ]);

//         $mainSlider = MainSlider::findOrFail($id);
//         $mainSlider->update($request->all());

//         return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
//     }

//     public function destroy(string $id)
//     {
//         $mainSlider = MainSlider::findOrFail($id);
//         $mainSlider->delete();

//         return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
//     }
// }
