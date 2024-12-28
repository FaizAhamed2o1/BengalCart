<?php
namespace App\Http\Controllers\Slider;

use App\Http\Controllers\Controller;
use App\Models\MainSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = MainSlider::paginate(10);
        return view('dashboard.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('dashboard.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|file|image|max:2048',
            'index' => 'required|integer',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sliders', 'public');
        }

        MainSlider::create($data);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }

    public function edit(string $id)
    {
        $slider = MainSlider::findOrFail($id);
        return view('dashboard.slider.update', compact('slider'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|file|image|max:2048',
            'index' => 'required|integer',
        ]);

        $slider = MainSlider::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sliders', 'public');
        }

        $slider->update($data);

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy(string $id)
    {
        $slider = MainSlider::findOrFail($id);
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
