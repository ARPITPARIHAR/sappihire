<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $sliders = Slider::paginate(15);
        return view('backend.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $slider = new Slider;

        if ($request->hasFile('image')) {
            $fileName = time() . '-slider-' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/sliders', $fileName, 'public');
            $slider->image = '/public/storage/' . $filePath;
        }
        $slider->save();
        Artisan::call('cache:clear');
        return back()->with('success', 'Slider added successfully.');
    }

    public function show($id)
    {
        return view('backend.sliders.show');
    }


    public function edit($id)
    {
        $slider = Slider::findOrFail(decrypt($id));
        return view('backend.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $slider = Slider::findOrFail(decrypt($id));

        if ($request->hasFile('image')) {
            $fileName = time() . '-slider-' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/sliders', $fileName, 'public');
            $slider->image = '/public/storage/' . $filePath;
        }
        $slider->update();
        Artisan::call('cache:clear');
        return back()->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Slider::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Page deleted successfully.');
    }
}
